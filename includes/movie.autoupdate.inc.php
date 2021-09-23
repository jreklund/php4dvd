<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "includes/movie.inc.php");

// Only update when the user has editor permissions
if($loggedin && $User->isEditor()) {
	// Get the last movie updated
	$lastMovieId = getValidId('lastid');

	// Get the next movie to update
	$movies = $moviedm->search("", "id");
	$nextMovie = false;
	foreach($movies as $movie) {
		if(!$lastMovieId && isset($movie->imdbid) && $movie->imdbid > 0) {
			$service = 'imdb';
			$nextMovie = $movie;
			break;
		}
		if(!$lastMovieId && isset($movie->tmdbid) && $movie->tmdbid > 0) {
			$service = 'tmdb';
			$nextMovie = $movie;
			break;
		}
		// When we hit the last movie, the next movie should be selected
		if($movie->id == $lastMovieId) {
			$lastMovieId = false;
		}
	}

	// Redirect to the update url which will automatically save and go back here
	if($nextMovie && $service == 'imdb') {
		header("Location: " . prettyUrl(array('go' => 'edit', 'id' => $nextMovie->id, 'imdbid' => $nextMovie->imdbid, 'autoupdate' => 1)));
		exit();
	}else if($nextMovie && $service == 'tmdb') {
		header("Location: " . prettyUrl(array('go' => 'edit', 'id' => $nextMovie->id, 'tmdbid' => $nextMovie->tmdbid, 'autoupdate' => 1)));
		exit();
	}else {
		home();
	}
}
?>
