<?php

// _LANGCODE: nb
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 Migration');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Skannerresultater');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Kjør skanning');
define('_XOOPS_SMARTY4_SCANNER_END', 'Avslutt skanner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regel');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Kamp');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Fil');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Fix Count');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Manuell gjennomgang kreves');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Kan korrigeres automatisk: for hver elementvariabel vil få nytt navn ved å legge til "_item" (f.eks. "foo" blir "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Ikke skrivbar');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Alternativer for ny skanning');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Klikk på "Ja"-boksen nedenfor og klikk deretter på Kjør skanning-knappen for å prøve å automatisk fikse eventuelle problemer som ble funnet.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Merk fullført');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Malkatalog (valgfritt)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Malutvidelse (valgfritt)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introduserer en betydelig endring: Smarty 4</h3>

<p>Dessverre kan denne endringen potensielt forstyrre noen eldre temaer. Derfor, før du fortsetter med oppgraderingen, sørg for at du følger disse trinnene:

<li>Kjør preflight.php for å se etter utdaterte temaer eller modulmaler.</li>
<li>Hvis noen problemer blir identifisert, se dette dokumentet for å forstå de nødvendige modifikasjonene før du fortsetter med oppgraderingen.</li>
<li>Etter å ha gjort de nødvendige endringene, kjør preflight.php igjen.</li>
<li>Hvis det ikke er flere problemer, kan du starte oppgraderingsprosessen.</li>
</p>
EOT,
);
