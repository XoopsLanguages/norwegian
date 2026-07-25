<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: no

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Feilrapportering og ytelsesanalyse med PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Vis DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Aktiver Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Aktiver fane for inkluderte filer');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Vis alle PHP-filer lastet under forespørselen');
define('_MI_DEBUGBAR_SLOWQUERY', 'Terskel for treg spørring (sekunder)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Spørringer tregere enn dette fremheves i rødt (f.eks. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Spørringslogging');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Alle spørringer eller bare trege og feil');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Alle spørringer');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Bare trege og feil');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Aktiver Ray-integrasjon');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Send feilsøkingsdata til Ray-appen');

define('_MI_DEBUGBAR_ADMENU1', 'Hjem');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Om');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Tilbake til administrasjon av ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Oversikt');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Ansvarsfraskrivelse');
\define('_MI_DEBUGBAR_LICENSE', 'Lisens');
\define('_MI_DEBUGBAR_SUPPORT', 'Støtte');
