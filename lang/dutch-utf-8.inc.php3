<?php
/* $Id$ */

/**
 * Updated by "CaliMonk" <calimonk at gmx.net> on 2002/11/07.
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %e %B %Y om %H:%M';

$timespanfmt = '%s dagen, %s uren, %s minuten and %s seconden';

$strAPrimaryKey = 'Een primaire sleutel is toegevoegd aan %s';
$strAbortedClients = 'Afgehaakte';
$strAccessDenied = 'Toegang geweigerd ';
$strAction = 'Actie';
$strAddDeleteColumn = 'Toevoegen/Verwijderen Veld Kolommen';
$strAddDeleteRow = 'Toevoegen/Verwijderen Criteria Rij';
$strAddNewField = 'Nieuw veld toevoegen';
$strAddPriv = 'Voeg nieuwe rechten toe';
$strAddPrivMessage = 'U heeft nieuwe rechten toegevoegd.';
$strAddSearchConditions = 'Zoek condities toevoegen (het "where" gedeelte van de query):';
$strAddToIndex = 'Voeg &nbsp;%s&nbsp; kolom(men) toe aan index';
$strAddUser = 'Voeg een nieuwe gebruiker toe';
$strAddUserMessage = 'U heeft een nieuwe gebruiker toegevoegd.';
$strAffectedRows = 'Getroffen rijen:';
$strAfter = 'Na %s';
$strAfterInsertBack = 'Terug';
$strAfterInsertNewInsert = 'Voeg een nieuw record toe';
$strAll = 'Alle';
$strAllTableSameWidth = 'Alle tabellen weergeven met dezelfde breedte?';
$strAlterOrderBy = 'Wijzig het \"Sorteren op/Order by\" van de tabel';
$strAnIndex = 'Een index is toegevoegd aan %s';
$strAnalyzeTable = 'Analyseer tabel';
$strAnd = 'En';
$strAny = 'Elke'; //! Willekeurige?
$strAnyColumn = 'Een willekeurige kolom';
$strAnyDatabase = 'Een willekeurige database';
$strAnyHost = 'Een willekeurige host';
$strAnyTable = 'Een willekeurige tabel';
$strAnyUser = 'Een willekeurige gebruiker';
$strAscending = 'Oplopend';
$strAtBeginningOfTable = 'Aan het begin van de tabel';
$strAtEndOfTable = 'Aan het eind van de tabel';
$strAttr = 'Attributen';

$strBack = 'Terug';
$strBeginCut = 'Begin KNIP';
$strBeginRaw = 'Begin RAW';
$strBinary = ' Binair ';
$strBinaryDoNotEdit = ' Binair - niet aanpassen ';
$strBookmarkDeleted = 'De boekenlegger (Bookmark) is verwijderd.';
$strBookmarkLabel = 'Label';
$strBookmarkQuery = 'Opgeslagen SQL-query';
$strBookmarkThis = 'Sla deze SQL-query op';
$strBookmarkView = 'Alleen bekijken';
$strBrowse = 'Verkennen';
$strBzError = 'phpMyAdmin is er niet in geslaagd om de dump te comprimeren doordat de Bz2 extensie in deze php versie niet functioneert. Het wordt sterk aangeraden om de instelling <code>$cfg[\'BZipDump\']</code> in uw phpMyAdmin configuratie bestand op <code>FALSE</code> te zetten. Als u Bz2 compressie wilt gebruiken zult u moeten upgraden naar een latere php versie. Zie php bug report %s voor meer informatie.';
$strBzip = '"ge-bzipt"';

$strCannotLogin = 'Kan niet inloggen op de MySQL server';
$strCantLoadMySQL = 'kan de MySQL extensie niet laden,<br />controleer de PHP configuratie.';
$strCantLoadRecodeIconv = 'Kan iconv of recode extenties niet laden die nodig zijn voor de Karakterset conversie, configureer php om deze extensies toe te laten of schakel Karakterset conversie uit in phpMyAdmin';
$strCantRenameIdxToPrimary = 'Kan index niet naar PRIMARY hernoemen';
$strCantUseRecodeIconv = 'Kan iconv, libiconv en recode_string functies niet gebruiken zolang de extensies geladen moeten worden. Controleer de php configuratie.';
$strCardinality = 'Kardinaliteit';
$strCarriage = 'Harde return: \\r';
$strChange = 'Veranderen';
$strChangeDisplay = 'Kies weer te geven veld';
$strChangePassword = 'Wijzig paswoord';
$strCharsetOfFile = 'Karakter set van het bestand:';
$strCheckAll = 'Selecteer alles';
$strCheckDbPriv = 'Controleer database rechten';
$strCheckTable = 'Controleer tabel';
$strChoosePage = 'Kies een pagina om aan te passen';
$strColComFeat = 'Toon kolom commentaar';
$strColumn = 'Kolom';
$strColumnNames = 'Kolom namen';
$strCommand = 'Commando';
$strComments = 'Commentaar';
$strCompleteInserts = 'Invoegen voltooid';
$strCompression = 'Compressie';
$strConfigFileError = 'phpMyAdmin kon het configuratie bestand niet lezen! <br />Dit kan gebeuren als php een parse error in dit bestand aantreft of dit bestand helemaal niet gevonden kan worden.<br />Roep het configuratie bestand direct aan met de snelkoppeling hieronder en lees de php foutmelding(en). In de meeste gevallen ontbreekt er ergens bijvoorbeeld een quote.<br /> Wanneer er een blanco pagina wordt weergegeven zijn er geen problemen.';
$strConfigureTableCoord = 'Configureer de coördinaten voor de tabel %s';
$strConfirm = 'Weet u zeker dat u dit wilt?';
$strConnections = 'Connecties';
$strCookiesRequired = 'Cookies moeten aan staan voorbij dit punt.';
$strCopyTable = 'Kopieer tabel naar (database<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s is gekopieerd naar %s.';
$strCouldNotKill = 'phpMyAdmin is er niet in geslaagd om de %s te sluiten.Waarschijnlijk is het al gesloten.';
$strCreate = 'Aanmaken';
$strCreateIndex = 'Creëer een index op kolommen&nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Creëer een nieuwe index';
$strCreateNewDatabase = 'Nieuwe database aanmaken';
$strCreateNewTable = 'Nieuwe tabel aanmaken in database %s';
$strCreatePage = 'Creëer een nieuwe pagina';
$strCreatePdfFeat = 'Aanmaken van PDF bestanden';
$strCriteria = 'Criteria';

$strData = 'Data';
$strDataDict = 'Data Woordenboek';
$strDataOnly = 'Alleen data';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Database %s is vervallen.';
$strDatabaseWildcard = 'Database (wildcards toegestaan):';
$strDatabases = 'databases';
$strDatabasesStats = 'Database statistieken';
$strDefault = 'Standaardwaarde';
$strDelete = 'Verwijderen';
$strDeleteFailed = 'Verwijderen mislukt!';
$strDeleteUserMessage = 'U heeft de gebruiker %s verwijderd.';
$strDeleted = 'De rij is verwijderd';
$strDeletedRows = 'Verwijder rijen:';
$strDescending = 'Aflopend';
$strDisabled = 'Uitgeschakeld';
$strDisplay = 'Laat zien';
$strDisplayFeat = 'Toon Opties';
$strDisplayOrder = 'Weergave volgorde:';
$strDisplayPDF = 'Geef het PDF schema weer';
$strDoAQuery = 'Voer een query op basis van een vergelijking uit (wildcard: "%")';
$strDoYouReally = 'Weet u zeker dat u dit wilt ';
$strDocu = 'Documentatie';
$strDrop = 'Verwijderen';
$strDropDB = 'Verwijder database %s';
$strDropTable = 'Verwijder tabel';
$strDumpXRows = '%s rijen aan het dumpen, start bij rij %s.';
$strDumpingData = 'Gegevens worden uitgevoerd voor tabel';
$strDynamic = 'dynamisch';

$strEdit = 'Wijzigen';
$strEditPDFPages = 'PDF Pagina\'s aanpassen';
$strEditPrivileges = 'Wijzig rechten';
$strEffective = 'Effectief';
$strEmpty = 'Legen';
$strEmptyResultSet = 'MySQL gaf een lege resultaat set terug (0 rijen).';
$strEnabled = 'Ingeschakeld';
$strEnd = 'Einde';
$strEndCut = 'Einde KNIP';
$strEndRaw = 'Einde RAW';
$strEnglishPrivileges = ' Aantekening: de namen van de MySQL rechten zijn uitgelegd in het Engels ';
$strError = 'Fout';
$strExplain = 'Verklaar SQL';
$strExport = 'Exporteer';
$strExportToXML = 'Exporteer naar XML formaat';
$strExtendedInserts = 'Uitgebreide invoegingen';
$strExtra = 'Extra';

$strFailedAttempts = 'Mislukte pogingen';
$strField = 'Veld';
$strFieldHasBeenDropped = 'Veld %s is vervallen';
$strFields = 'Velden';
$strFieldsEmpty = ' Het velden aantal is leeg! ';
$strFieldsEnclosedBy = 'Velden ingesloten door';
$strFieldsEscapedBy = 'Velden ontsnapt door';
$strFieldsTerminatedBy = 'Velden beëindigd door';
$strFixed = 'vast';
$strFlushTable = 'Schoon de tabel ("FLUSH")';
$strFormEmpty = 'Er ontbreekt een waarde in het formulier!';
$strFormat = 'Formatteren';
$strFullText = 'Volledige teksten';
$strFunction = 'Functie';

$strGenBy = 'Gegenereerd door';
$strGenTime = 'Generatie Tijd';
$strGeneralRelationFeat = 'Basis relatie opties';
$strGlobalValue = 'Globale waarde';
$strGo = 'Start';
$strGrants = 'Toekennen';
$strGzip = '"ge-gzipt"';

$strHasBeenAltered = 'is veranderd.';
$strHasBeenCreated = 'is aangemaakt.';
$strHaveToShow = 'Er moet ten minste 1 weer te geven kolom worden gekozen';
$strHome = 'Home';
$strHomepageOfficial = 'Officiële phpMyAdmin Website';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Pagina';
$strHost = 'Host';
$strHostEmpty = 'De hostnaam is leeg!';

$strId = 'ID';
$strIdxFulltext = 'Volledige tekst';
$strIfYouWish = 'Indien u slechts enkele van de tabelkolommen wilt laden, voer dan een door komma\'s gescheiden veldlijst in.';
$strIgnore = 'Negeer';
$strImportDocSQL = 'Importeer docSQL Bestanden';
$strInUse = 'in gebruik';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s is vervallen';
$strIndexName = 'Index naam&nbsp;:';
$strIndexType = 'Index type&nbsp;:';
$strIndexes = 'Indices';
$strInsecureMySQL = 'Uw configuratie bestand bevat instellingen (root zonder wachtwoord) die betrekking hebben tot de standaard MySQL account. Uw MySQL server draait met deze standaard waardes, en is open voor ongewilde toegang, het wordt dus aangeraden dit op te lossen.';
$strInsert = 'Invoegen';
$strInsertAsNewRow = 'Voeg toe als nieuwe rij';
$strInsertNewRow = 'Nieuwe rij invoegen';
$strInsertTextfiles = 'Invoegen tekstbestanden in tabel';
$strInsertedRows = 'Ingevoegde rijen:';
$strInstructions = 'Instructies';
$strInvalidName = '"%s" is een gereserveerd woord, u kunt het niet gebruiken voor een database/tabel/veld naam.';

$strKeepPass = 'Wijzig het wachtwoord niet';
$strKeyname = 'Sleutelnaam';
$strKill = 'stop proces';

$strLaTeX = 'LaTeX';
$strLength = 'Lengte';
$strLengthSet = 'Lengte/Waardes*';
$strLimitNumRows = 'records per pagina';
$strLineFeed = 'Regelopschuiving: \\n';
$strLines = 'Regels';
$strLinesTerminatedBy = 'Regels beëindigd door';
$strLinkNotFound = 'Link niet gevonden';
$strLinksTo = 'Gelinked naar';
$strLocationTextfile = 'Locatie van het tekstbestand';
$strLogPassword = 'Wachtwoord:';
$strLogUsername = 'Gebruikers naam:';
$strLogin = 'Inloggen';
$strLogout = 'Uitloggen';

$strMissingBracket = 'Er ontbreekt een bracket';
$strModifications = 'Wijzigingen opgeslagen.';
$strModify = 'Aanpassen';
$strModifyIndexTopic = 'Wijzig een index';
$strMoreStatusVars = 'Meer status variabelen';
$strMoveTable = 'Verplaats tabel naar (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s is verplaatst naar %s.';
$strMySQLCharset = 'MySQL Karakterset';
$strMySQLReloaded = 'MySQL opnieuw geladen.';
$strMySQLSaid = 'MySQL retourneerde: ';
$strMySQLServerProcess = 'MySQL %pma_s1% draait op %pma_s2% als %pma_s3%';
$strMySQLShowProcess = 'Laat processen zien';
$strMySQLShowStatus = 'MySQL runtime informatie';
$strMySQLShowVars = 'MySQL systeemvariabelen';

$strName = 'Naam';
$strNext = 'Volgende';
$strNo = 'Nee';
$strNoDatabases = 'Geen databases';
$strNoDescription = 'Geen beschrijving aanwezig';
$strNoDropDatabases = '"DROP DATABASE" opdrachten zijn niet mogelijk.';
$strNoExplain = 'Uitleg SQL overslaan';
$strNoFrames = 'phpMyAdmin is werkt gebruiksvriendelijker met een browser die <b>frames</b> aan kan.';
$strNoIndex = 'Geen index gedefinieerd!';
$strNoIndexPartsDefined = 'Geen index delen gedefinieerd!';
$strNoModification = 'Geen verandering';
$strNoPassword = 'Geen wachtwoord';
$strNoPhp = 'zonder PHP Code';
$strNoPrivileges = 'Geen rechten';
$strNoQuery = 'Geen SQL query!';
$strNoRights = 'U heeft niet genoeg rechten om hier te zijn!';
$strNoTablesFound = 'Geen tabellen gevonden in de database.';
$strNoUsersFound = 'Geen gebruiker(s) gevonden.';
$strNoValidateSQL = 'SQL validatie overslaan';
$strNone = 'Geen';
$strNotNumber = 'Dit is geen cijfer!';
$strNotOK = 'Niet Goed';
$strNotSet = '<b>%s</b> tabel niet gevonden of niet ingesteld in %s';
$strNotValidNumber = ' geen geldig rijnummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s overeenkomst(en) in de tabel<i>%s</i>';
$strNumSearchResultsTotal = '<b>Totaal:</b> <i>%s</i> overeenkomst(en)';
$strNumTables = 'Tabellen';

$strOK = 'Correct';
$strOftenQuotation = 'Meestal aanhalingstekens. OPTIONEEL betekent dat alleen char en varchar velden omsloten worden met het "omsloten met"-karakter.';
$strOperations = 'Handelingen';
$strOptimizeTable = 'Optimaliseer tabel';
$strOptionalControls = 'Optioneel. Geeft aan hoe speciale karakters geschreven of gelezen moeten worden.'; // 'Optional. Controls how to write or read special characters.';
$strOptionally = 'OPTIONEEL';
$strOptions = 'Opties';
$strOr = 'Of';
$strOverhead = 'Overhead';

$strPHP40203 = 'U gebruikt PHP 4.2.3, deze versie bevat een grote fout in de multi-byte strings (mbstring). Voor meer informatie zie PHP bug report 19404. Het wordt sterk afgeraden deze versie van PHP te gebruiken met phpMyAdmin.';
$strPHPVersion = 'PHP Versie';
$strPageNumber = 'Pagina nummer:';
$strPartialText = 'Gedeeltelijke teksten';
$strPassword = 'Wachtwoord';
$strPasswordEmpty = 'Het wachtwoord is leeg!';
$strPasswordNotSame = 'De wachtwoorden zijn niet gelijk!';
$strPdfDbSchema = 'Schema van de "%s" database - Pagina %s';
$strPdfInvalidPageNum = 'Ongedefinieerd PDF pagina nummer!';
$strPdfInvalidTblName = 'De tabel "%s" bestaat niet!';
$strPdfNoTables = 'Geen Tabellen';
$strPerHour = 'per uur';
$strPhp = 'Creëer PHP Code';
$strPmaDocumentation = 'phpMyAdmin Documentatie';
$strPmaUriError = 'De <tt>$cfg[\'PmaAbsoluteUri\']</tt> richtlijn MOET gezet zijn in het configuratie bestand!';
$strPos1 = 'Begin';
$strPrevious = 'Vorige';
$strPrimary = 'Primaire sleutel';
$strPrimaryKey = 'Primaire sleutel';
$strPrimaryKeyHasBeenDropped = 'De primaire sleutel is vervallen';
$strPrimaryKeyName = 'De naam van de primaire sleutel moet PRIMARY zijn!';
$strPrimaryKeyWarning = '("PRIMARY" <b>moet</b> de naam van en <b>alleen van</b> een primaire sleutel zijn!)';
$strPrint = 'Afdrukken';
$strPrintView = 'Printopmaak';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = 'Rechten';
$strProcesslist = 'Process lijst';
$strProperties = 'Eigenschappen';
$strPutColNames = 'Plaats veldnamen in de eerste rij';

$strQBE = 'Query opbouwen';
$strQBEDel = 'Verwijder';
$strQBEIns = 'Toevoegen';
$strQueryOnDb = 'SQL-query op database <b>%s</b>:';
$strQueryStatistics = '<b>Query statistieken</b>: Sinds het opstarten zijn er, %s queries gestuurd naar de server.';
$strQueryType = 'Query type';

$strReType = 'Type opnieuw';
$strReceived = 'Ontvangen';
$strRecords = 'Records';
$strReferentialIntegrity = 'Controleer referentiële integriteit';
$strRelationNotWorking = 'Extra opties om met tabellen te werken die gelinked zijn, zijn uitgeschakeld. Om te weten te komen waarom klik %shier%s.';
$strRelationView = 'Relatie overzicht';
$strRelationalSchema = 'Relationeel schema';
$strReloadFailed = 'Opnieuw laden van MySQL mislukt.';
$strReloadMySQL = 'MySQL opnieuw laden.';
$strRememberReload = 'Vergeet niet de server opnieuw te starten.';
$strRenameTable = 'Tabel hernoemen naar';
$strRenameTableOK = 'Tabel %s is hernoemt naar %s';
$strRepairTable = 'Repareer tabel';
$strReplace = 'Vervangen';
$strReplaceTable = 'Vervang tabelgegevens met het bestand';
$strReset = 'Opnieuw';
$strRevoke = 'Ongedaan maken';
$strRevokeGrant = 'Trek Grant recht in';
$strRevokeGrantMessage = 'U heeft het Grant recht ingetrokken voor %s';
$strRevokeMessage = 'U heeft de rechten ingetrokken voor %s';
$strRevokePriv = 'Trek rechten in';
$strRowLength = 'Lengte van de rij';
$strRowSize = ' Grootte van de rij';
$strRows = 'Rijen';
$strRowsFrom = 'rijen beginnend bij';
$strRowsModeHorizontal = 'horizontaal';
$strRowsModeOptions = 'in %s modus en herhaal kopregels na %s cellen';
$strRowsModeVertical = 'verticaal';
$strRowsStatistic = 'Rij statistiek';
$strRunQuery = 'Query uitvoeren';
$strRunSQLQuery = 'Draai SQL query/queries op database %s';
$strRunning = 'wordt uitgevoerd op %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Er is een kans dat u een fout heeft aangetroffen in de SQL parser. Let er goed op, dat de query op de correcte plaatsen quotes heeft. Een ander mogelijkheid voor deze foutmelding kan zijn dat u het ge-quote text gedeelte in bineary mode heeft. U kunt ook uw query proberen in de command line van MySQL. De MySQL server foutmelding hieronder, mocht die aanwezig zijn, kan ook helpen met het opsporen van fouten. Blijft u problemen houden of als de parser fouten geeft terwijl het goed gaat in de command line van MySQL, probeer dan de SQL query in te korten en een bug report met het stukje data te sturen van het CUT gedeelte hieronder:';
$strSQLParserUserError = 'Er schijnt een fout te zijn in uw SQL query. Mocht de MySQL server een error hebben terug gegeven, probeer dan of uw hiermee uw fout kunt oplossen.';
$strSQLQuery = 'SQL-query';
$strSQLResult = 'SQL resultaat';
$strSQPBugInvalidIdentifer = 'Ongeldige Identifer';
$strSQPBugUnclosedQuote = 'Quote niet afgesloten';
$strSQPBugUnknownPunctuation = 'Onbekende Punctuatie String';
$strSave = 'Opslaan';
$strScaleFactorSmall = 'De schaal factor is te klein om het schema op een pagina te zetten';
$strSearch = 'Zoeken';
$strSearchFormTitle = 'Zoeken in de database';
$strSearchInTables = 'In de tabel(len):';
$strSearchNeedle = 'Woord(en) of waarde(s) waarnaar gezocht moet worden (wildcard: "%"):';
$strSearchOption1 = 'ten minste een van de woorden';
$strSearchOption2 = 'alle woorden';
$strSearchOption3 = 'de exacte zin';
$strSearchOption4 = 'als een reguliere expressie';
$strSearchResultsFor = 'Zoek resultaten voor "<i>%s</i>" %s:';
$strSearchType = 'Zoek:';
$strSelect = 'Selecteren';
$strSelectADb = 'Selecteer A.U.B. een database';
$strSelectAll = 'Selecteer alles';
$strSelectFields = 'Selecteer velden (tenminste 1):';
$strSelectNumRows = 'in query';
$strSelectTables = 'Selecteer tabellen';
$strSend = 'verzenden';
$strSent = 'Verzonden';
$strServer = 'Server %s';
$strServerChoice = 'Server keuze';
$strServerStatus = 'Runtime Informatie';
$strServerStatusUptime = 'Deze MySQL server draait inmiddels %s. Hij is gestart op %s.';
$strServerTabProcesslist = 'Processen';
$strServerTabVariables = 'Variabelen';
$strServerTrafficNotes = '<b>Server verkeer</b>: Deze tabellen geven statistieken weer van het verkeer van deze MySQL server vanaf het moment dat hij is gestart';
$strServerVars = 'Server variabelen en instellingen';
$strServerVersion = 'Server versie';
$strSessionValue = 'Sessie variabelen';
$strSetEnumVal = 'Als het veldtype "enum" of "set" is, voer dan de waardes in volgens dit formaat: \'a\',\'b\',\'c\'...<br />Als u ooit een backslash moet plaatsen ("\") of een enkel aanhalingsteken ("\'") bij deze waardes, backslash het (voorbeeld \'\\\\xyz\' of \'a\\\'b\').';
$strShow = 'Toon';
$strShowAll = 'Toon alles';
$strShowColor = 'Toon kleur';
$strShowCols = 'Toon kolommen';
$strShowGrid = 'Toon grid';
$strShowPHPInfo = 'Laat informatie over PHP zien';
$strShowTableDimension = 'Geef de dimensies van de tabellen weer';
$strShowTables = 'Toon tabellen';
$strShowThisQuery = ' Laat deze query hier zien ';
$strShowingRecords = 'Toon Records';
$strSingly = '(apart)';
$strSize = 'Grootte';
$strSort = 'Sorteren';
$strSpaceUsage = 'Ruimte gebruik';
$strSplitWordsWithSpace = 'Woorden worden gesplit door een spatie karakter (" ").';
$strStatement = 'Opdrachten';
$strStatus = 'Status';
$strStrucCSV = 'CSV gegevens';
$strStrucData = 'Structuur en gegevens';
$strStrucDrop = '\'drop table\' toevoegen';
$strStrucExcelCSV = 'CSV voor MS Excel data';
$strStrucOnly = 'Alleen structuur';
$strStructPropose = 'Tabel structuur voorstellen';
$strStructure = 'Structuur';
$strSubmit = 'Verzenden';
$strSuccess = 'Uw SQL-query is succesvol uitgevoerd.';
$strSum = 'Som';

$strTable = 'Tabel';
$strTableComments = 'Tabel opmerkingen';
$strTableEmpty = 'De tabel naam is leeg!';
$strTableHasBeenDropped = 'Tabel %s is vervallen';
$strTableHasBeenEmptied = 'Tabel %s is leeg gemaakt';
$strTableHasBeenFlushed = 'Tabel %s is geschoond';
$strTableMaintenance = 'Tabel onderhoud';
$strTableOfContents = 'Inhoudsopgave';
$strTableStructure = 'Tabel structuur voor tabel';
$strTableType = 'Tabel type';
$strTables = '%s tabel(len)';
$strTextAreaLength = ' Vanwege z\'n lengte,<br /> is dit veld misschien niet te wijzigen ';
$strTheContent = 'De inhoud van uw bestand is ingevoegd.';
$strTheContents = 'De inhoud van het bestand vervangt de inhoud van de geselecteerde tabel voor rijen met een identieke primaire of unieke sleutel.';
$strTheTerminator = 'De afsluiter van de velden.';
$strThreadSuccessfullyKilled = 'Thread %s is met success afgesloten.';
$strTime = 'Tijd';
$strTotal = 'totaal';
$strTotalUC = 'Totaal';
$strTraffic = 'Verkeer';
$strType = 'Type';

$strUncheckAll = 'Deselecteer alles';
$strUnique = 'Unieke waarde';
$strUnselectAll = 'Deselecteer alles';
$strUpdatePrivMessage = 'U heeft de rechten aangepast voor %s.';
$strUpdateProfile = 'Pas profiel aan:';
$strUpdateProfileMessage = 'Het profiel is aangepast.';
$strUpdateQuery = 'Wijzig Query';
$strUsage = 'Gebruik';
$strUseBackquotes = 'Gebruik backquotes (`) bij tabellen en velden\' namen';
$strUseTables = 'Gebruik tabellen';
$strUser = 'Gebruiker';
$strUserEmpty = 'De gebruikersnaam is leeg!';
$strUserName = 'Gebruikersnaam';
$strUsers = 'Gebruikers';

$strValidateSQL = 'Valideer SQL';
$strValidatorError = 'De SQL validatie kon niet worden geinitialiseerd. Controleer of u de nodige php extensies heeft geinstalleerd zoals beschreven in de %sdocumentatie%s.';
$strValue = 'Waarde';
$strVar = 'Variabelen';
$strViewDump = 'Bekijk een dump (schema) van tabel';
$strViewDumpDB = 'Bekijk een dump (schema) van database';

$strWebServerUploadDirectory = 'web-server upload directory';
$strWebServerUploadDirectoryError = 'De directory die u heeft ingesteld om te uploaden kan niet worden bereikt.';
$strWelcome = 'Welkom op %s';
$strWithChecked = 'Met geselecteerd:';
$strWrongUser = 'Verkeerde gebruikersnaam/wachtwoord. Toegang geweigerd.';

$strYes = 'Ja';

$strZip = '"Gezipt"';
// To translate

$strAdministration = 'Administration'; //to translate

$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate

$strLandscape = 'Landscape';  //to translate

$strPortrait = 'Portrait';  //to translate
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
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate

$strResourceLimits = 'Resource limits'; //to translate

$strShowDatadictAs = 'Data Dictionary Format';  //to translate

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
