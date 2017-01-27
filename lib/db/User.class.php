<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * This is the User class. Users can log in on a website and have permissions.
 * In this case, there are three permissions: Guest, Editor, Admin.
 * Guests can view the movie collection.
 * Editors can edit the movie information and delete movies.
 * Admins can create and remove user accounts.
 */
 
class User {
	// Static vars for the user permissions
	private $GUEST	= 0;
	private $EDITOR	= 1;
	private $ADMIN	= 2;
	
	// Constructor, default permission is guest for security reasons.
	function __construct() { 
		$this->permission = $this->GUEST;
	}
	
	/**
	 * Check the permissions of the user.
	 * When a user is Admin, he/she is also editor and guest.
	 */
	function isGuest() {
		return $this->permission >= $this->GUEST;
	}
	function isEditor() {
		return $this->permission >= $this->EDITOR;
	}
	function isAdmin() {
		return $this->permission >= $this->ADMIN;
	}
}
