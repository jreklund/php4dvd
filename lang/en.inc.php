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
define("_TITLE",									"My collection");

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
define("REMEMBER_ME",								"Remember me");

/**
 * Home
 */
// Menu
define("ADD",										"Add");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Update all");
define("EXPORT_TO_CSV",								"Export");
// Search
define("SEARCH_DEFAULT_TEXT",						"Search...");
define("CATEGORIES",								"Categories");
define("ALL_CATEGORIES",							"All categories");
define("FORMATS",									"Formats");
define("ALL_FORMATS",								"All formats");
define("SORT_BY",									"Sort by");
define("LAYOUT",									"Layout");
define("nameorder asc",								"Name (A-Z)");
define("nameorder desc",							"Name (Z-A)");
define("year asc",									"Year (0-9)");
define("year desc",									"Year (9-0)");
define("rating asc",								"Rating (0-9)");
define("rating desc",								"Rating (9-0)");
define("votes asc",								    "Votes (0-9)");
define("votes desc",								"Votes (9-0)");
define("format asc",								"Format (A-Z)");
define("format desc",								"Format (Z-A)");
define("seen asc",									"Seen");
define("seen desc",									"Seen inverse");
define("own asc",									"Own");
define("own desc",									"Own inverse");
define("added asc",									"Added (old-new)");
define("added desc",								"Added (new-old)");
define("loaned asc",								"Loaned out (old-new)");
define("loaned desc",								"Loaned out (new-old)");
define("ALL", 										"All");
define("RESULTS_PER_PAGE",							"Results per page");
define("FILTER_BY",									"Filter by");
// Results
define("NO_RESULTS_FOUND",							"No titles where found.");
define("NO_COVER",									"No cover");
define("NUMBER_OF_TITLES",							"Number of titles");
define("STATISTICS",								"Statistics");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Visit IMDb");
define("VISIT_TMDB",								"Visit TMDb");
define("VIEW_TRAILER",								"View trailer");
define("DOWNLOAD_COVER",							"Download cover");
define("FAVOURITE",									"Favourite");
define("NOT_FAVOURITE",								"Not favourite");
define("OWN",										"Own");
define("NOT_OWN",									"Not own");
define("DO_YOU_OWN_THIS",							"Do you own this?");
define("SEEN",										"Seen");
define("UNSEEN",									"Unseen");
define("HAVE_YOU_SEEN_THIS",						"Have you seen this?");
define("EDIT",										"Edit");
define("REMOVE",									"Remove");
// Movie information
define("LOANED_OUT",								"Loaned out");
define("TO",										"to");
define("ON",										"on");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Save");
define("SAVE_AND_ADD_ANOTHER",						"Save and add another");
define("UPDATE",									"Update");
define("REMOVE_COVER",								"Remove cover");
// IMDb search
define("ADD_FROM_IMDB",								"Add from IMDb");
define("ADD_FROM_TMDB",								"Add from TMDb");
define("SEARCH",									"Search");
define("RESULTS_FROM_IMDB",							"Results from IMDb");
define("RESULTS_FROM_TMDB",							"Results from TMDb");
// Movie information
define("MOVIE_INFORMATION",							"Information");
define("IMDB_NUMBER",								"IMDb number");
define("TMDB_NUMBER",								"TMDb number");
define("TITLE",										"Title");
define("TITLE_ORDER",								"Title (Sort by)");
define("AKA_TITLES",								"Also known as");
define("YEAR",										"Year");
define("DURATION",									"Duration");
define("MINUTES",									"minutes");
define("DURATION_MINUTES",							"Duration (minutes)");
define("RATING",									"Rating");
define("VOTES",									    "Votes");
define("FORMAT",									"Format");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Age rating");
define("PARENTAL_GUIDANCE_AGE",						"years");
define("LOANED_OUT_TO",								"Loaned out to");
define("LOANED_OUT_SINCE",							"Loaned out since");
define("MOVIE",										"Movie");
define("TV_SERIES",									"TV Series");
define("SEASONS",									"Seasons");
define("YES",										"Yes");
define("NO",										"No");
define("COVER",										"Cover");
define("SEARCH_FOR_COVER",							"Search for cover");
define("PHOTO",										"Poster");
define("SEARCH_FOR_PHOTO",							"Search for poster");
define("PHOTO_FROM_IMDB",							"Poster (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Download from IMDb");
define("TRAILER_URL",								"Trailer URL");
define("SEARCH_FOR_TRAILER",						"Search for trailer");
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
define("MPAA",										"MPAA");
define("DIRECTOR",									"Director");
define("WRITER",									"Writer");
define("PRODUCER",									"Producer");
define("MUSIC",										"Music");
define("CAST",										"Cast");
// Automatic update
define("AUTOUPDATE_INFO",							"Your movies are automatically updated from IMDb/TMDb. This may take a while, so please be patient...");
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
define("VALIDATOR_USERNAME",						"Please enter a valid username. (A–Z, 0–9, .)\nBetween 5-50 characters.");

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
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Guest users can see my collection");
define("FAILED_TO_WRITE_FILE",						"Failed to write the file");
define("DATABASE_NEW_TEXT",							"A new version of the database will be installed. Any old existing tables will be removed!");
define("DATABASE_UPGRADE_TEXT",						"Your database will be upgraded to the latest version. No information will be removed (it is safe to make a backup first!).");
define("ACCEPT",									"I Accept");
define("FINISHED",									"Finished");
define("FINISHED_TEXT",								"Your installation is almost finished. Click the finish button below.");
define("FINISH",									"Finish");
?>
