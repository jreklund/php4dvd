<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "includes/user.inc.php");

// Remove a user
if(isset($user)) {
	// Deleting the admin user is not such a good idea!
	if($user->username != $settings["user"]["defaultAdmin"]) {
		$userdm->remove($user);
		$authdm->removeAll($user);
		if($User->id === $user->id) {
			$login->logOut($User);
		}
	}
	back();
}
