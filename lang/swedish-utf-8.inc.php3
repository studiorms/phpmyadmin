<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bytes', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sön', 'Mån', 'Tis', 'Ons', 'Tors', 'Fre', 'Lör');
$month = array('januari', 'februari', 'mars', 'april', 'maj', 'juni', 'juli', 'augusti', 'september', 'oktober', 'november', 'december');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y kl %H:%M';
$timespanfmt = '%s dagar, %s timmar, %s minuter och %s sekunder';

$strAPrimaryKey = 'En primär nyckel har lagts till för %s';
$strAbortedClients = 'Avbrutna';
$strAccessDenied = 'Åtkomst nekad';
$strAction = 'Åtgärd';
$strAddDeleteColumn = 'Lägg till/ta bort fältkolumner';
$strAddDeleteRow = 'Lägg till/ta bort villkorsrader';
$strAddNewField = 'Lägg till fält';
$strAddPriv = 'Lägg till ett nytt privilegium';
$strAddPrivMessage = 'Du har lagt till ett nytt privilegium.';
$strAddSearchConditions = 'Lägg till sökvillkor (uttryck i "where"-sats):';
$strAddToIndex = 'Lägg till&nbsp;%s&nbsp;kolumn(er) till index';
$strAddUser = 'Lägg till ny användare';
$strAddUserMessage = 'Du har lagt till en ny användare.';
$strAffectedRows = 'Påverkade rader:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'Gå tillbaka till föregående sida';
$strAfterInsertNewInsert = 'Lägg till ytterligare en ny rad';
$strAll = 'Alla';
$strAllTableSameWidth = 'Visa alla tabeller med samma bredd';
$strAlterOrderBy = 'Sortera om tabellen efter';
$strAnIndex = 'Ett index har lagts till för %s';
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'Och';
$strAny = 'Vem som helst';
$strAnyColumn = 'Vilken kolumn som helst';
$strAnyDatabase = 'Vilken databas som helst';
$strAnyHost = 'Vilken värd som helst';
$strAnyTable = 'Vilken tabell som helst';
$strAnyUser = 'Vilken användare som helst';
$strAscending = 'Stigande';
$strAtBeginningOfTable = 'I början av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';

$strBack = 'Bakåt';
$strBeginCut = 'START URKLIPP';
$strBeginRaw = 'START RÅTEXT';
$strBinary = 'Binär';
$strBinaryDoNotEdit = 'Binär - ändra inte';
$strBookmarkDeleted = 'Bokmärket har raderats.';
$strBookmarkLabel = 'Etikett';
$strBookmarkQuery = 'Bokmärkt SQL-fråga';
$strBookmarkThis = 'Skapa bokmärke för den här SQL-frågan';
$strBookmarkView = 'Visa endast';
$strBrowse = 'Visa';
$strBzip = '"bzippad"';

$strCannotLogin = 'Kan ej logga in på MySQL-server';
$strCantLoadMySQL = 'kan inte ladda MySQL-tillägg,<br />var god och kontrollera PHP-konfigurationen.';
$strCantLoadRecodeIconv = 'Kan inte ladda utökningarna iconv eller recode som behövs för teckenuppsättningsomvandling. Konfigurera php för att tillåta dessa utökningar eller stäng av teckenuppsättningsomvandling i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan inte byta namn på index till "PRIMARY"!';
$strCantUseRecodeIconv = 'Kan inte använda funktionerna iconv, libiconv eller recode_string när utökade rapporter ska laddas. Kontrollera din php-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Vagnretur: \\r';
$strChange = 'Ändra';
$strChangeDisplay = 'Välj fält som ska visas';
$strChangePassword = 'Byt lösenord';
$strCharsetOfFile = 'Filens teckenuppsättning:';
$strCheckAll = 'Markera alla';
$strCheckDbPriv = 'Kontrollera databasprivilegier';
$strCheckTable = 'Kontrollera tabell';
$strChoosePage = 'Välj en sida att redigera';
$strColComFeat = 'Visning av kolumnkommentarer';
$strColumn = 'Kolumn';
$strColumnNames = 'Kolumn-namn';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Kompletta infogningar';
$strCompression = 'Komprimering';
$strConfigFileError = 'phpMyAdmin kunde inte läsa din konfigurationsfil!<br />Detta kan inträffa om php hittar ett fel i den eller om php inte hittar filen.<br />Anropa konfigurationsfilen direkt mha länken nedan och läs php:s felmeddelande(n) som du erhåller. I de flesta fall saknas ett citationstecken eller ett semikolon någonstans.<br />Om du erhåller en tom sida är allt bra.';
$strConfigureTableCoord = 'Var god ange koordinaterna för tabellen %s';
$strConfirm = 'Vill du verkligen göra det?';
$strConnections = 'Uppkopplingar';
$strCookiesRequired = 'Kakor (cookies) måste tillåtas för att gå vidare.';
$strCopyTable = 'Kopiera tabellen till (databas<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCreate = 'Skapa';
$strCreateIndex = 'Skapa ett index för&nbsp;%s&nbsp;kolumn(er)';
$strCreateIndexTopic = 'Skapa ett nytt index';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa ny tabell i databas %s';
$strCreatePage = 'Skapa en ny sida';
$strCreatePdfFeat = 'Skapande av PDF-sidor';
$strCriteria = 'Villkor';

$strData = 'Data';
$strDataDict = 'Datalexikon';
$strDataOnly = 'Enbart data';
$strDatabase = 'Databas ';
$strDatabaseHasBeenDropped = 'Databasen %s har tagits bort.';
$strDatabaseWildcard = 'Databas (jokertecken tillåtna):';
$strDatabases = 'databaser';
$strDatabasesStats = 'Databas-statistik';
$strDefault = 'Standard';
$strDelete = 'Radera';
$strDeleteFailed = 'Raderingen misslyckades!';
$strDeleteUserMessage = 'Du har tagit bort användaren %s.';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDescending = 'Fallande';
$strDisabled = 'Avaktiverat';
$strDisplay = 'Visa';
$strDisplayFeat = 'Visningsfunktionaliteter';
$strDisplayOrder = 'Visningsordning:';
$strDisplayPDF = 'Visa PDF-schema';
$strDoAQuery = 'Utför en "Query by Example" (jokertecken: "%")';
$strDoYouReally = 'Vill du verkligen ';
$strDocu = 'Dokumentation';
$strDrop = 'Radera';
$strDropDB = 'Radera databas %s';
$strDropTable = 'Radera tabell';
$strDumpXRows = 'Visa %s rader med början på rad %s.';
$strDumpingData = 'Data i tabell';
$strDynamic = 'dynamisk';

$strEdit = 'Ändra';
$strEditPDFPages = 'Redigera PDF-sidor';
$strEditPrivileges = 'Ändra privilegier';
$strEffective = 'Effektivt';
$strEmpty = 'Töm';
$strEmptyResultSet = 'MySQL skickade tillbaka ett tomt resultat (dvs inga rader).';
$strEnabled = 'Aktiverat';
$strEnd = 'Slutet';
$strEndCut = 'SLUT URKLIPP';
$strEndRaw = 'SLUT RÅTEXT';
$strEnglishPrivileges = ' Obs! MySQL-privilegiumnamn anges på engelska ';
$strError = 'Fel';
$strExplain = 'Förklara SQL-kod';
$strExport = 'Exportera';
$strExportToXML = 'Exportera till XML-format';
$strExtendedInserts = 'Utökade infogningar';
$strExtra = 'Extra';

$strFailedAttempts = 'Misslyckade försök';
$strField = 'Fält';
$strFieldHasBeenDropped = 'Fältet %s har tagits bort';
$strFields = 'Fält';
$strFieldsEmpty = ' Antalet fält är noll! ';
$strFieldsEnclosedBy = 'Fälten omges av';
$strFieldsEscapedBy = 'Specialtecken i fält föregås av';
$strFieldsTerminatedBy = 'Fälten avslutas med';
$strFixed = 'fast';
$strFlushTable = 'Rensa tabellen ("FLUSH TABLE")';
$strFormEmpty = 'Värde saknas i formuläret!';
$strFormat = 'Format';
$strFullText = 'Fullständiga texter';
$strFunction = 'Funktion';

$strGenBy = 'Genererad av';
$strGenTime = 'Skapad';
$strGeneralRelationFeat = 'Allmänna relationsfunktionaliteter';
$strGlobalValue = 'Globalt värde';
$strGo = 'Kör';
$strGrants = 'Befogenheter';
$strGzip = '"gzippad"';

$strHasBeenAltered = 'har ändrats.';
$strHasBeenCreated = 'har skapats.';
$strHaveToShow = 'Du måste välja minst en kolumn som ska visas';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHomepageSourceforge = 'phpMyAdmin Sourceforge-nedladdningssida';
$strHost = 'Värd';
$strHostEmpty = 'Värdnamnet är tomt!';

$strIdxFulltext = 'Heltext';
$strIfYouWish = 'Om du vill ladda enbart några av tabellens kolumner, ange en kommaseparerad fältlista.';
$strIgnore = 'Ignorera';
$strImportDocSQL = 'Importera docSQL-filer';
$strInUse = 'används';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s har tagits bort';
$strIndexName = 'Indexnamn&nbsp;:';
$strIndexType = 'Indextyp&nbsp;:';
$strIndexes = 'Index';
$strInsecureMySQL = 'Din konfigurationsfil innehåller inställningar (root-konto utan lösenord) som motsvarar MySQL:s privilegierade standardkonto. Din MySQL-server körs med denna standardinställning och är öppen för intrång, så du bör verkligen täppa till detta säkerhetshål.';
$strInsert = 'Lägg till';
$strInsertAsNewRow = 'Lägg till som ny rad';
$strInsertNewRow = 'Lägg till ny rad';
$strInsertTextfiles = 'Importera data från textfil till tabellen';
$strInsertedRows = 'Tillagda rader:';
$strInstructions = 'Instruktioner';
$strInvalidName = '"%s" är ett reserverat ord, du kan inte använda det som ett namn på en databas/tabell/fält.';

$strKeepPass = 'Ändra inte lösenordet';
$strKeyname = 'Nyckel';;
$strKill = 'Döda';

$strLandscape = 'Liggande';
$strLength = 'Längd';
$strLengthSet = 'Längd/Värden*';
$strLimitNumRows = 'Rader per sida';
$strLineFeed = 'Radframmatning: \\n';
$strLines = 'Rader';
$strLinesTerminatedBy = 'Raderna avslutas med';
$strLinkNotFound = 'Länk ej funnen';
$strLinksTo = 'Länkar till';
$strLocationTextfile = 'Textfilens plats';
$strLogPassword = 'Lösenord:';
$strLogUsername = 'Användarnamn:';
$strLogin = 'Logga in';
$strLogout = 'Logga ut';

$strMissingBracket = 'Parantes saknas';
$strModifications = 'Ändringarna har sparats';
$strModify = 'Ändra';
$strModifyIndexTopic = 'Ändra ett index';
$strMoreStatusVars = 'Fler statusvariabler';
$strMoveTable = 'Flytta tabellen till (databas<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har flyttats till %s.';
$strMySQLCharset = 'MySQL teckenuppsättning';
$strMySQLReloaded = 'MySQL har startats om.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% körs på %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL-körningsinformation';
$strMySQLShowVars = 'Visa MySQL:s systemvariabler';

$strName = 'Namn';
$strNext = 'Nästa';
$strNo = 'Nej';
$strNoDatabases = 'Inga databaser';
$strNoDescription = 'Ingen beskrivning';
$strNoDropDatabases = '"DROP DATABASE"-instruktioner är avstängda.';
$strNoExplain = 'Utan förklaring';
$strNoFrames = 'phpMyAdmin fungerar tyvärr endast med webbläsare som hanterar ramar.';
$strNoIndex = 'Inga index är definierade!';
$strNoIndexPartsDefined = 'Inga delar av index är definierade!';
$strNoModification = 'Ingen förändring';
$strNoPassword = 'Inget lösenord';
$strNoPhp = 'Utan PHP-kod';
$strNoPrivileges = 'Inga privilegier';
$strNoQuery = 'Ingen SQL-fråga!';
$strNoRights = 'Du har inte tillräcklig behörighet för att vara här!';
$strNoTablesFound = 'Inga tabeller funna i databasen.';
$strNoUsersFound = 'Hittade ingen användare.';
$strNoValidateSQL = 'Utan validering';
$strNone = 'Inget';
$strNotNumber = 'Det är inte ett nummer!';
$strNotOK = 'Inte OK';
$strNotSet = '<b>%s</b>-tabellen ej funnen eller ej angiven i %s';
$strNotValidNumber = ' är inte ett giltigt radnummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s träff(ar) i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> träff(ar)';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOftenQuotation = 'Ofta citattecken. Frivilligt innebär att bara fält av typ \'char\' och \'varchar\' omges av angivet tecken.';
$strOperations = 'Operationer';
$strOptimizeTable = 'Optimera tabell';
$strOptionalControls = 'Frivilligt. Styr hur läsning och skrivning av specialtecken utförs.';
$strOptionally = 'Frivilligt';
$strOptions = 'Alternativ';
$strOr = 'Eller';
$strOverhead = 'Outnyttjat';

$strPageNumber = 'Sida:';
$strPartialText = 'Avkortade texter';
$strPassword = 'Lösenord';
$strPasswordEmpty = 'Lösenordet är tomt!';
$strPasswordNotSame = 'Lösenorden är inte lika!';
$strPdfDbSchema = 'Schema för databasen "%s" - Sidan %s';
$strPdfInvalidPageNum = 'Odefinierat PDF-sidnummer!';
$strPdfInvalidTblName = 'Tabellen "%s" finns inte!';
$strPdfNoTables = 'Inga tabeller';
$strPerHour = 'per timme';
$strPhp = 'Skapa PHP-kod';
$strPHP40203 = 'Du använder PHP 4.2.3, vilken har en allvarlig bugg med multi-byte-strängar (mbstring). Se PHP:s buggrapport 19404. Denna version av PHP är inte rekommenderad för användning tillsammans med phpMyAdmin.';
$strPHPVersion = 'PHP-version';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = 'Variabeln <tt>$cfg[\'PmaAbsoluteUri\']</tt> MÅSTE anges i din konfigurationsfil!';
$strPortrait = 'Stående';
$strPos1 = 'Början';
$strPrevious = 'Föregående';
$strPrimary = 'Primär';
$strPrimaryKey = 'Primärnyckel';
$strPrimaryKeyHasBeenDropped = 'Den primära nyckeln har tagits bort';
$strPrimaryKeyName = 'Primärnyckelns namn måste vara "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>måste</b> vara namnet på och <b>endast på</b> en primärnyckel!)';
$strPrint = 'Skriv ut';
$strPrintView = 'Utskriftsvänlig visning';
$strPrivileges = 'Privilegier';
$strProperties = 'Inställningar';
$strPutColNames = 'Ange fältnamn på första raden';

$strQBE = 'Skapa fråga';
$strQBEDel = 'Ta bort';
$strQBEIns = 'Infoga';
$strQueryOnDb = 'SQL-fråga i databas <b>%s</b>:';
$strQueryStatistics = '<b>Frågestatistik</b>: %s frågor har skickats till servern sedan den startade.';
$strQueryType = 'Typ av fråga';

$strReceived = 'Mottagna';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Kontrollera referensintegritet:';
$strRelationalSchema = 'Relationsschema';
$strRelationNotWorking = 'Den extra funktionaliteten för att hantera länkade tabeller har avaktiverats. %sVisa orsaken%s.';
$strRelationView = 'Visa relationer';
$strReloadFailed = 'Omladdning av MySQL misslyckades.';
$strReloadMySQL = 'Ladda om MySQL';
$strRememberReload = 'Kom ihåg att ladda om MySQL.';
$strRenameTable = 'Döp om tabellen till';
$strRenameTableOK = 'Tabell %s har döpts om till %s';
$strRepairTable = 'Reparera tabell';
$strReplace = 'Ersätt';
$strReplaceTable = 'Ersätt data i tabell';
$strReset = 'Nollställ';
$strReType = 'Bekräfta';
$strReType = 'Skriv om';
$strRevoke = 'Upphäv';
$strRevokeGrant = 'Upphäv Grant';
$strRevokeGrantMessage = 'Du har upphävt Grant-privilegiet för %s';
$strRevokeMessage = 'Du har upphävt privilegierna för %s';
$strRevokePriv = 'Upphäv privilegier';
$strRowLength = 'Radlängd';
$strRowSize = 'Radstorlek';
$strRows = 'Rader';
$strRowsFrom = 'rader med början från';
$strRowsModeHorizontal= 'vågrätt';
$strRowsModeOptions= 'i %s format och upprepa rubrikerna efter %s celler';
$strRowsModeVertical= 'lodrätt';
$strRowsStatistic = 'Radstatistik';
$strRunQuery = 'Kör fråga';
$strRunSQLQuery = 'Kör SQL-fråga/frågor i databasen %s';
$strRunning = 'körs på %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Det är möjligt att du har hittat en bugg i SQL-analysatorn. Var god granska din fråga noga och kontrollera att citationstecknen är korrekta och matchar varandra. En annan möjlig felorsak kan vara att du överför en fil med binärkod som inte ligger inom citationstecken. Du kan även testa din fråga i MySQL:s kommandoradsgränssnitt. Felmeddelandet från MySQL-servern nedan, om det finns något, kan också hjälpa dig att analysera problemet. Om du fortfarande har problem eller om SQL-analysatorn misslyckas när kommandoradsgränssnittet lyckas, var vänlig reducera din inmatning av SQL-frågor till den enda fråga som orsakar problem och skicka en buggrapport med datastycket i URKLIPP-sektionen nedan:';
$strSQLParserUserError = 'Det verkar vara ett fel i din SQL-fråga. Felmeddelandet från MySQL-servern nedan, om det finns något, kan också hjälpa dig att analysera problemet.';
$strSQLQuery = 'SQL-fråga';
$strSQLResult = 'SQL-resultat';
$strSQPBugInvalidIdentifer = 'Ogiltig identifierare';
$strSQPBugUnclosedQuote = 'Oavslutat citat';
$strSQPBugUnknownPunctuation = 'Okänd interpunktion i sträng';
$strSave = 'Spara';
$strScaleFactorSmall = 'Skalfaktorn är för liten för att schemat ska få plats på en sida';
$strSearch = 'Sök';
$strSearchFormTitle = 'Sök i databas';
$strSearchInTables = 'I tabell(er):';
$strSearchNeedle = 'Ord eller värde(n) att söka efter (jokertecken: "%"):';
$strSearchOption1 = 'minst ett av orden';
$strSearchOption2 = 'alla ord';
$strSearchOption3 = 'den exakta frasen';
$strSearchOption4 = 'som reguljärt uttryck';
$strSearchResultsFor = 'Resultat av sökning efter "<i>%s</i>" %s:';
$strSearchType = 'Hitta:';
$strSelect = 'Välj';
$strSelectADb = 'Välj en databas';
$strSelectAll = 'Markera alla';
$strSelectFields = 'Välj fält (minst ett):';
$strSelectNumRows = 'i fråga';
$strSelectTables = 'Välj tabeller';
$strSend = 'Spara som fil';
$strSent = 'Skickade';
$strServer = 'Server %s';
$strServerChoice = 'Serverval';
$strServerStatus = 'Körningsinformation';
$strServerStatusUptime = 'Denna MySQL-server har körts i %s. Den startade den %s.';
$strServerTabVariables = 'Variabler';
$strServerTabProcesslist = 'Processer';
$strServerTrafficNotes = '<b>Servertrafik</b>: Dessa variabler visar statistik för nätverkstrafiken hos denna MySQL-server sedan den startade.';
$strServerVars = 'Servervariabler och inställningar';
$strServerVersion = 'Serverversion';
$strSessionValue = 'Sessionsvärde';
$strSetEnumVal = 'Om en fälttyp är "enum" eller "set", var god ange värden enligt följande format: \'a\',\'b\',\'c\'...<br />Om du behöver lägga till ett bakåtstreck ("\") eller ett enkelcitat ("\'") i värdena, skriv ett bakåtstreck före tecknet (till exempel \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Visa';
$strShowAll = 'Visa alla';
$strShowColor = 'Visa färger';
$strShowCols = 'Visa kolumner';
$strShowDatadictAs = 'Format för datalexikon';
$strShowGrid = 'Visa rutnät';
$strShowPHPInfo = 'Visa PHP-information';
$strShowTableDimension = 'Visa tabellers dimensioner';
$strShowTables = 'Visa tabeller';
$strShowThisQuery = ' Visa frågan här igen ';
$strShowingRecords = 'Visar rader ';
$strSingly = '(ensam)';
$strSize = 'Storlek';
$strSort = 'Sortering';
$strSpaceUsage = 'Utrymmesanvändning';
$strSplitWordsWithSpace = 'Ord separeras med mellanslag (" ").';
$strStatement = 'Uppgift';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur och data';
$strStrucDrop = 'Lägg till \'radera tabell\'';
$strStrucExcelCSV = 'CSV för MS Excel-data';
$strStrucOnly = 'Enbart struktur';
$strStructPropose = 'Föreslå tabellstruktur';
$strStructure = 'Struktur';
$strSubmit = 'Sänd';
$strSuccess = 'Din SQL-fråga utfördes korrekt';
$strSum = 'Summa';

$strTable = 'Tabell';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet är tomt!';
$strTableHasBeenDropped = 'Tabellen %s har tagits bort';
$strTableHasBeenEmptied = 'Tabellen %s har tömts';
$strTableHasBeenFlushed = 'Tabellen %s har rengjorts';
$strTableMaintenance = 'Tabellunderhåll';
$strTableOfContents = 'Innehållsförteckning';
$strTableStructure = 'Struktur för tabell';
$strTableType = 'Tabelltyp';
$strTables = '%s tabell(er)';
$strTextAreaLength = ' På grund av dess längd,<br /> kanske detta fält inte kan redigeras ';
$strTheContent = 'Filens innehåll har importerats.';
$strTheContents = 'Filens innehåll ersätter den valda tabellens rader som har identiska primära eller unika nycklar.';
$strTheTerminator = 'Fältavslutare.';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraffic = 'Trafik';
$strType = 'Typ';

$strUncheckAll = 'Avmarkera alla';
$strUnique = 'Unik';
$strUnselectAll = 'Avmarkera alla';
$strUpdatePrivMessage = 'Du har uppdaterat privilegierna för %s.';
$strUpdateProfile = 'Uppdatera profil:';
$strUpdateProfileMessage = 'Profilen har uppdaterats.';
$strUpdateQuery = 'Uppdatera fråga';
$strUsage = 'Användning';
$strUseBackquotes = 'Använd bakåtcitat runt tabell- och fältnamn';
$strUseTables = 'Använd tabeller';
$strUser = 'Användare';
$strUserEmpty = 'Användarnamnet är tomt!';
$strUserName = 'Användarnamn';
$strUsers = 'Användare';

$strVar = 'Variabel';
$strValidateSQL = 'Validera SQL-kod';
$strValidatorError = 'SQL-validatorn kunde inte initieras. Kontrollera att du har installerat de nödvändiga PHP-utökningarna enligt %sdokumentationen%s.';
$strValue = 'Värde';
$strViewDump = 'Visa SQL-satser för tabellen';
$strViewDumpDB = 'Visa SQL-satser för databasen';

$strWebServerUploadDirectory = 'Uppladdningskatalog på webbserver';
$strWebServerUploadDirectoryError = 'Katalogen som du konfigurerat för uppladdning kan inte nås';
$strWelcome = 'Välkommen till %s';
$strWithChecked = 'Med markerade:';
$strWrongUser = 'Fel användarnamn/lösenord. Åtkomst nekad.';

$strYes = 'Ja';

$strZip = '"zippad"';

// To translate

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
