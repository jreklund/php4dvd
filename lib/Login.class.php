<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . 'lib/random_compat/random.php');
require_once($loc . "lib/password_compat/password.php");

class Login {
	/**
	 * Make Users/Auth datamanagers available.
	 * @param Users $userdm
	 * @param Auth $authdm
	 */
	public function __construct(Users $userdm, Auth $authdm) {
		$this->userdm = $userdm;
		$this->authdm = $authdm;
	}
	
	/**
	 * Login this user.
	 * @param User $User
	 */
	public function login($User) {
		$User->lastlogin = date("Y-m-d H:i:s");
		$this->userdm->save($User);
		unset($User->password);
		$_SESSION["User"] = serialize($User);
	}
	
	/**
	 * Logout this user and destroy authentication.
	 * @param User $User
	 * @param Auth $Auth
	 */
	function logOut(&$User, $Auth=null) {
		// Remove rememberMe
		if($Auth && $Auth->id) {
			$this->authdm->remove($Auth);
		} else if(isset($_COOKIE["rememberme"])) {
			list($selector, $token) = explode(":", $_COOKIE["rememberme"]);
			if($selector && $token) {
				$Auth = $this->authdm->getBySelector($selector);
				if($Auth && $Auth->id && $User && $Auth->userid === $User->id)
					$this->authdm->remove($Auth);
			}
		}
		// Log out
		setcookie('rememberme', '', 1,'/','',false,true);
		setcookie('rememberme', false, 1,'/','',false,true);
		unset($_COOKIE["rememberme"]);
		unset($_SESSION["User"]);
		$User = null;
		// Go back
		back();
	}
	
	/**
	 * Return to the ref page or back.
	 */
	public function goBack() {
		if(isset($_GET["ref"]) && strlen(trim($_GET["ref"])) > 0) {
			header("Location: " . $_GET["ref"]);
			exit();
		} else {
			back();
		}
	}
	
	/**
	 * Save authentication information in database/cookie for 14 days.
	 * @param User $User
	 * @param Auth $Auth
	 */
	public function rememberMe($User, $Auth=null) {
		$selector	= $this->generateToken(6);
		$token		= $this->generateToken(32);
		$date		= new DateTime();
		$date->add(new DateInterval('P14D'));
		
		setcookie('rememberme', $selector . ':' . $token, $date->getTimestamp(), '/', '', false, true);
		
		if(!$Auth)
			$Auth = R::dispense('auth');
		$Auth->selector	= $selector;
		$Auth->token	= hash('sha512',$token);
		$Auth->userid	= $User->id;
		$Auth->expires	= $date->format('Y-m-d H:i:s');
		$this->authdm->save($Auth);
	}

	/**
	 * Generate randomized token for rememberMe.
	 * @param string $length
	 * @return the randomized string as hexadecimal representation
	 */
	protected function generateToken($length = 20) {
		return bin2hex(random_bytes($length));
	}
	
	/**
	 * Verify users password against the one stored in the database.
	 * @param string $password
	 * @param string $userPassword
	 * @return verified password true/false
	 */
	public function passwordVerify($password,$userPassword) {
		return password_verify(
			base64_encode(
				hash('sha384', $password, true)
			),
			$userPassword
		);
	}
	
	/**
	 * Hash users password before storing it in the database.
	 * @param string $password
	 * @return hashed password
	 */
	public function passwordHash($password) {
		return password_hash(
			base64_encode(
				hash('sha384', $password, true)
			),
			PASSWORD_DEFAULT
		);
	}
}
