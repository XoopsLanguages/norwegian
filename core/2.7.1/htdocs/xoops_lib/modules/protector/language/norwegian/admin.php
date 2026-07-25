<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Tillatelser');
define('_MD_A_MYMENU_MYPREFERENCES','Innstillinger');
// index.php
define('_AM_TH_DATETIME', 'Tid');
define('_AM_TH_USER', 'Bruker');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'type');
define('_AM_TH_DESCRIPTION', 'Beskrivelse');
define('_AM_TH_BADIPS','Dårlige IP-er<br><br><span style="font-weight:normal;">Skriv hver IP en linje<br>blank betyr at alle IP-er er tillatt</span>');
define('_AM_TH_GROUP1IPS','Tillatte IP-er for gruppe=1<br><br><span style="font-weight:normal;">Skriv hver IP en linje.<br>192.168. betyr 192.168.*<br>blank betyr at alle IP-er er tillatt</span>');
define('_AM_LABEL_COMPACTLOG', 'Kompakt logg');
define('_AM_BUTTON_COMPACTLOG', 'Gjør den kompakt!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Duplikerede (IP-adresser, type) vil bli fjernet');
define('_AM_LABEL_REMOVEALL', 'Fjern alle poster');
define('_AM_BUTTON_REMOVEALL', 'Fjern alle!');
define('_AM_JS_REMOVEALLCONFIRM', 'Alle loggfiler fjernes helt. Er det virkelig OK?');
define('_AM_LABEL_REMOVE', 'Fjern alle markerte records:');
define('_AM_BUTTON_REMOVE', 'Fjern!');
define('_AM_JS_REMOVECONFIRM', 'OK at fjerne?');
define('_AM_MSG_IPFILESUPDATED', 'Filer til IP-adresser er blitt oppdatert');
define('_AM_MSG_BADIPSCANTOPEN', 'Filen for dårlig IP kan ikke åpnes');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Den fil som inneholder tillatte IP-adresser for gruppe=1 kan ikke åpnes');
define('_AM_MSG_REMOVED', 'Records er fjernet');
define('_AM_MSG_DELFAILED', 'Kunne ikke slette poster');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Gjør configs-mappen skrivbar: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Prefiks vedlikehold');
define('_AM_MSG_DBUPDATED', 'Databasen oppdatert uten feil!');
define('_AM_CONFIRM_DELETE', 'Alle data vil bli slettet. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Hvis du vil endre prefiks,<br> rediger %s/data/secure.php manuelt.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Ikke sikker');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Hvis du kan se et bilde -NG- eller koblingen returnerer normal side, er ikke XOOPS_TRUST_PATH plassert riktig. Det beste stedet for XOOPS_TRUST_PATH er utenfor DocumentRoot. Hvis du ikke kan gjøre det, må du sette .htaccess (NEKT FRA ALLE) like under XOOPS_TRUST_PATH som den nest beste måten.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Sjekk at PHP filer inne i TRUST_PATH er satt til skrivebeskyttet (det må være 404,403 eller 500 feil)');
define('_AM_ADV_REGISTERGLOBALS',"Hvis 'PÅ', inviterer denne innstillingen til en rekke injeksjonsangrep. Hvis du kan, sett 'register_globals av' i php.ini, eller hvis det ikke er mulig, opprett eller rediger .htaccess i XOOPS-katalogen din:");
define('_AM_ADV_ALLOWURLFOPEN',"Hvis 'PÅ', tillater denne innstillingen angripere å kjøre vilkårlige skript på eksterne servere.<br>Bare administrator kan endre dette alternativet.<br>Hvis du er administrator, rediger php.ini eller httpd.conf.<br><b>Eksempel på httpd.conf:<br>&nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; av</b><br>Ellers, kreve det til administratorene dine.");
define('_AM_ADV_USETRANSSID',"Hvis 'PÅ', vil økt-ID-en din vises i ankertagger osv.<br>For å forhindre øktkapring, legg til en linje i .htaccess i XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Denne innstillingen inviterer til 'SQL-injeksjoner'.<br>Ikke glem å slå PÅ 'Force sanitizing *' i denne modulens preferanser.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Prefiks vedlikehold');
define('_AM_ADV_MAINUNPATCHED', 'Du skal redigerere din mainfile, som beskrevet i README. Hvis du er i tvil, så søk hjelp på www.xoopsnordic.org');
define('_AM_ADV_DBFACTORYPATCHED', 'Databasefabrikken din er klar for DBLayer Trapping anti-SQL-injeksjon');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Databasefabrikken din er ikke klar for DBLayer Trapping anti-SQL-injeksjon. Noen patcher kreves.');
define('_AM_ADV_SUBTITLECHECK', 'Sjekk om Protector virker korrekt');
define('_AM_ADV_CHECKCONTAMI', 'Kontaminering');
define('_AM_ADV_CHECKISOCOM', 'Isolerte kommentarer');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'og legg inn linjen nedenfor:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefiks');
define('_AM_PROTECTOR_TABLES', 'Tabeller');
define('_AM_PROTECTOR_UPDATED', 'Oppdatert');
define('_AM_PROTECTOR_COPY', 'Kopier');
define('_AM_PROTECTOR_ACTIONS', 'Handlinger');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Forby IP-er på sjekkede poster:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Forbud!');
define('_AM_JS_BANCONFIRM', 'IP Forbud OK?');
define('_AM_MSG_BANNEDIP', 'IP-er er utestengt');
define('_AM_ADMINSTATS_TITLE', 'Protector log-sammendrag');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Forrige måned');
define('_AM_ADMINSTATS_LAST_WEEK', 'Forrige uke');
define('_AM_ADMINSTATS_LAST_DAY', 'Siste dag');
define('_AM_ADMINSTATS_LAST_HOUR', 'Siste time');

//2.7.1 backfilled translations
