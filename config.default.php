<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * This is the config file. Here you can adjust the site by changing the values below.
 */
$settings = array();

/**
 * Set the languages that are available for the user.
 */
$settings["languages"] = array(
	"English"    => "en",
	"Nederlands" => "nl",
	"Swedish"    => "sv",
	"Polish"     => "pl",
	"German"     => "de",
	"Italian"    => "it"
);
/**
 * Set the default language for the user.
 */
$settings["defaultlanguage"] = "en";

/**
 * Change your language and timezone here if required.
 * ISO 639-1 alpha-2: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
 * ISO 3166-1 alpha-2: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
 * Timezones: http://php.net/manual/en/timezones.php
 */
setlocale(LC_ALL, 'en_US.UTF8');
date_default_timezone_set('UTC');

/**
 * The error level of PHP. Changing this is NOT needed.
 */
error_reporting(E_ALL);
ini_set('display_errors', '0');

/**
 * Development mode. If you want to develop your own template, get extra debug info when development is set to true.
 */
$settings["development"] = false;

/**
 * The location of php4dvd on your domain. This property sets itself automatically, but if it fails,
 * you can overwrite it manuall. If you run php4dvd on www.mydomain.com, leave this property empty.
 * If you run php4dvd on www.mydomain.com/php4dvd/, please fill out 'php4dvd'.
 */
$baseurl = $_SERVER['PHP_SELF'];
$baseurl = pathinfo($baseurl,PATHINFO_DIRNAME);
$baseurl = preg_replace("/^\//", "", $baseurl);
$baseurl = preg_replace("/^\\\\/", "", $baseurl);
$baseurl = preg_replace("/install/i", "", $baseurl);
$settings["url"]["base"] = $baseurl;

/**
 * Force the use of HTTPS.
 * Please activate inside .htaccess if you can, php4dvd will load a little faster.
 */
$settings["url"]["HTTPS"] = false;

/**
 * The database settings.
 * Fill in the hostname of the databse, the databse name and the username and password to connect.
 */
$settings["db"] = array();
$settings["db"]["host"] = "localhost";
$settings["db"]["port"] = 3306;
$settings["db"]["name"] = "php4dvd";
$settings["db"]["user"] = "root";
$settings["db"]["pass"] = "";
$settings["db"]["utf8"] = true;
$settings["db"]["debug"] = $settings["development"];

/**
 * Fix for MySQL with NO_ZERO_IN_DATE and/or STRICT_ALL_TABLES activated
 * http://dev.mysql.com/doc/refman/5.7/en/sql-mode.html#sqlmode_no_zero_in_date
 * Activate if you get SQL ERROR 1292 (0000-00-00) when saving movies.
 * If you get an error when activating this feature. Contact your webhost.
 */
$settings["db"]["NO_ZERO_IN_DATE"] = true;

/**
 * The location of the images (movie image and cover)
 */
$settings["photo"]["movies"] = "./movies/";
$settings["photo"]["covers"] = $settings["photo"]["movies"]."covers/";

/**
 * Define min/max size limits for upload (size in bytes)
 */
$settings["photo"]["min_upload_size"] = 10000;
$settings["photo"]["max_upload_size"] = 2000000;

/**
 * Set max width/height limits (in pixels)
 */
$settings["photo"]["max_width"] = 2500;
$settings["photo"]["max_height"] = 3500;

/**
 * Thumbnails are made of the covers you upload. These are resized to a maximum width and height.
 */
$settings["photo"]["tn_maxwidth"] = 214;
$settings["photo"]["tn_maxheight"] = 800;

/**
 * Maximum width and height of posters.
 */
$settings["photo"]["p_maxwidth"] = 214;
$settings["photo"]["p_maxheight"] = 800;

/**
 * Download high resolution posters from IMDb and resize with p_maxwidth/p_maxheight.
 * Default: 182x268
 * High-res: 675x1000 (around)
 */

$settings["photo"]["high_res"] = false;

/**
 * Can guest visitors view your movies? If you only want users with a login to view your movies, set this to false.
 */
$settings["user"]["guestview"] = false;

/**
 * Default admin username. You can't delete this user.
 */
$settings["user"]["defaultAdmin"] = "admin";

/**
 * Default template
 * Default theme skins: black, blue, green, purple, red, yellow
 * Movie collection: poster, postertitle, posterlist, list, listplot
 * Poster icons: Show TV, favourite, not own and not seen icons on posters
 */
$settings["template"] = 'default';
$settings["template_skin"] = 'blue';
$settings["template_skin_light"] = false;
$settings["template_movie_collection"] = 'postertitle';
$settings["template_poster_icons"] = true;

/**
 * Smarty settings.
 * The directory of the template engine Smarty. Default values will do fine.
 */
if(!isset($template_name))
	$template_name = $settings["template"];

$settings["smarty"]						= array();
$settings["smarty"]["template_dir"]		= "tpl/";
$settings["smarty"]["template"]			= $template_name;
$settings["smarty"]["compile_dir"]		= "compiled/";
$settings["smarty"]["debug"]			= $settings["development"];
$settings["smarty"]["development"]		= $settings["development"];

/**
 * Pretty URL
 * Rewrite /.?go=movie&id=1&name=name-of-movie into /movie/id/1/name/name-of-movie/
 * You will need to change some settings inside .htaccess
 */

$settings["pretty_url"] = false;

/**
 * Select which prefixes to ignore when sorting.
 * Removes "The" from "The Karate Kid", sorting will then start with the letter "K" instead.
 * Separate all prefixes with a pipe character |.
 */

$settings["name_order"] = 'A|An|The';

/**
 * Change number of results
 * array(20, 30, 40, 50, 60);
 */

$settings["number_of_results"] = array();

/**
 * Default amount of movies per page.
 * Display all movies with -1
 * 0 = 100
 */

$settings["results_per_page"] = -1;

/**
 * Number of pages before and after current.
 */
$settings["pagination"] = 0;

/**
 * Default amount of cast shown.
 * Display all cast with -1
 */
$settings['number_of_cast'] = -1;

/**
 * YouTube API for automatic fetching trailers
 *
 * https://cloud.google.com/console
 * 1. Use Google APIs
 * 2. Enable API
 * 3. YouTube Data API
 * 4. Enable
 * 5. Credentials
 * 6. Create credentials
 * 7. API key
 * 8. Key restriction
 * 9. HTTP referrers (web sites)
 * 10. Enter your domain: domain.com/*
 */
$settings['youtube_key'] = '';

/**
 * Set the language Imdb will use for titles, and some other localised data (e.g. tv episode air dates)
 * Any valid language code can be used here (e.g. en-US, de, pt-BR).
 * If this option is specified, a Accept-Language header with this value will be included in requests to IMDb.
 */
$settings["imdbphp"]["langauge"] = '';

/**
 * Set originating IP address of a client connecting to a web server through an HTTP proxy or a load balancer.
 * Useful with language for times when Imdb uses your ip address geo-location before Accept-Language header.
 * If this option is specified, a X-Forwarded-For header with this value will be included in requests to IMDb.
 */
$settings["imdbphp"]["ip_address"] = '';

/**
 * Enable debug mode?
 */
$settings["imdbphp"]["debug"] = $settings["development"];
