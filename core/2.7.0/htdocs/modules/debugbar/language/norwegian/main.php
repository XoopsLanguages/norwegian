<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: no

define('_MD_DEBUGBAR_DEBUG', 'Feilsøking');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Inkluderte filer');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP-versjon');
define('_MD_DEBUGBAR_NONE', 'Ingen');
define('_MD_DEBUGBAR_ERRORS', 'Feil');
define('_MD_DEBUGBAR_DEPRECATED', 'Foreldet');
define('_MD_DEBUGBAR_QUERIES', 'Spørringer');
define('_MD_DEBUGBAR_BLOCKS', 'Blokker');
define('_MD_DEBUGBAR_EXTRA', 'Ekstra');
define('_MD_DEBUGBAR_TIMERS', 'Tidtakere');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s brukte %s sekunder på å laste.');
define('_MD_DEBUGBAR_TOTAL', 'Totalt');
define('_MD_DEBUGBAR_NOT_CACHED', 'Ikke bufret');
define('_MD_DEBUGBAR_CACHED', 'Bufret (regenereres hvert %s sekund)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(tom streng)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool SANN');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSK');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Databasespørringer');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Minnebruk');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d spørringer');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplikater)');
define('_MD_DEBUGBAR_BYTES', '%s byte');
define('_MD_DEBUGBAR_DB_VERSION', '%s versjon');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Feilnummer: %s Feilmelding: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Feil #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Unntak');
define('_MD_DEBUGBAR_RAY_QUERY', 'Spørring #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'SAKTE');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blokkér (bufrede %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blokkér (ikke bufret)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Dump');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Malkontekst');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(ingen malvariabler)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Katalog "modules/debugbar/%s" ble ikke opprettet');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Kunne ikke opprette katalogen "%s" under aktivakopiering');
