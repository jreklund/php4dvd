<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');
 
/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 *
 * config.php:
 * $settings["languages"] = array("English" => "en"); -> $settings["languages"] = array("English" => "en", "Polish" => "pl");
 * $settings["defaultlanguage"] = "en" -> $settings["defaultlanguage"] = "pl";
 *
 * When you want your translation to be included in the next php4dvd release, please send me a message on https://github.com/jreklund/php4dvd
 */
 
/**
 * Title
 */
define("_TITLE",									"Moja kolekcja");
 
/**
 * Menu
 */
define("MY_COLLECTION",								"Moja kolekcja");
define("HOME",										"Strona główna");
define("BACK",										"Wróć");
define("SETTINGS",									"Ustawienia");
define("MY_PROFILE",								"Mój profil");
define("USER_MANAGEMENT",							"Użytkownicy");
define("LOG_IN",									"Zaloguj");
define("LOG_OUT",									"Wyloguj");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Chcesz się wylogować?");
 
/**
 * Log in page
 */
define("USER_NAME",									"Użytkownik");
define("PASSWORD",									"Hasło");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Nieprawidłowa nazwa użytkownika lub hasło");
define("REMEMBER_ME",								"Zapamiętaj mnie");
 
/**
 * Home
 */
// Menu
define("ADD",										"Dodaj nowy");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Aktualizuj z IMDb");
define("EXPORT_TO_CSV",								"Eksportuj do CSV");
// Search
define("SEARCH_DEFAULT_TEXT",						"Szukaj...");
define("CATEGORIES",								"Kategorie");
define("ALL_CATEGORIES",							"Wszystkie kategorie");
define("FORMATS",									"Typie nośnika");
define("ALL_FORMATS",								"Wszystkie rodzaje nośników");
define("SORT_BY",									"Sortuj po");
define("LAYOUT",									"Wybierz layout");
define("nameorder asc",								"Nazwie (rosnąco)");
define("nameorder desc",							"Nazwie (malejąco)");
define("year asc",									"Roku produkcji (od najstarszych)");
define("year desc",									"Roku produkcji (od najnowszych)");
define("rating asc",								"Ocenie (od najniższej)");
define("rating desc",								"Ocenie (od najwyższej)");
define("votes asc",								    "Głosów (od najniższej)");
define("votes desc",								"Głosów (od najwyższej)");
define("format asc",								"Typie nośnika (np DVD) (rosnąco)");
define("format desc",								"Typie nośnika (np DVD) (malejąco)");
define("seen asc",									"Najpierw niewidziane");
define("seen desc",									"Najpierw widziane");
define("own asc",									"Najpierw nieposiadane");
define("own desc",									"Najpierw posiadane");
define("added asc",									"Dacie dodania (od najstarszych)");
define("added desc",								"Dacie dodania (od najnowszych)");
define("loaned asc",								"Najpierw niewypożyczone");
define("loaned desc",								"Najpierw wypożyczone");
define("ALL",										"Wszystkie");
define("RESULTS_PER_PAGE",							"Pozycji na stronie");
define("FILTER_BY",									"Filtruj po");
// Results
define("NO_RESULTS_FOUND",							"Nie znaleziono pozycji");
define("NO_COVER",									"Brak okładki");
define("NUMBER_OF_TITLES",							"Ilość tytułów");
define("STATISTICS",								"Statystyki");
 
/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Odwiedź IMDb");
define("VIEW_TRAILER",								"Odtwórz trailer");
define("DOWNLOAD_COVER",							"Pobierz okładkę");
define("FAVOURITE",									"Ulubiony");
define("NOT_FAVOURITE",								"Nie ulubionym");
define("OWN",										"Mam w kolekcji");
define("NOT_OWN",									"Nie posiadam!");
define("DO_YOU_OWN_THIS",							"Czy jesteś właścicielem tego?");
define("SEEN",										"Widziałem");
define("UNSEEN",									"Nie widziałem");
define("HAVE_YOU_SEEN_THIS",						"Widziałeś to?");
define("EDIT",										"Edytuj");
define("REMOVE",									"Usuń");
// Movie information
define("LOANED_OUT",								"Wypożyczony");
define("TO",										"dla");
define("ON",										"od");
 
/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Zapisz");
define("SAVE_AND_ADD_ANOTHER",						"Zapisz i dodaj następny");
define("UPDATE",									"Aktualizuj");
define("REMOVE_COVER",								"Usuń okładkę");
// IMDb search
define("ADD_FROM_IMDB",								"Szukaj w bazie IMDb");
define("SEARCH",									"Szukaj");
define("RESULTS_FROM_IMDB",							"Wyniki z IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Informacja");
define("IMDB_NUMBER",								"Numer w bazie IMDb");
define("TITLE",										"Tytuł");
define("TITLE_ORDER",								"Tytuł (Sortuj po)");
define("AKA_TITLES",								"Inne znane tytuły");
define("YEAR",										"Rok produkcji");
define("DURATION",									"Długość");
define("MINUTES",									"minut");
define("DURATION_MINUTES",							"Długość (minuty)");
define("RATING",									"Ocena");
define("VOTES",									    "Głosów");
define("FORMAT",									"Typ nośnika");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Ocena wieku");
define("PARENTAL_GUIDANCE_AGE",						"roku");
define("LOANED_OUT_TO",								"Wypożyczony dla");
define("LOANED_OUT_SINCE",							"Wypożyczony od");
define("MOVIE",										"Film");
define("TV_SERIES",									"Serial TV");
define("SEASONS",									"Sezony");
define("YES",										"Tak");
define("NO",										"Nie");
define("COVER",										"Okładka");
define("SEARCH_FOR_COVER",							"Szukaj okładki dla");
define("PHOTO",										"Plakat");
define("SEARCH_FOR_PHOTO",							"Szukaj plakatu dla");
define("PHOTO_FROM_IMDB",							"Plakat (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Pobierz z IMDb");
define("TRAILER_URL",								"Link do trilera (URL)");
define("SEARCH_FOR_TRAILER",						"Szukaj trailera dla");
define("PERSONAL_NOTES",							"Notatki osobiste");
define("TAGLINES",									"Slogany");
define("PLOT_OUTLINE",								"Zarys fabuły");
define("PLOTS",										"Fabuła");
define("LANGUAGES",									"Języki");
define("SUBTITLES",									"Napisy");
define("AUDIO",										"Audio");
define("VIDEO",										"Wideo");
define("COUNTRY",									"Kraj");
define("GENRES",									"Gatunki");
define("MPAA",										"MPAA");
define("DIRECTOR",									"Reżyser");
define("WRITER",									"Autor");
define("PRODUCER",									"Producent");
define("MUSIC",										"Muzyka");
define("CAST",										"Obsada");
// Automatic update
define("AUTOUPDATE_INFO",							"Twoje filmy są obecnie aktualizowane informacjami z bazy IMDb. W zależności od ilości filmów, może to zajać dłuższą chwilę, Bądź cierpliwy...");
define("STOP_UPDATE",								"Zatrzymaj aktualizację");
 
/**
* User management
*/
define("NEW_USER",									"Dodaj nowego użytkownika");
define("EMAIL",										"E-mail");
define("AGAIN",										"podaj ponownie");
define("ROLE",										"Typ konta");
define("GUEST",										"Gość (tylko podgląd)");
define("EDITOR",									"Edytor");
define("ADMIN",										"Administrator");
define("USERS",										"Użytkownik");
define("LAST_LOGGED_IN",							"Ostatnio zalogowany");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Istnieje już użytkownik o takiej nazwie lub o takim adresie e-mail!");
 
/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Dla bezpieczeństwa, proszę ręcznie usunąć katalog \"install\"!");
define("CONFIRM_REMOVE",							"Jesteś pewien, ze chcesz to usunąć?");
define("CONFIRM_REMOVE_COVER",						"Jestes pewien, ze chcesz usunąć okładkę?");
// Validation
define("VALIDATOR_REQUIRED",						"To pole nie może być puste!");
define("VALIDATOR_NUMBER",							"Dozwolone są tylko wartości liczbowe i zmiennoprzecinkowe np \"1\", \"7.6\" itp.");
define("VALIDATOR_DIGITS",							"Dozwolone są tylko wartości liczbowe np \"1990\", \"0034213\" itp.");
define("VALIDATOR_EMAIL",							"Proszę podać prawidłowy adres e-mail");
define("VALIDATOR_URL",								"Proszę podać prawidłowy adres url (http://...)");
define("VALIDATOR_DATE",							"Proszę podać prawidłową datę (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Proszę uzyć prawidłowego typu pliku (jpg)");
define("VALIDATOR_EQUAL_TO",						"Hasła różnią się od siebie");
define("VALIDATOR_USERNAME",						"Proszę podać poprawną nazwę użytkownika. (A–Z, 0–9, .)\nMiędzy 5-50 znaków.");
 
/**
 * Installer
 */
define("INSTALLATION",								"Instalacja");
define("WELCOME",									"Witaj");
define("WELCOME_TEXT",								"Witaj w kreatorze instalacji. Aby zainstalować php4dvd wykonaj następne kroki.");
define("NEXT",										"Następny");
define("PREVIOUS",									"Poprzedni");
define("PERMISSIONS",								"Uprawnienia");
define("PERMISSIONS_TEXT",							"Następujące katalogi i pliki muszć być utworzone i wymagają praw zapisu:");
define("OK",										"ok");
define("FAILED",									"błąd");
define("FIX_PERMISSIONS",							"Ustaw uprawnienia chmod 777 dla katalogów lub plików poprzez ulubionego klienta FTP.");
define("REFRESH",									"Odśwież");
define("CONFIGURATION",								"Konfiguracja");
define("CONFIGURATION_TEXT",						"Wypełnij ten formularz aby skonfigurować php4dvd na twoim serwerze.");
define("DATABASE",									"Baza danych");
define("HOST",										"Adres (host)");
define("PORT",										"Port");
define("WEBSITE",									"Strona www");
define("URL",										"Url");
define("TEMPLATE",									"Szablon");
define("LANGUAGE",									"Język");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Goście mogą ogladać moją kolekcję");
define("FAILED_TO_WRITE_FILE",						"Nie udało się zapisać do pliku");
define("DATABASE_NEW_TEXT",							"Zostanie zainstalowana nowa wersja bazy danych. Jakiekolwiek starsze tabele zostaną usunięte!");
define("DATABASE_UPGRADE_TEXT",						"Twoja baza danych zostanie zaktualizowana do najnowszej wersji. Nie zostaną usunięte żadne informacje (dla bezpieczeństwa i tak warto zrobić backup!).");
define("ACCEPT",									"Akceptuję");
define("FINISHED",									"Zakończono");
define("FINISHED_TEXT",								"Instalacja została prawie zakończona. Kliknij przycisk \"Zakończ\" poniżej..");
define("FINISH",									"Zakończ");
?>