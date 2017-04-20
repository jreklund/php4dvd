<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * Some important variables for other users to work with in code or templates:
 * - 'loggedin' is true when the user is logged in
 * - 'guestview' is true when guests can view movies
 * - 'User' is the logged in user and its information
 */
// Datamanagers and Login
require_once($loc . "/lib/db/Users.class.php");
require_once($loc . "/lib/db/Auth.class.php");
require_once($loc . "/lib/Login.class.php");
$userdm = new Users($settings["db"]);
$authdm = new Auth($settings["db"]);
$login  = new Login($userdm,$authdm);

// See if a user saved their login information
if(!isset($_SESSION["User"]) && isset($_COOKIE["rememberme"])) {
	list($selector, $token) = explode(":", $_COOKIE["rememberme"]);
	if($selector && $token) {
		$date = new DateTime();
		$authdm->removeOld($date->format('Y-m-d H:i:s')); // Remove old authentication(s)
		$Auth = $authdm->getBySelector($selector); // Get authentication by its selector
		// If authentication match, login user
		if(
			$Auth &&
			$Auth->id &&
			hash_equals($Auth->token, hash('sha512',$token)) &&
			$Auth->expires >= $date->format('Y-m-d H:i:s')
		) {
			$User = $userdm->get($Auth->userid);
			// If this user exists in the database, he/she is logged in
			if($User && $User->id) {
				$login->rememberMe($User,$Auth);
				$login->login($User);
				unset($User->password);
				$Website->assign("User", $User);
			}
			// Otherwise log this user out and remove authentication
			else {
				$login->logOut($User,$Auth);
			}
		}
		// If there is a token mismatch/date expired, remove authentication
		else if($Auth && $Auth->id) {
			$authdm->remove($Auth);
		}
	}
}

// See if a user is logged in
if(!isset($User) && isset($_SESSION["User"])) {
	$User = $_SESSION["User"];
	if(is_string($User)) {
		$User = unserialize($_SESSION["User"]);
	}
	if($User && $User->id) {
		$User = $userdm->get($User->id);
		// If this user exists in the database, he/she is logged in
		if($User && $User->id) {
			unset($User->password);
			$Website->assign("User", $User);
		}
		// Otherwise log this user out
		else {
			$login->logOut($User);
		}
	}
}

// Login
if(!isset($User) && isset($_POST["username"]) && isset($_POST["password"])) {
	$User = $userdm->getByName($_POST["username"]);
	/**
	 * Password correct? $converted = true; OR
	 * Truncated passwords at 72 characters in php4dvd <= 3.2.0 OR
	 * MD5 Encryption: Password reset in database or php4dvd version <= 2.0.
	 * !$converted: Encrypt password using PHP 5.5 API password_hash.
	 */
	if(
		($User && $converted = $login->passwordVerify($_POST["password"],$User->password)) OR
		($User && password_verify($_POST["password"], $User->password)) OR
		($User && $User->password === md5($_POST["password"]))
	) {
		if(isset($_POST["rememberme"]))
			$login->rememberMe($User);
		if(!$converted)
			$User->password = $login->passwordHash($_POST['password']);
		$login->login($User);
		$login->goBack();
	}
	// Wrong information
	else {
		unset($User);
		$Website->assign("username", $_POST["username"]);
		$Website->assign("login_error", true);
	}
}

// Logout
if(isset($_GET["logout"])) {
	$login->logOut($User);
}

/**
 * Determine if someone is logged in
 */
$loggedin = isset($User);
$Website->assign("loggedin", $loggedin);

/**
 * Determine if guests can view the movies
 */
$guestview = $settings["user"]["guestview"];
$Website->assign("guestview", $guestview);
