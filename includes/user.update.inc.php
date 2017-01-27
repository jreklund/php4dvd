<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "includes/user.inc.php");

// If the user is not logged in or when it is not editing its own account, send the user to the home page
if(!$loggedin || (!$User->isAdmin() && $User->id != $user->id)) {
	home();
}

// Update the user information
if(isset($user) && isset($_POST["email"])) {
	$exclude = array('username', 'password2', 'submit');
	// Only admins can update permissions when they are not editing themselves
	if(!$User->isAdmin() || $User->id == $user->id) {
		$exclude[] = 'permission';
	}
	// Do not update password when there was no new password entered
	if(!isset($_POST["password"]) || empty($_POST["password"])) {
		$exclude[] = 'password';
	}
	// Do not update password when they don't match
	if(!isset($_POST["password"]) && !isset($_POST["password2"]) && $_POST["password"] != $_POST["password2"]) {
		$exclude[] = 'password';
	}
	// Valid e-mail adress
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$user->email = $_POST["email"];
	}
	// Update password when a new password was entered
	if(!in_array('password',$exclude)) {
		$user->password = $login->passwordHash($_POST['password']);
	}
	// Update permission 
	if(!in_array('permission',$exclude) && isset($_POST['permission']) && in_array($_POST['permission'],array(0,1,2))) {
		$user->permission = intval($_POST['permission']);
	}
	
	// Check for duplicate users with the same e-mail address
	$duplicateUsers = $userdm->usersWithEmail($user->email);
	if($duplicateUsers > 1) {
		$Website->assign("username_error", DUPLICATE_USER_NAME_OR_EMAIL);
	} else {
		// Save to the database
		$userdm->save($user);
		
		// Remove all authentications when you change password
		if(!in_array('password',$exclude)) {
			$authdm->removeAll($user);
			if($User->id == $user->id) {
				$login->logOut($User);
			}
		}
		
		// Go to user overview (when the user has no permissions, the page will send him back to the home page)
		header("Location: " . prettyUrl(array('go' => 'users')));
		exit();
	}
}