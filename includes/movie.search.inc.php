<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * Some important variables for other users to work with in code or templates:
 * - 'movies' are all movies
 */
require_once($loc . "includes/movie.inc.php");

// The movie categories
$moviecategories = $moviedm->getCategories();
$Website->assign("categories", $moviecategories);

// The movie formats
$movieformats = $moviedm->getFormats();
$Website->assign("movieformats", $movieformats);

// The movie sort columns
$sortoptions = array('nameorder', 'year', 'rating', 'format', 'added', 'loaned');
$allsortoptions = array();
foreach($sortoptions as $so) {
	$allsortoptions[] = $so . " " . "asc";
	$allsortoptions[] = $so . " " . "desc";
}
$Website->assign("sortoptions", $allsortoptions);

// Number of results
$resultsperpage = is_array($numOfResults) && !empty($numOfResults)?$numOfResults:array(20, 30, 40, 50, 60);
$Website->assign("resultsperpage", $resultsperpage);

// Parental Guidance
if(!isset($refreshMovieList)) {
	$pg = isset($_COOKIE["pg"]) ? $_COOKIE["pg"] : 0;
} else {
	$pg = isset($_GET["pg"])    ? $_GET["pg"]    : 0;
}

// Extract Parental Guidance values
$pgMin = 0;
$pgMax = $parental_guidance["age"];
$pg    = explode(',',$pg);
if( isset($pg[0]) && ctype_digit($pg[0]) && isset($pg[1]) && ctype_digit($pg[1]) ) {
	list($pgMin,$pgMax) = $pg;
}

// Parental Guidance values
$Website->assign("parental_guidance_value", $pgMin . ',' . $pgMax);

// Filter by movie/tv, own, seen, favourite
if(!isset($refreshMovieList)) {
	$fbMovie     = isset($_COOKIE["movie"])     ? abs(intval($_COOKIE["movie"])) :  0;
	$fbTv        = isset($_COOKIE["tv"])        ? abs(intval($_COOKIE["tv"]))    :  0;
	$fbOwn       = isset($_COOKIE["own"])       ? intval($_COOKIE["own"])        : -1;
	$fbSeen      = isset($_COOKIE["seen"])      ? intval($_COOKIE["seen"])       : -1;
	$fbFavourite = isset($_COOKIE["favourite"]) ? intval($_COOKIE["favourite"])  : -1;
} else {
	$fbMovie     = isset($_GET["movie"])        ? abs(intval($_GET["movie"]))    :  0;
	$fbTv        = isset($_GET["tv"])           ? abs(intval($_GET["tv"]))       :  0;
	$fbOwn       = isset($_GET["own"])          ? intval($_GET["own"])           : -1;
	$fbSeen      = isset($_GET["seen"])         ? intval($_GET["seen"])          : -1;
	$fbFavourite = isset($_GET["favourite"])    ? intval($_GET["favourite"])     : -1;
}

// Validate $fbMovie and $fbTv; and choose to display only one or both
if($fbMovie !== 0 && $fbMovie !== 1)
	$fbMovie = 0;
if($fbTv !== 0 && $fbTv !== 1)
	$fbTv = 0;
if($fbMovie && !$fbTv)
	$fbMovieTv = 0;
if(!$fbMovie && $fbTv)
	$fbMovieTv = 1;
if($fbMovie && $fbTv || !$fbMovie && !$fbTv)
	$fbMovieTv = null;

// Validate $fbOwn, $fbSeen and $fbFavourite. Only allow 0 or 1 else return -1.
if($fbOwn !== 0 && $fbOwn !== 1)
	$fbOwn = -1;
if($fbSeen !== 0 && $fbSeen !== 1)
	$fbSeen = -1;
if($fbFavourite !== 0 && $fbFavourite !== 1)
	$fbFavourite = -1;

// Filter by values
$Website->assign("filterByMovie", $fbMovie);
$Website->assign("filterByTv", $fbTv);
$Website->assign("filterByOwn", $fbOwn);
$Website->assign("filterBySeen", $fbSeen);
$Website->assign("filterByFavourite", $fbFavourite);

// If the user logged in or when a guest user is allowed to view movies, show them
if(($loggedin || $guestview) && isset($refreshMovieList)) {
	isset($_GET["q"]) 	? $q = trim($_GET["q"])				: $q = "";
	isset($_GET["s"]) 	? $sort = $_GET["s"]				: $sort = "";
	isset($_GET["c"])	? $category = $_GET["c"]			: $category = "";
	isset($_GET["f"])	? $format = $_GET["f"]				: $format = "";
	isset($_GET["n"]) 	? $amount = abs(intval($_GET["n"]))	: $amount = 0;
	isset($_GET["p"]) 	? $page = abs(intval($_GET["p"]))	: $page = 0;
	
	// Validate $sort against movie sort columns ($allsortoptions)
	// NEVER DELETE THIS. You will be open to SQL Injections.
	// Redbeanphp can't use binding for ORDER BY.
	if(!in_array($sort,$allsortoptions,true))
		$sort = "";
	
	// Validate $amount against number of results ($resultsperpage)
	if(!in_array($amount,$resultsperpage,true))
		$amount = $resultsPerPageDefault?$resultsPerPageDefault:100;
	
	// Validate $category against movie categories ($moviecategories)
	if(!in_array($category,$moviecategories,true))
		$category = "";
	
	// Validate $format against movie formats ($movieformats)
	if(!in_array($format,$movieformats,true))
		$format = "";
	
	// Change what columns to get from the database (movie collection)
	$columns = array();
	if($templateName === 'poster' || $templateName === 'postertitle')
		$columns = array('`id`','`name`','`year`','`seen`','`own`','`favourite`','`tv`');
	if($templateName === 'posterlist' || $templateName === 'listplot')
		$columns = array('`id`','`name`','`year`','`duration`','`rating`','`languages`','`plotoutline`','`seen`','`own`','`favourite`','`tv`','`pg`');
	if($templateName === 'list')
		$columns = array('`id`','`name`','`year`','`duration`','`rating`','`languages`','`seen`','`own`','`favourite`','`tv`','`pg`');
	
	// Search the database for one more movie
	$movies = $moviedm->search($q, $sort, $category, $format, $pgMin, $pgMax, $fbMovieTv, $fbOwn, $fbSeen, $fbFavourite, $page * $amount, $amount, false, $columns);
	
	// If there are no movies found, reload
	while($page > 0 && count($movies) === 0) {
		$page--;
		$movies = $moviedm->search($q, $sort, $category, $format, $pgMin, $pgMax, $fbMovieTv, $fbOwn, $fbSeen, $fbFavourite, $page * $amount, $amount, false, $columns);
	}
	$Website->assign("movies", $movies);
	
	// Get the total amount of rows
	$totalmovies = $moviedm->getFoundRows();
	$Website->assign("totalmovies", $totalmovies);
	$pages = $amount > 0 ? ceil($totalmovies/$amount) : 1;
	
	// Navigation
	$Website->assign("pages", $pages);
	$Website->assign("next", $page + 1 < $pages);
	$Website->assign("previous", $page > 0);
	$Website->assign("amount", $amount);
		
	$page++;
	$Website->assign("page", $page);
		
	// The amount of pages shown (before current and after current)
	if(!$pagination)
		$pagination = 6;
		
	// Define the start value of the pages
	// Start at $page-$pagination (or 1)
	$startAt = $page - $pagination;
	if($startAt < 1)
	$startAt = 1;
	// Stop at $startAt+2*$pagination (or $pages)
	$stopAt = $startAt+2*$pagination;
	if($stopAt > $pages) {
		$stopAt = $pages;
		// Recalculate $stopAt-2*$pagination
		$startAt = $stopAt-2*$pagination;
		if($startAt < 1)
		$startAt = 1;
	}
	$Website->assign("startAt", $startAt);
	$Website->assign("stopAt", $stopAt);
}

// Statistics
if(!isset($refreshMovieList)) {
	$movies = $moviedm->search('', '', '', '', '', '', '', '', '', '', 0, 0, true);
	$numbertypes = array();
	foreach($movieformats as $format) {
		$numbertypes[] = array($format, 0);
	}
	$numberowned = 0;
	$numberseen = 0;
	foreach($movies as $m) {
		for($i = 0; $i < count($numbertypes); $i++) {
			if($numbertypes[$i][0] === $m['format'])
			$numbertypes[$i][1] += 1;
		}
		if($m['own'])
			$numberowned++;
		if($m['seen'])
			$numberseen++;
	}
	$Website->assign("numbertypes", $numbertypes);
	$Website->assign("numberowned", $numberowned);
	$Website->assign("numberseen", $numberseen);
}