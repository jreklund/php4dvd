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
			self::$database = R::setup(
				"mysql:host=" . $settings["host"] . ";port=" . $settings["port"] . ";dbname=" . $settings["name"],
				$settings["user"],
				$settings["pass"],
				true
			);

			// Debug
			if(isset($settings["debug"]) && $settings["debug"]) {
				R::fancyDebug($settings["debug"]);
			}
		}
	}

	public function getDatabaseClient() {
		return self::$database->getDatabaseAdapter()->getDatabase()->getPDO()->getAttribute(\PDO::ATTR_CLIENT_VERSION );
	}

	public function getDatabaseVersion() {
		return self::$database->getDatabaseAdapter()->getDatabase()->getPDO()->getAttribute( \PDO::ATTR_SERVER_VERSION );
	}

	public function getMysqlEncoding() {
		return self::$database->getDatabaseAdapter()->getDatabase()->getMysqlEncoding( TRUE );
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