<?php
/* $Id$ */

/**
 * Translated by Yukihiro Kawada <kawada at den.fujifilm.co.jp>
 */

$charset = 'utf-8';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('バイト', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('日', '月', '火', '水', '木', '金', '土');
$month = array('1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y年%B%d日 %H:%M';

// japanese only

$strAPrimaryKey = '主キーが%sに追加されました。';
$strAccessDenied = 'アクセスは拒否されました。';
$strAction = '実行';
$strAddDeleteColumn = 'フィールド列の「追加／削除」';
$strAddDeleteRow = '条件行の「追加／削除」';
$strAddNewField = 'フィールドの追加';
$strAddPriv = '新しい特権の追加';
$strAddPrivMessage = '新しい特権を追加しました。';
$strAddSearchConditions = '検索条件文を追加してください。("where"の節文):';
$strAddToIndex = ' &nbsp;%s&nbsp;の列をインデックスに追加しました';
$strAddUser = 'ユーザーの追加';
$strAddUserMessage = 'ユーザーを追加しました。';
$strAffectedRows = '影響された行数:';
$strAfter = '後に %s';
$strAfterInsertBack = '戻る';
$strAfterInsertNewInsert = '新レコードの追加';
$strAll = '全部';
$strAllTableSameWidth = '全てのテーブルを同じ幅で表示しますか?';
$strAlterOrderBy = 'テーブル順番の条件';
$strAnIndex = 'インデクスが%sに追加されていました。';
$strAnalyzeTable = 'テーブルを分析します。';
$strAnd = 'AND';
$strAny = '全て';
$strAnyColumn = '全列';
$strAnyDatabase = '全データベース';
$strAnyHost = '全てのホスト';
$strAnyTable = '全てのテーブル';
$strAnyUser = '全てのユーザー';
$strAscending = '昇順';
$strAtBeginningOfTable = 'テーブルの最初';
$strAtEndOfTable = 'テーブルの最後';
$strAttr = '表示';

$strBack = '戻る';
$strBeginCut = '切り取り開始';
$strBeginRaw = 'RAW開始';
$strBinary = ' バイナリ ';
$strBinaryDoNotEdit = ' バイナリ -  修正出来ません';
$strBookmarkDeleted = 'ブックマークを正常に削除しました。';
$strBookmarkLabel = 'ラベル';
$strBookmarkQuery = 'ブックマークされているSQLクエリー';
$strBookmarkThis = 'SQLクエリーをブックマークする';
$strBookmarkView = '表示のみ';
$strBrowse = '表示';
$strBzip = '"bzipされる"';

$strCantLoadMySQL = 'MySQLを実行できません。<br />PHPの設定を確認して下さい。';
$strCantLoadRecodeIconv = '文字セット変換を行うためには組み込まれていない iconv または GNU recode の拡張が必要です。php に、この拡張設定を行っておくか、phpMyAdminでは文字セット変換をしない設定にして下さい。';
$strCantRenameIdxToPrimary = 'インデックスの名前をPRIMARYに変更できません。';
$strCantUseRecodeIconv = 'iconv、libiconv、recode_stringのどの関数も使用出来ません。php の設定をチェックしてください。';
$strCardinality = 'カーディナリティ';
$strCarriage = 'キャリッジリターン: \\r';
$strChange = '変更';
$strChangeDisplay = '表示させるフィールドを選んで下さい';
$strChangePassword = 'パスワードの変更';
$strCharsetOfFile = 'ファイルの文字セット:';
$strCheckAll = '全てをマーク';
$strCheckDbPriv = 'データベースの特権の確認';
$strCheckTable = 'テーブルをチェックします。';
$strChoosePage = '編集するページを選択して下さい';
$strColComFeat = '列コメント表示機能';
$strColumn = '列';
$strColumnNames = '列(コラム)名';
$strComments = 'コメント';
$strCompleteInserts = '完全なINSERT文の作成';
$strCompression = '圧縮';
$strConfigFileError = 'phpMyAdminがコンフィグレーションファイルを読み込むことが出来ません！<br />文法エラーが起きたか、ファイルが見つかりません。<br />下のリンクからコンフィグレーションファイルを直接読み込んで、phpのエラーメッセージを確認して下さい。 大抵の場合、区切り文字やセミコロンを忘れています。<br />もし空白のページが現れたら全てうまく行っています。';
$strConfigureTableCoord = '%s テーブルのカーディナリティを設定して下さい';
$strConfirm = '実行しても良いですか？';
$strCookiesRequired = 'ここから先はクッキーが許可されている必要があります。';
$strCopyTable = 'テーブルを(database<b>.</b>table)にコピーする:';
$strCopyTableOK = '%sテーブルを%sにコピーしました。';
$strCreate = '作成';
$strCreateIndex = '&nbsp;%s&nbsp;の列のインデックスの作成';
$strCreateIndexTopic = '新しいインデックスの作成';
$strCreateNewDatabase = '新しいDBを作成します。';
$strCreateNewTable = '現在のDBに新しいテーブルを作成します。 %s --> ';
$strCreatePage = '新規ページの作成';
$strCreatePdfFeat = 'PDF作成機能';
$strCriteria = '絞込み基準';

$strData = 'データ';
$strDataDict = 'データ辞書';
$strDataOnly = 'データのみ';
$strDatabase = 'データベース';
$strDatabaseHasBeenDropped = 'データベース%sを正常に削除しました。';
$strDatabaseWildcard = 'データベース(ワイルドカード使用可):';
$strDatabases = 'データベース';
$strDatabasesStats = 'データベースの統計';
$strDefault = '基本値';
$strDelete = '削除';
$strDeleteFailed = '削除に失敗しました';
$strDeleteUserMessage = 'ユーザー%sを削除しました。';
$strDeleted = '選択した列を削除しました。';
$strDeletedRows = '削除された行数:';
$strDescending = '降順';
$strDisabled = '無効';
$strDisplay = '表示';
$strDisplayFeat = 'テーブル情報表示機能';
$strDisplayOrder = '発表順番:';
$strDisplayPDF = 'PDFスキーマの表示';
$strDoAQuery = '"例のQUERY"を実行 (wildcard: "%")';
$strDoYouReally = '本当に実行しても良いですか？ --> ';
$strDocu = 'ヘルプ';
$strDrop = '削除';
$strDropDB = 'データベース%sの削除 ';
$strDropTable = 'テーブルの削除';
$strDumpXRows = '%s 列をダンプ。始める列は %s.';
$strDumpingData = 'テーブルのダンプデータ';
$strDynamic = 'ダイナミック';

$strEdit = '修正';
$strEditPDFPages = 'PDFの編集 ページ';
$strEditPrivileges = '特権を修正';
$strEffective = '実効';
$strEmpty = '空にする';
$strEmptyResultSet = 'MySQLが空の値を返しました。(i.e. zero rows).';
$strEnabled = '有効';
$strEncto = 'エンコーディングへ変換する'; // encoding convert
$strEnd = '最後';
$strEndCut = '切り取り終了';
$strEndRaw = 'RAW終了';
$strEnglishPrivileges = ' 注意: MySQLの特権の名前は英語で発表しています。';
$strError = 'エラー';
$strExplain = 'Explain SQL';
$strExport = 'エクスポート';
$strExportToXML = 'XML形式でエクスポート';
$strExtendedInserts = '長いINSERT文の作成';
$strExtra = '追加';

$strField = 'フィールド';
$strFieldHasBeenDropped = 'フィールド%sが正常に削除されました';
$strFields = 'フィールド';
$strFieldsEmpty = ' フィールド数は空です。 ';
$strFieldsEnclosedBy = 'フィールド囲み記号';
$strFieldsEscapedBy = 'フィールドのエスケープ記号';
$strFieldsTerminatedBy = 'フィールド区切り記号';
$strFixed = '固定';
$strFlushTable = 'テーブルのキャッシュを空にする("FLUSH")';
$strFormEmpty = 'フォームでは値がありませんでした。';
$strFormat = 'フォーマット';
$strFullText = '全文';
$strFunction = '関数';

$strGenBy = '生成された by';
$strGenTime = '作成の時間';
$strGeneralRelationFeat = 'リレーション機能';
$strGo = '実行';
$strGrants = '付与';
$strGzip = '"gzipされる"';

$strHasBeenAltered = 'を変更しました。';
$strHasBeenCreated = 'を作成しました。';
$strHaveToShow = '表示するために、少なくてもひとつのカラムを選択しなければなりません。';
$strHome = 'メーンページへ';
$strHomepageOfficial = 'phpMyAdminホーム';
$strHomepageSourceforge = 'SourceforgeのphpMyAdminダウンロードページ';
$strHost = 'ホスト';
$strHostEmpty = 'ホスト名は空です!';

$strIdxFulltext = '全文';
$strIfYouWish = 'テーブルのコラム(列)にデータを追加する場合は、フィールドリストをカンマで区分してください。';
$strIgnore = '無視';
$strImportDocSQL = 'docSQLファイルインポート';
$strInUse = '使用中';
$strIndex = 'インデックス';
$strIndexHasBeenDropped = 'インデックス%sが削除されました';
$strIndexName = 'インデックス名&nbsp;:';
$strIndexType = 'インデックスのタイプ&nbsp;:';
$strIndexes = 'インデックス数';
$strInsecureMySQL = 'あなたのコンフィグレーションファイルの設定がMySQLデフォルトの特権アカウントになっています (rootユーザでパスワードなし) 。 MySQLサーバーもこのデフォルト設定で動作しているので、侵入者に対して無防備です。このセキュリティーホールは必ず閉ざして下さい。';
$strInsert = '追加';
$strInsertAsNewRow = '新しい行としての追加';
$strInsertNewRow = '新しい行の追加';
$strInsertTextfiles = 'テーブルにテキストファイルの追加';
$strInsertedRows = '追加された行数:';
$strInstructions = '実施例';
$strInvalidName = '"%s"は予約語ですから「データベース／テーブル／フィールド」名には使えません。';

$strKanjiEncodConvert = '漢字コード変換'; // kanji code convert
$strKeepPass = 'パスワードを変更しない';
$strKeyname = 'キー名';
$strKill = '停止';

$strLength = '長さ';
$strLengthSet = '長さ/セット*';
$strLimitNumRows = 'ページの最大レコード数';
$strLineFeed = '改行文字: \\n';
$strLines = '行';
$strLinesTerminatedBy = '行の終端記号';
$strLinkNotFound = 'リンクが見つかりません';
$strLinksTo = 'リンク';
$strLocationTextfile = 'テキストファイルの場所';
$strLogPassword = 'パスワード:';
$strLogUsername = 'ユーザー名:';
$strLogin = 'ログイン';
$strLogout = 'ログアウト';

$strMissingBracket = '括弧がありません';
$strModifications = 'を正しく修正しました。';
$strModify = '修正';
$strModifyIndexTopic = 'インデックスの変更';
$strMoveTable = 'テーブルを(database<b>.</b>table)に移動:';
$strMoveTableOK = 'テーブル%sが%s移動されました。';
$strMySQLCharset = 'MySQLの文字セット';
$strMySQLReloaded = 'MySQLを新しく読み込みました。';
$strMySQLSaid = 'MySQLのメッセージ --> ';
$strMySQLServerProcess = 'MySQL %pma_s1%は%pma_s2%上%pma_s3%として実行しています。';
$strMySQLShowProcess = 'MySQLプロセスの表示';
$strMySQLShowStatus = 'MySQLのランタイム情報';
$strMySQLShowVars = 'MySQLのシステム変数';

$strName = '名前';
$strNext = '次へ';
$strNo = 'いいえ';
$strNoDatabases = 'データベース数';
$strNoDescription = '記述がありません';
$strNoDropDatabases = '"DROP DATABASE"ステートメントは禁止される。';
$strNoExplain = 'Explain SQLをスキップ';
$strNoFrames = 'phpMyAdminは<b>フレーム</b>をサポートしたブラウザでの利用をお勧めします。';
$strNoIndex = 'インデックスは設定されていません。';
$strNoIndexPartsDefined = 'インデックスの部分は設定されていません。';
$strNoModification = '変更無し';
$strNoPassword = 'パスワード無し';
$strNoPhp = 'PHPコード無し';
$strNoPrivileges = '特権無し';
$strNoQuery = 'SQLクエリー無し';
$strNoRights = '現在特権を持ってないのでここに入れません。';
$strNoTablesFound = '現在のDBにテーブルはありません。';
$strNoUsersFound = '該当ユーザーは見つかりませんでした。';
$strNoValidateSQL = 'SQL検証をスキップ';
$strNone = '無し';
$strNotNumber = 'これは番号ではありません。';
$strNotOK = 'OKじゃない';
$strNotSet = '<b>%s</b> テーブルが見つからないか、%s がありません。';
$strNotValidNumber = ' は行の正しい番号ではありません ';
$strNull = '空の値(Null)';
$strNumSearchResultsInTable = '%s 件が <i>%s</i>テーブルで見つかりました';
$strNumSearchResultsTotal = '<b>件数:</b> <i>%s</i> が見つかりました';
$strNumTables = 'テーブル';

$strOK = 'OK';
$strOftenQuotation = '引用符号です。オプションは、charまたはvarcharフィールドのみ" "で囲まれていることを意味します。';
$strOperations = '操作';
$strOptimizeTable = 'テーブルを最適化します。';
$strOptionalControls = '特殊文字の読み込み/書き込みオプション';
$strOptionally = 'オプションです。';
$strOptions = 'オプション';
$strOr = 'OR';
$strOverhead = 'オーバーヘッド';

$strPHP40203 = 'あなたはマルチバイト文字(mbstring)の扱いに重大なバグのあるPHP 4.2.3を使っています。PHPのバグレポート19404です。phpMyAdminを使うなら、このバージョンのPHPはお奨めしません...と言うかpatchをあてないと動きません。';
$strPHPVersion = 'PHP バージョン';
$strPageNumber = 'ページ番号:';
$strPartialText = '部分的な文書';
$strPassword = 'パスワード';
$strPasswordEmpty = 'パスワードは空です。';
$strPasswordNotSame = 'パスワードは空です。';
$strPdfDbSchema = '"%s" データベース - %s頁の図';
$strPdfInvalidPageNum = 'PDFページが未定義！';
$strPdfInvalidTblName = '"%s" テーブルがありません!';
$strPdfNoTables = 'テーブルがありません';
$strPhp = 'PHPコードの作成';
$strPmaDocumentation = 'phpMyAdminのドキュメント';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> を必ずconfigファイルの中で設定して下さい!';
$strPos1 = '最初';
$strPrevious = '以前';
$strPrimary = '主要';
$strPrimaryKey = '主キー';
$strPrimaryKeyHasBeenDropped = '主キーを削除しました。';
$strPrimaryKeyName = '主キーの名前は... PRIMARYではなければいけません。';
$strPrimaryKeyWarning = '("PRIMARY"はちょうど主キーの名前ではなければいけません。';
$strPrint = '印刷';
$strPrintView = '印刷用表示';
$strPrivileges = '特権';
$strProperties = 'プロパティ';
$strPutColNames = '最初の1行目にフィールド名を追加';

$strQBE = 'クエリー';
$strQBEDel = '削除';
$strQBEIns = '挿入';
$strQueryOnDb = 'データベースのSQLクエリー <b>%s</b>:';

$strReType = '再記入';
$strRecords = 'レコード数';
$strReferentialIntegrity = '結合項目のチェック:';
$strRelationNotWorking = 'リレーション機能を動かすためのリンクテーブルが有効になっていません。 %sここ%sをクリックして原因を見つけて下さい。';
$strRelationView = 'リレーション表示';
$strReloadFailed = 'MySQLのリロードに失敗しました。';
$strReloadMySQL = 'MySQLのリロード';
$strRememberReload = 'サーバーのリロードを忘れないで下さい。';
$strRenameTable = 'テーブル名の変更';
$strRenameTableOK = '%sを%sに名前を変更しました。';
$strRepairTable = 'テーブルを復旧します。';
$strReplace = '置き換える';
$strReplaceTable = 'ファイルでテーブルを置き換える';
$strReset = 'リセット';
$strRevoke = '廃止';
$strRevokeGrant = ' 付与の取消';
$strRevokeGrantMessage = '%sの付与特権を取消しました。';
$strRevokeMessage = '%sの特権を取消しました';
$strRevokePriv = '特権の取消';
$strRowLength = '行の長さ';
$strRowSize = ' 行のサイズ ';
$strRows = '行';
$strRowsFrom = '開始行';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '方向: %s : %s 列ずつヘッダーを繰り返し発表する';
$strRowsModeVertical = '重直';
$strRowsStatistic = '行の統計';
$strRunQuery = 'クエリーの実行';
$strRunSQLQuery = 'データベース%sにSQLクエリー実行';
$strRunning = 'が実行中です。 %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'あなたはSQLパーサーでバグを見つけられるかもしれません。あなたのクエリーを念入りに確かめて、引用符が正しくミスマッチがないかチェックしましょう。その他の失敗にはテキストエリアで引用した外側にバイナリ－コードが付いてファイルがアップロードされてしまったような原因が考えられます。また、あなたのクエリーをMySQLのコマンドラインを使って試すことも出来ます。MySQLサーバーは以下のようにエラーを出します。そこには問題を解決する手助けがあるでしょう。コマンドラインでは成功しても、まだ問題がある場合、パーサーが失敗する場合には、問題のあるSQLクエリーをひとつの文に減らしてみて下さい。そして以下のセクションでデータを切り取ってBUG報告を送って下さい:';
$strSQLParserUserError = 'あなたのSQLクエリーにエラーがあります。MySQLサーバーは以下のようにエラーを出します。そこには問題を解決する手助けがあるでしょう。';
$strSQLQuery = '実行されたSQLクエリー';
$strSQLResult = 'SQLの結果';
$strSQPBugInvalidIdentifer = '認証が無効です';
$strSQPBugUnclosedQuote = '引用符が閉じていない';
$strSQPBugUnknownPunctuation = '無効な句読点文字です';
$strSave = '保存';
$strScaleFactorSmall = '１ページ内に図表を配置させるためには大きさが小さ過ぎます';
$strSearch = '検索';
$strSearchFormTitle = 'データベース内の検索';
$strSearchInTables = 'テーブルの指定:';
$strSearchNeedle = '検索する単語、または値 (ワイルドカードは: "%"):';
$strSearchOption1 = 'いずれかの単語を含む';
$strSearchOption2 = '全ての単語を含む';
$strSearchOption3 = '正確なフレーズ';
$strSearchOption4 = '正規表現';
$strSearchResultsFor = '検索結果 "<i>%s</i>" %s:';
$strSearchType = '検索条件:';
$strSelect = '選択';
$strSelectADb = 'データベースを選択してください';
$strSelectAll = '全選択';
$strSelectFields = 'フィールドの選択(一つ以上):';
$strSelectNumRows = 'クエリー';
$strSelectTables = 'テーブルの選択';
$strSend = 'ファイルに落とす';
$strServer = 'サーバー %s';
$strServerChoice = 'サーバーの選択';
$strServerVersion = 'サーバーのバージョン';
$strSetEnumVal = 'フィールドタイプが"enum"又は"set"の場合は値をこのフォーマットを使って入力して下さい: \'a\',\'b\',\'c\'...<br />バックスラッシュ「"\"」又はクオート「"\'"」を入力したいと、頭にバックスラッシュを付けて下さい「例: \'\\\\xyz\' or \'a\\\'b\'」。';
$strShow = '表示';
$strShowAll = '全て発表';
$strShowColor = '色表示';
$strShowCols = '列の発表';
$strShowGrid = 'グリッドの表示';
$strShowPHPInfo = 'PHP情報';
$strShowTableDimension = 'テーブルの大きさを表示';
$strShowTables = 'テーブルの発表';
$strShowThisQuery = ' 実行したクエリーをここに表示する ';
$strShowingRecords = 'レコード表示';
$strSingly = '(一回)';
$strSize = 'サイズ';
$strSort = 'ソート';
$strSpaceUsage = 'ディスク使用量';
$strSplitWordsWithSpace = '各単語はスペース文字(" ")で区切って下さい';
$strStatement = 'ステートメント';
$strStrucCSV = 'CSVデータ';
$strStrucData = '構造とデータ';
$strStrucDrop = '\'drop table\'を追加';
$strStrucExcelCSV = 'Ms ExcelへのCSVデータ';
$strStrucOnly = '構造のみ';
$strStructPropose = 'テーブル構造の確認';
$strStructure = '構造';
$strSubmit = '実行';
$strSuccess = 'SQLクエリーが正常に実行されました。';
$strSum = '合計';

$strTable = 'テーブル ';
$strTableComments = 'テーブルの説明';
$strTableEmpty = 'テーブル名は空です。';
$strTableHasBeenDropped = 'テーブル%sを削除しました。';
$strTableHasBeenEmptied = 'テーブル%sを空にしました。';
$strTableHasBeenFlushed = 'テーブル%sのキャッシュを空にしました。';
$strTableMaintenance = 'テーブル管理';
$strTableStructure = 'テーブルの構造';
$strTableType = 'テーブルのタイプ';
$strTables = '%sテーブル';
$strTextAreaLength = ' 長さの所為でこのフィールドを<br /> 修正出来ない可能性があります ';
$strTheContent = 'ファイルのデータを挿入しました。';
$strTheContents = 'ファイルのデータで、選択したテーブルの主要キーまたは唯一なキーに一致する列を置き換えます。';
$strTheTerminator = 'フィールドの終端記号です。';
$strTotal = '合計';
$strTotalUC = '合計';
$strType = 'フィールドタイプ';

$strUncheckAll = '全てのマークを削除';
$strUnique = '唯一';
$strUnselectAll = '全解放';
$strUpdatePrivMessage = '%sの特権をアップデートしました。';
$strUpdateProfile = 'プロファイルのアップデート:';
$strUpdateProfileMessage = 'プロファイルをアップデートしました。';
$strUpdateQuery = 'クエリーのアップデート';
$strUsage = '使用量';
$strUseBackquotes = '逆クオートでテーブル名やフィールド名を囲む';
$strUseTables = '使うテーブル';
$strUser = 'ユーザー';
$strUserEmpty = 'ユーザー名は空です。';
$strUserName = 'ユーザー名';
$strUsers = 'ユーザー';

$strValidateSQL = 'SQLの検証';
$strValidatorError = 'SQL検証機能の初期化が出来ません。%sdocumentation%sに記述されているようにPHP拡張ライブラリがインストールされているかチェックして下さい。';
$strValue = '値';
$strViewDump = 'テーブルのダンプ(スキーマ)表示';
$strViewDumpDB = 'DBのダンプ(スキーマ)表示';

$strWebServerUploadDirectory = 'webサーバー上でアップロード';
$strWebServerUploadDirectoryError = 'アップロードを行うディレクトリがありません。。';
$strWelcome = '%sへようこそ';
$strWithChecked = 'チェックしたものを:';
$strWrongUser = 'ユーザ名またはパスワードが正しくありません。<br />アクセスは拒否されました。';

$strXkana = '全角カナへ変換する'; // convert to X208-kana

$strYes = 'はい';

$strZip = '"zipされる"';

$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strLandscape = 'Landscape';  //to translate
$strPortrait = 'Portrait';  //to translate

$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strConnections = 'Connections'; //to translate
$strFailedAttempts = 'Failed attempts'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strMoreStatusVars = 'More status variables'; //to translate
$strPerHour = 'per hour'; //to translate
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = 'Query type'; //to translate
$strReceived = 'Received'; //to translate
$strSent = 'Sent'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strTraffic = 'Traffic'; //to translate
$strVar = 'Variable'; //to translate

$strCommand = 'Command'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strId = 'ID'; //to translate
$strProcesslist = 'Process list'; //to translate
$strStatus = 'Status'; //to translate
$strTime = 'Time'; //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate

$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate
$strLaTeX = 'LaTeX';  //to translate

$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate
?>
