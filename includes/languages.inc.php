<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

// Get main language
$language = $settings["defaultlanguage"];

// Load available languages
$languages = array();
if(is_array($settings["languages"])) {
	foreach($settings["languages"] as $lang=>$code) {
		if(existsLanguage($code)) {
			$languages[$lang] = $code;
		}
	}
}
$Website->assign("languages", $languages);

// Does anyone try to specify a specific language
if(isset($_GET["lang"]) && in_array($_GET['lang'],$languages,true)) {
	setcookie("lang", $_GET["lang"], time()+(365 * 24 * 60 * 60), "/", "");
	back();
}
// Find whether the user has a preferred language
else if(isset($_COOKIE["lang"]) && in_array($_COOKIE["lang"],$languages,true)) {
	$language = $_COOKIE["lang"];
}

// Load language
require_once($loc . "lang/" . $language . ".inc.php");
$Website->assign("language", $language);

/**
 * Check if this language exists.
 * @param $lang
 * @return true if the language file exists on disk, otherwise false
 */
function existsLanguage($lang) {
	global $loc;
	return file_exists($loc . "lang/" . $lang . ".inc.php");
}