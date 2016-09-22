<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * Some important variables for other users to work with in code or templates:
 * - 'users' are all users
 */
// Datamanagers
require_once($loc."/lib/db/Users.class.php");
$userdm = new Users($settings["db"]);

// Retrieve a user
if(isset($_GET["id"])) {
	$user = $userdm->get($_GET["id"]);
	if($user && $user->id > 0) {
		// Show user
		unset($user->password);
		$Website->assign("user", $user);
	}
	else {
		back();
	}
}
?>