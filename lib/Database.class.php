<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "lib/redbean/rb.php");

class Database {
	protected static $database;

	/**
	 * Construct a new database object.
	 * @param $settings
	 */
	public function __construct($settings) {
		if(!isset(self::$database)) {
			self::$database = true;
			R::setup("mysql:host=" . $settings["host"] . ";port=" . $settings["port"] . ";dbname=" . $settings["name"],
					$settings["user"],
					$settings["pass"],
					true);
					
			
			if(isset($settings["NO_ZERO_IN_DATE"]) && $settings["NO_ZERO_IN_DATE"]) {
				R::exec('SET SQL_MODE = ""');
			}
			// Debug
			if(isset($settings["debug"]) && $settings["debug"]) {
				R::fancyDebug($settings["debug"]);
			}
		}
	}

	/**
	 * Fill this object with the row information.
	 * @param $obj
	 * @param $row
	 */
	protected function fillObject($obj, $row) {
		if(isset($row) && $row) {
			foreach($row as $key => $value)
				$obj->{$key} = $value;
			return $obj;
		}
		return false;
	}
}