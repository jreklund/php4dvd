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
define("_TITLE",									"Meine Kollektion");

/**
 * Menu
 */
define("MY_COLLECTION",								"Meine Kollektion");
define("HOME",										"Home");
define("BACK",										"Zurück");
define("SETTINGS",									"Einstellungen");
define("MY_PROFILE",								"Mein Profil");
define("USER_MANAGEMENT",							"Benutzerverwaltung");
define("LOG_IN", 									"Einloggen");
define("LOG_OUT",									"Ausloggen");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Bist du sicher, dass du dich ausloggen möchtest?");

/**
 * Log in page
 */
define("USER_NAME",									"Benutzername");
define("PASSWORD",									"Passwort");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Ungültiger Benutzername oder Passwort");
define("REMEMBER_ME",								"An mich erinnern");

/**
 * Home
 */
// Menu
define("ADD",										"Hinzufügen");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Alle aktualisieren");
define("EXPORT_TO_CSV",								"Exportieren");
// Search
define("SEARCH_DEFAULT_TEXT",						"Suchen...");
define("CATEGORIES",								"Kategorien");
define("ALL_CATEGORIES",							"Alle Kategorien");
define("FORMATS",									"Formate");
define("ALL_FORMATS",								"Alle Formate");
define("SORT_BY",									"Sortiere nach");
define("LAYOUT",									"Layout");
define("nameorder asc",								"Name (A-Z)");
define("nameorder desc",							"Name (Z-A)");
define("year asc",									"Jahr (0-9)");
define("year desc",									"Jahr (9-0)");
define("rating asc",								"Bewertung (0-9)");
define("rating desc",								"Bewertung (9-0)");
define("votes asc",								    "Stimmen (0-9)");
define("votes desc",								"Stimmen (9-0)");
define("format asc",								"Format (A-Z)");
define("format desc",								"Format (Z-A)");
define("seen asc",									"Gesehen");
define("seen desc",									"Nicht gesehen");
define("own asc",									"In Besitz");
define("own desc",									"Nicht in Besitz");
define("added asc",									"Hinzugefügt (alt-neu)");
define("added desc",								"Hinzugefügt (neu-alt)");
define("loaned asc",								"Verliehen (alt-neu)");
define("loaned desc",								"Verliehen (neu-alt)");
define("ALL", 										"Alle");
define("RESULTS_PER_PAGE",							"Einträge pro Seite");
define("FILTER_BY",									"Filtern nach");
// Results
define("NO_RESULTS_FOUND",							"Keine Titel gefunden.");
define("NO_COVER",									"Kein Titelbild");
define("NUMBER_OF_TITLES",							"Anzahl der Titel");
define("STATISTICS",								"Statistiken");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Besuche IMDb");
define("VIEW_TRAILER",								"Trailer ansehen");
define("DOWNLOAD_COVER",							"Titelbild herunterladen");
define("FAVOURITE",									"Favorit");
define("NOT_FAVOURITE",								"Kein Favorit");
define("OWN",										"In Besitz");
define("NOT_OWN",									"Nicht in Besitz");
define("DO_YOU_OWN_THIS",							"Auf 'In Besitz' setzen?");
define("SEEN",										"Gesehen");
define("UNSEEN",									"Nicht gesehen");
define("HAVE_YOU_SEEN_THIS",						"Auf 'Gesehen' setzen?");
define("EDIT",										"Bearbeiten");
define("REMOVE",									"Entfernen");
// Movie information
define("LOANED_OUT",								"Verliehen");
define("TO",										"an");
define("ON",										"am");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Sichern");
define("SAVE_AND_ADD_ANOTHER",						"Sichern und nächsten hinzufügen");
define("UPDATE",									"Aktualisieren");
define("REMOVE_COVER",								"Titelbild entfernen");
// IMDb search
define("ADD_FROM_IMDB",								"Aus IMDb hinzufügen");
define("SEARCH",									"Suche");
define("RESULTS_FROM_IMDB",							"Ergebnisse bei IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Information");
define("IMDB_NUMBER",								"IMDb Nummer");
define("TITLE",										"Titel");
define("TITLE_ORDER",								"Titel (Sortiere nach)");
define("AKA_TITLES",								"Ebenfalls bekannt als");
define("YEAR",										"Jahr");
define("DURATION",									"Laufzeit");
define("MINUTES",									"Minuten");
define("DURATION_MINUTES",							"Laufzeit (Minuten)");
define("RATING",									"Bewertung");
define("VOTES",									    "Stimmen");
define("FORMAT",									"Format");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Altersfreigabe");
define("PARENTAL_GUIDANCE_AGE",						"Jahre");
define("LOANED_OUT_TO",								"Verliehen an");
define("LOANED_OUT_SINCE",							"Verliehen seit");
define("MOVIE",										"Kinofilm");
define("TV_SERIES",									"Fernsehserie");
define("SEASONS",									"Staffeln");
define("YES",										"Ja");
define("NO",										"Nein");
define("COVER",										"Titelbild");
define("SEARCH_FOR_COVER",							"Nach Titelbild suchen");
define("PHOTO",										"Poster");
define("SEARCH_FOR_PHOTO",							"Nach Poster suchen");
define("PHOTO_FROM_IMDB",							"Poster (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Download von IMDb");
define("TRAILER_URL",								"Trailer URL");
define("SEARCH_FOR_TRAILER",						"Nach Trailer suchen");
define("PERSONAL_NOTES",							"Persönliche Notizen");
define("TAGLINES",									"Taglines");
define("PLOT_OUTLINE",								"Zusammenfassung der Handlung");
define("PLOTS",										"Handlung");
define("LANGUAGES",									"Sprachen");
define("SUBTITLES",									"Untertitel");
define("AUDIO",										"Audio");
define("VIDEO",										"Video");
define("COUNTRY",									"Land");
define("GENRES",									"Genres");
define("MPAA",										"MPAA");
define("DIRECTOR",									"Regisseur");
define("WRITER",									"Drehbuch");
define("PRODUCER",									"Produzent");
define("MUSIC",										"Musik");
define("CAST",										"Darsteller");
// Automatic update
define("AUTOUPDATE_INFO",							"Deine Filme werden automatisiert aus IMDb aktualisiert. Dies kann etwas Zeit in Anspruch nehmen...");
define("STOP_UPDATE",								"Aktualisierung abbrechen");

/**
* User management
*/
define("NEW_USER",									"Neuer Benutzer");
define("EMAIL",										"E-Mail");
define("AGAIN",										"Wiederholung");
define("ROLE",										"Rolle");
define("GUEST",										"Gast (nur Ansicht)");
define("EDITOR",									"Bearbeiter");
define("ADMIN",										"Admin");
define("USERS",										"Benutzer");
define("LAST_LOGGED_IN",							"Zuletzt eingeloggt");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Es existiert bereits ein Benutzer mit dieser E-Mail-Adresse!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Lösche bitte aus Sicherheitsgründen den Ordner install/ !");
define("CONFIRM_REMOVE",							"Willst du das wirklich entfernen?");
define("CONFIRM_REMOVE_COVER",						"Willst du dieses Titelbild wirklich entfernen?");
// Validation
define("VALIDATOR_REQUIRED",						"Dieses Feld ist erforderlich");
define("VALIDATOR_NUMBER",							"Trage bitte eine gültige Nummer ein");
define("VALIDATOR_DIGITS",							"Trage bitte eine gültige Zahl ein");
define("VALIDATOR_EMAIL",							"Trage bitte eine gültige E-Mail-Adresse ein");
define("VALIDATOR_URL",								"Trage bitte eine gültige URL ein (http://...)");
define("VALIDATOR_DATE",							"Trage bitte ein gültiges Datum ein (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Verwende bitte einen gültigen Dateityp (jpg)");
define("VALIDATOR_EQUAL_TO",						"Beide Werte sollten gleich sein");
define("VALIDATOR_USERNAME",						"Bitte geben Sie einen gültigen Benutzernamen ein. (A–Z, 0–9, .)\nZwischen 5-50 Zeichen.");

/**
 * Installer
 */
define("INSTALLATION",								"Installation");
define("WELCOME",									"Willkommen");
define("WELCOME_TEXT",								"Willkommen beim Installationsassistenten. Folge dem nächsten Schritt um php4dvd zu installieren.");
define("NEXT",										"Vorwärts");
define("PREVIOUS",									"Zurück");
define("PERMISSIONS",								"Berechtigungen");
define("PERMISSIONS_TEXT",							"Die folgenden Ordner und Dateien müssen erstellt werden und benötigen Schreibberechtigung:");
define("OK",										"OK");
define("FAILED",									"Fehlgeschlagen");
define("FIX_PERMISSIONS",							"Setze den chmod (777) für diese Ordner oder Dateien mit deinem bevorzugten FTP Client-Programm.");
define("REFRESH",									"Erneut prüfen");
define("CONFIGURATION",								"Konfiguration");
define("CONFIGURATION_TEXT",						"Fülle dieses Formular aus, um php4dvd für deinen Server zu konfigurieren.");
define("DATABASE",									"Datenbank");
define("HOST",										"Host");
define("PORT",										"Port");
define("WEBSITE",									"Website");
define("URL",										"Url");
define("TEMPLATE",									"Template");
define("LANGUAGE",									"Sprache");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Gäste dürfen meine Kollektion sehen");
define("FAILED_TO_WRITE_FILE",						"Schreiben der Datei fehlgeschlagen");
define("DATABASE_NEW_TEXT",							"Eine neue Version der Datenbank wird installiert. Existierende Tabellen werden gelöscht!");
define("DATABASE_UPGRADE_TEXT",						"Deine Datenbank wird auf die neueste Version aktualisiert. Keine Daten werden dabei gelöscht (es ist sicherer, vorab ein Backup anzulegen!).");
define("ACCEPT",									"Ich stimme zu");
define("FINISHED",									"Fertig");
define("FINISHED_TEXT",								"Deine Installation ist fast fertig. Klicke zum Fertigstellen auf den Kopf unten.");
define("FINISH",									"Fertigstellen");
?>
