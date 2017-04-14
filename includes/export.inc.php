<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "includes/movie.inc.php");

// If the user logged in, export the movies
if($loggedin) {
	// Retrieve the movies
	$movies = $moviedm->search('','','','',0,0,false,array('*'));
	
	// Output CSV file
	$SEPARATOR = ";";
	$QUOTE = "\"";
	$NEWLINE = "\n";
	
	// Header
	$file = '';
	$file  = "ID".$SEPARATOR;
	$file .= IMDB_NUMBER.$SEPARATOR;
	$file .= TITLE.$SEPARATOR;
	$file .= TITLE_ORDER.$SEPARATOR;
	$file .= AKA_TITLES.$SEPARATOR;
	$file .= YEAR.$SEPARATOR;
	$file .= DURATION_MINUTES.$SEPARATOR;
	$file .= RATING.$SEPARATOR;
	$file .= FORMAT.$SEPARATOR;
	$file .= OWN.$SEPARATOR;
	$file .= SEEN.$SEPARATOR;
	$file .= LOANED_OUT_TO.$SEPARATOR;
	$file .= LOANED_OUT_SINCE.$SEPARATOR;
	$file .= TRAILER_URL.$SEPARATOR;
	$file .= PERSONAL_NOTES.$SEPARATOR;
	$file .= TAGLINES.$SEPARATOR;
	$file .= PLOT_OUTLINE.$SEPARATOR;
	$file .= PLOTS.$SEPARATOR;
	$file .= LANGUAGES.$SEPARATOR;
	$file .= SUBTITLES.$SEPARATOR;
	$file .= AUDIO.$SEPARATOR;
	$file .= VIDEO.$SEPARATOR;
	$file .= COUNTRY.$SEPARATOR;
	$file .= GENRES.$SEPARATOR;
	$file .= DIRECTOR.$SEPARATOR;
	$file .= WRITER.$SEPARATOR;
	$file .= PRODUCER.$SEPARATOR;
	$file .= MUSIC.$SEPARATOR;
	$file .= CAST.$NEWLINE;
	
	// Movies
	$fileLoop = '';
	foreach($movies as $movie) {
		$fileLoop .= makeData($movie->id);
		$fileLoop .= makeData($movie->imdbid);
		$fileLoop .= makeData($movie->name);
		$fileLoop .= makeData($movie->nameorder);
		$fileLoop .= makeData($movie->aka);
		$fileLoop .= makeData($movie->year);
		$fileLoop .= makeData($movie->duration);
		$fileLoop .= makeData($movie->rating ? $movie->rating : "");
		$fileLoop .= makeData($movie->format);
		$fileLoop .= makeData($movie->own);
		$fileLoop .= makeData($movie->seen);
		$fileLoop .= makeData($movie->loanname);
		$fileLoop .= makeData($movie->loaned ? $movie->loandate : "");
		$fileLoop .= makeData($movie->trailer);
		$fileLoop .= makeData($movie->notes);
		$fileLoop .= makeData($movie->taglines);
		$fileLoop .= makeData($movie->plotoutline);
		$fileLoop .= makeData($movie->plots);
		$fileLoop .= makeData($movie->languages);
		$fileLoop .= makeData($movie->subtitles);
		$fileLoop .= makeData($movie->audio);
		$fileLoop .= makeData($movie->video);
		$fileLoop .= makeData($movie->country);
		$fileLoop .= makeData($movie->genres);
		$fileLoop .= makeData($movie->director);
		$fileLoop .= makeData($movie->writer);
		$fileLoop .= makeData($movie->producer);
		$fileLoop .= makeData($movie->music);
		$fileLoop .= makeData($movie->cast);
		$fileLoop .= $NEWLINE;
	}
	$file .= $fileLoop;
	
	ob_start();
	ob_clean();
	header("Content-Disposition: attachment; filename=\"export.csv\"");
	header("Content-type: application/csv; charset=utf-8");
	header("Pragma: cache");
	header("Cache-Control: public, must-revalidate, max-age=0");
	header("Connection: close");
	header("Expires: ".date("r", time()+60*60));
	header("Last-Modified: ".date("r", time()));
	header("Content-length: ".strlen($file)."\r\n");
	echo $file;	
	ob_flush();
	exit();
}

function makeData($content) {
	global $QUOTE, $SEPARATOR;
	return $QUOTE.preg_replace("/\r?\n/u", ", ", $content).$QUOTE.$SEPARATOR;
}
?>