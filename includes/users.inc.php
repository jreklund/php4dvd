<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * Some important variables for other users to work with in code or templates:
 * - 'users' are all users
 */
// Datamanagers
require_once($loc."/lib/db/Users.class.php");
$userdm = new Users($settings["db"]);

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
	if(isset($_POST['username']) && !empty($_POST['username'])) {
		$newuser->username = $_POST['username'];	
	}
	// Passwords are matching?
	if(isset($_POST["password"]) && isset($_POST["password2"]) && $_POST["password"] === $_POST["password2"] && !empty($_POST["password"])) {
		$newuser->password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	}
	// Valid e-mail adress
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$newuser->email = $_POST["email"];
	}
	// Valid permission 
	if(isset($_POST['permission']) && in_array($_POST['permission'],array(0,1,2))) {
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