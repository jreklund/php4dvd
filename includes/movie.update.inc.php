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

		// IMDB config
		$config = new \Imdb\Config();
		if($settings["imdbphp"]["language"])
			$config->language = $settings["imdbphp"]["language"];
		if($settings["imdbphp"]["ip_address"])
			$config->ip_address = $settings["imdbphp"]["ip_address"];
		if($settings["imdbphp"]["debug"])
			$config->debug = $settings["imdbphp"]["debug"];

		// Search IMDb for the movie
		$imdb = new \Imdb\TitleSearch($config);
		$wantedTypes = array(
			\Imdb\TitleSearch::MOVIE,
			\Imdb\TitleSearch::VIDEO,
			\Imdb\TitleSearch::TV_MOVIE,
			\Imdb\TitleSearch::TV_SERIES,
			\Imdb\TitleSearch::TV_MINI_SERIES
		);
		$imdbresults = $imdb->search($imdbsearch,$wantedTypes);

		// Select Movie/TV Series based on movietypes
		$movietypes = array(
			\Imdb\TitleSearch::MOVIE,
			\Imdb\TitleSearch::VIDEO,
			\Imdb\TitleSearch::TV_MOVIE
		);

		// Check if any of these results are already added to our database
		$temp = array();
		foreach($imdbresults as $result) {
			$result->known = false;
			$imdbmovie = $moviedm->getByImdb($result->imdbid());
			if($imdbmovie)
				$result->known = true;
			$temp[] = $result;
		}
		$imdbresults = $temp;
		$Website->assign("movietypes", $movietypes);
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

	// Update image from IMDb
	if(isset($_POST["imdbphoto"]))
		$getImdbImage = true;

	// Update movie
	$movie = fillObject($movie, $_POST, array(), array('movieid', 'autoupdate', 'submit', 'addnew', 'imdbphoto'));

	// Validate Trailer URLs
	if( !filter_var($movie->trailer,FILTER_VALIDATE_URL) ) {
		$movie->trailer = '';
	}

	// NameOrder - Select which prefixes to ignore when sorting
	$nameOrder = $settings["name_order"];
	$movie->nameorder = trim(preg_replace('/^('.$nameOrder.')[[:space:]]/u','',$movie->name));

	// Save movie
	$movie->id = $moviedm->save($movie);

	// Save its photo or use image from IMDb
	if(isset($_FILES["photo"]) && isset($_FILES["photo"]["size"]) && $_FILES["photo"]["size"] > 0) {
		$movie->addPhoto("photo");
	} elseif( ($getImdbImage || !$movie->hasPhoto()) && isset($movie->imdbid) && strlen(trim($movie->imdbid)) > 0 ) {
		// IMDb engine
		require_once($loc."/lib/imdbphp/bootstrap.php");

		// IMDB config
		$config = new \Imdb\Config();
		if($settings["imdbphp"]["language"])
			$config->language = $settings["imdbphp"]["language"];
		if($settings["imdbphp"]["ip_address"])
			$config->ip_address = $settings["imdbphp"]["ip_address"];
		if($settings["imdbphp"]["debug"])
			$config->debug = $settings["imdbphp"]["debug"];

		$photo = $photopath . $movie->id.".jpg";
		$m = new \Imdb\Title($movie->imdbid,$config);

		if(isset($settings["photo"]["high_res"]) && $settings["photo"]["high_res"]) {
			// Photo manipulation
			require_once($loc . "/lib/bulletproof/utils/func.image-resize.php");

			if($m->savephoto($photo,FALSE)) {
				list($width,$height) = getImageSize($photo);
				Bulletproof\utils\resize(
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

// Update movie favourite status
if(isset($movie) && isset($_GET["go"]) && $_GET["go"] === 'favourite') {
	$movie->favourite = $movie->favourite ? 0 : 1;
	$moviedm->save($movie);
	if(is_ajax_request())
		exit($webroot);
	header("Location: " . prettyUrl(array('go' => 'movie', 'id' => $movie->id, 'name' => $movie->name)));
	exit();
}

// Update movie seen status
if(isset($movie) && isset($_GET["go"]) && $_GET["go"] === 'seen') {
	$movie->seen = $movie->seen ? 0 : 1;
	$moviedm->save($movie);
	if(is_ajax_request())
		exit($webroot);
	header("Location: " . prettyUrl(array('go' => 'movie', 'id' => $movie->id, 'name' => $movie->name)));
	exit();
}

// Update movie own status
if(isset($movie) && isset($_GET["go"]) && $_GET["go"] === 'own') {
	$movie->own = $movie->own ? 0 : 1;
	$moviedm->save($movie);
	if(is_ajax_request())
		exit($webroot);
	header("Location: " . prettyUrl(array('go' => 'movie', 'id' => $movie->id, 'name' => $movie->name)));
	exit();
}
