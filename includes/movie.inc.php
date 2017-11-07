<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * Some important variables for other users to work with in code or templates:
 * - 'movie' is the requested movie
 * - 'photopath' is the path to the movie photo
 * - 'coverpath' is the path to the cover of the movie
 * - 'resultsPerPageDefault' is the default "results per page" amount
 * - 'numberOfCast' is the default amount of "cast" shown
 */
// Datamanagers
require_once($loc."/lib/db/Movies.class.php");
$moviedm = new Movies($settings["db"]);

// Photo and cover path
$photopath = $settings["photo"]["movies"];
$Website->assign("photopath", $photopath);
$coverpath = $settings["photo"]["covers"];
$Website->assign("coverpath", $coverpath);

// Number of results
$numOfResults = $settings["number_of_results"];

// Default results per page amount 
$resultsPerPageDefault = $settings["results_per_page"];
$Website->assign("resultsPerPageDefault", $resultsPerPageDefault);

// Number of pages before and after current
$pagination = $settings["pagination"];

// Default amount of cast shown
$numberOfCast = $settings["number_of_cast"];
$Website->assign("numberOfCast", $numberOfCast);

// Parental Guidance
$parental_guidance = $settings["parental_guidance"];
$Website->assign("parental_guidance", $parental_guidance["mpaa"]);
$Website->assign("parental_guidance_age", $parental_guidance["age"]);

// Retrieve a movie
if($id = getValidId('id',true)) {
	$movie = $moviedm->get($id);
	if($movie && $movie->id > 0) {
		// Show movie
		$Website->assign("movie", $movie);
	}
	else if (!isset($trailer)){
		back();
	}
}

// Retrieve a movie from imdb
if($loggedin && $User->isEditor() && $imdbid = getValidId('imdbid',true)) {
	// IMDB engine
	require_once($loc."/lib/imdbphp/bootstrap.php");
	
	// IMDB config
	$config = new \Imdb\Config();
	if($settings["imdbphp"]["langauge"])
		$config->language = $settings["imdbphp"]["langauge"];
	if($settings["imdbphp"]["ip_address"])
		$config->ip_address = $settings["imdbphp"]["ip_address"];
	if($settings["imdbphp"]["debug"])
		$config->debug = $settings["imdbphp"]["debug"];
		
	// Search at IMDB by id
	$imdbmovie = new \Imdb\Title($imdbid,$config);
	$Website->assign("imdbmovie", $imdbmovie);
	if(!isset($movie))
		$movie = new Movie();
	else 
		$movieId = $movie->id;
	$movie->fill($imdbmovie,$parental_guidance);
	if(isset($movie) && isset($movieId))
		$movie->id = $movieId;
	$Website->assign("movie", $movie);
}