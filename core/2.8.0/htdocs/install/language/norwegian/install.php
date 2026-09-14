<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: nb
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Vis/skjul hjelpetekst');
// License
//define('LICENSE_NOT_WRITEABLE', 'Lisensfilen "%s" er IKKE skrivbar!');
//define('LICENSE_IS_WRITEABLE', '%s Lisensen er skrivbar.');
// Configuration check page
define('SERVER_API', 'Server-API');
define('PHP_EXTENSION', '%s utvidelser');
define('CHAR_ENCODING', 'Tegnsett');
define('XML_PARSING', 'XML-parsing');
define('REQUIREMENTS', 'Krav');
define('_PHP_VERSION', 'PHP versjon');
define('RECOMMENDED_SETTINGS', 'Anbefalte innstillinger');
define('RECOMMENDED_EXTENSIONS', 'Anbefalte utvidelser');
define('SETTING_NAME', 'Innstilling navn');
define('RECOMMENDED', 'Anbefalt');
define('CURRENT', 'Nåværende');
define('RECOMMENDED_EXTENSIONS_MSG', 'Disse utvidelsene er ikke nødvendige for normal bruk, men kan være nødvendige for å utforske
 noen spesifikke funksjoner (som flerspråklig eller RSS-støtte). Derfor anbefales det å ha dem installert.');
define('NONE', 'Ingen');
define('SUCCESS', 'Suksess');
define('WARNING', 'Advarsel');
define('FAILED', 'Feilet');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS installasjonsveiviser');
define('LANGUAGE_SELECTION', 'Språkvalg');
define('LANGUAGE_SELECTION_TITLE', 'Velg språket ditt');        // L128
define('INTRODUCTION', 'Innledning');
define('INTRODUCTION_TITLE', 'Velkommen til XOOPS installasjonsveileder');        // L0
define('CONFIGURATION_CHECK', 'Konfigurasjonssjekk');
define('CONFIGURATION_CHECK_TITLE', 'Kontrollerer din server konfigurasjon');
define('PATHS_SETTINGS', 'Mappe innstillinger');
define('PATHS_SETTINGS_TITLE', 'Mappe innstillinger');
define('DATABASE_CONNECTION', 'Database forbindelse');
define('DATABASE_CONNECTION_TITLE', 'Database forbindelse');
define('DATABASE_CONFIG', 'Database konfigurasjon');
define('DATABASE_CONFIG_TITLE', 'Database konfigurasjon');
define('CONFIG_SAVE', 'Lagre konfigurasjon');
define('CONFIG_SAVE_TITLE', 'Lagrer din system konfigurasjon');
define('TABLES_CREATION', 'Tabell opprettelse');
define('TABLES_CREATION_TITLE', 'Database tabell opprettelse');
define('INITIAL_SETTINGS', 'Første innstillinger');
define('INITIAL_SETTINGS_TITLE', 'Inntast dine første innstillinger');
define('DATA_INSERTION', 'Data innsettelse');
define('DATA_INSERTION_TITLE', 'Lagrer dine innstillinger i databasen');
define('WELCOME', 'Velkommen');
define('WELCOME_TITLE', 'Velkommen til din XOOPS hjemmeside');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS Fysiske stier');
define('XOOPS_URLS', 'Websted');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS fysiske sti');
define('XOOPS_ROOT_PATH_HELP', 'Fysiske sti til XOOPS, uten skråstrek');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS bibliotek');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS datafilkatalog');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Nettstedets plassering (URL)'); // L56
define('XOOPS_URL_HELP', 'Hoved-webadresse, som vil bli brukt til å få adgang til din XOOPS installasjon'); // L58
define('LEGEND_CONNECTION', 'Server-forbindelse');
define('LEGEND_DATABASE', 'Database'); // L51
define('DB_HOST_LABEL', 'Database hostname');    // L27
define('DB_HOST_HELP', 'Hostname på database serveren. Hvis du er usikker vil, <em>localhost</em> virke i de fleste tilfeller'); // L67
define('DB_USER_LABEL', 'Database  brukernavn');    // L28
define('DB_USER_HELP', 'Din bruger konto\'s navn på database serveren'); // L65
define('DB_PASS_LABEL', 'Passord');    // L52
define('DB_PASS_HELP', 'Passord til din konto på database serveren'); // L68
define('DB_NAME_LABEL', 'Database navn');    // L29
define('DB_NAME_HELP', 'Navnet på den database som ligger på database serveren. Installasjonsguiden vil prøve å opprette en database hvis den ikke eksisterer'); // L64
define('DB_CHARSET_LABEL', 'Database tegnsett');
define('DB_CHARSET_HELP', 'MySQL omfatter tegnsett støtte, som gir deg mulighet til å lagre data ved hjelp af en rekke forskellige tegnsett og foreta sammenligninger i henhold til en rekke sammenstillinger.');
define('DB_COLLATION_LABEL', 'Database sammenstilling');
define('DB_COLLATION_HELP', 'En samling er et sett regler for å sammenligne tegn i et tegnsett.');
define('DB_PREFIX_LABEL', 'Table prefiks');    // L30
define('DB_PREFIX_HELP', 'Prefiksen vil bli tilknyttet alle nye tabeller for å unngå navnekonflikt i databasen. Hvis du er usikker, så bruk det som XOOPS forslår.'); // L63
define('DB_PCONNECT_LABEL', 'Bruk persistent (vedvarende) forbindelse?');    // L54
define('DB_PCONNECT_HELP', "Standard er 'Nei'. La det stå tomt hvis du er usikker"); // L69
define('DB_DATABASE_LABEL', 'Database');
define('LEGEND_ADMIN_ACCOUNT', 'Administrator konto');
define('ADMIN_LOGIN_LABEL', 'Administratorinnlogging'); // L37
define('ADMIN_EMAIL_LABEL', 'Admin epost'); // L38
define('ADMIN_PASS_LABEL', 'Admin passord'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Bekreft passord'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Forrige'); // L42
define('BUTTON_NEXT', 'Fortsett'); // L47
// Messages
define('XOOPS_FOUND', '%s funnet');
define('CHECKING_PERMISSIONS', 'Sjekker fil og mapperettigheter..'); // L82
define('IS_NOT_WRITABLE', '%s er IKKE skrivbar..'); // L83
define('IS_WRITABLE', '%s er skrivbar.'); // L84
define('XOOPS_PATH_FOUND', 'Sti funnet.');
//define('READY_CREATE_TABLES', 'Ingen XOOPS-tabeller ble oppdaget.<br>Installasjonsprogrammet er nå klart til å lage XOOPS-systemtabellene.');
define('XOOPS_TABLES_FOUND', 'Systemtabellene XOOPS finnes allerede i databasen din.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS systemtabeller er opprettet.');
//define('READY_INSERT_DATA', 'Installasjonsprogrammet er nå klar til å innsette første data i din database.');
//define('READY_SAVE_MAINFILE', 'Installasjonsprogrammet er nå klart til å lagre de spesifiserte innstillingene til <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Innstillinger lagret');
define('SAVED_MAINFILE_MSG', 'Installasjonsprogrammet har lagret de spesifiserte innstillingene til <em>mainfile.php</em> og <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS data funnet i databasen.');
define('DATA_INSERTED', 'Innledende data har blitt satt inn i databasen.');
// %s is database name
define('DATABASE_CREATED', 'Databasen %s opprettet!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Kunne ikke opprette tabell %s.'); // L118
define('TABLE_CREATED', 'Tabeller %s opprettet.'); // L45
define('ROWS_INSERTED', '%d data satt inn i tabell %s.'); // L119
define('ROWS_FAILED', 'Kunne ikke innsette %d data i %s.'); // L120
define('TABLE_ALTERED', 'Tabeller %s er oppdateret.'); // L133
define('TABLE_NOT_ALTERED', 'Kunne ikke oppdatere tabell %s.'); // L134
define('TABLE_DROPPED', 'Tabell %s er droppet.'); // L163
define('TABLE_NOT_DROPPED', 'Kunne ikke slette tabell %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Kunne ikke få adgang til den angitte mappe. Kontroller, at den finnes og kan leses av serveren.');
define('ERR_NO_XOOPS_FOUND', 'Ingen XOOPS installasjon kunne finnes i angitte mappe.');
define('ERR_INVALID_EMAIL', 'Ugyldig epost'); // L73
define('ERR_REQUIRED', 'Gå tilbake og inntast all påkrevd informasjon.'); // L41
define('ERR_PASSWORD_MATCH', 'De to passordene er ikke like');
define('ERR_NEED_WRITE_ACCESS', 'Serveren må gis skrivetilgang til følgende filer og mapper<br>(dvs. <em>chmod 775 directory_name</em> på en UNIX/LINUX-server)<br>Hvis de ikke er tilgjengelige eller ikke opprettet riktig, vennligst opprett manuelt og angi riktige tillatelser.');
define('ERR_NO_DATABASE', 'Kunne ikke opprette databasen. Kontakt administratoren av serveren for detaljer.'); // L31
define('ERR_NO_DBCONNECTION', 'Kunne ikke forbinde til database-serveren.'); // L106
define('ERR_WRITING_CONSTANT', 'Kunne ikke skrive verdien %s.'); // L122
define('ERR_COPY_MAINFILE', 'Kunne ikke kopiere distribusjonsfilen til %s');
define('ERR_WRITE_MAINFILE', 'Kunne ikke skrive inn i %s. Kontroller filtillatelsen og prøv igjen.');
define('ERR_READ_MAINFILE', 'Kunne ikke åpne %s for lesing');
define('ERR_INVALID_DBCHARSET', "Tegnsettet '%s' er ikke understøttet.");
define('ERR_INVALID_DBCOLLATION', "Collation '%s' er ikke understøttet.");
define('ERR_CHARSET_NOT_SET', 'Standard tegnsett ikke er innstilt til XOOPS database.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Støtte');
define('LOGIN', 'Autentisering');
define('LOGIN_TITLE', 'Autentisering');
define('USER_LOGIN', 'Administratorinnlogging');
define('USERNAME', 'Brukernavn:');
define('PASSWORD', 'Passord :');
define('ICONV_CONVERSION', 'Tegnsettkonvertering');
define('ZLIB_COMPRESSION', 'Zlib-komprimering');
define('IMAGE_FUNCTIONS', 'Bildefunksjoner');
define('IMAGE_METAS', 'Bildemetadata (exif)');
define('FILTER_FUNCTIONS', 'Filterfunksjoner');
define('ADMIN_EXIST', 'Administratorkontoen eksisterer allerede.');
define('CONFIG_SITE', 'Nettstedskonfigurasjon');
define('CONFIG_SITE_TITLE', 'Nettstedskonfigurasjon');
define('MODULES', 'Modulinstallasjon');
define('MODULES_TITLE', 'Modulinstallasjon');
define('THEME', 'Velg tema');
define('THEME_TITLE', 'Velg standardtema');
define('INSTALLED_MODULES', 'Følgende moduler har blitt installert.');
define('NO_MODULES_FOUND', 'Ingen moduler funnet.');
define('NO_INSTALLED_MODULES', 'Ingen modul installert.');
define('THEME_NO_SCREENSHOT', 'Ingen skjermbilde funnet');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Passordstyrke');
define('PASSWORD_DESC', 'Passord er ikke angitt');
define('PASSWORD_GENERATOR', 'Passordgenerator');
define('PASSWORD_GENERATE', 'Generer');
define('PASSWORD_COPY', 'Kopier');
define('PASSWORD_VERY_WEAK', 'Svært svak');
define('PASSWORD_WEAK', 'Svak');
define('PASSWORD_BETTER', 'Bedre');
define('PASSWORD_MEDIUM', 'Middels');
define('PASSWORD_STRONG', 'Sterk');
define('PASSWORD_STRONGEST', 'Sterkest');
//2.5.7
define('WRITTEN_LICENSE', 'Skrev XOOPS %s Lisensnøkkel: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Prøv igjen');
define('CHMOD_CHGRP_IGNORE', 'Bruk uansett');
define('CHMOD_CHGRP_ERROR', 'Installatøren kan kanskje ikke skrive konfigurasjonsfilen %1$s.<p>PHP skriver filer under bruker %2$s og gruppe %3$s.<p>Mappen %4$s/ har bruker %5$s og gruppe %6$s');
//2.5.9
define('CURL_HTTP', 'Klient URL bibliotek (cURL)');
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Cookie-domene for nettstedet');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domene for å sette informasjonskapsler. Kan være tom, hele verten fra URL (www.example.com), eller det registrerte domenet uten underdomener (example.com) for å dele på tvers av underdomener (www.example.com og blog.example.com.)');
define('INTL_SUPPORT', 'Internasjonaliseringsfunksjoner');
define('XOOPS_SOURCE_CODE', 'XOOPS på GitHub');
define('XOOPS_INSTALLING', 'Installerer');
define('XOOPS_ERROR_ENCOUNTERED', 'Feil');
define('XOOPS_ERROR_SEE_BELOW', 'Se nedenfor for meldinger.');
define('MODULES_AVAILABLE', 'Tilgjengelige moduler');
define('INSTALL_THIS_MODULE', 'Legg til %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Kunne ikke kopiere konfigurasjonsfilen %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Nettsted');
define('_WEBSITE_SLOGAN', 'Bare bruk det!');
define('_WEBSITE_META_KEYWORDS', 'xoops, nettapplikasjonsrammeverk, cms, innholdsstyringssystem');
define('_WEBSITE_FOOTER', "Drevet av XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>XOOPS-prosjektet</a>");
define('_WEBSITE_COPYRIGHT', 'Copyright © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS er et dynamisk objektorientert basert åpen kildekodeportalskript skrevet i PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'OOPS');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
