<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "includes/movie.inc.php");

// The movie formats
$movieformats = $moviedm->getFormats();
$Website->assign("movieformats", $movieformats);

// Automatic update?
$autoupdate = isset($_GET["autoupdate"]) ? 1 : 0;
$Website->assign("autoupdate", $autoupdate);

// Find movies from IMDb
if(isset($_GET["imdbsearch"])) {
	// What is the search term?
	$imdbsearch = trim($_GET["imdbsearch"]);
	$Website->assign("imdbsearch", $imdbsearch);
	if(strlen($imdbsearch) > 0) {
		// IMDb engine
		require_once($loc."/lib/imdbphp/bootstrap.php");
	
		// Search IMDb for the movie
		$imdb = new \Imdb\TitleSearch();
		$imdbresults = $imdb->search($imdbsearch,[\Imdb\TitleSearch::MOVIE]);
	
		// Check if any of these results are allready added to our database
		$temp = array();
		foreach($imdbresults as $result) {
			$result->known = false;
			$imdbmovie = $moviedm->getByImdb($result->imdbid());
			if($imdbmovie)
				$result->known = true;
			$temp[] = $result;
		}
		$imdbresults = $temp;
		$Website->assign("imdbresults", $imdbresults);
	}
}

// Update movie
if(isset($_POST["movieid"])) {
	// Editing existing movie?
	$getImdbImage = false;
	$movieid = $_POST["movieid"];
	$movie = $moviedm->get($movieid);
	if(!$movie) {
		$movie = new Movie();
		$getImdbImage = true;
	}
	
	// Update movie
	$movie = fillObject($movie, $_POST, array(), array('movieid', 'autoupdate', 'submit', 'addnew'));
	
	// Save movie
	$movie->id = $moviedm->save($movie);
	
	// Save its photo or use image from IMDb (new movies only)
	if(isset($_FILES["photo"]) && isset($_FILES["photo"]["size"]) && $_FILES["photo"]["size"] > 0) {
		$movie->addPhoto("photo");
	} elseif($getImdbImage && isset($movie->imdbid) && strlen(trim($movie->imdbid)) > 0) {
		// IMDb engine
		require_once($loc."/lib/imdbphp/bootstrap.php");

		$photo = $photopath . $movie->id.".jpg";
		$m = new \Imdb\Title($movie->imdbid);
		
		if(isset($settings["photo"]["high_res"])) {
			// Photo manipulation
			require_once($loc . "/lib/bulletproof/utils/func.image-resize.php");
			
			if($m->savephoto($photo,FALSE)) {
				list($width,$height) = getImageSize($photo);
				Bulletproof\resize(
									$photo,
									"jpg",
									$width,
									$height,
									$settings["photo"]["p_maxwidth"],
									$settings["photo"]["p_maxheight"],
									true,
									false
								);
			}
		} else {
			$m->savephoto($photo);
		}
	}
	
	// Save its cover
	if(isset($_FILES["cover"]) && isset($_FILES["cover"]["size"]) && $_FILES["cover"]["size"] > 0) {
		$movie->addCover("cover");
	}
	
	// Go to the next auto update step
	if(isset($_POST["autoupdate"]) && $_POST["autoupdate"]) {
		header("Location: " . prettyUrl(array('go' => 'imdbupdate', 'lastid' => $movie->id)));
		exit();
	}
	// Go to movie
	else {
		if(isset($_POST['addnew']))
			header("Location: " . prettyUrl(array('go' => 'add')));
		else
			header("Location: " . prettyUrl(array('go' => 'movie', 'id' => $movie->id, 'name' => $movie->name)));
		exit();
	}
}

// Update movie seen status
if(isset($movie) && isset($_GET["seen"])) {
	$movie->seen = $_GET["seen"] == 1 ? 1 : 0;
	$moviedm->save($movie);
	header("Location: " . prettyUrl(array('go' => 'movie', 'id' => $movie->id, 'name' => $movie->name)));
	exit();
}

// Update movie own status
if(isset($movie) && isset($_GET["own"])) {
	$movie->own = $_GET["own"] == 1 ? 1 : 0;
	$moviedm->save($movie);
	header("Location: " . prettyUrl(array('go' => 'movie', 'id' => $movie->id, 'name' => $movie->name)));
	exit();
}