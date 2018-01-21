<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 * 
 * config.php:
 * $settings["languages"] = array("English" => "en"); -> $settings["languages"] = array("English" => "en", "Italian" => "it");
 * $settings["defaultlanguage"] = "en" -> $settings["defaultlanguage"] = "it";
 * 
 * When you want your translation to be included in the next php4dvd release, please send me a message on https://github.com/jreklund/php4dvd
 */

/**
 * Title
 */
define("_TITLE",									"La mia collezione");

/**
 * Menu
 */
define("MY_COLLECTION",								"La mia collezione");
define("HOME",										"Home");
define("BACK",										"Indietro");
define("SETTINGS",									"Impostazioni");
define("MY_PROFILE",								"Il mio profilo");
define("USER_MANAGEMENT",							"Gestione utenti");
define("LOG_IN", 									"Accedi");
define("LOG_OUT",									"Esci");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Sei sicuro di voler uscire?");

/**
 * Log in page
 */
define("USER_NAME",									"Nome Utente");
define("PASSWORD",									"Password");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Nome Utente o password incorretti");
define("REMEMBER_ME",								"Ricordami");

/**
 * Home
 */
// Menu
define("ADD",										"Aggiungi");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Aggiorna tutti");
define("EXPORT_TO_CSV",								"Esporta");
// Search
define("SEARCH_DEFAULT_TEXT",						"Cerca...");
define("CATEGORIES",								"Categorie");
define("ALL_CATEGORIES",							"Tutte le categorie");
define("FORMATS",									"Formati");
define("ALL_FORMATS",								"Tutti i Formati");
define("SORT_BY",									"Filtra per");
define("LAYOUT",									"Layout");
define("nameorder asc",								"Nome (A-Z)");
define("nameorder desc",							"Nome (Z-A)");
define("year asc",									"Anno (0-9)");
define("year desc",									"Anno (9-0)");
define("rating asc",								"Voto (0-9)");
define("rating desc",								"Voto (9-0)");
define("format asc",								"Formato (A-Z)");
define("format desc",								"Formato (Z-A)");
define("seen asc",									"Visto");
define("seen desc",									"Non visto");
define("own asc",									"Posseduto");
define("own desc",									"Non Posseduto");
define("added asc",									"Aggiunto (vecchi-nuovi)");
define("added desc",								"Aggiunto (nuovi-vecchi)");
define("loaned asc",								"In prestito (vecchi-nuovi)");
define("loaned desc",								"In prestito (nuovi-vecchi)");
define("ALL", 										"Tutti");
define("RESULTS_PER_PAGE",							"Risultati per pagina");
define("FILTER_BY",									"Filtra per");
// Results
define("NO_RESULTS_FOUND",							"Nessun titolo trovato.");
define("NO_COVER",									"Nessuna cover");
define("NUMBER_OF_TITLES",							"Numero titoli");
define("STATISTICS",								"Statistiche");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Visita IMDb");
define("VIEW_TRAILER",								"Guarda trailer");
define("DOWNLOAD_COVER",							"Scarica cover");
define("FAVOURITE",									"Preferito");
define("NOT_FAVOURITE",								"Non preferito");
define("OWN",										"Posseduto");
define("NOT_OWN",									"Non poosseduto");
define("SEEN",										"Visto");
define("UNSEEN",									"Non visto");
define("EDIT",										"Modifica");
define("REMOVE",									"Rimuovi");
// Movie information
define("LOANED_OUT",								"In prestito");
define("TO",										"a");
define("ON",										"dal");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Salva");
define("SAVE_AND_ADD_ANOTHER",						"Salva e aggiungi altro");
define("UPDATE",									"Aggiorna");
define("REMOVE_COVER",								"Rimuovi cover");
// IMDb search
define("ADD_FROM_IMDB",								"Aggiungi da IMDb");
define("SEARCH",									"Cerca");
define("RESULTS_FROM_IMDB",							"Risultati da IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Informazioni");
define("IMDB_NUMBER",								"Numero IMDb");
define("TITLE",										"Titolo");
define("TITLE_ORDER",								"Titolo (filtrato per)");
define("AKA_TITLES",								"Anche conosciuto come");
define("YEAR",										"Anno");
define("DURATION",									"Durata");
define("MINUTES",									"minuti");
define("DURATION_MINUTES",							"Durata (minuti)");
define("RATING",									"Voto");
define("FORMAT",									"Formato");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Valutazione età");
define("PARENTAL_GUIDANCE_AGE",						"anni");
define("LOANED_OUT_TO",								"Prestato a");
define("LOANED_OUT_SINCE",							"In prestito da");
define("MOVIE",										"Film");
define("TV_SERIES",									"Serie TV");
define("SEASONS",									"Stagione");
define("YES",										"Si");
define("NO",										"No");
define("COVER",										"Cover");
define("SEARCH_FOR_COVER",							"Cerca cover");
define("PHOTO",										"Poster");
define("SEARCH_FOR_PHOTO",							"Cerca poster");
define("PHOTO_FROM_IMDB",							"Poster (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Scarica da IMDb");
define("TRAILER_URL",								"URL Trailer");
define("SEARCH_FOR_TRAILER",						"Cerca trailer");
define("PERSONAL_NOTES",							"Note personali");
define("TAGLINES",									"Taglines");
define("PLOT_OUTLINE",								"Trama");
define("PLOTS",										"Trame");
define("LANGUAGES",									"Lingue");
define("SUBTITLES",									"Sottotitoli");
define("AUDIO",										"Audio");
define("VIDEO",										"Video");
define("COUNTRY",									"Nazione");
define("GENRES",									"Genere");
define("MPAA",										"MPAA");
define("DIRECTOR",									"Regia");
define("WRITER",									"Scrittura");
define("PRODUCER",									"Produttore");
define("MUSIC",										"Musica");
define("CAST",										"Cast");
// Automatic update
define("AUTOUPDATE_INFO",							"I tuoi film saranno aggiornati automaticamente da IMDb. Potrebbe volerci del tempo , quindi porta pazienza...");
define("STOP_UPDATE",								"Ferma l'aggiornamento");

/**
* User management
*/
define("NEW_USER",									"Nuovo utente");
define("EMAIL",										"E-mail");
define("AGAIN",										"ancora");
define("ROLE",										"Ruolo");
define("GUEST",										"Visitatore (solo visione)");
define("EDITOR",									"Editore");
define("ADMIN",										"Amministratore");
define("USERS",										"Utenti");
define("LAST_LOGGED_IN",							"Ultimo login il");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Esiste già un utente con questo nome o con questa e-mail!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Per piacere elimina la directory install/ per ragioni di sicurezza!");
define("CONFIRM_REMOVE",							"Sei sicuro di volerlo eliminare?");
define("CONFIRM_REMOVE_COVER",						"Sei sicuro di voler eliminare questa cover?");
// Validation
define("VALIDATOR_REQUIRED",						"Questo campo è obbligatorio");
define("VALIDATOR_NUMBER",							"Per piacere inserisci un numero valido");
define("VALIDATOR_DIGITS",							"Per piacere inserisci un numero valido");
define("VALIDATOR_EMAIL",							"Per piacere inserisci un indirizzo e-mail valido");
define("VALIDATOR_URL",								"Per piacere inserisci un URL valido (http://...)");
define("VALIDATOR_DATE",							"Per piacere inserisci una data valida (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Per piacere utilizza un tipo di file valido (jpg)");
define("VALIDATOR_EQUAL_TO",						"Entrambi i campi devono corrispondere");
define("VALIDATOR_USERNAME",						"Per favore inserisci un username valido. (A–Z, 0–9, .)\nTra 5 ed i 50 caratteri.");

/**
 * Installer
 */
define("INSTALLATION",								"Installazione");
define("WELCOME",									"Benvenuto");
define("WELCOME_TEXT",								"Benvenuto nell'installazione guidata. Segui il prossimo passo per installare php4dvd.");
define("NEXT",										"Prossimo");
define("PREVIOUS",									"Precedente");
define("PERMISSIONS",								"Permessi");
define("PERMISSIONS_TEXT",							"Le seguenti directory e file devono essere create e richiedono permessi di scrittura:");
define("OK",										"ok");
define("FAILED",									"fallito");
define("FIX_PERMISSIONS",							"Imposta il Chmod (777) su questa directory o sui file usando un client FTP.");
define("REFRESH",									"Aggiorna");
define("CONFIGURATION",								"Configurazione");
define("CONFIGURATION_TEXT",						"Compila questo modulo per configurare php4dvd per il tuo server.");
define("DATABASE",									"Database");
define("HOST",										"Host");
define("PORT",										"Porta");
define("WEBSITE",									"Sito Web");
define("URL",										"Url");
define("TEMPLATE",									"Template");
define("LANGUAGE",									"Lingua");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"I visitatori possono vedere la mia collezione");
define("FAILED_TO_WRITE_FILE",						"Scrittura del file fallita");
define("DATABASE_NEW_TEXT",							"Verrà installata una nuova versione del database. Tutte le vecchie tabelle verranno rimosse!");
define("DATABASE_UPGRADE_TEXT",						"Il tuo database è stato aggiornato all'ultima versione. Nessun dato è stato rimosso (per sicurezza fai prima un backup!).");
define("ACCEPT",									"Accetto");
define("FINISHED",									"Finito");
define("FINISHED_TEXT",								"L'installazione è quasi terminata. Clicca sul pulsante fine qui sotto.");
define("FINISH",									"Fine");
?>
