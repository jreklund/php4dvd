<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * Some important variables for other users to work with in code or templates:
 * - 'users' are all users
 */
// Datamanagers and Login
require_once($loc . "/lib/db/Users.class.php");
require_once($loc . "/lib/db/Auth.class.php");
require_once($loc . "/lib/Login.class.php");
$userdm = new Users($settings["db"]);
$authdm = new Auth($settings["db"]);
$login  = new Login($userdm,$authdm);

// Get all users if the user is allowed to
if($loggedin || $User->isAdmin()) {
	$users = $userdm->all();
	$Website->assign("users", $users);
	$Website->assign("defaultAdmin", $settings["user"]["defaultAdmin"]);
}

// Add a new user
if($loggedin && $User->isAdmin() && isset($_POST["username"])) {
	$newuser = R::dispense('users');
	// Username selected
	if(isset($_POST['username']) && preg_match('/^(?!\.)[a-z0-9.]{5,50}(?<!\.)$/iu',$_POST['username'])) {
		$newuser->username = preg_replace('/\.{2,}/u','.',$_POST['username']);
	}
	// Passwords are matching?
	if(isset($_POST["password"],$_POST["password2"]) && $_POST["password"] === $_POST["password2"] && !empty($_POST["password"])) {
		$newuser->password = $login->passwordHash($_POST['password']);
	}
	// Valid e-mail adress
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$newuser->email = $_POST["email"];
	}
	// Valid permission
	if(isset($_POST['permission']) && in_array($_POST['permission'],array('0','1','2'),true)) {
		$newuser->permission = intval($_POST['permission']);
	}

	// Not a valid username, password or email.
	if(!$newuser->username || !$newuser->password || !$newuser->email) {
		$Website->assign("newuser", $newuser);
	}
	// No other user with this username?
	else if($userdm->existsUser($newuser->username, $newuser->email)) {
		$Website->assign("username_error", DUPLICATE_USER_NAME_OR_EMAIL);
		$Website->assign("newuser", $newuser);
	} else {
		$userdm->save($newuser);
		reload();
	}
}
