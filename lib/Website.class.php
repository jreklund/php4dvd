<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

require_once($loc . "lib/smarty/Smarty.class.php");

class Website extends Smarty {
	function __construct($settings = null) {
		parent::__construct();
		
		global $loc;
		if (!empty($settings)) {
			if (isset($settings["smarty"]["template_dir"]) && isset($settings["smarty"]["template"]))
				$this->setTemplateDir($loc . $settings["smarty"]["template_dir"] . $settings["smarty"]["template"]);
			if (isset($settings["smarty"]["compile_dir"]))
				$this->setCompileDir($loc . $settings["smarty"]["compile_dir"]);
			if (isset($settings["smarty"]["debug"])) {
				$this->debugging = $settings["smarty"]["debug"];
			}
		}
	}
		
	public function display($template = null, $cache_id = null, $compile_id = null, $parent = null) {
		parent::display($template);
	}
	
	function generateSrc($src) {
		$html = parent::fetch($src);
		return $html;
	}
}
?>