<?php
/**
 * Hold the PhpMyAdmin\Encoding class
 */

declare(strict_types=1);

namespace PhpMyAdmin;

use function array_intersect;
use function array_map;
use function explode;
use function fclose;
use function feof;
use function fgets;
use function fopen;
use function function_exists;
use function fwrite;
use function iconv;
use function mb_convert_encoding;
use function mb_convert_kana;
use function mb_detect_encoding;
use function mb_list_encodings;
use function tempnam;
use function unlink;

/**
 * Encoding conversion helper class
 */
class Encoding
{
    /**
     * None encoding conversion engine
     */
    public const ENGINE_NONE = 0;

    /**
     * iconv encoding conversion engine
     */
    public const ENGINE_ICONV = 1;

    /**
     * recode encoding conversion engine
     */
    public const ENGINE_RECODE = 2;

    /**
     * mbstring encoding conversion engine
     */
    public const ENGINE_MB = 3;

    /**
     * Chosen encoding engine
     *
     * @var int
     */
    private static $_engine = null;

    /**
     * Map of conversion engine configurations
     *
     * Each entry contains:
     *
     * - function to detect
     * - engine contant
     * - extension name to warn when missing
     *
     * @var array
     */
    private static $_enginemap = [
        'iconv' => [
            'iconv',
            self::ENGINE_ICONV,
            'iconv',
        ],
        'recode' => [
            'recode_string',
            self::ENGINE_RECODE,
            'recode',
        ],
        'mb' => [
            'mb_convert_encoding',
            self::ENGINE_MB,
            'mbstring',
        ],
        'none' => [
            'isset',
            self::ENGINE_NONE,
            '',
        ],
    ];

    /**
     * Order of automatic detection of engines
     *
     * @var array
     */
    private static $_engineorder = [
        'iconv',
        'mb',
        'recode',
    ];

    /**
     * Kanji encodings list
     *
     * @var string
     */
    private static $_kanji_encodings = 'ASCII,SJIS,EUC-JP,JIS';

    /**
     * Initializes encoding engine detecting available backends.
     */
    public static function initEngine(): void
    {
        $engine = 'auto';
        if (isset($GLOBALS['cfg']['RecodingEngine'])) {
            $engine = $GLOBALS['cfg']['RecodingEngine'];
        }

        /* Use user configuration */
        if (isset(self::$_enginemap[$engine])) {
            if (function_exists(self::$_enginemap[$engine][0])) {
                self::$_engine = self::$_enginemap[$engine][1];

                return;
            } else {
                Core::warnMissingExtension(self::$_enginemap[$engine][2]);
            }
        }

        /* Autodetection */
        foreach (self::$_engineorder as $engine) {
            if (function_exists(self::$_enginemap[$engine][0])) {
                self::$_engine = self::$_enginemap[$engine][1];

                return;
            }
        }

        /* Fallback to none conversion */
        self::$_engine = self::ENGINE_NONE;
    }

    /**
     * Setter for engine. Use with caution, mostly useful for testing.
     *
     * @param int $engine Engine encoding
     */
    public static function setEngine(int $engine): void
    {
        self::$_engine = $engine;
    }

    /**
     * Checks whether there is any charset conversion supported
     */
    public static function isSupported(): bool
    {
        if (self::$_engine === null) {
            self::initEngine();
        }

        return self::$_engine != self::ENGINE_NONE;
    }

    /**
     * Converts encoding of text according to parameters with detected
     * conversion function.
     *
     * @param string $src_charset  source charset
     * @param string $dest_charset target charset
     * @param string $what         what to convert
     *
     * @return string   converted text
     *
     * @access public
     */
    public static function convertString(
        string $src_charset,
        string $dest_charset,
        string $what
    ): string {
        if ($src_charset == $dest_charset) {
            return $what;
        }
        if (self::$_engine === null) {
            self::initEngine();
        }
        switch (self::$_engine) {
            case self::ENGINE_RECODE:
                return recode_string(
                    $src_charset . '..' . $dest_charset,
                    $what
                );
            case self::ENGINE_ICONV:
                return iconv(
                    $src_charset,
                    $dest_charset .
                    ($GLOBALS['cfg']['IconvExtraParams'] ?? ''),
                    $what
                );
            case self::ENGINE_MB:
                return mb_convert_encoding(
                    $what,
                    $dest_charset,
                    $src_charset
                );
            default:
                return $what;
        }
    }

    /**
     * Detects whether Kanji encoding is available
     */
    public static function canConvertKanji(): bool
    {
        return $GLOBALS['lang'] == 'ja';
    }

    /**
     * Setter for Kanji encodings. Use with caution, mostly useful for testing.
     */
    public static function getKanjiEncodings(): string
    {
        return self::$_kanji_encodings;
    }

    /**
     * Setter for Kanji encodings. Use with caution, mostly useful for testing.
     *
     * @param string $value Kanji encodings list
     */
    public static function setKanjiEncodings(string $value): void
    {
        self::$_kanji_encodings = $value;
    }

    /**
     * Reverses SJIS & EUC-JP position in the encoding codes list
     */
    public static function kanjiChangeOrder(): void
    {
        $parts = explode(',', self::$_kanji_encodings);
        if ($parts[1] == 'EUC-JP') {
            self::$_kanji_encodings = 'ASCII,SJIS,EUC-JP,JIS';
        } else {
            self::$_kanji_encodings = 'ASCII,EUC-JP,SJIS,JIS';
        }
    }

    /**
     * Kanji string encoding convert
     *
     * @param string $str  the string to convert
     * @param string $enc  the destination encoding code
     * @param string $kana set 'kana' convert to JIS-X208-kana
     *
     * @return string   the converted string
     */
    public static function kanjiStrConv(string $str, string $enc, string $kana): string
    {
        if ($enc == '' && $kana == '') {
            return $str;
        }

        $string_encoding = mb_detect_encoding($str, self::$_kanji_encodings);
        if ($string_encoding === false) {
            $string_encoding = 'utf-8';
        }

        if ($kana == 'kana') {
            $dist = mb_convert_kana($str, 'KV', $string_encoding);
            $str  = $dist;
        }
        if ($string_encoding != $enc && $enc != '') {
            $dist = mb_convert_encoding($str, $enc, $string_encoding);
        } else {
            $dist = $str;
        }

        return $dist;
    }

    /**
     * Kanji file encoding convert
     *
     * @param string $file the name of the file to convert
     * @param string $enc  the destination encoding code
     * @param string $kana set 'kana' convert to JIS-X208-kana
     *
     * @return string   the name of the converted file
     */
    public static function kanjiFileConv(string $file, string $enc, string $kana): string
    {
        if ($enc == '' && $kana == '') {
            return $file;
        }
        $tmpfname = tempnam($GLOBALS['PMA_Config']->getUploadTempDir(), $enc);
        $fpd      = fopen($tmpfname, 'wb');
        $fps      = fopen($file, 'r');
        self::kanjiChangeOrder();
        while (! feof($fps)) {
            $line = fgets($fps, 4096);
            $dist = self::kanjiStrConv($line, $enc, $kana);
            fwrite($fpd, $dist);
        } // end while
        self::kanjiChangeOrder();
        fclose($fps);
        fclose($fpd);
        unlink($file);

        return $tmpfname;
    }

    /**
     * Defines radio form fields to switch between encoding modes
     *
     * @return string HTML code for the radio controls
     */
    public static function kanjiEncodingForm(): string
    {
        $template = new Template();

        return $template->render('encoding/kanji_encoding_form');
    }

    /**
     * Lists available encodings.
     *
     * @return array
     */
    public static function listEncodings(): array
    {
        if (self::$_engine === null) {
            self::initEngine();
        }
        /* Most engines do not support listing */
        if (self::$_engine != self::ENGINE_MB) {
            return $GLOBALS['cfg']['AvailableCharsets'];
        }

        return array_intersect(
            array_map('strtolower', mb_list_encodings()),
            $GLOBALS['cfg']['AvailableCharsets']
        );
    }
}
