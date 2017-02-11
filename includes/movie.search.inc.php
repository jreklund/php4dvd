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
$sortoptions = array('name', 'year', 'rating', 'format', 'seen', 'own', 'added', 'loaned');
$allsortoptions = array();
foreach($sortoptions as $so) {
	$allsortoptions[] = $so . " " . "asc";
	$allsortoptions[] = $so . " " . "desc";
}
$Website->assign("sortoptions", $allsortoptions);

// Number of results
$resultsperpage = is_array($numOfResults) && !empty($numOfResults)?$numOfResults:array(20, 30, 40, 50, 60);
$Website->assign("resultsperpage", $resultsperpage);

// If the user logged in or when a guest user is allowed to view movies, show them
if(($loggedin || $guestview) && isset($refreshMovieList)) {
	isset($_GET["q"]) 	? $q = trim($_GET["q"])				: $q = "";
	isset($_GET["s"]) 	? $sort = $_GET["s"]				: $sort = "";
	isset($_GET["c"])	? $category = $_GET["c"]			: $category = "";
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
	
	// Change what columns to get from the database (movie collection)
	$columns = array();
	if($templateName === 'poster')
		$columns = array('`id`','`name`','`year`');
	if($templateName === 'posterlist' || $templateName === 'listplot')
		$columns = array('`id`','`name`','`year`','`duration`','`rating`','`languages`','`plotoutline`');
	if($templateName === 'list')
		$columns = array('`id`','`name`','`year`','`duration`','`rating`','`languages`');
	
	// Search the database for one more movie
	$movies = $moviedm->search($q, $sort, $category, $page * $amount, $amount, false, $columns);
	
	// If there are no movies found, reload
	while($page > 0 && count($movies) === 0) {
		$page--;
		$movies = $moviedm->search($q, $sort, $category, $page * $amount, $amount, false, $columns);
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
	$movies = $moviedm->search('', '', '', 0, 0, true);
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