<?php
/**
================================================================================ 
 LISENCE
================================================================================

    This file is part of php4dvd.

    php4dvd is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    php4dvd is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with php4dvd. If not, see <http://www.gnu.org/licenses/>.
**/

/**
 * This page controls your site. Do not change anything unless you know what you are doing. 
 * If you want to change the looks of your page, copy the default directory in /tpl/ and create your own template.
 */
 
// Only load .php files from index.php
define('DIRECTACCESS', TRUE);

// Start timer
$time_start = microtime(true);

// Default config
require_once("common.inc.php");

// Installer
if(file_exists($loc . "install/index.php")) {
	// New version to install?
	if(NEW_VERSION > VERSION) {
		header("Location: ./install/");
		exit();
	}
	// Remove install directory
	else {
		$Website->assign("message", "REMOVE_INSTALL_DIR");
	}
}

// Language
require_once($loc . "includes/languages.inc.php");

// Login script
require_once($loc . "includes/login.inc.php");

// Template
$template = "index.html";

// Fallback for 404-pages
$Website->assign("main", "404.html");

// Switch to the correct page
$go = isset($_GET['go']) ? $_GET['go'] : '';
switch ($go) {
	default:			/**
						 * Default opening page
						 */
						// Template
						$Website->assign("main", "movies/collection.html");
						
						// Movies
						require_once($loc . "includes/movie.search.inc.php");
						break;
	
	case "login":		/**
						 * Login form
						 */
						// Template
						$Website->assign("main", "users/login.html");
						break;
						
	case "movies":		/**
						 * Create a list of the movies
						 */
						// Viewing movies is only possible when logged in or when guests can view movie information
						if($loggedin || $guestview) {
							// Template
							$template = "movies/movies.html";
							
							// Only count movies ones
							$refreshMovieList = true;
							
							// Movies
							require_once($loc . "includes/movie.search.inc.php");
						}						
						break;
						
	case "movie":		/**
						 * Show the information of one movie
						 */
						// Viewing movie information is only possible when logged in or when guests can view movie information
						if($loggedin || $guestview) {
							// Template
							$Website->assign("main", "movies/movie.html");
							
							// Movies
							require_once($loc . "includes/movie.inc.php");
						}
						break;
						
	case "add":			
	case "edit":	 	/**
						 * Add/edit a movie
						 */
						// Adding/editing is only possible if the user is logged in and editor
						if($loggedin && $User->isEditor()) {
							// Template
							$Website->assign("main", "movies/update.html");
							
							// Movies
							require_once($loc . "includes/movie.update.inc.php");
						} else {
							home();
						}
						break;
						
	case "seen":
	case "own":			/**
						 * Change the movie own/seen status
						 */
						// Changing is only possible if the user is logged in and editor
						if($loggedin && $User->isEditor()) {
							// Movies
							require_once($loc . "includes/movie.update.inc.php");
						} else {
							home();
						}
						break;
						
	case "delete":		/**
						 * Remove a movie
						 */
						// Removing is only possible if the user is logged in and editor
						if($loggedin && $User->isEditor()) {
							$goremove = "movie";
							require_once($loc . "includes/movie.delete.inc.php");
						}
						exit();
						break;
						
	case "downloadcover":
						/**
						 * Download the movie cover
						 */
						 // Downloading movie cover is only possible when logged in or when guests can view movie information
						if($loggedin || $guestview) {
							$godownload = "cover";
							require_once($loc . "includes/movie.download.inc.php");
						}
						break;
						
	case "deletecover":	/**
						 * Remove a movie
						 */
						// Removing is only possible if the user is logged in and editor
						if($loggedin && $User->isEditor()) {
							$goremove = "cover";
							require_once($loc . "includes/movie.delete.inc.php");
						}
						exit();
						break;
						
	case "imdbupdate":	/**
						 * Update all movie information from IMDb
						 */
						// Updating is only possible if the user is logged in and editor
						if($loggedin && $User->isEditor()) {
							require_once($loc . "includes/movie.autoupdate.inc.php");
						} else {
							home();
						}
						break;
						
	case "export":		/**
						 * Download movie list as CSV
						 */
						// Exporting movies is only possible when logged in
						if($loggedin) {
							// Export
							require_once($loc . "includes/export.inc.php");
						}
						exit();
						break;
						
	case "users":		/**
						 * Modify the user accounts
						 */
						// Updating is only possible if the user is logged in and admin
						if($loggedin && $User->isAdmin()) {
							// Template
							$Website->assign("main", "users/users.html");
	
							// Users
							require_once($loc . "includes/users.inc.php");
						} else {
							home();
						}
						break;
						
	case "profile":		/**
						 * Modify your profile
						 */
						if($loggedin) {
							$_GET["id"] = $User->id;
						}
	case "user":		/**
						 * Modify a single user account
						 */
						// Updating is only possible if the user is logged
						if($loggedin) {
							// Template
							$Website->assign("main", "users/user.html");
						
							// Users
							require_once($loc . "includes/user.update.inc.php");
						} else {
							home();
						}
						break;
						
	case "deleteuser":	/**
						 * Remove a user
						 */
						// Removing is only possible if the user is logged in and admin
						if($loggedin && $User->isAdmin()) {
							require_once($loc . "includes/user.delete.inc.php");
						} else {
							home();
						}
						break;
}

// PHP parse time
$time_end = microtime(true); 
$managertime = $time_end - $time_start;  

// Display template
try {
	$Website->display($template);
} catch(Exception $e) {
	echo "<h1>Error</h1>";
	echo "<p>Make sure the /compiled/ folder is writable (chmod 777).</p>";
	echo "<pre>" . $e . "</pre>";
}

// Smarty template parse time
$time_end = microtime(true); 
$tpltime = $time_end - $time_start - $managertime;  

// Print the parse timings at the end of the HTML page
print "\n\n<!-- ** php parsetime: ".number_format($managertime, 5)." sec. ** -->\n"; 
print "<!-- ** tpl parsetime: ".number_format($tpltime, 5)." sec. ** -->";