<?php

// _LANGCODE: nb
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Oppgradering</h2>

<p>
<em>Oppgrader</em> vil undersøke denne XOOPS-installasjonen og bruke eventuelle nødvendige oppdateringer for å gjøre den kompatibel 
med den nye XOOPS-koden. Patcher kan inkludere databaseendringer, legge til standardinnstillinger for nye
konfigurasjonselementer, fil- og dataoppdateringer og mer.
<p>
Etter hver oppdatering vil oppgradereren rapportere statusen og vente på at innspillet ditt fortsetter. På
slutten av oppgraderingen, vil kontrollen gå til systemmodulens oppdateringsfunksjon.

<div class="alert alert-warning">
Når oppgraderingen er fullført, ikke glem å:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> slett oppgraderingsmappen</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> oppdater eventuelle moduler som er endret</li>
</div>

EOT,
);
