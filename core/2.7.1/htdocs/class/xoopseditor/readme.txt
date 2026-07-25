xoopseditor tilbyr en samling av redaktører for XOOPS

brukerveiledning:

1 sjekk filene xoops_version.php under /xoopseditor/ for å forsikre deg om at de er nyere enn dine nåværende

2 last opp /xoopseditor/ til /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltekstområde
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/klasse/xoopseditor/tekstområde
  XOOPS/class/xoopseditor/tinymce

3 konfigurere preferanser der det er aktuelt
3.1 ./dhtmlext(alle redaktører)/language/: lag din lokale språkfil basert på english.php
3.3 ./dhtmlext(alle redaktører)/editor_registry.php: angi konfigurasjoner for editoren: rekkefølge - vis rekkefølge i tilfelle redigeringsvalg brukes, 0 for deaktivert; nohtml - fungerer for ikke-html-syntaks
3.3 ./FCKeditor/module/: kopier filene til modulmappene i tilfelle modulspesifikke opplastingstillatelser, lagrings- og redigeringsalternativer kreves
3.3.1 ./FCKeditor/module/fckeditor.config.js: for redigeringsalternativer trenger du vanligvis ikke å endre det
3.3.2 ./FCKeditor/module/fckeditor.connector.php: for å spesifisere mappen for fillesing (og opplasting av lagring) => XOOPS/uploads/XOOPS_FCK_FOLDER/, mappen må opprettes manuelt
3.3.3 ./FCKeditor/module/fckeditor.upload.php: spesifiser opplastingstillatelse og opplastingslagring
3.4 XOOPS/uploads/fckeditor/: for å opprette mappen hvis FCKeditor er aktivert, brukes for opplastinger der opplastingsmappen ikke er spesifisert
3.5 ./tinymce/tinymce/jscripts/: last ned dine lokale språkfiler fra http://tinymce.moxiecode.com/language.php

4 sjekk filnavn: for filnavn som skiller mellom store og små bokstaver, sørg for at du har filnavnene bokstavelig talt korrekte, dvs. "FCKeditor" er ikke identisk med "fckeditor"

5 sjekk /xoopseditor/sampleform.inc.php for utviklingsveiledning
