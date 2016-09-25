<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 * 
 * config.php:
 * $settings["languages"] = array("English" => "en_US"); -> $settings["languages"] = array("English" => "en_US", "Nederlands" => "nl_NL");
 * $settings["defaultlanguage"] = "en_US" -> $settings["defaultlanguage"] = "nl_NL";
 * 
 * When you want your translation to be included in the next php4dvd release, please send me a message on https://github.com/jreklund/php4dvd
 */

/**
 * Title
 */
define("_TITLE",									"My movie collection");

/**
 * Menu
 */
define("MY_COLLECTION",								"My collection");
define("HOME",										"Home");
define("BACK",										"Back");
define("SETTINGS",									"Settings");
define("MY_PROFILE",								"My profile");
define("USER_MANAGEMENT",							"User management");
define("LOG_IN", 									"Log in");
define("LOG_OUT",									"Log out");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Are you sure you want to log out?");

/**
 * Log in page
 */
define("USER_NAME",									"User name");
define("PASSWORD",									"Password");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Incorrect user name or password");

/**
 * Home
 */
// Menu
define("ADD_MOVIE",									"Add movie");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Update all");
define("EXPORT_TO_CSV",								"Export");
// Search
define("SEARCH_DEFAULT_TEXT",						"Search for movies...");
define("CATEGORIES",								"Categories");
define("ALL_CATEGORIES",							"All categories");
define("SORT_BY",									"Sort by");
define("LAYOUT",									"Layout");
define("name asc",									"name (A-Z)");
define("name desc",									"name (Z-A)");
define("year asc",									"year (0-9)");
define("year desc",									"year (9-0)");
define("rating asc",								"rating (0-9)");
define("rating desc",								"rating (9-0)");
define("format asc",								"format (A-Z)");
define("format desc",								"format (Z-A)");
define("seen asc",									"seen");
define("seen desc",									"seen inverse");
define("own asc",									"own");
define("own desc",									"own inverse");
define("added asc",									"added (old-new)");
define("added desc",								"added (new-old)");
define("loaned asc",								"loaned out (old-new)");
define("loaned desc",								"loaned out (new-old)");
define("ALL", 										"All");
define("RESULTS_PER_PAGE",							"results per page");
// Results
define("NO_RESULTS_FOUND",							"No movies where found.");
define("NO_COVER",									"No cover");
define("MOVIES_TOTAL",								"Total movies");
define("STATISTICS",								"Statistics");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Visit IMDb");
define("VIEW_TRAILER",								"View trailer");
define("DOWNLOAD_COVER",							"Download cover");
define("OWN",										"Own");
define("NOT_OWN",									"Not own");
define("SEEN",										"Seen");
define("UNSEEN",									"Unseen");
define("EDIT",										"Edit");
define("REMOVE",									"Remove");
// Movie information
define("LOANED_OUT",								"Loaned out");
define("TO",										"to");
define("ON",										"on");
define("MINUTES",									"minutes");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Save");
define("SAVE_AND_ADD_MOVIE",						"Save and add movie");
define("UPDATE",									"Update");
define("REMOVE_COVER",								"Remove cover");
// IMDb search
define("ADD_FROM_IMDB",								"Add from IMDb");
define("SEARCH",									"Search");
define("RESULTS_FROM_IMDB",							"Results from IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Movie information");
define("IMDB_NUMBER",								"IMDb number");
define("TITLE",										"Title");
define("AKA_TITLES",								"Also known as");
define("YEAR",										"Year");
define("DURATION_MINUTES",							"Duration (minutes)");
define("RATING",									"Rating");
define("FORMAT",									"Format");
define("DVD",										"DVD");
define("I_HAVE_SEEN_THIS_MOVIE",					"I have seen this movie");
define("I_OWN_THIS_MOVIE",							"I own this movie");
define("LOANED_OUT_TO",								"Loaned out to");
define("LOANED_OUT_SINCE",							"Loaned out since");
define("YES",										"Yes");
define("NO",										"No");
define("COVER",										"Cover");
define("SEARCH_FOR_COVER",							"Search for movie cover");
define("PHOTO",										"Poster");
define("SEARCH_FOR_PHOTO",							"Search for movie poster");
define("TRAILER_URL",								"Trailer URL");
define("SEARCH_FOR_TRAILER",						"Search for movie trailer");
define("PERSONAL_NOTES",							"Personal notes");
define("TAGLINES",									"Taglines");
define("PLOT_OUTLINE",								"Plot outline");
define("PLOTS",										"Plots");
define("LANGUAGES",									"Languages");
define("SUBTITLES",									"Subtitles");
define("AUDIO",										"Audio");
define("VIDEO",										"Video");
define("COUNTRY",									"Country");
define("GENRES",									"Genres");
define("DIRECTOR",									"Director");
define("WRITER",									"Writer");
define("PRODUCER",									"Producer");
define("MUSIC",										"Music");
define("CAST",										"Cast");
// Automatic update
define("AUTOUPDATE_INFO",							"Your movies are automatically updated from IMDb. This may take a while, so please be patient...");
define("STOP_UPDATE",								"Stop the update");

/**
* User management
*/
define("NEW_USER",									"New user");
define("EMAIL",										"E-mail");
define("AGAIN",										"again");
define("ROLE",										"Role");
define("GUEST",										"Guest (view only)");
define("EDITOR",									"Editor");
define("ADMIN",										"Admin");
define("USERS",										"Users");
define("LAST_LOGGED_IN",							"Last logged in");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"A user with the same user name or e-mail address already exists!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Please remove the install/ directory for security reasons!");
define("CONFIRM_REMOVE",							"Are you sure you want to remove this?");
define("CONFIRM_REMOVE_COVER",						"Are you sure you want to remove this cover?");
// Validation
define("VALIDATOR_REQUIRED",						"This field is required");
define("VALIDATOR_NUMBER",							"Please enter a valid number");
define("VALIDATOR_DIGITS",							"Please enter a valid number");
define("VALIDATOR_EMAIL",							"Please enter a valid e-mail address");
define("VALIDATOR_URL",								"Please enter a valid url (http://...)");
define("VALIDATOR_DATE",							"Please enter a valid date (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Please use a valid file type (jpg)");
define("VALIDATOR_EQUAL_TO",						"Both values should be the same");

/**
 * Installer
 */
define("INSTALLATION",								"Installation");
define("WELCOME",									"Welcome");
define("WELCOME_TEXT",								"Welcome to the installation wizard. Follow the next step to install php4dvd.");
define("NEXT",										"Next");
define("PREVIOUS",									"Previous");
define("PERMISSIONS",								"Permissions");
define("PERMISSIONS_TEXT",							"The following directories and files must be created and require write permissions:");
define("OK",										"ok");
define("FAILED",									"failed");
define("FIX_PERMISSIONS",							"Chmod (777) these directories or files with your favorite FTP client.");
define("REFRESH",									"Refresh");
define("CONFIGURATION",								"Configuration");
define("CONFIGURATION_TEXT",						"Fill out this form to configure php4dvd for your server.");
define("DATABASE",									"Database");
define("HOST",										"Host");
define("PORT",										"Port");
define("WEBSITE",									"Website");
define("URL",										"Url");
define("TEMPLATE",									"Template");
define("LANGUAGE",									"Language");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Guest users can see my movie collection");
define("FAILED_TO_WRITE_FILE",						"Failed to write the file");
define("DATABASE_NEW_TEXT",							"A new version of the database will be installed. Any old existing tables will be removed!");
define("DATABASE_UPGRADE_TEXT",						"Your database will be upgraded to the latest version. No information will be removed (it is safe to make a backup first!).");
define("ACCEPT",									"I Accept");
define("FINISHED",									"Finished");
define("FINISHED_TEXT",								"Your installation is almost finished. Click the finish button below.");
define("FINISH",									"Finish");
?>