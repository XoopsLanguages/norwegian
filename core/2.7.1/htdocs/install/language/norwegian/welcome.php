<?php
//
// _LANGCODE: nb
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> er en åpen kildekode
    Objektorientert nettpubliseringssystem skrevet i PHP. Det er et ideelt verktøy for
    utvikling av små til store dynamiske fellesskapsnettsteder, interne bedriftsportaler, bedriftsportaler, weblogger og mye mer.
</p>
<p>
    XOOPS er utgitt i henhold til vilkårene i
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
    versjon 2 eller nyere, og er gratis å bruke og endre.
    Det er gratis å redistribuere så lenge du overholder distribusjonsvilkårene i GPL.
</p>
<h3>Krav</h3>
<ul>
    <li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, osv.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 eller høyere, 8.4+ anbefales</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 eller høyere, 8.4.5+ anbefales </li>
</ul>
<h3>Før du install</h3>
<ol>
    <li>Sett opp WWW server, PHP og databaseserver på riktig måte.</li>
    <li>Forbered en database for XOOPS-siden din.</li>
    <li>Klargjør brukerkonto og gi brukeren tilgang til databasen.</li>
    <li>Gjør disse katalogene og filene skrivbare: %s</li>
    <li>Av sikkerhetshensyn anbefales det på det sterkeste å flytte de to katalogene nedenfor ut av <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">dokumentrot</a> og endre mappenavnene: %s</li>
    <li>Opprett (hvis ikke allerede til stede) og gjør disse katalogene skrivbare: %s</li>
    <li>Slå på informasjonskapsel og JavaScript av nettleseren din.</li>
</ol>
<h3>Spesielle merknader</h3>
<ol>
    <li>Noen spesifikke systemprogramvarekombinasjoner kan kreve noen ekstra konfigurasjoner for å fungere
    med XOOPS. Hvis noen av disse emnene gjelder for miljøet ditt, vennligst se hele
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    installasjonsmanual</a> for mer informasjon.<br><br>

    <li><strong>SELinux</strong> aktiverte systemer (som f.eks <strong>CentOS</strong>  og <strong>RHEL</strong>) kan kreve endringer i sikkerhetskonteksten
    for XOOPS kataloger i tillegg til de vanlige filtillatelsene for å gjøre kataloger skrivbare.
    Rådfør deg med systemdokumentasjonen og/eller systemadministratoren.
</ol>
';

return $content;

