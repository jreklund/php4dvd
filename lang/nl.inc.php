<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 *
 * config.php:
 * $settings["languages"] = array("English" => "en"); -> $settings["languages"] = array("English" => "en", "Nederlands" => "nl");
 * $settings["defaultlanguage"] = "en" -> $settings["defaultlanguage"] = "nl";
 *
 * When you want your translation to be included in the next php4dvd release, please send me a message on https://github.com/jreklund/php4dvd
 */

/**
 * Title
 */
define("_TITLE",									"Mijn verzameling");

/**
 * Menu
 */
define("MY_COLLECTION",								"Mijn verzameling");
define("HOME",										"Home");
define("BACK",										"Terug");
define("SETTINGS",									"Instellingen");
define("MY_PROFILE",								"Mijn profiel");
define("USER_MANAGEMENT",							"Gebruikers");
define("LOG_IN", 									"Log in");
define("LOG_OUT",									"Log uit");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Weet je zeker dat je wilt uitloggen?");

/**
 * Log in page
 */
define("USER_NAME",									"Gebruikersnaam");
define("PASSWORD",									"Wachtwoord");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Onjuiste gebruikersnaam of wachtwoord");
define("REMEMBER_ME",								"Onthoud me");

/**
 * Home
 */
// Menu
define("ADD",										"Toevoegen");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Alles bijwerken");
define("EXPORT_TO_CSV",								"Exporteren");
// Search
define("SEARCH_DEFAULT_TEXT",						"Zoek...");
define("CATEGORIES",								"Categorieën");
define("ALL_CATEGORIES",							"Alle categorieën");
define("FORMATS",									"Formats");
define("ALL_FORMATS",								"Alle formats");
define("SORT_BY",									"Sorteer op");
define("LAYOUT",									"Paginaopmaak");
define("nameorder asc",								"Naam (A-Z)");
define("nameorder desc",							"Naam (Z-A)");
define("year asc",									"Jaar (0-9)");
define("year desc",									"Jaar (9-0)");
define("rating asc",								"Score (0-9)");
define("rating desc",								"Score (9-0)");
define("votes asc",								    "Stemmen (0-9)");
define("votes desc",								"Stemmen (9-0)");
define("format asc",								"Formaat (A-Z)");
define("format desc",								"Formaat (Z-A)");
define("seen asc",									"Gezien");
define("seen desc",									"Gezien omgekeerd");
define("own asc",									"Bezit");
define("own desc",									"Bezit omgekeerd");
define("added asc",									"Toegevoegd (oud-nieuw)");
define("added desc",								"Toegevoegd (nieuw-oud)");
define("loaned asc",								"Uitgeleend (oud-nieuw)");
define("loaned desc",								"Uitgeleend (nieuw-oud)");
define("ALL", 										"Alle");
define("RESULTS_PER_PAGE",							"Resultaten per pagina");
define("FILTER_BY",									"Filteren op");
// Results
define("NO_RESULTS_FOUND",							"Geen titels gevonden.");
define("NO_COVER",									"Geen afbeelding");
define("NUMBER_OF_TITLES",							"Aantal titels");
define("STATISTICS",								"Statistieken");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"IMDb informatie");
define("VIEW_TRAILER",								"Bekijk trailer");
define("DOWNLOAD_COVER",							"Download hoes");
define("FAVOURITE",									"Favoriete");
define("NOT_FAVOURITE",								"Niet favoriet");
define("OWN",										"In bezit");
define("NOT_OWN",									"Niet in bezit");
define("DO_YOU_OWN_THIS",							"Heb je dit?");
define("SEEN",										"Gezien");
define("UNSEEN",									"Niet gezien");
define("HAVE_YOU_SEEN_THIS",						"Heb je dit gezien?");
define("EDIT",										"Bewerken");
define("REMOVE",									"Verwijderen");
// Movie information
define("LOANED_OUT",								"Uitgeleend");
define("TO",										"aan");
define("ON",										"op");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Opslaan");
define("SAVE_AND_ADD_ANOTHER",						"Opslaan en voeg een ander");
define("UPDATE",									"Bijwerken");
define("REMOVE_COVER",								"Verwijder hoes");
// IMDb search
define("ADD_FROM_IMDB",								"Toevoegen vanaf IMDb");
define("SEARCH",									"Zoeken");
define("RESULTS_FROM_IMDB",							"Resultaten van IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Informatie");
define("IMDB_NUMBER",								"IMDb nummer");
define("TITLE",										"Titel");
define("TITLE_ORDER",								"Titel (Sorteer op)");
define("AKA_TITLES",								"Andere titels");
define("YEAR",										"Jaar");
define("DURATION",									"Duur");
define("MINUTES",									"minuten");
define("DURATION_MINUTES",							"Duur (minuten)");
define("RATING",									"Score");
define("VOTES",									    "Stemmen");
define("FORMAT",									"Formaat");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Leeftijdsclassificaties");
define("PARENTAL_GUIDANCE_AGE",						"jaar");
define("LOANED_OUT_TO",								"Uitgeleend aan");
define("LOANED_OUT_SINCE",							"Uitgeleend sinds");
define("MOVIE",										"Film");
define("TV_SERIES",									"TV Serie");
define("SEASONS",									"Seizoenen");
define("YES",										"Ja");
define("NO",										"Nee");
define("COVER",										"Hoes");
define("SEARCH_FOR_COVER",							"Zoek naar hoes");
define("PHOTO",										"Poster");
define("SEARCH_FOR_PHOTO",							"Zoeken naar poster");
define("PHOTO_FROM_IMDB",							"Poster (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Downloaden van IMDb");
define("TRAILER_URL",								"Trailer URL");
define("SEARCH_FOR_TRAILER",						"Zoek naar trailer");
define("PERSONAL_NOTES",							"Persoonlijke opmerkingen");
define("TAGLINES",									"Kreten");
define("PLOT_OUTLINE",								"Samenvatting");
define("PLOTS",										"Plot");
define("LANGUAGES",									"Talen");
define("SUBTITLES",									"Ondertitelingen");
define("AUDIO",										"Geluid");
define("VIDEO",										"Beeld");
define("COUNTRY",									"Land");
define("GENRES",									"Genre");
define("MPAA",										"MPAA");
define("DIRECTOR",									"Regisseur");
define("WRITER",									"Schrijver");
define("PRODUCER",									"Producent");
define("MUSIC",										"Muziek");
define("CAST",										"Acteurs");
// Automatic update
define("AUTOUPDATE_INFO",							"Je films worden automatisch bijgewerkt vanaf IMDb. Dit kan even duren...");
define("STOP_UPDATE",								"Stop de update");

/**
* User management
*/
define("NEW_USER",									"Nieuwe gebruiker");
define("EMAIL",										"E-mail");
define("AGAIN",										"normaals");
define("ROLE",										"Rol");
define("GUEST",										"Gast (alleen kijken)");
define("EDITOR",									"Editor");
define("ADMIN",										"Admin");
define("USERS",										"Users");
define("LAST_LOGGED_IN",							"Laatst ingelogd");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Een gebruiker met dezelfde naam of e-mail adres bestaat al!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Verwijder de install/ map vanwege veiligheidsredenen!");
define("CONFIRM_REMOVE",							"Weet u zeker dat u dit wilt verwijderen?");
define("CONFIRM_REMOVE_COVER",						"Weet u zeker dat u deze hoes wilt verwijderen?");
// Validation
define("VALIDATOR_REQUIRED",						"Dit veld is verplicht");
define("VALIDATOR_NUMBER",							"Voer een juist nummer in");
define("VALIDATOR_DIGITS",							"Voer een juist nummer in");
define("VALIDATOR_EMAIL",							"Voer een juist e-mail adres in");
define("VALIDATOR_URL",								"Voer een juist URL in (http://...)");
define("VALIDATOR_DATE",							"Voer een juiste datum in (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Voer een juist plaatje in (jpg)");
define("VALIDATOR_EQUAL_TO",						"Beide waarden moeten gelijk zijn");
define("VALIDATOR_USERNAME",						"Vul alstublieft een geldige gebruikersnaam in. (A–Z, 0–9, .)\nTussen 5-50 tekens.");

/**
 * Installer
 */
define("INSTALLATION",								"Installatie");
define("WELCOME",									"Welkom");
define("WELCOME_TEXT",								"Dit is de installatie van php4dvd. Volg de stappen om de installatie te voltooien.");
define("NEXT",										"Volgende");
define("PREVIOUS",									"Voorgaand");
define("PERMISSIONS",								"Rechten");
define("PERMISSIONS_TEXT",							"De volgende mappen en bestanden moeten bestaan en schrijfrechten hebben:");
define("OK",										"ok");
define("FAILED",									"failed");
define("FIX_PERMISSIONS",							"Chmod (777) these directories with your favorite FTP client.");
define("REFRESH",									"Refresh");
define("CONFIGURATION",								"Configuration");
define("CONFIGURATION_TEXT",						"Fill out this form to configure php4dvd for your server.");
define("DATABASE",									"Database");
define("HOST",										"Server");
define("PORT",										"Poort");
define("WEBSITE",									"Website");
define("URL",										"Url");
define("TEMPLATE",									"Template");
define("LANGUAGE",									"Taal");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Guest users can see my collection");
define("FAILED_TO_WRITE_FILE",						"Failed to write the file");
define("DATABASE_NEW_TEXT",							"A new version of the database will be installed. Any old existing tables will be removed!");
define("DATABASE_UPGRADE_TEXT",						"Your database will be upgraded to the latest version. No information will be removed (it is safe to make a backup first!).");
define("ACCEPT",									"I Accept");
define("FINISHED",									"Finished");
define("FINISHED_TEXT",								"Your installation is almost finished. Click the finish button below.");
define("FINISH",									"Finish");
?>
