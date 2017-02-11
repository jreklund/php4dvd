<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * Go to the home page.
 * @param unknown_type $add
 */
function home($add = array()) {
	global $webroot;
	$url = setQueryString($webroot, $add);
	header("Location: " . $url);
	exit();
}

/**
 * Reload the current page (when this information is available).
 * @param string $add what to add after the current url? (&reload=true for example)
 */
function reload($add = array()) {
	global $webroot;
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Mon, 01 Jan 1970 00:00:00 GMT"); 	// Date in the past
	
	if(isset($_SERVER["REQUEST_URI"])) {
		$url = setQueryString($_SERVER["REQUEST_URI"], $add);
		header("Location: " . $url);
	} else {
		header("Location: " . $webroot);
	}
	exit();
}

/**
 * Go one page back (when the referral information is available).
 * @param string $add what to add after the current url? (&back=true for example)
 */
function back($add = array()) {
	global $webroot;
	// Current url
	$protocol = "http";
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) {
		$protocol = "https";
	}
	if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO']) {
		$protocol = "https";
	}
	$baseurl = $protocol . "://" . $_SERVER["HTTP_HOST"];
	$currentUrl = $baseurl . $_SERVER["REQUEST_URI"];
	
	// Reload the previous page if not the same
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Mon, 01 Jan 1970 00:00:00 GMT"); 	// Date in the past
	if(isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] != $currentUrl) {
		$url = setQueryString($_SERVER["HTTP_REFERER"], $add);
		header("Location: " . $url);
	} else {
		header("Location: " . $webroot);
	}
	exit();
}

/**
 * Set the values as querystring values to the url.
 * @param string $url
 * @param array $values
 */
function setQueryString($url, $values) {
	$url = urldecode($url);
	$querystring = "";
	
	// Get url and querystring
	$parts = preg_split("/\?/", $url);
	if(count($parts) === 2) {
		$url = $parts[0];
		$querystring = $parts[1];
	}
	
	// Get querystring parts
	$queryparts = array();
	$qsparts = preg_split("/&/", $querystring);
	foreach($qsparts as $qspart) {
		$keyvalue = preg_split("/=/", $qspart);
		$key = $keyvalue[0];
		$value = count($keyvalue) === 2 ? $keyvalue[1] : false;
		$queryparts[$key] = $value;
	}
	
	// Overwrite querystring
	if(is_array($values)) {
		foreach($values as $key => $value) {
			$queryparts[$key] = $value;
		}
	}
	
	// Reconstruct url
	$valuePairs = array();
	foreach($queryparts as $qp => $v) {
		$valuePairs[] = $v ? urlencode($qp) . "=" . urlencode($v) : urlencode($qp);
	}
	if(!empty($valuePairs) && strlen(trim($valuePairs[0])) > 0) {
		$url .=  "?" . join("&", $valuePairs);
	}
	return $url;
}

/**
 * Read the contents of this file.
 * @param string $file
 * @return string
 */
function readFileContent($file) {
	if(file_exists($file)) {
		$handle = fopen($file, "r");
		if($handle) {
			return fread($handle, filesize($file));
		}
	}
	return false;
}

/**
 * Try to translate this text.
 * @param string $text
 * @return the translated text or the original
 */
function translate($text) {
	if(defined($text))
		return constant($text);
	else
		return $text;
}

/**
 * Fill this object with the row information.
 * @param $obj
 * @param $row
 * @param include
 * @param exclude
 */
function fillObject($obj, $row, $include = array(), $exclude = array()) {
	$inc = array();
	foreach($include as $i)
		$inc[$i] = true;
	$include = $inc;
	$exc = array();
	foreach($exclude as $e)
		$exc[$e] = true;
	$exclude = $exc;
	
	if(isset($row) && $row) {
		foreach($row as $key => $value) {
			$allowed = true;
			if(count($include) > 0 && !isset($include[$key]))
				$allowed = false;
			if(count($exclude) > 0 && isset($exclude[$key])) {
				$allowed = false;
			}
			if($allowed)
				$obj->{$key} = stripslashes($value);
		}
		return $obj;
	}
	return false;
}

/**
 * Convert 90 minutes into 1h 30min
 * @param	string	$duration	Input string
 * @return	string
 */
function durationConvertion($duration) {
	if(!ctype_digit($duration))
		return $duration;
	$hours = floor($duration / 60);
	$minutes = ($duration % 60);

	return ($hours)?$hours. 'h '. $minutes .'min':$minutes.'min';
}

/**
 * Check if $_GET[$id] isset, numric characters and 1 or bigger
 * @param	string
 * @param	bool	Go one page back
 * @return	false|string|back()
 */
function getValidId($id,$back=false) {
	if(!isset($_GET[$id])) {
		return false;
	}
	if(ctype_digit($_GET[$id]) && $_GET[$id] > 0) {
		return $_GET[$id];
	}
	if($back) {
		back();
	}
	return false;
}

/**
 * Create URL Title
 *
 * Takes a "title" string as input and creates a
 * human-friendly URL string with a "separator" string
 * as the word separator.
 *
 * @stolen	Codeigniter 3.1.0
 * @param	string	$str		Input string
 * @param	string	$separator	Word separator
 *			(usually '-' or '_')
 * @param	bool	$lowercase	Whether to transform the output string to lowercase
 * @return	string
 */
function urlTitle($str, $separator = '-', $lowercase = FALSE) {
	$q_separator = preg_quote($separator, '#');

	$trans = array(
		'&.+?;'					=> '',
		'[^\w\d _-]'			=> '',
		'\s+'					=> $separator,
		'('.$q_separator.')+'	=> $separator
	);

	$str = strip_tags($str);
	foreach ($trans as $key => $val) {
		$str = preg_replace('#'.$key.'#iu', $val, $str);
	}

	if ($lowercase === TRUE) {
		$str = strtolower($str);
	}

	return trim(trim($str, $separator));
}

/**
 * Convert Accented Foreign Characters to ASCII
 *
 * @stolen	Codeigniter 3.1.0
 * @param	string	$str	Input string
 * @return	string
 */
function convertAccentedCharacters($str) {
	global $loc;
	static $array_from, $array_to;

	if ( ! is_array($array_from)) {
		if (file_exists($loc.'config/foreign.chars.php')) {
			include($loc.'config/foreign.chars.php');
		}

		if (empty($foreign_characters) OR ! is_array($foreign_characters)) {
			$array_from = array();
			$array_to = array();

			return $str;
		}

		$array_from = array_keys($foreign_characters);
		$array_to = array_values($foreign_characters);
	}

	return preg_replace($array_from, $array_to, $str);
}

/**
 * Generate PrettyUrl
 * @param 	array	$url
 * @param	array	$append
 * @return	string
 */
function prettyUrl($url=array(),$append=array()) {
	global $webroot, $pretty_url;
	$href = '';
	if($pretty_url) {
		foreach($url as $get => $value) {
			if(is_numeric($get)) {
				$href .= prettyUrlNameHelper($value) . '/1/';
				continue;
			}
			if($get != 'go')
				$href .= prettyUrlNameHelper($get) . '/';
			if(strlen($value)>0)
				$href .= prettyUrlNameHelper($value,$get) . '/';
			else
				$href .= '1/';
		}
	}
	if($pretty_url && $append)
		$href = prettyUrlHelper($href.'?',$append);
	if(!$pretty_url)
		$href = prettyUrlHelper($href.'?',$url);
	if(!$pretty_url && $append)
		$href = prettyUrlHelper($href.'&',$append);
	return $webroot . $href;
}

/**
 * Helper function for PrettyUrl
 * @param	string	$href
 * @param	array	$url
 * @return	string
 */

function prettyUrlHelper($href='',$url=array()) {
	foreach($url as $get => $value) {
		if(is_numeric($get)) {
			$href .= prettyUrlNameHelper($value) . '=1&';
			continue;
		}
		$href .= prettyUrlNameHelper($get);
		if(strlen($value)>0)
			$href .= '=' . prettyUrlNameHelper($value,$get) . '&';
		else
			$href .= '=1&';
	}
	return rtrim($href,'&');
}

/**
 * Cleaning up names for PrettyUrl
 * @param	string	$str
 * @param	string	$get
 * @return	string
 */

function prettyUrlNameHelper($str='',$get='') {
	if($get === 'name')
		return urlTitle(convertAccentedCharacters($str),'-',TRUE);
	return trim(preg_replace('/[^a-z 0-9~%.:_\-]+/i','',convertAccentedCharacters($str)));
}

/**
 * Uses URI string to set $_GET
 */

function parsePrettyUrl() {
	global $basepath;
	if(!empty($_SERVER['REQUEST_URI'])) {
		$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
		if($basepath != '/')
			$path = substr($path,strlen($basepath));
		$parts = explode('/', $path);

		if(!empty($parts)) {
			if( in_array($parts[0],array('logout','lang'),true) ) {
				$_GET[parsePrettyUrlNameHelper(array_shift($parts),true)] = parsePrettyUrlNameHelper(array_shift($parts));
			} else {
				$_GET['go'] = parsePrettyUrlNameHelper(array_shift($parts));
			}
			$length = count($parts);
			if($length % 2 === 0) {
				for($i = 0; $i < $length; $i+=2) {
					$_GET[parsePrettyUrlNameHelper($parts[$i],true)] = parsePrettyUrlNameHelper($parts[$i+1]);
				}
			} else {
				back();
			}
		}
	}
}

/**
 * Helper function for parsePrettyUrl.
 * Removing unwanted characters
 * @param	string	$str
 * @param	string	$get
 * @return	string
 */

function parsePrettyUrlNameHelper($str='',$get=false) {
	if($get)
		return preg_replace('/[^a-z0-9_-]+/i','',$str);
	return preg_replace('/[^a-z 0-9~%.:_\-]+/i','',$str);
}

/**
 * Create a fallback for exif_imagetype
 * @param $tmp_name string The upload tmp directory
 * @return bool|string
 */
if(!function_exists('exif_imagetype')) {
	function exif_imagetype($tmp_name) {
		$i = getimagesize($tmp_name);
		if(isset($i[2]))
			return $i[2];
		return false;
	}
}

/**
 * Compares strings in constant time.
 *
 * @param string $known_string
 *   The expected string.
 * @param string $user_string
 *   The user supplied string to check.
 *
 * @return bool
 *   Returns TRUE when the two strings are equal, FALSE otherwise.
 */
if(!function_exists('hash_equals')) {
	function hash_equals($known_string, $user_string) {
		// Backport of hash_equals() function from PHP 5.6
		// @see https://github.com/php/php-src/blob/PHP-5.6/ext/hash/hash.c#L739
		if (!is_string($known_string)) {
		  trigger_error(sprintf("Expected known_string to be a string, %s given", gettype($known_string)), E_USER_WARNING);
		  return FALSE;
		}

		if (!is_string($user_string)) {
		  trigger_error(sprintf("Expected user_string to be a string, %s given", gettype($user_string)), E_USER_WARNING);
		  return FALSE;
		}

		$known_len = strlen($known_string);
		if ($known_len !== strlen($user_string)) {
		  return FALSE;
		}

		// This is security sensitive code. Do not optimize this for speed.
		$result = 0;
		for ($i = 0; $i < $known_len; $i++) {
		  $result |= (ord($known_string[$i]) ^ ord($user_string[$i]));
		}

		return $result === 0;
	}
}
