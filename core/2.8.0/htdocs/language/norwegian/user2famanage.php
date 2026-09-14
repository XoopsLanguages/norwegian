<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Topartsautentisering');
define('_US_2FAM_PASSWORD', 'Ditt nåværende passord');
define('_US_2FAM_ENABLE', 'Konfigurer en autentiseringsapp');
define('_US_2FAM_CONFIRM', 'Bekreft autentiseringsapp');
define('_US_2FAM_CHOOSE', 'Velg hvordan du vil motta det andre trinnet: en autentiseringsapp eller en kode på e-post.');
define('_US_2FAM_ENABLE_EMAIL', 'Bruk e-postkoder');
define('_US_2FAM_EMAIL_HELP', 'E-postkoder: en sekssifret kode sendes til %s hver gang du logger inn. Mindre sikkert enn en autentiseringsapp, siden alle som kan lese e-posten din, kan komme gjennom dette trinnet.');
define('_US_2FAM_EMAIL_STEP', 'Vi har sendt en sekssifret kode til %s. Skriv den inn nedenfor for å bekrefte. Den er gyldig i ti minutter.');
define('_US_2FAM_CONFIRM_EMAIL', 'Bekreft e-postkoder');
define('_US_2FAM_CODE_HELP_EMAIL', 'Den sekssifrede koden fra e-posten vi nettopp sendte deg.');
define('_US_2FAM_ENABLED_EMAIL', 'E-postkoder er registrert. For å gjøre en endring, skriv inn nåværende passord og koden vi sender på e-post, eller en gjenopprettingskode. Bruk knappen nedenfor for å be om en kode.');
define('_US_2FAM_SEND', 'Send meg en kode');
define('_US_2FAM_MANUAL', 'Manuell oppsettsnøkkel');
define('_US_2FAM_SCAN', 'QR-kode for autentiseringsappen din');
define('_US_2FAM_STEP_APP', 'Du trenger en autentiseringsapp: enhver app eller passordbehandler som genererer tidsbaserte engangskoder (TOTP), fungerer, på telefonen eller datamaskinen din. Hvis du ikke allerede har en, installer først en du foretrekker (f.eks. Google Authenticator, Microsoft Authenticator, Aegis eller FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Legg til en konto i appen: skann denne QR-koden, eller velg manuell inntasting og skriv inn oppsettsnøkkelen som vises under den.');
define('_US_2FAM_STEP_CODE', 'Appen viser nå en sekssifret kode som endres hvert 30. sekund. Skriv inn koden som vises akkurat nå, i feltet nedenfor, og bekreft.');
define('_US_2FAM_CODE_HELP', 'Den sekssifrede koden autentiseringsappen din viser akkurat nå.');
define('_US_2FAM_HTTP', 'Denne tilkoblingen bruker vanlig HTTP. Passordet, økten, oppsettsnøkkelen og gjenopprettingskodene dine kan bli avlyttet. Bruk HTTPS når det er mulig.');
define('_US_2FAM_CODES', 'Lagre disse gjenopprettingskodene nå');
define('_US_2FAM_CODES_HELP', 'Hver kode fungerer én gang. Disse kodene vises ikke igjen. Oppbevar dem trygt, atskilt fra denne kontoen.');
define('_US_2FAM_DISABLE', 'Deaktiver topartsautentisering');
define('_US_2FAM_REGENERATE', 'Erstatt gjenopprettingskoder');
define('_US_2FAM_ENABLED', 'En autentiseringsapp er registrert. Skriv inn nåværende passord og en autentiserings- eller gjenopprettingskode for å gjøre en endring.');
define('_US_2FAM_DISABLED', 'Topartsautentisering er deaktivert.');
define('_US_2FAM_PAUSED', 'Nettstedet har satt topartsutfordringer på pause. Faktoren din beholdes, og «husk meg» forblir utilgjengelig for registrerte kontoer.');
define('_US_2FAM_UNAVAILABLE', 'Oppsett eller administrasjon av topartsautentisering er ikke tilgjengelig. Kontakt nettstedets administrator.');
define('_US_2FAM_STARTAGAIN', 'Oppsettet er utløpt, eller kontoen er endret. Skriv inn passordet ditt for å starte oppsettet på nytt.');
define('_US_2FAM_BADPASSWORD', 'Nåværende passord ble ikke godtatt.');
define('_US_2FAM_RESET', 'Tilbakestill denne brukerens topartsautentisering');
define('_US_2FAM_STATUS_NONE', 'Ikke registrert');
define('_US_2FAM_STATUS_TOTP', 'Autentiseringsapp registrert');
define('_US_2FAM_STATUS_EMAIL', 'E-postkoder registrert');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Status ikke tilgjengelig');
define('_US_2FAM_RESET_HELP', 'Dette deaktiverer brukerens andre faktor, uansett hvilken metode de registrerte, og tilbakekaller gjenopprettingskodene og «husk meg»-informasjonskapslene deres. Eksisterende innloggede økter forblir aktive. Skriv inn ditt eget administratorpassord for å bekrefte.');
define('_US_2FAM_RESET_DONE', 'Brukerens topartsautentisering er tilbakestilt.');
define('_US_2FAM_BACK', 'Tilbake til konto');
define('_US_2FAM_DONE', 'Topartsautentisering er aktivert.');
define('_US_2FAM_REPLACED', 'Tidligere gjenopprettingskoder er tilbakekalt.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: topartsautentisering endret');
define('_US_2FAM_NOTICE_BODY', 'Topartsautentiseringen eller gjenopprettingskodene for kontoen din på %s ble endret fra %s. Hvis dette ikke var deg, kontakt nettstedets administrator.');
define('_US_2FAM_RESET_SUBJECT', '%s: en administrator tilbakestilte topartsautentiseringen din');
define('_US_2FAM_RESET_BODY', 'En administrator deaktiverte den andre faktoren din og tilbakekalte gjenopprettingskodene på %s fra %s. Eksisterende innloggede økter forblir aktive. Logg inn og konfigurer topartsautentisering på nytt. Kontakt nettstedets administrator hvis dette var uventet.');
