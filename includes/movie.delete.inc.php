<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "includes/movie.inc.php");

// Remove a movie
if(isset($movie)) {
	switch($goremove) {
		case "movie":
			$moviedm->remove($movie);
			back();
			break;
		case "cover":
			$movie->removeCover();
			back();
			break;
	}
}
?>