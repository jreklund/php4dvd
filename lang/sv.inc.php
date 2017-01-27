<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 * 
 * config.php:
 * $settings["languages"] = array("English" => "en"); -> $settings["languages"] = array("English" => "en", "Swedish" => "sv");
 * $settings["defaultlanguage"] = "en" -> $settings["defaultlanguage"] = "sv";
 * 
 * When you want your translation to be included in the next php4dvd release, please send me a message on https://github.com/jreklund/php4dvd
 */

/**
 * Title
 */
define("_TITLE",									"Min filmsamling");

/**
 * Menu
 */
define("MY_COLLECTION",								"Min samling");
define("HOME",										"Hem");
define("BACK",										"Tillbaka");
define("SETTINGS",									"Inställningar");
define("MY_PROFILE",								"Min profil");
define("USER_MANAGEMENT",							"Användarhantering");
define("LOG_IN", 									"Logga in");
define("LOG_OUT",									"Logga ut");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Är du säker att du vill logga ut?");

/**
 * Log in page
 */
define("USER_NAME",									"Användarnamn");
define("PASSWORD",									"Lösenord");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Felaktigt användarnamn eller lösenord");
define("REMEMBER_ME",								"Kom ihåg mig");

/**
 * Home
 */
// Menu
define("ADD_MOVIE",									"Lägg till film");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Uppdatera alla");
define("EXPORT_TO_CSV",								"Exportera");
// Search
define("SEARCH_DEFAULT_TEXT",						"Sök...");
define("CATEGORIES",								"Kategorier");
define("ALL_CATEGORIES",							"Alla kategorier");
define("SORT_BY",									"Sortera efter");
define("LAYOUT",									"Layout");
define("name asc",									"Namn (A-Z)");
define("name desc",									"Namn (Z-A)");
define("year asc",									"År (0-9)");
define("year desc",									"År (9-0)");
define("rating asc",								"Betyg (0-9)");
define("rating desc",								"Betyg (9-0)");
define("format asc",								"Format (A-Z)");
define("format desc",								"Format (Z-A)");
define("seen asc",									"Sett");
define("seen desc",									"Sett fallande");
define("own asc",									"Äger");
define("own desc",									"Äger fallande");
define("added asc",									"Inlagda (gamla-nya)");
define("added desc",								"Inlagda (nya-gamla)");
define("loaned asc",								"Utlåande (gamla-nya)");
define("loaned desc",								"Utlåande (nya-gamla)");
define("ALL", 										"Alla");
define("RESULTS_PER_PAGE",							"Resultat per sida");
// Results
define("NO_RESULTS_FOUND",							"Inga filmer hittades.");
define("NO_COVER",									"Inget omslag");
define("MOVIES_TOTAL",								"Antal filmer");
define("STATISTICS",								"Statistik");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Besök IMDb");
define("VIEW_TRAILER",								"Se trailer");
define("DOWNLOAD_COVER",							"Ladda hem omslag");
define("OWN",										"Äger");
define("NOT_OWN",									"Äger inte");
define("SEEN",										"Sett");
define("UNSEEN",									"Inte sett");
define("EDIT",										"Redigera");
define("REMOVE",									"Ta bort");
// Movie information
define("LOANED_OUT",								"Utlånad");
define("TO",										"till");
define("ON",										"på");
define("MINUTES",									"minuter");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Spara");
define("SAVE_AND_ADD_MOVIE",						"Spara och lägg till film");
define("UPDATE",									"Uppdatera");
define("REMOVE_COVER",								"Ta bort omslag");
// IMDb search
define("ADD_FROM_IMDB",								"Lägg till från IMDb");
define("SEARCH",									"Sök");
define("RESULTS_FROM_IMDB",							"Resultat från IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Filminformation");
define("IMDB_NUMBER",								"IMDb nummer");
define("TITLE",										"Rubrik");
define("AKA_TITLES",								"Känd som");
define("YEAR",										"År");
define("DURATION_MINUTES",							"Längd (minuter)");
define("RATING",									"Betyg");
define("FORMAT",									"Format");
define("DVD",										"DVD");
define("I_HAVE_SEEN_THIS_MOVIE",					"Jag har sett den här filmen");
define("I_OWN_THIS_MOVIE",							"Jag äger den här filmen");
define("LOANED_OUT_TO",								"Utlånad till");
define("LOANED_OUT_SINCE",							"Utlånad sedan");
define("YES",										"Ja");
define("NO",										"Nej");
define("COVER",										"Omslag");
define("SEARCH_FOR_COVER",							"Sök efter filmomslag");
define("PHOTO",										"Affisch");
define("SEARCH_FOR_PHOTO",							"Sök efter filmaffisch");
define("TRAILER_URL",								"Trailer URL");
define("SEARCH_FOR_TRAILER",						"Sök efter filmtrailer");
define("PERSONAL_NOTES",							"Personliga anteckningar");
define("TAGLINES",									"Slogans");
define("PLOT_OUTLINE",								"Sammanfattning av handlingen");
define("PLOTS",										"Handling");
define("LANGUAGES",									"Språk");
define("SUBTITLES",									"Undertexter");
define("AUDIO",										"Ljud");
define("VIDEO",										"Bild");
define("COUNTRY",									"Land");
define("GENRES",									"Genres");
define("DIRECTOR",									"Regissör");
define("WRITER",									"Författare");
define("PRODUCER",									"Producent");
define("MUSIC",										"Musik");
define("CAST",										"Skådespelare");
// Automatic update
define("AUTOUPDATE_INFO",							"Dina filmer uppdateras automatiskt från IMDb. Det kommer ta en stund, vänligen vänta...");
define("STOP_UPDATE",								"Avbryt uppdateringen");

/**
* User management
*/
define("NEW_USER",									"Ny användare");
define("EMAIL",										"E-post");
define("AGAIN",										"igen");
define("ROLE",										"Roll");
define("GUEST",										"Gäst (endast läsa)");
define("EDITOR",									"Författare");
define("ADMIN",										"Admin");
define("USERS",										"Användare");
define("LAST_LOGGED_IN",							"Senast inloggad");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"En användare med samma användarnamn eller e-postadress finns redan!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Vänligen ta bort install/ katalogen p.g.a. säkerhetsskäl!");
define("CONFIRM_REMOVE",							"Är du säker att du vill ta bort följande?");
define("CONFIRM_REMOVE_COVER",						"Är du säker att du vill ta bort omslaget?");
// Validation
define("VALIDATOR_REQUIRED",						"Följande fält är ett krav");
define("VALIDATOR_NUMBER",							"Vänligen ange endast siffror");
define("VALIDATOR_DIGITS",							"Vänligen ange endast siffror");
define("VALIDATOR_EMAIL",							"Vänligen ange en godkänd e-postaddress");
define("VALIDATOR_URL",								"Vänligen ange en korrekt länk (http://...)");
define("VALIDATOR_DATE",							"Vänligen ange ett korrekt datum (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Vänligen ange en korrekt bild (jpg)");
define("VALIDATOR_EQUAL_TO",						"Båda värdena måste matcha");

/**
 * Installer
 */
define("INSTALLATION",								"Installation");
define("WELCOME",									"Välkommen");
define("WELCOME_TEXT",								"Välkommen till installationsguiden. Gå igenom nästa steg för att installera php4dvd.");
define("NEXT",										"Nästa");
define("PREVIOUS",									"Föregående");
define("PERMISSIONS",								"Behörigheter");
define("PERMISSIONS_TEXT",							"Följande mappar och filer måste skapas och ha skrivrättigheter:");
define("OK",										"ok");
define("FAILED",									"misslyckades");
define("FIX_PERMISSIONS",							"Chmod (777) följande mappar eller filer med din FTP-klient.");
define("REFRESH",									"Uppdatera");
define("CONFIGURATION",								"Konfiguration");
define("CONFIGURATION_TEXT",						"Fyll i formuläret för att konfigurera php4dvd för din server.");
define("DATABASE",									"Databas");
define("HOST",										"Värd");
define("PORT",										"Port");
define("WEBSITE",									"Hemsida");
define("URL",										"Url");
define("TEMPLATE",									"Mall");
define("LANGUAGE",									"Språk");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Gäster kan se min filmsamling");
define("FAILED_TO_WRITE_FILE",						"Misslyckades att skriva till filen");
define("DATABASE_NEW_TEXT",							"En ny version av databasen kommer att installeras. Alla gamla/existerande tabeller kommer tas bort!");
define("DATABASE_UPGRADE_TEXT",						"Din databas kommer att uppgraderas till den senaste versionen. Ingen information kommer att tas bort (säkerhetskopiera databasen först!).");
define("ACCEPT",									"Jag accepterar");
define("FINISHED",									"Slutfört");
define("FINISHED_TEXT",								"Installationen är nästan slutförd. Klicka på Slutför knappen nedan.");
define("FINISH",									"Slutför");
?>