<?php
/* $Id$ */

/**
 * Translated by: Laurent Dhima <laurenti at users.sourceforge.net>
 * Rishikuar nga: Arben �okaj <acokaj@t-online.de>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Djl', 'H�n', 'Mar', 'M�r', 'Enj', 'Pre', 'Sht'); //albanian days
$month = array('Jan', 'Shk', 'Mar', 'Pri', 'Maj', 'Qer', 'Kor', 'Gsh', 'Sht', 'Tet', 'N�n', 'Dhj'); //albanian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //albanian time



$strAPrimaryKey = 'Nj� ky� primar u shtua tek %s';
$strAccessDenied = 'Hyrja nuk u pranua';
$strAction = 'Aksioni';
$strAddDeleteColumn = 'Shto/Fshi fush�n';
$strAddDeleteRow = 'Shto/Fshi kriterin';
$strAddNewField = 'Shto nj� fush� t� re';
$strAddPriv = 'Shto nj� privilegj t� ri';
$strAddPrivMessage = 'Ke shtuar nj� privilegj t� ri.';
$strAddSearchConditions = 'Shto kushte k�rkimi (trupi i specifikimit "where"):';
$strAddToIndex = 'Shto tek treguesi i &nbsp;%s&nbsp;kolon�s(ave)';
$strAddUser = 'Shto nj� p�rdorues t� ri';
$strAddUserMessage = 'Ke shtuar nj� p�rdorues t� ri.';
$strAffectedRows = 'Rreshtat e ndikuar:';
$strAfter = 'Mbas %s';
$strAfterInsertBack = 'Mbrapa';
$strAfterInsertNewInsert = 'Shto nj� record t� ri';
$strAll = 'T� gjith�';
$strAllTableSameWidth = 'vizualizon t� gjitha tabelat me t� nj�jt�n gj�r�si?';
$strAlterOrderBy = 'Transformo tabel�n e renditur sipas';
$strAnIndex = 'Nj� tregues u shtua tek %s';
$strAnalyzeTable = 'Analizo tabel�n';
$strAnd = 'Dhe';
$strAny = '�far�do';
$strAnyColumn = '�far�do kolone';
$strAnyDatabase = '�far�do databaz�';
$strAnyHost = '�far�do host';
$strAnyTable = '�far�do tabel�';
$strAnyUser = '�far�do p�rdorues';
$strAscending = 'Ngjitje';
$strAtBeginningOfTable = 'N� fillim t� tabel�s';
$strAtEndOfTable = 'N� fund t� tabel�s';
$strAttr = 'Pron�si';

$strBack = 'Mbrapa';
$strBeginCut = 'FILLIMI I CUT';
$strBeginRaw = 'FILLIMI I RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'T� dh�na t� tipit binar - mos modifiko';
$strBookmarkDeleted = 'Bookmark u fshi.';
$strBookmarkLabel = 'Etiket�';
$strBookmarkQuery = 'Query SQL shtuar t� preferuarve';
$strBookmarkThis = 'Shtoja t� preferuarve k�t� query SQL';
$strBookmarkView = 'Vizualizo vet�m';
$strBrowse = 'Shfaq';
$strBzip = '"kompresuar me bzip2"';

$strCantLoadMySQL = 'nuk arrij t� ngarkoj ekstensionin MySQL,<br />kontrollo konfigurimin e PHP.';
$strCantLoadRecodeIconv = 'I pamundur ngarkimi i ekstensionit iconv apo recode t� nevoitsh�m p�r konvertimin e karaktereve, konfiguroni php p�r t� lejuar p�rdorimin e k�tyre ekstensioneve ose disaktivoni konvertimin e set t� karaktereve n� phpMyAdmin.';
$strCantRenameIdxToPrimary = 'I pamundur riem�rtimi i treguesit n� PRIMAR!';
$strCantUseRecodeIconv = 'I pamundur p�rdorimi i funksioneve iconv apo libiconv apo recode_string p�r shkak se ekstensioni duhet t� ngarkohet. Kontrolloni konfigurimin e php.';
$strCardinality = '';
$strCarriage = 'Kthimi n� fillim: \\r';
$strChange = 'Modifiko';
$strChangeDisplay = 'Zgjidh fush�n q� d�shiron t� shoh�sh';
$strChangePassword = 'Ndrysho password';
$strCharsetOfFile = 'Set karakteresh t� file:';
$strCheckAll = 'Seleksionoi t� gjith�';
$strCheckDbPriv = 'Kontrollo t� drejtat e databaz�';
$strCheckTable = 'Kontrollo tabel�n';
$strChoosePage = 'Ju lutem zgjidhni faqen q� d�shironi t� modifikoni';
$strColComFeat = 'Vizualizimi i komenteve t� kollonave';
$strColumn = 'Kollona';
$strColumnNames = 'Emrat e kollonave';
$strComments = 'Komente';
$strCompleteInserts = 'T� shtuarat komplet';
$strConfigFileError = 'phpMyAdmin nuk arrin t� lexoj� file e konfigurimit!<br />Kjo mund t� ndodh� kur php gjen nj� parse error n� t� apo kur php nuk arrin ta gjej� k�t� file.<br />Ju lutem ngarkoheni direkt file e konfigurimit duke p�rdorur link-un e m�posht�m dhe lexoni mesazhin(et) e gabimeve php q� merrni. N� shumic�n e rasteve mund t\'ju mungoj� nj� apostrof� apo nj� presje.<br />N�se faqja q� do t\'ju hapet �sht� bosh (e bardh�), at�here gjith�ka �sht� n� rregull.';
$strConfigureTableCoord = 'Ju lutem, konfiguroni koordinatat p�r tabel�n %s';
$strConfirm = 'I sigurt q� d�shiron ta b�sh?';
$strCookiesRequired = 'Nga kjo pik� e tutje, cookies duhet t� jen� t� aktivuara.';
$strCopyTable = 'Kopjo tabel�n tek (databaz�<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s u kopjua tek %s.';
$strCreate = 'Krijo';
$strCreateIndex = 'Krijo nj� tregues tek &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Krijo nj� tregues t� ri';
$strCreateNewDatabase = 'Krijo nj� databaz� t� re';
$strCreateNewTable = 'Krijo nj� tabel� t� re tek databaz� %s';
$strCreatePage = 'Krijo nj� faqe t� re';
$strCreatePdfFeat = 'Krijimi i PDF-ve';
$strCriteria = 'Kriteri';

$strData = 'T� dh�na';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Vet�m t� dh�na';
$strDatabase = 'Databaz� ';
$strDatabaseHasBeenDropped = 'Databaza %s u eleminua.';
$strDatabaseWildcard = 'Database (wildcards e lejuara):';
$strDatabases = 'databaz�';
$strDatabasesStats = 'Statistikat e databaz�s';
$strDefault = 'Paracaktuar';
$strDelPassMessage = 'Ke fshir� password p�r';
$strDelete = 'Fshi';
$strDeleteFailed = 'Fshirja d�shtoi!';
$strDeleteUserMessage = 'Ke fshir� p�rdoruesin %s.';
$strDeleted = 'rreshti u fshi';
$strDeletedRows = 'rreshtat e fshir�:';
$strDescending = 'Zbrit�s';
$strDisabled = 'Disaktivuar';
$strDisplay = 'Vizualizo';
$strDisplayFeat = 'Vizualizo karakteristikat';
$strDisplayOrder = 'M�nyra e vizualizimit:';
$strDisplayPDF = 'Shfaq skem�n e PDF';
$strDoAQuery = 'Zbato "query nga shembull" (karakteri jolly: "%")';
$strDoYouReally = 'Konfermo: ';
$strDocu = 'Dokumentet';
$strDrop = 'Elemino';
$strDropDB = 'Elemino databaz�n %s';
$strDropTable = 'Elemino tabel�n';
$strDumpXRows = 'Dump i %s rreshta duke filluar nga rreshti %s.';
$strDumpingData = 'Dump i t� dh�nave p�r tabel�n';
$strDynamic = 'dinamik';

$strEdit = 'Modifiko';
$strEditPDFPages = 'Modifiko Faqe PDF';
$strEditPrivileges = 'Modifiko Privilegjet';
$strEffective = 'Efektiv';
$strEmpty = 'Zbraz';
$strEmptyResultSet = 'MySQL ka kthyer nj� t� p�rbashk�t boshe (p.sh. zero rreshta).';
$strEnabled = 'Aktivuar';
$strEnd = 'Fund';
$strEndCut = 'FUNDI I CUT';
$strEndRaw = 'FUNDI I RAW';
$strEnglishPrivileges = 'Sh�nim: emrat e privilegjeve t� MySQL jan� n� Anglisht';
$strError = 'Gabim';
$strExplain = 'Shpjego SQL';
$strExport = 'Eksporto';
$strExportToXML = 'Eksporto n� formatin XML';
$strExtendedInserts = 'T� shtuara t� zgjeruara';
$strExtra = 'Extra';

$strField = 'Fush�';
$strFieldHasBeenDropped = 'Fusha %s u eleminua';
$strFields = 'Fusha';
$strFieldsEmpty = ' Numratori i fushave �sht� bosh! ';
$strFieldsEnclosedBy = 'Fush� e p�rb�r� nga';
$strFieldsEscapedBy = 'Fush� e kufizuar nga';
$strFieldsTerminatedBy = 'Fush� e mbaruar nga';
$strFixed = 'fiks';
$strFlushTable = 'Rifillo ("FLUSH") tabel�n';
$strFormEmpty = 'Mungon nj� vler� n� form!';
$strFormat = 'Formati';
$strFullText = 'Teksti i plot�';
$strFunction = 'Funksion';

$strGenBy = 'Gjeneruar nga';
$strGenTime = 'Gjeneruar m�';
$strGeneralRelationFeat = 'Karakteristikat e p�rgjithshme t� relacionit';
$strGo = 'Zbato';
$strGrants = 'Lejo';
$strGzip = '"kompresuar me gzip"';

$strHasBeenAltered = 'u modifikua.';
$strHasBeenCreated = 'u krijua.';
$strHaveToShow = 'Zgjidh t� pakt�n nj� kolon� p�r t\'a vizualizuar';
$strHome = 'Home';
$strHomepageOfficial = 'Home page zyrtare e phpMyAdmin';
$strHomepageSourceforge = 'Home page e phpMyAdmin tek sourceforge.net';
$strHost = 'Host';
$strHostEmpty = 'Emri i host �sht� bosh!';

$strIdxFulltext = 'Teksti komplet';
$strIfYouWish = 'P�r t� ngarkuar t� dh�nat vet�m p�r disa kollona t� tabel�s, specifiko list�n e fushave (t� ndara me presje).';
$strIgnore = 'Injoro';
$strImportDocSQL = 'Importo files docSQL';
$strInUse = 'n� p�rdorim';
$strIndex = 'Treguesi';
$strIndexHasBeenDropped = 'Treguesi %s u eleminua';
$strIndexName = 'Emri i treguesit&nbsp;:';
$strIndexType = 'Tipi i treguesit&nbsp;:';
$strIndexes = 'Tregues';
$strInsecureMySQL = 'File i konfigurimit n� p�rdorim p�rmban zgjedhje (root pa asnj� password) q� korrispondojn� me t� drejtat e account MySQL t� paracaktuar. Nj� server MySQL funksionues me k�to zgjedhje �sht� i pambrojtur ndaj sulmeve, dhe ju duhet patjet�r t� korrigjoni k�t� vrim� n� siguri.';
$strInsert = 'Shto';
$strInsertAsNewRow = 'Shto nj� rresht t� ri';
$strInsertNewRow = 'Shto nj� rresht t� ri';
$strInsertTextfiles = 'Shto nj� file teksti n� tabel�';
$strInsertedRows = 'Rreshta t� shtuar:';
$strInstructions = 'Instruksione';
$strInvalidName = '"%s" �sht� nj� fjal� e rezervuar; nuk mund ta p�rdor�sh si em�r p�r databaz�/tabel�/fush�.';

$strKeepPass = 'Mos ndrysho password';
$strKeyname = 'Emri i ky�it';
$strKill = 'Hiq';

$strLength = 'Gjat�sia';
$strLengthSet = 'Gjat�sia/Set*';
$strLimitNumRows = 'record p�r faqe';
$strLineFeed = 'Fundi i rreshtit: \\n';
$strLines = 'Record';
$strLinesTerminatedBy = 'Rreshta q� mbarojn� me';
$strLinkNotFound = 'Link nuk u gjet';
$strLinksTo = 'Lidhje me';
$strLocationTextfile = 'Pozicioni i file';
$strLogPassword = 'Password:';
$strLogUsername = 'Emri i p�rdoruesit:';
$strLogin = 'Lidh';
$strLogout = 'Shk�put';

$strMissingBracket = 'Mungojn� thonj�za';
$strModifications = 'Ndryshimet u shp�tuan';
$strModify = 'Modifiko';
$strModifyIndexTopic = 'Modifiko nj� tregues';
$strMoveTable = 'Sposto tabel�n n� (databaz�<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s u spostua tek %s.';
$strMySQLCharset = 'Set karakteresh MySQL';
$strMySQLReloaded = 'MySQL u rifillua.';
$strMySQLSaid = 'Mesazh nga MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% n� ekzekutim tek %pma_s2% si %pma_s3%';
$strMySQLShowProcess = 'Vizualizo proceset n� ekzekutim';
$strMySQLShowStatus = 'Vizualizo informacionet e runtime t� MySQL';
$strMySQLShowVars = 'Vizualizo t� ndryshueshmet e sistemit t� MySQL';

$strName = 'Emri';
$strNext = 'N� vazhdim';
$strNo = ' Jo ';
$strNoDatabases = 'Asnj� databaz�';
$strNoDescription = 'asnj� P�rshkrim';
$strNoDropDatabases = 'Komandat "DROP DATABASE" jan� disaktivuar.';
$strNoExplain = 'Mos Shpjego SQL';
$strNoFrames = 'phpMyAdmin funksionon m� mir� me browser q� suportojn� frames';
$strNoIndex = 'Asnj� tregues i p�rcaktuar!';
$strNoIndexPartsDefined = 'Asnj� pjes� e treguesit �sht� p�rcaktuar!';
$strNoModification = 'Asnj� ndryshim';
$strNoPassword = 'Asnj� password';
$strNoPhp = 'pa kod PHP';
$strNoPrivileges = 'Asnj� privilegj';
$strNoQuery = 'Asnj� query SQL!';
$strNoRights = 'Nuk ke t� drejta t� mjaftueshme p�r t� kryer k�t� operacion!';
$strNoTablesFound = 'Nuk gjenden tabela n� databaz�.';
$strNoUsersFound = 'Nuk u gjet asnj� p�rdorues.';
$strNoValidateSQL = 'Mos vleft�so SQL';
$strNone = 'Askush';
$strNotNumber = 'Ky nuk �sht� nj� num�r!';
$strNotOK = 'jo OK';
$strNotSet = '<b>%s</b> tabela nuk u gjet ose nuk �sht� p�rcaktuar tek %s';
$strNotValidNumber = ' nuk �sht� nj� rresht i vlefsh�m!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s korrispondon(jn�) tek tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Gjithsej:</b> <i>%s</i> korrispondues(�)';

$strOK = 'OK';
$strOftenQuotation = 'Zakonisht nga dopjo thonjza. ME D�SHIR� tregon q� vet�m fushat <I>char</I> dhe <I>varchar</I> duhet t� delimitohen nga karakteri i treguar.';
$strOperations = 'Operacione';
$strOptimizeTable = 'Optimizo tabel�n';
$strOptionalControls = 'Me d�shir�. Ky karakter kontrollon si t� shkruash apo lexosh karakteret special�.';
$strOptionally = 'ME D�SHIR�';
$strOptions = 'Mund�si';
$strOr = 'Ose';
$strOverhead = 'Tejkalim';

$strPHP40203 = '�sht� n� p�rdorim PHP 4.2.3, q� p�rmban nj� bug serioz me stringat multi-byte strings (mbstring). Shiko raportin 19404 t� bug PHP. Ky version i PHP nuk rekomandohet p�r t\'u p�rdorur me phpMyAdmin.';
$strPHPVersion = 'Versioni i PHP';
$strPageNumber = 'Numri i faqes:';
$strPartialText = 'Tekst i pjes�sh�m';
$strPassword = 'Password';
$strPasswordEmpty = 'Password �sht� bosh!';
$strPasswordNotSame = 'Password nuk korrispondon!';
$strPdfDbSchema = 'Skema e databaz� "%s" - Faqja %s';
$strPdfInvalidPageNum = 'Numri i faqes s� PDF i pap�rcaktuar!';
$strPdfInvalidTblName = 'Tabela "%s" nuk ekziston!';
$strPdfNoTables = 'Asnj� tabel�';
$strPhp = 'Krijo kodin PHP';
$strPmaDocumentation = 'Dokumente t� phpMyAdmin';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DUHET t� p�rcaktohet tek file i konfigurimit!';
$strPos1 = 'Fillim';
$strPrevious = 'Paraardh�si';
$strPrimary = 'Primar';
$strPrimaryKey = 'Ky� primar';
$strPrimaryKeyHasBeenDropped = 'Ky�i primar u eleminua';
$strPrimaryKeyName = 'Emri i ky�it primar duhet t� jet�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>duhet</b> t� jet� emri i, dhe <b>vet�m i</b>, nj� ky�i primar!)';
$strPrint = 'Printo';
$strPrintView = 'Vizualizo p�r printim';
$strPrivileges = 'Privilegje';
$strProperties = 'Pron�si';
$strPutColNames = 'Vendos emrat e kollonave tek rreshti i par�';

$strQBE = 'Query nga shembull';
$strQBEDel = 'Fshi';
$strQBEIns = 'Shto';
$strQueryOnDb = 'SQL-query tek databaz� <b>%s</b>:';

$strReType = 'Rifut';
$strRecords = 'Record';
$strReferentialIntegrity = 'Kontrollo integritetin e informacioneve:';
$strRelationNotWorking = 'Karakteristikat shtes� jan� disaktivuar p�r sa i takon funksionimit me tabelat e link-uara. P�r t� zbuluar p�rse, klikoni %sk�tu%s.';
$strRelationView = 'Shiko relacionin';
$strReloadFailed = 'Rinisja e MySQL d�shtoi.';
$strReloadMySQL = 'Rifillo MySQL';
$strRememberReload = 'Kujtohu t� rinis�sh MySQL.';
$strRenameTable = 'Riem�rto tabel�n n�';
$strRenameTableOK = 'Tabela %s u riem�rtua %s';
$strRepairTable = 'Riparo tabel�n';
$strReplace = 'Z�v�nd�so';
$strReplaceTable = 'Z�v�nd�so t� dh�nat e tabel�s me file';
$strReset = 'Rinis';
$strRevoke = 'Hiq';
$strRevokeGrant = 'Hiq t� drejtat';
$strRevokeGrantMessage = 'Ke hequr privilegjet e t� drejtave p�r %s';
$strRevokeMessage = 'Ke anulluar privilegjet p�r %s';
$strRevokePriv = 'Anullo privilegjet';
$strRowLength = 'Gjat�sia e rreshtit';
$strRowSize = 'Dimensioni i rreshtit';
$strRows = 'rreshta';
$strRowsFrom = 'rreshta duke filluar nga';
$strRowsModeHorizontal = ' horizontal ';
$strRowsModeOptions = ' n� modalitetin %s dhe p�rs�rit headers mbas %s qeli ';
$strRowsModeVertical = ' vertikal ';
$strRowsStatistic = 'Statistikat e rreshtave';
$strRunQuery = 'D�rgo Query';
$strRunSQLQuery = 'Zbato query SQL tek databaz� %s';
$strRunning = 'n� ekzekutim tek %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Ka mund�si q� ka nj� bug tek parser SQL. Ju lutem, kontrolloni query tuaj me kujdes, dhe kontrolloni q� presjet t� jen� ku duhet dhe jo t� gabuara. Nj� shkak tjet�r i mundsh�m i gabimit mund t� jet� q� po mundoheni t� uploadoni nj� file binar jasht� nj� zone teksti t� kufizuar me presje. Mund edhe t� provoni query tuaj MySQL nga interfaqja e shkruar e komandave. Gabimi i m�posht�m i kthyer nga server-i MySQL, n�se ekziston nj� i till�, mund tju ndihmoj� n� diagnostikimin e problemit. N�se ka akoma probleme, apo n.q.s. parser-i SQL i phpMyAdmin gabon kur p�rkundrazi nga interfaqja e komandave t� thjeshta nuk rezultojn� probleme, ju lutem zvog�loni query tuaj SQL n� hyrje n� query e vetme q� shkakton probleme, dhe d�rgoni nj� bug raportim me t� dh�nat rezultuese nga seksioni CUT i m�posht�m:';
$strSQLParserUserError = 'Mesa duket ekziston nj� gabim tek query juaj SQL e futur. Gabimi i server-it MySQL i treguar m� posht�, n�se ekziston, mund t\'ju ndihmoj� n� diagnostikimin e problemit';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Rezultati SQL';
$strSQPBugInvalidIdentifer = 'Identifikues i pavlefsh�m';
$strSQPBugUnclosedQuote = 'Thonj�za t� pambyllura';
$strSQPBugUnknownPunctuation = 'String� Punctuation e panjohur';
$strSave = 'Shp�to';
$strScaleFactorSmall = 'Faktori i shkall�s �sht� shum� i vog�l p�r t� plot�suar skem�n n� faqe';
$strSearch = 'K�rko';
$strSearchFormTitle = 'K�rko n� databaz�';
$strSearchInTables = 'Tek tabela(at):';
$strSearchNeedle = 'Fjala(�) apo vlera(at) p�r t\'u k�rkuar (karakteri Jolly: "%"):';
$strSearchOption1 = 't� pakt�n nj�r�n nga fjal�t';
$strSearchOption2 = 't� gjitha fjal�t';
$strSearchOption3 = 'fraza precize';
$strSearchOption4 = 'si ekspresion i rregullt';
$strSearchResultsFor = 'K�rko rezultatet p�r "<i>%s</i>" %s:';
$strSearchType = 'Gjej:';
$strSelect = 'Seleksiono';
$strSelectADb = 'T� lutem, seleksiono nj� databaz�';
$strSelectAll = 'Seleksiono Gjith�ka';
$strSelectFields = 'Seleksiono fushat (t� pakt�n nj�):';
$strSelectNumRows = 'tek query';
$strSelectTables = 'Seleksiono Tabelat';
$strSend = 'Shp�toje me em�r...';
$strServer = 'Server %s';
$strServerChoice = 'Zgjedhja e server';
$strServerVersion = 'Versioni i MySQL';
$strSetEnumVal = 'N.q.s. fusha �sht� "enum" apo "set", shtoni t� dh�nat duke p�rdorur formatin: \'a\',\'b\',\'c\'...<br />N�se megjithat� do t\'u duhet t� vini backslashes ("\") apo single quote ("\'") para k�tyre vlerave, backslash-ojini (p�r shembull \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Shfaq';
$strShowAll = 'Shfaqi t� gjith�';
$strShowColor = 'Shfaq ngjyr�n';
$strShowCols = 'Shfaq kollonat';
$strShowGrid = 'Shfaq rrjet�n';
$strShowPHPInfo = 'Trego info mbi PHP';
$strShowTableDimension = 'Trego dimensionin e tabelave';
$strShowTables = 'Shfaq tabelat';
$strShowThisQuery = 'Tregoje p�rs�ri k�t� query';
$strShowingRecords = 'Vizualizimi i record ';
$strSingly = '(nj� nga nj�)';
$strSize = 'Dimensioni';
$strSort = 'rreshtimi';
$strSpaceUsage = 'Hap�sira e p�rdorur';
$strSplitWordsWithSpace = 'Fjal�t jan� t� ndara nga nj� hapsir� (" ").';
$strStatement = 'Instruksione';
$strStrucCSV = 't� dh�na CSV';
$strStrucData = 'Struktura dhe t� dh�na';
$strStrucDrop = 'Shto \'drop table\'';
$strStrucExcelCSV = 'CSV p�r t� dh�na Ms Excel';
$strStrucOnly = 'Vet�m struktura';
$strStructPropose = 'Propozo struktur�n e tabel�s';
$strStructure = 'Struktura';
$strSubmit = 'D�rgoje';
$strSuccess = 'Query u zbatua me sukses';
$strSum = 'Gjithsej';

$strTable = 'Tabela';
$strTableComments = 'Komente mbi tabel�n';
$strTableEmpty = 'Emri i tabel�s �sht� bosh!';
$strTableHasBeenDropped = 'Tabela %s u eleminua';
$strTableHasBeenEmptied = 'Tabela %s u zbraz';
$strTableHasBeenFlushed = 'Tabela %s u rifreskua';
$strTableMaintenance = 'Administrimi i tabel�s';
$strTableStructure = 'Struktura e tabel�s';
$strTableType = 'Tipi i tabel�s';
$strTables = '%s tabela(at)';
$strTextAreaLength = ' P�r shkak t� gjat�sis� saj,<br /> kjo fush� nuk mund t� modifikohet ';
$strTheContent = 'P�rmbajtja e file u shtua.';
$strTheContents = 'P�rmbajtja e file z�v�nd�son rreshtat e tabel�s me t� nj�jtin ky� primar apo ky� t� vet�m.';
$strTheTerminator = 'Karakteri p�rfundues i fushave.';
$strTotal = 'Gjithsej';
$strType = 'Tipi';

$strUncheckAll = 'Deseleksionoi t� gjith�';
$strUnique = 'I vet�m';
$strUnselectAll = 'Deseleksiono gjith�ka';
$strUpdatePrivMessage = 'Ke rifreskuar lejet p�r %s.';
$strUpdateProfile = 'Rifresko profilin:';
$strUpdateProfileMessage = 'Profili u rifreskua.';
$strUpdateQuery = 'Rifresko Query';
$strUsage = 'P�rdorimi';
$strUseBackquotes = 'P�rdor backquotes me emrat e tabelave dhe fushave';
$strUseTables = 'P�rdor tabelat';
$strUser = 'P�rdorues';
$strUserEmpty = 'Emri i p�rdoruesit �sht� bosh!';
$strUserName = 'Emri i p�rdoruesit';
$strUsers = 'P�rdorues';

$strValidateSQL = 'Vleft�so SQL';
$strValidatorError = 'Miratuesi SQL nuk arrin t� niset. Ju lutem kontrolloni instalimin e ekstensioneve t� duhura php ashtu si p�rshkruhet tek %sdokumentimi%s.';
$strValue = 'Vlera';
$strViewDump = 'Vizualizo dump (skema) e tabel�s';
$strViewDumpDB = 'Vizualizo dump (skema) e databaz�';

$strWebServerUploadDirectory = 'directory e upload t� server-it web';
$strWebServerUploadDirectoryError = 'Directory q� keni zgjedhur p�r upload nuk arrin t� gjehet';
$strWelcome = 'Mir�sevini tek %s';
$strWithChecked = 'N.q.s.t� seleksionuar:';
$strWrongUser = 'Emri i p�rdoruesit apo password i gabuar. Ndalohet hyrja.';

$strYes = ' Po ';

$strZip = '"kompresuar me zip"';

// To translate
$strCompression = 'Compression'; //to translate
$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate
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
