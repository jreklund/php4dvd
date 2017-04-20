<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "lib/Database.class.php");

class Auth extends Database {
	/**
	 * Save user authentication.
	 * @param Auth $auth
	 */
	public function save($auth) {
		$a = R::load('auth', $auth->id);
		if(!$a)
			$a = R::dispense('auth');
		$this->fillObject($a, $auth);
		return R::store($a);
	}

	/**
	 * Remove user authentication.
	 * @param Auth $auth
	 */
	public function remove($auth) {
		$a = R::load('auth', $auth->id);
		if($a)
			R::trash($a);
	}
	
	/**
	 * Remove all authentication for this user.
	 * @param User $user
	 */
	public function removeAll($user) {
		$a = R::find('auth', 'userid = ?', array( $user->id ));
		if($a)
			R::trashAll($a);
	}
	
	/**
	 * Remove old authentication(s).
	 * @param string $datetime
	 */
	public function removeOld($datetime) {
		$a = R::find('auth', 'expires <= ?', array( $datetime ));
		if($a)
			R::trashAll($a);
	}
	
	/**
	 * Get authentication by its selector.
	 * @param string $username
	 * @return the authentication or empty bean when the selector was not found
	 */
	public function getBySelector($selector) {
		return R::findOne('auth', 'selector = ?', array( $selector ));
	}
}
