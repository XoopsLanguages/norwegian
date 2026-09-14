<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Andre trinn');
define('_US_2FA_PROMPT', 'Skriv inn koden fra autentiseringsappen din');
define('_US_2FA_CODE', 'Autentiseringskode');
define('_US_2FA_PROMPT_EMAIL', 'Vi har sendt en sekssifret kode til %s. Skriv den inn nedenfor.');
define('_US_2FA_CODE_EMAIL', 'Kode fra e-posten din');
define('_US_2FA_SEND', 'Send en ny kode');
define('_US_2FA_SENT', 'En ny kode er sendt til %s. Den er gyldig i ti minutter.');
define('_US_2FA_SEND_WAIT', 'Det ble sendt en kode for mindre enn et minutt siden. Sjekk innboksen og søppelpostmappen før du ber om en ny.');
define('_US_2FA_SEND_FAILED', 'Koden kunne ikke sendes akkurat nå. Prøv igjen om et øyeblikk, eller bruk en gjenopprettingskode.');
define('_US_2FA_EMAIL_SUBJECT', '%s: innloggingskoden din');
define('_US_2FA_EMAIL_BODY', 'Innloggingskoden din for %s er:

%s

Den er gyldig i %d minutter og fungerer én gang. Hvis du ikke ba om dette, ignorer denne meldingen og vurder å bytte passord.');
define('_US_2FA_RECOVERY', 'Bruk en gjenopprettingskode i stedet');
define('_US_2FA_RECOVERY_HINT', 'Hver gjenopprettingskode fungerer én gang. Bruk av en sender deg en e-post.');
define('_US_2FA_SUBMIT', 'Fortsett');
define('_US_2FA_STARTAGAIN', 'Denne innloggingen er utløpt eller ble avbrutt. Start på nytt.');
define('_US_2FA_BACKTOLOGIN', 'Tilbake til innloggingsskjemaet');
define('_US_2FA_BADCODE', 'Den koden ble ikke godtatt.');
define('_US_2FA_LOCKED', 'For mange forsøk. Andre trinn er låst i femten minutter; en gjenopprettingskode fungerer fortsatt.');
define('_US_2FA_UNAVAILABLE', 'Andre trinn er ikke tilgjengelig akkurat nå. En gjenopprettingskode fungerer fortsatt, eller kontakt nettstedets administrator.');
define('_US_2FA_REQUIRED', 'Denne kontoen har topartsautentisering aktivert. Logg inn via nettstedets innloggingsside.');
define('_US_2FA_HTTP_LOGIN', 'Dette popup-vinduet kan ikke fullføre en topartsinnlogging via HTTP fordi passordet ditt ville blitt sendt ukryptert. Bruk nettstedets innlogging i stedet, eller be administratoren aktivere HTTPS for nettstedet.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: andre trinn låst');
define('_US_2FA_LOCKED_MAIL_BODY', 'Fem feil koder for andre trinn ble angitt for kontoen din på %s fra %s. Andre trinn er låst i femten minutter. Hvis dette ikke var deg, bytt passord.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: en gjenopprettingskode ble brukt');
define('_US_2FA_RECOVERY_MAIL_BODY', 'En gjenopprettingskode ble brukt til å logge inn på kontoen din på %s fra %s. Den koden fungerer ikke lenger. Hvis dette ikke var deg, bytt passord og tilbakestill gjenopprettingskodene dine.');
