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
define("_TITLE",									"Gyűjteményem");

/**
 * Menük
 */
define("MY_COLLECTION",								"Gyűjteményem");
define("HOME",										"Kezdőlap");
define("BACK",										"Vissza");
define("SETTINGS",									"Beállítások");
define("MY_PROFILE",								"Profilom");
define("USER_MANAGEMENT",							"Felhasználók kezelése");
define("LOG_IN", 									"Bejelentkezés");
define("LOG_OUT",									"Kijelentkezés");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Biztosan ki szeretnél jelentkezni?");

/**
 * Bejelentkezési oldal
 */
define("USER_NAME",									"Felhasználónév");
define("PASSWORD",									"Jelszó");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Helytelen felhasználónév vagy jelszó!");
define("REMEMBER_ME",								"Maradjak bejelentkezve");

/**
 * Kezdőlap
 */
// Menük
define("ADD",										"Hozzáadás");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Összes frissítése");
define("EXPORT_TO_CSV",								"Exportálás");
// Keresés panel
define("SEARCH_DEFAULT_TEXT",						"Keresés...");
define("CATEGORIES",								"Kategóriák");
define("ALL_CATEGORIES",							"Minden kategória");
define("FORMATS",									"Formátumok");
define("ALL_FORMATS",								"Minden formátum");
define("SORT_BY",									"Rendezés");
define("LAYOUT",									"Elrendezés");
define("nameorder asc",								"Név (A-Z)");
define("nameorder desc",							"Név (Z-A)");
define("year asc",									"Év (növekvő)");
define("year desc",									"Év (csökkenő)");
define("rating asc",								"Értékelés (növekvő)");
define("rating desc",								"Értékelés (csökkenő)");
define("votes asc",								    "Szavazat (növekvő)");
define("votes desc",								"Szavazat (csökkenő)");
define("format asc",								"Formátum (A-Z)");
define("format desc",								"Formátum (Z-A)");
define("seen asc",									"Láttam (régen-frissen)");
define("seen desc",									"Láttam (frissen-régen)");
define("own asc",									"Birtoklom");
define("own desc",									"Birtoklom");
define("added asc",									"Hozzáadva (régen-frissen)");
define("added desc",								"Hozzáadva (frissen-régen)");
define("loaned asc",								"Kölcsönadva (régen-frissen)");
define("loaned desc",								"Kölcsönadva (frissen-régen)");
define("ALL", 										"Összes");
define("RESULTS_PER_PAGE",							"Találatok száma oldalanként");
define("FILTER_BY",									"Szűkítés");
// Találatok
define("NO_RESULTS_FOUND",							"Nincs ilyen cím.");
define("NO_COVER",									"Nincs borító");
define("NUMBER_OF_TITLES",							"Címek száma");
define("STATISTICS",								"Statisztikák");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Megtekintés IMDb-n");
define("VIEW_TRAILER",								"Trailer megtekintése");
define("DOWNLOAD_COVER",							"Borító letöltése");
define("FAVOURITE",									"Kedvenc");
define("NOT_FAVOURITE",								"Nem kedvenc");
define("OWN",										"Birtoklom");
define("NOT_OWN",									"Nem birtoklom");
define("DO_YOU_OWN_THIS",							"Birtoklom?");
define("SEEN",										"Láttam");
define("UNSEEN",									"Nem láttam");
define("HAVE_YOU_SEEN_THIS",						"Láttad már?");
define("EDIT",										"Szerkeszt");
define("REMOVE",									"Töröl");
// Film információ
define("LOANED_OUT",								"Kölcsönadva");
define("TO",										"neki");
define("ON",										"on");

/**
* Film hozzáadása/szerkesztése
*/
// Menu
define("SAVE",										"Mentés");
define("SAVE_AND_ADD_ANOTHER",						"Mentés és egy új hozzáadása");
define("UPDATE",									"Frissít");
define("REMOVE_COVER",								"Borító eltávolítása");
// IMDb keresés
define("ADD_FROM_IMDB",								"Hozzáadás IMDb-ről");
define("SEARCH",									"Keresés");
define("RESULTS_FROM_IMDB",							"Találatok IMDb-ről");
// Film információ
define("MOVIE_INFORMATION",							"Információ");
define("IMDB_NUMBER",								"IMDb szám");
define("TITLE",										"Cím");
define("TITLE_ORDER",								"Cím (Sort by)");
define("AKA_TITLES",								"Egyéb címei");
define("YEAR",										"Év");
define("DURATION",									"Játékidő");
define("MINUTES",									"perc");
define("DURATION_MINUTES",							"Játékidő (perc)");
define("RATING",									"Értékelés");
define("VOTES",									    "Szavazat");
define("FORMAT",									"Formátum");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Korhatár");
define("PARENTAL_GUIDANCE_AGE",						"év");
define("LOANED_OUT_TO",								"Kölcsönadva neki");
define("LOANED_OUT_SINCE",							"Kölcsönadás dátuma");
define("MOVIE",										"Film");
define("TV_SERIES",									"TV sorozat");
define("SEASONS",									"Évadok");
define("YES",										"Igen");
define("NO",										"Nem");
define("COVER",										"Borítókép");
define("SEARCH_FOR_COVER",							"Borító keresése");
define("PHOTO",										"Poszter");
define("SEARCH_FOR_PHOTO",							"Borítóképek keresése");
define("PHOTO_FROM_IMDB",							"Borító (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Letöltés IMDb-ről");
define("TRAILER_URL",								"Trailer link");
define("SEARCH_FOR_TRAILER",						"Trailer keresése");
define("PERSONAL_NOTES",							"Megjegyzéseim");
define("TAGLINES",									"Taglines");
define("PLOT_OUTLINE",								"Rövid cselekmény");
define("PLOTS",										"Cselekmény");
define("LANGUAGES",									"Nyelvek");
define("SUBTITLES",									"Feliratok");
define("AUDIO",										"Hang");
define("VIDEO",										"Videó");
define("COUNTRY",									"Ország");
define("GENRES",									"Műfaj");
define("MPAA",										"MPAA");
define("DIRECTOR",									"Rendező");
define("WRITER",									"Író");
define("PRODUCER",									"Producer");
define("MUSIC",										"Zene");
define("CAST",										"Szereposztás");
// Autómatikus frissítés
define("AUTOUPDATE_INFO",							"A filmjeid autómatikusan frissítve lettek IMDb-ről. Ez több percig is eltarthat, ezért a türelmed kérjük...");
define("STOP_UPDATE",								"Frissítés leállítása");

/**
* Felhasználók kezelése
*/
define("NEW_USER",									"Új Felhasználó");
define("EMAIL",										"E-mail");
define("AGAIN",										"ismételten");
define("ROLE",										"Jogkör");
define("GUEST",										"Vendég (csak böngészés)");
define("EDITOR",									"Szerkesztő");
define("ADMIN",										"Admin");
define("USERS",										"Felhasználók");
define("LAST_LOGGED_IN",							"Utoljára bejelentkezve");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Felhasználó azonos Felhasználó névvel vagy E-maillel már létezik!");

/**
 * Üzenetek
 */
define("REMOVE_INSTALL_DIR",						"Kérlek töröld az install/ mappát a biztonságod érdekében!");
define("CONFIRM_REMOVE",							"Biztosan szeretnéd törölni?");
define("CONFIRM_REMOVE_COVER",						"Biztosan szeretnéd törölni a borítót?");
// Validation
define("VALIDATOR_REQUIRED",						"Ennek a mezőnek a kitöltése kötelező");
define("VALIDATOR_NUMBER",							"Kérlek érvényes számot adj meg");
define("VALIDATOR_DIGITS",							"Kérlek érvényes számot adj meg");
define("VALIDATOR_EMAIL",							"Kérlek érvényes E-mail címet adj meg");
define("VALIDATOR_URL",								"Kérlek érvényes linket adj meg (http://...)");
define("VALIDATOR_DATE",							"Kérlek érvényes dátumot adj meg (éééé-hh-nn)");
define("VALIDATOR_ACCEPT_JPG",						"Kérlek érvényes fájlformátumot adj meg (jpg)");
define("VALIDATOR_EQUAL_TO",						"Mindkét értéknek egyeznie kell");
define("VALIDATOR_USERNAME",						"Kérlek érvényes Felhasználónevet adj meg (A–Z, 0–9, .)\n5 és 10 karakter között.");

/**
 * Installer
 */
define("INSTALLATION",								"Telepítés");
define("WELCOME",									"Üdvözöljük");
define("WELCOME_TEXT",								"Üdvözöljük a telepítési varázslóban. Kövesd az utasításokat a php4dvd installálásához.");
define("NEXT",										"Következő oldal");
define("PREVIOUS",									"Previous");
define("PERMISSIONS",								"Jogok");
define("PERMISSIONS_TEXT",							"A következő mappáknak és fájloknak létezniük kell, illetve írási joggal kell rendelkezniük:");
define("OK",										"ok");
define("FAILED",									"hiba");
define("FIX_PERMISSIONS",							"Chmod (777) these directories or files with your favorite FTP client.");
define("REFRESH",									"Újratölt");
define("CONFIGURATION",								"Beállítások");
define("CONFIGURATION_TEXT",						"Töltse ki az alábbi űrlapot a szerverének megfelelően, hogy használni tudja az alkalmazást.");
define("DATABASE",									"Adatbázis");
define("HOST",										"Kiszolgáló");
define("PORT",										"Port");
define("WEBSITE",									"Weblap");
define("URL",										"URL");
define("TEMPLATE",									"Sablon");
define("LANGUAGE",									"Nyelv");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Vendég felhasználók láthatják a gyűjteményem");
define("FAILED_TO_WRITE_FILE",						"Hiba történt a fájlba írás során");
define("DATABASE_NEW_TEXT",							"Egy újabb adatbázis lesz létrehozva a régi helyett (régebbi táblák törlésre kerülnek)!");
define("DATABASE_UPGRADE_TEXT",						"Az adatbázis frissítve lesz a legújabb verzióra adatvesztés nélkül.");
define("ACCEPT",									"Elfogadom");
define("FINISHED",									"Befelyezve");
define("FINISHED_TEXT",								"Az installálás majdnem kész. Kattintson a Befelyez gombra.");
define("FINISH",									"Befelyez");
?>