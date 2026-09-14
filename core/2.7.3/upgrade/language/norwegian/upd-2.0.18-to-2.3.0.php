<?php
// _LANGCODE: nb
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'XOOPS fysiske stier');
define('LEGEND_DATABASE', 'Database tegnsett');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS bibliotek');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS datafilkatalog');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Databasetegnsett og sortering');
define('DB_COLLATION_HELP', 'Fra 4.12 støtter MySQL tilpasset tegnsett og sortering. Men det er mer komplekst enn forventet, så IKKE gjør noen endringer med mindre du er sikker på valget ditt.');
define('DB_COLLATION_NOCHANGE', 'Ikke endre');

define('XOOPS_PATH_FOUND', 'Sti funnet.');
define('ERR_COULD_NOT_ACCESS', 'Kunne ikke få adgang til den angitte mappe. Kontroller, at den finnes og kan leses av serveren.');
define('CHECKING_PERMISSIONS', 'Sjekker fil og mapperettigheter..');
define('ERR_NEED_WRITE_ACCESS', 'Serveren må gis skrivetilgang til følgende filer og mappe<br>(dvs. <em>chmod 777 directory_name</em> på en UNIX/LINUX-server)');
define('IS_NOT_WRITABLE', '%s er IKKE skrivbar..');
define('IS_WRITABLE', '%s er skrivbar.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Feil ved skriving av innhold til mainfile.php, skriv innholdet inn i mainfile.php manuelt.');
