<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 *
 * config.php:
 * $settings["languages"] = array("English" => "en"); -> $settings["languages"] = array("English" => "en", "Czech" => "cz");
 * $settings["defaultlanguage"] = "en" -> $settings["defaultlanguage"] = "cz";
 *
 * When you want your translation to be included in the next php4dvd release, please send me a message on https://github.com/jreklund/php4dvd
 */

/**
 * Title
 */
define("_TITLE",									"Moje sbírka");

/**
 * Menu
 */
define("MY_COLLECTION",								"Moje sbírka");
define("HOME",										"Domů");
define("BACK",										"Zpět");
define("SETTINGS",									"Nastavení");
define("MY_PROFILE",								"Můj profil");
define("USER_MANAGEMENT",							"Správa uživatelů");
define("LOG_IN", 									"Přihlásit se");
define("LOG_OUT",									"Odhlásit se");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Opravdu chcete se odhlásit?");

/**
 * Log in page
 */
define("USER_NAME",									"Uživatelské jméno");
define("PASSWORD",									"Heslo");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Nesprávné uživatelské jméno nebo heslo");
define("REMEMBER_ME",								"Zapamatuj si mě");

/**
 * Home
 */
// Menu
define("ADD",										"Přidat");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Aktualizovat vše");
define("EXPORT_TO_CSV",								"Exportovát");
// Search
define("SEARCH_DEFAULT_TEXT",						"Vyhledávání...");
define("CATEGORIES",								"Kategorie");
define("ALL_CATEGORIES",							"Všechny kategorie");
define("FORMATS",									"Formáty");
define("ALL_FORMATS",								"Všechny Formáty");
define("SORT_BY",									"Seřazeno podle");
define("LAYOUT",									"Stýl uspořadaní");
define("nameorder asc",								"Název (A-Z)");
define("nameorder desc",							"Název (Z-A)");
define("year asc",									"Rok (0-9)");
define("year desc",									"Rok (9-0)");
define("rating asc",								"Hodnocení (0-9)");
define("rating desc",								"Hodnocení (9-0)");
define("votes asc",								    "Hlasů (0-9)");
define("votes desc",								"Hlasů (9-0)");
define("format asc",								"Formáty (A-Z)");
define("format desc",								"Formáty (Z-A)");
define("seen asc",									"Viděl");
define("seen desc",									"Viděno inverzní");
define("own asc",									"Vlastní");
define("own desc",									"Vlastní inverzní");
define("added asc",									"Přidáno (staré-nové)");
define("added desc",								"Přidáno (nové-staré)");
define("loaned asc",								"Vypůjčeno (staré-nové)");
define("loaned desc",								"Vypůjčeno (nové-staré)");
define("ALL", 										"Všechny filmy");
define("RESULTS_PER_PAGE",							"Výsledky na stránku");
define("FILTER_BY",									"Filtrovat podle");
// Results
define("NO_RESULTS_FOUND",							"Žádné tituly nebyly nalezeny.");
define("NO_COVER",									"Bez krytu");
define("NUMBER_OF_TITLES",							"Počet titulů");
define("STATISTICS",								"Statistika");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Navštivit IMDb");
define("VIEW_TRAILER",								"Přehrát Film");
define("DOWNLOAD_COVER",							"Download cover");
define("FAVOURITE",									"Oblíbený");
define("NOT_FAVOURITE",								"Neoblíbený");
define("OWN",										"Vlastní");
define("NOT_OWN",									"Nevlastní");
define("SEEN",										"Viděl");
define("UNSEEN",									"Neviděl");
define("EDIT",										"Upravit");
define("REMOVE",									"Odstranit");
// Movie information
define("LOANED_OUT",								"Loaned out");
define("TO",										"na");
define("ON",										"on");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Uložit");
define("SAVE_AND_ADD_ANOTHER",						"Uložit a přidat další");
define("UPDATE",									"Aktualizace");
define("REMOVE_COVER",								"Odstranít obal");
// IMDb search
define("ADD_FROM_IMDB",								"Přidat z IMDb");
define("SEARCH",									"Hledat");
define("RESULTS_FROM_IMDB",							"Výsledky z IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Informace");
define("IMDB_NUMBER",								"IMDb číslo");
define("TITLE",										"Název");
define("TITLE_ORDER",								"Název (Seřadit podle)");
define("AKA_TITLES",								"Také známý jako");
define("YEAR",										"Rok");
define("DURATION",									"Duration");
define("MINUTES",									"minutes");
define("DURATION_MINUTES",							"Duration (minutes)");
define("RATING",									"Hodnocení");
define("VOTES",									    "Hlasů");
define("FORMAT",									"Format");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Hodnocení věku");
define("PARENTAL_GUIDANCE_AGE",						"Roky");
define("LOANED_OUT_TO",								"Půjčeno na");
define("LOANED_OUT_SINCE",							"od té doby");
define("MOVIE",										"film");
define("TV_SERIES",									"TV Series");
define("SEASONS",									"Roční období");
define("YES",										"Ano");
define("NO",										"Ne");
define("COVER",										"Obal");
define("SEARCH_FOR_COVER",							"Vyhledat obál");
define("PHOTO",										"Plakát");
define("SEARCH_FOR_PHOTO",							"Vyhledat plakát");
define("PHOTO_FROM_IMDB",							"Plakát (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Stáhnout z IMDb");
define("TRAILER_URL",								"Film URL");
define("SEARCH_FOR_TRAILER",						"Vyhledat film");
define("PERSONAL_NOTES",							"Osobní poznámky");
define("TAGLINES",									"Označení řádků");
define("PLOT_OUTLINE",								"Obrys výkresu");
define("PLOTS",										"Pozemky ");
define("LANGUAGES",									"Jazyky");
define("SUBTITLES",									"Titulky");
define("AUDIO",										"Audio");
define("VIDEO",										"Video");
define("COUNTRY",									"Země");
define("GENRES",									"Žánry");
define("MPAA",										"MPAA");
define("DIRECTOR",									"Ředitel");
define("WRITER",									"Spisovatel");
define("PRODUCER",									"Výrobce");
define("MUSIC",										"Zvuk");
define("CAST",										"Obsazení");
// Automatic update
define("AUTOUPDATE_INFO",							"Vaše filmy jsou automaticky aktualizovány z IMDb. Může to chvíli trvat, takže buďte trpěliví ...");
define("STOP_UPDATE",								"Zastavte aktualizaci");

/**
* User management
*/
define("NEW_USER",									"Nový uživatel");
define("EMAIL",										"E-mail");
define("AGAIN",										"znovu");
define("ROLE",										"Role");
define("GUEST",										"Host (pouze pro zobrazení)");
define("EDITOR",									"Redaktor");
define("ADMIN",										"Správce");
define("USERS",										"Uživatelé");
define("LAST_LOGGED_IN",							"Poslední přihlášení");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Uživatel již se stejným uživatelským jménem nebo e-mailovou adresou již existuje!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Odstraňte instalační adresář z bezpečnostních důvodů!");
define("CONFIRM_REMOVE",							"Opravdu chcete toto odstranit?");
define("CONFIRM_REMOVE_COVER",						"Opravdu chcete tento obal odstranit?");
// Validation
define("VALIDATOR_REQUIRED",						"Toto pole je povinné");
define("VALIDATOR_NUMBER",							"Prosím zadejte platné číslo");
define("VALIDATOR_DIGITS",							"Prosím zadejte platné číslo");
define("VALIDATOR_EMAIL",							"Prosím zadejte platnou emailovou adresu");
define("VALIDATOR_URL",								"Zadejte prosím platnou adresu URL (http://...)");
define("VALIDATOR_DATE",							"Prosím vložte správné datum (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Použijte platný typ souboru (jpg)");
define("VALIDATOR_EQUAL_TO",						"Obě hodnoty by měly být stejné");
define("VALIDATOR_USERNAME",						"Prosím zadejte platné uživatelské jméno. (A-Z, 0-9, .)\nEbsahuje 5 až 50 znaků.");

/**
 * Installer
 */
define("INSTALLATION",								"Instalace");
define("WELCOME",									"Vítejte");
define("WELCOME_TEXT",								"Vítejte v instalačním průvodci. Postupujte podle kroku k instalaci php4dvd.");
define("NEXT",										"Další");
define("PREVIOUS",									"Předchozí");
define("PERMISSIONS",								"Oprávnění");
define("PERMISSIONS_TEXT",							"Musí být vytvořeny následující adresáře a soubory a vyžadují oprávnění k zápisu:");
define("OK",										"ok");
define("FAILED",									"failed");
define("FIX_PERMISSIONS",							"Chmod (777) tyto adresáře nebo soubory");
define("REFRESH",									"Obnovit");
define("CONFIGURATION",								"Konfigurace");
define("CONFIGURATION_TEXT",						"Vyplňte tento formulář pro konfiguraci php4dvd pro váš server.");
define("DATABASE",									"Database");
define("HOST",										"Hostitel");
define("PORT",										"Port");
define("WEBSITE",									"Website");
define("URL",										"Url");
define("TEMPLATE",									"Vzhled");
define("LANGUAGE",									"Jazyk");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Uživatelé mohou vidět mou sbírku");
define("FAILED_TO_WRITE_FILE",						"Nepodařilo se zapsat soubor");
define("DATABASE_NEW_TEXT",							"Nová verze databáze bude nainstalována. Jakékoliv staré existující tabulky budou odstraněny!");
define("DATABASE_UPGRADE_TEXT",						"Vaše databáze bude upgradována na nejnovější verzi. Nebudou odstraněny žádné informace (nejdříve je možné udělat zálohu!)");
define("ACCEPT",									"Přijímám");
define("FINISHED",									"Dokončeno");
define("FINISHED_TEXT",								"nstalace je téměř hotová. Klikněte na konečné tlačítko níže.");
define("FINISH",									"Dokončit");
?>
