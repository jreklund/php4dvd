<?php
/**
 * Common functionality needed by the site.
 *
 * Do not change this file unless you know exactly what you are doing!
 */
// Compression
ob_start("ob_gzhandler");

// UTF8 header
header('Content-type: text/html; charset=utf-8');

// Start session
session_start();

// Local path
$loc = dirname(__FILE__) . "/";

// Correct PHP version check
if(PHP_VERSION_ID < 50307) {
	echo "<h1>Error</h1><p>php4dvd requires at least PHP 5.3.7. You are running PHP " . PHP_VERSION . ". Please upgrade.</p>";
	exit();
}

// Load the default config file
if(!file_exists($loc . "config/config.default.php")) {
	echo "<h1>Error</h1>The file <tt>config/config.default.php</tt> is missing.";
	exit();
}
require_once($loc . "config/config.default.php");
$default_settings = $settings;

// Load Parental Guidance config file
require_once($loc . "config/parental.guidance.php");

// Load the config file
if(file_exists($loc . "config/config.php")) {
	require_once($loc . "config/config.php");
	$custom_settings = $settings;

	// When installing, reset all to default settings, except the database
	if(isset($installer) && $installer) {
		$settings = $default_settings;
		foreach($custom_settings["db"] as $key=>$value) {
			$settings["db"][$key] = $value;
		}
		$settings["user"] = $custom_settings["user"];
	} 
	// Load usertheme
	else {
		if(isset($settings["template"]))
			$settings["smarty"]["template"] = $settings["template"];
	}
}

// Force the use of HTTPS
if(
	isset($settings["url"]["HTTPS"]) && $settings["url"]["HTTPS"] && 
	(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on')
) {
	header('Location: https://'. $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
	exit();
}

// Include util functions
require_once($loc . "lib/util.inc.php");

// Load smarty template parser
require_once($loc . "lib/Website.class.php");
$Website = new Website($settings);

// Base url
$protocol = "http";
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) {
	$protocol = "https";
}
if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO']) {
	$protocol = "https";
}
$baseurl = $protocol . "://" . $_SERVER["HTTP_HOST"];
$Website->assign("baseurl", $baseurl);

// Current URL
$currentUrl = $baseurl . $_SERVER["REQUEST_URI"];
$Website->assign("currentUrl", $currentUrl);

// Webroot
$basepath = $settings["url"]["base"];
if(strlen($basepath) > 0 && !preg_match("/\/$/", $basepath)) {
	$basepath .= "/";
}
$webroot = $baseurl . "/" . $basepath;
$Website->assign("webroot", $webroot);

// Pretty URL
$pretty_url = $settings["pretty_url"];
if($pretty_url && !isset($_GET['go']) && !isset($installer)) {
	parsePrettyUrl();
}

// YouTube API
$youtubeKey = $settings["youtube_key"];
$Website->assign("youtubeKey", $youtubeKey?true:false);

// Template directory
$tpl = $settings["smarty"]["template"] . '/';
$tpl_dir = $settings["smarty"]["template_dir"];
$tpl_include = $webroot . $tpl_dir . $tpl;
$Website->assign("tpl_include", $tpl_include);

// Template
$tpl_name = $settings["smarty"]["template"];
$tpl_skin = 'skin-'.$settings["template_skin"];
$tpl_skin_light = $settings["template_skin_light"];
$tpl_movie_collection = $settings["template_movie_collection"];
$tpl_poster_icons = $settings["template_poster_icons"];
if($tpl_skin_light) {
	$tpl_skin .= '-light';
	$tpl_name .= '-light';
}
$Website->assign("template", $tpl_name);
$Website->assign("template_skin", $tpl_skin);
$Website->assign("template_colour", $settings["template_skin"]);
$Website->assign("template_light", $settings["template_skin_light"]);
$Website->assign("poster_icons", $tpl_poster_icons);

// Template for movie collection
$templateName = isset($_COOKIE['layout']) ? $_COOKIE['layout'] : '';
if(!in_array($templateName,array('poster','postertitle','posterlist','list','listplot'),true))
	$templateName = ($tpl_movie_collection)?$tpl_movie_collection:'postertitle';
$Website->assign("templateName", $templateName);

// Version
require_once($loc . "config/version.default.inc.php");
$Website->assign("newversion", NEW_VERSION);
if(file_exists($loc . "config/version.inc.php")) {
	require_once($loc . "config/version.inc.php");
	$Website->assign("version", VERSION);
	if(!defined('DB_VERSION')) {
		define('DB_VERSION', VERSION);
	}
} else {
	define('VERSION', '0');
	define('DB_VERSION', '0');
}
?>
