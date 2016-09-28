<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

if (isset($_GET['movie']) && isset($_GET['year'])) {
	/*
	* Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
	* {{ Google Cloud Console }} <{{ https://cloud.google.com/console }}>
	* Please ensure that you have enabled the YouTube Data API for your project.
	*/
	$search = urlencode(rawurldecode($_GET['movie']) . ' ' . $_GET['year'] . ' trailer');
	
	$query = "https://www.googleapis.com/youtube/v3/search";
	$query .= "?part=id&maxResults=1&q={$search}&safeSearch=none&type=video&key={$youtubeKey}";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $query);
	curl_setopt($ch, CURLOPT_REFERER, $webroot);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	
	$trailers = json_decode($output,true);
	
	if(isset($trailers['items'][0]['id']['videoId'])) {
		header('Location: https://www.youtube.com/embed/' . $trailers['items'][0]['id']['videoId'] . '?rel=0&iv_load_policy=3&autoplay=1');
		exit;
	}
	if(!isset($trailers['error']['message'])) {
		$trailers['error']['message'] = 'An unknown error has occurred.';
	}
} else {
	$trailers['error']['message'] = 'Select a movie.';
}

$Website->assign("message", $trailers['error']['message']);
