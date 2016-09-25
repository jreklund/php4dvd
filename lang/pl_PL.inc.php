<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');
 
/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 *
 * config.php:
 * $settings["languages"] = array("English" => "en_US"); -> $settings["languages"] = array("English" => "en_US", "Polish" => "pl_PL");
 * $settings["defaultlanguage"] = "en_US" -> $settings["defaultlanguage"] = "pl_PL";
 *
 * When you want your translation to be included in the next php4dvd release, please send me a message on https://github.com/jreklund/php4dvd
 */
 
/**
 * Title
 */
define("_TITLE",									"Moja kolekcja filmowa");
 
/**
 * Menu
 */
define("MY_COLLECTION",								"Moja kolekcja");
define("HOME",										"Glówna");
define("BACK",										"Wróc");
define("SETTINGS",									"Ustawienia");
define("MY_PROFILE",								"Mój profil");
define("USER_MANAGEMENT",							"Uzytkownicy");
define("LOG_IN",									"Zaloguj");
define("LOG_OUT",									"Wyloguj");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Chcesz sie wylogowac?");
 
/**
 * Log in page
 */
define("USER_NAME",									"Uzytkownik");
define("PASSWORD",									"Haslo");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Nieprawidlowa nazwa uzytkownika lub haslo");
 
/**
 * Home
 */
// Menu
define("ADD_MOVIE",									"Dodaj film");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Aktualizuj filmy");
define("EXPORT_TO_CSV",								"Eksportuj");
// Search
define("SEARCH_DEFAULT_TEXT",						"Szukaj filmu...");
define("CATEGORIES",								"Kategorie");
define("ALL_CATEGORIES",							"Wszystkie kategorie");
define("SORT_BY",									"Sortuj po");
define("LAYOUT",									"Layout");
define("name asc",									"Nazwie (A-Z)");
define("name desc",									"Nazwie (Z-A)");
define("year asc",									"Roku (0-9)");
define("year desc",									"Roku (9-0)");
define("rating asc",								"Ocenie (0-9)");
define("rating desc",								"Ocenie (9-0)");
define("format asc",								"format (A-Z)");
define("format desc",								"format (Z-A)");
define("seen asc",									"Obejrzanych rosnaco");
define("seen desc",									"Obejrzanych malejaco");
define("own asc",									"Posiadanych rosnaco");
define("own desc",									"Posiadanych malejaco");
define("added asc",									"Dodaniu (stare-nowe)");
define("added desc",								"Dodaniu (nowe-stare)");
define("loaned asc",								"Wypozyczonych (stare-nowe)");
define("loaned desc",								"Wypozyczonych (nowe-stare)");
define("ALL",										"Wszystkim");
define("RESULTS_PER_PAGE",							"Filmów na stronie");
// Results
define("NO_RESULTS_FOUND",							"Nie znaleziono filmów.");
define("NO_COVER",									"Brak okladki");
define("MOVIES_TOTAL",								"Wszystkich filmów");
define("STATISTICS",								"Statystyki");
 
/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Odwiedz IMDb");
define("VIEW_TRAILER",								"Odtwórz trailer");
define("DOWNLOAD_COVER",							"Pobierz okladke");
define("OWN",										"Posiadam");
define("NOT_OWN",									"Nie posiadam");
define("SEEN",										"Obejrzane");
define("UNSEEN",									"Nie obejrzane");
define("EDIT",										"Edycja");
define("REMOVE",									"Usun");
// Movie information
define("LOANED_OUT",								"Wypozyczony");
define("TO",										"dla");
define("ON",										"on");
define("MINUTES",									"minut");
 
/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Zapisz");
define("SAVE_AND_ADD_MOVIE",						"Zapisz i dodaj film");
define("UPDATE",									"Aktualizuj");
define("REMOVE_COVER",								"Usun okladke");
// IMDb search
define("ADD_FROM_IMDB",								"Dodaj z IMDb");
define("SEARCH",									"Szukaj");
define("RESULTS_FROM_IMDB",							"Wyniki z IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Informacje o filmie");
define("IMDB_NUMBER",								"Numer w bazie IMDb");
define("TITLE",										"Tytul");
define("AKA_TITLES",								"Znany takze jako");
define("YEAR",										"Rok");
define("DURATION_MINUTES",							"Dlugosc (minuty)");
define("RATING",									"Ocena");
define("FORMAT",									"Format");
define("DVD",										"DVD");
define("I_HAVE_SEEN_THIS_MOVIE",					"Obejrzalem ten film");
define("I_OWN_THIS_MOVIE",							"Posiadam ten film");
define("LOANED_OUT_TO",								"Wypozyczony dla");
define("LOANED_OUT_SINCE",							"Wypozyczony od");
define("YES",										"Tak");
define("NO",										"Nie");
define("COVER",										"Okladka");
define("SEARCH_FOR_COVER",							"Szukaj okladki dla filmu");
define("PHOTO",										"Plakat");
define("SEARCH_FOR_PHOTO",							"Szukaj plakatu dla filmu");
define("TRAILER_URL",								"Link do trilera (URL)");
define("SEARCH_FOR_TRAILER",						"Szukaj trailera dla filmu");
define("PERSONAL_NOTES",							"Notatki osobiste");
define("TAGLINES",									"Taglines");
define("PLOT_OUTLINE",								"Plot outline");
define("PLOTS",										"Plots");
define("LANGUAGES",									"Jezyki");
define("SUBTITLES",									"Napisy");
define("AUDIO",										"Audio");
define("VIDEO",										"Wideo");
define("COUNTRY",									"Kraj");
define("GENRES",									"Gatunki");
define("DIRECTOR",									"Rezyser");
define("WRITER",									"Autor");
define("PRODUCER",									"Producent");
define("MUSIC",										"Muzyka");
define("CAST",										"Obsada");
// Automatic update
define("AUTOUPDATE_INFO",							"Twoje filmy sa automatycznie aktualizowane z bazy IMDb. To moze zajac chwilke, wiec badz cierpliwy...");
define("STOP_UPDATE",								"Zatrzymaj aktualizacje");
 
/**
* User management
*/
define("NEW_USER",									"Nowy uzytkownik");
define("EMAIL",										"E-mail");
define("AGAIN",										"ponownie");
define("ROLE",										"Rola");
define("GUEST",										"Gosc (tylko podglad)");
define("EDITOR",									"Edytor");
define("ADMIN",										"Administrator");
define("USERS",										"Uzytkownik");
define("LAST_LOGGED_IN",							"Ostatnio zalogowany");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Istnieje juz uzytkownik o tej nazwie lub adresie e-mail!");
 
/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Prosze usunac katalog \"install\" z powodu bezpieczenstwa!");
define("CONFIRM_REMOVE",							"Jestes pewien, ze chcesz to usunac?");
define("CONFIRM_REMOVE_COVER",						"Jestes pewien, ze chcesz usunac okladke?");
// Validation
define("VALIDATOR_REQUIRED",						"To pole jest wymagane");
define("VALIDATOR_NUMBER",							"Prosze wprowadzic prawidlowy numer");
define("VALIDATOR_DIGITS",							"Prosze wprowadzic prawidlowa cyfre");
define("VALIDATOR_EMAIL",							"Prosze podac prawidlowy adres e-mail");
define("VALIDATOR_URL",								"Prosze podac prawidlowy adres url (http://...)");
define("VALIDATOR_DATE",							"Prosze podac prawidlowa date (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Prosze uzyc prawidlowego typu pliku (jpg)");
define("VALIDATOR_EQUAL_TO",						"Obie wartosci powinny byc identyczne");
 
/**
 * Installer
 */
define("INSTALLATION",								"Instalacja");
define("WELCOME",									"Witaj");
define("WELCOME_TEXT",								"Witaj w kreatorze instalacji. Aby zainstalowac php4dvd wykonaj nastepne kroki.");
define("NEXT",										"Nastepny");
define("PREVIOUS",									"Poprzedni");
define("PERMISSIONS",								"Uprawnienia");
define("PERMISSIONS_TEXT",							"Nastepujace katalogi i pliki musza byc utworzone i wymagaja praw zapisu:");
define("OK",										"ok");
define("FAILED",									"blad");
define("FIX_PERMISSIONS",							"Ustaw uprawnienia chmod 777 dla katalogów lub plików poprzez ulubionego klienta FTP.");
define("REFRESH",									"Odswiez");
define("CONFIGURATION",								"Konfiguracja");
define("CONFIGURATION_TEXT",						"Wypelnij ten formularz aby skonfigurowac php4dvd na twoim serwerze.");
define("DATABASE",									"Baza danych");
define("HOST",										"Adres (host)");
define("PORT",										"Port");
define("WEBSITE",									"Strona www");
define("URL",										"Url");
define("TEMPLATE",									"Szablon");
define("LANGUAGE",									"Jezyk");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Goscie moga ogladac moja kolekcje filmów");
define("FAILED_TO_WRITE_FILE",						"Nie udalo sie zapisac do pliku");
define("DATABASE_NEW_TEXT",							"Zostanie zainstalowana nowa wersja bazy danych. Jakiekolwiek starsze tabele zostana usuniete!");
define("DATABASE_UPGRADE_TEXT",						"Twoja baza danych zostanie zaktualizowana do najnowszej wersji. Nie zostana usuniete zadne informacje (dla bezpieczenstwa i tak warto zrobic backup!).");
define("ACCEPT",									"Akceptuje");
define("FINISHED",									"Zakonczono");
define("FINISHED_TEXT",								"Instalacja zostala prawie zakonczona. Kliknij przycisk \"Zakoncz\" ponizej..");
define("FINISH",									"Zakoncz");
?>