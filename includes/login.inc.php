<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * Some important variables for other users to work with in code or templates:
 * - 'loggedin' is true when the user is logged in
 * - 'guestview' is true when guests can view movies
 * - 'User' is the logged in user and its information
 */
// Datamanagers
require_once($loc . "/lib/db/Users.class.php");
$userdm = new Users($settings["db"]);

// See if a user is logged in
if(isset($_SESSION["User"])) {
	$User = $_SESSION["User"];
	if(is_string($User)) {
		$User = unserialize($_SESSION["User"]);
	}
	if($User && isset($User->id)) {
		$User = $userdm->get($User->id);
		// If this user exists in the database, he/she is logged in
		if($User) {
			unset($User->password);
			$Website->assign("User", $User);
		}
		// Otherwise log this user out
		else {
			logOut($User);
		}
	}
}

// Login
if(!isset($User) && isset($_POST["username"]) && isset($_POST["password"])) {
	$User = $userdm->getByName($_POST["username"]);
	// Correct information?
	if($User && password_verify($_POST["password"], $User->password)) {
		validUser($userdm,$User);
	}
	/**
	 * MD5 Encryption: Password reset in database or php4dvd version <= 2.0.
	 * Encrypt password using PHP 5.5 API password_hash.
	 */
	else if($User && $User->password === md5($_POST["password"])) {
		$User->password = password_hash($_POST["password"], PASSWORD_DEFAULT);
		validUser($userdm,$User);
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
	logOut($User);
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

// Log out
function logOut(&$User) {
	// Log out
	unset($_SESSION["User"]);
	unset($User);
	// Go back
	back();
}

// Valid user
function validUser(&$userdm,&$User) {
	$User->lastlogin = date("Y-m-d H:i:s");
	$userdm->save($User);
	unset($User->password);
	$_SESSION["User"] = serialize($User);
	
	// Logged in, go back to the ref page or back
	if(isset($_GET["ref"]) && strlen(trim($_GET["ref"])) > 0) {
		header("Location: " . $_GET["ref"]);
		exit();
	} else {
		back();
	}
}