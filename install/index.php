<?php
// Only load .php files from index.php
define('DIRECTACCESS', TRUE);

// Start timer
$time_start = microtime(true);

// Overwrite template as 'installer'
$installer = true;
$template_name = "installer";

// Default config
require_once("../common.inc.php");

// Language
require_once($loc . "includes/languages.inc.php");

// New version to install?
if(NEW_VERSION <= VERSION) {
	header("Location: ../");
	exit();
}

// Datamanagers
require_once($loc . "lib/Database.class.php");

/**
 *  Steps for installation/upgrade:
 *  1. Check for permissions
 *  2. Help the user to create its config.php file
 *  3. Install the database (if no database available, otherwise upgrade)
 *  4. Copy version.default.inc.php to version.inc.php
 *  5. Tell the user to remove the install/ directory
 */
$steps = array('welcome', 'permissions', 'configuration', 'database', 'finished');

// User configuration already exists?
if(file_exists($loc . "config/config.php")) {
	unset($steps[2]);
}
// Upgrade database?
if(NEW_DB_VERSION <= DB_VERSION) {
	unset($steps[3]);
}

// Rearrange steps
$steps = array_values($steps);

// Template
$template = "index.html";

// Get current and next step
$go = isset($_GET['go']) ? $_GET['go'] : '';
$step = array_search($go, $steps);
$currentstep = $steps[$step];
$nextstep = count($steps) > $step + 1 ? $steps[$step+1] : false;
$Website->assign("currentstep", $currentstep);
$Website->assign("nextstep", $nextstep);
$Website->assign("main", $currentstep.".html");

// Switch to the correct page
switch ($currentstep) {
	default: 			/**
						 * Default welcome page
						 */
						break;
						
	case "permissions":	/**
						 * Check permissions of folders
						 */
						// Chmod the following directories with 777: (false = if not exist, don't show error)
						$directories = array(
							"cache/" => true,
							"compiled/" => true,
							"config/" => true,
							"config/config.php" => false,
							"config/version.inc.php" => false,
							"movies/" => true,
							"movies/covers/" => true
						);
						
						// Check directories
						$permissionsOk = true;
						$tmp = array();
						foreach($directories as $dir=>$required) {
							$exists = file_exists($loc . $dir);
							$writable = is_writable($loc . $dir);
							$tmp[$dir] = ($exists && $writable) || (!$required && !$exists);
							$permissionsOk &= $tmp[$dir];
						}
						$directories = $tmp;
						$Website->assign("permissionsOk", $permissionsOk);
						$Website->assign("directories", $directories);
						break;
						
	case "configuration":
						/**
						 * Create the configuration file
						 */
						$Website->assign("dbhost", $settings["db"]["host"]);
						$Website->assign("dbport", $settings["db"]["port"]);
						$Website->assign("dbname", $settings["db"]["name"]);
						$Website->assign("dbuser", $settings["db"]["user"]);
						$Website->assign("dbpass", $settings["db"]["pass"]);
						
						// Website base url
						$Website->assign("url", rtrim($settings["url"]["base"],'/'));
						
						// Default language
						$Website->assign("languages", $settings["languages"]);
						
						// The templates
						$tempaltes = array();
						$dir = $loc."tpl/";
						$dhandle = opendir($dir);
						while (($file = readdir($dhandle)) !== false) {
							// Exclude directories and 'installer' directory
							if(strpos($file, ".") === false && is_dir($dir . $file) && $file != "installer") {
								$templates[] = $file;
							}
						}
						closedir($dhandle);
						sort($templates);
						$Website->assign("templates", $templates);
						$Website->assign("template", $template_name);
						
						// Guest view
						$Website->assign("guestview", $settings["user"]["guestview"]);
						
						/**
						 * Update configuration
						 */
						if(isset($_POST["dbhost"])) {
							// Database
							$dbsettings = array("utf8" => true, "debug" => true);
							$dbsettings["host"] = preg_replace('/[^0-9a-zA-Z-\\.]+/','',stripslashes($_POST["dbhost"]));
							$Website->assign("dbhost", $dbsettings["host"]);
							$dbsettings["port"] = intval(stripslashes($_POST["dbport"]));
							$Website->assign("dbport", $dbsettings["port"]);
							$dbsettings["name"] = preg_replace('/[^0-9a-zA-Z$_]+/','',stripslashes($_POST["dbname"]));
							$Website->assign("dbname", $dbsettings["name"]);
							$dbsettings["user"] = preg_replace('/[^0-9a-zA-Z$_\\.]+/','',stripslashes($_POST["dbuser"]));
							$Website->assign("dbuser", $dbsettings["user"]);
							$dbsettings["pass"] = stripslashes($_POST["dbpass"]);
							$Website->assign("dbpass", $dbsettings["pass"]);
							
							// Website
							$uConfig = array();
							$uConfig['defaultlanguage'] = in_array($_POST["defaultlanguage"],$settings["languages"],true)?$_POST["defaultlanguage"]:$language;
							$Website->assign("language", $uConfig['defaultlanguage']);
							$uConfig['url'] = preg_replace('/[^0-9a-zA-Z_\\-\\.\\/]+/','',stripslashes($_POST["url"]));
							$Website->assign("url", $uConfig['url']);
							$uConfig['guestview'] = isset($_POST["guestview"]) ? true : false;
							$Website->assign("guestview",$uConfig['guestview']);
							$uConfig['template'] = in_array($_POST["template"],$templates,true)?$_POST["template"]:$settings["template"];
							$Website->assign("template", $uConfig['template']);
							
							// Test database connection
							$success = false;
							try {
								new Database($dbsettings);
								$success = true;
							} catch(Exception $e) {
								$Website->assign("error", $e->getMessage());
							}
							
							// Save config when the validation was successful
							if($success) {
								// Make config file
								$nl = "\r\n";
								$config = "<?php" . $nl;
								$config .= "defined('DIRECTACCESS') OR exit('No direct script access allowed');" . $nl;
								
								// Default language
								$config .= '$settings["defaultlanguage"] = "' . addslashes($uConfig['defaultlanguage']) . '";' . $nl;
								
								// Url
								$config .= '$settings["url"]["base"] = "' . addslashes($uConfig['url']) . '";' . $nl;
								
								// Database
								$config .= '$settings["db"]["host"] = "' . addcslashes( $dbsettings["host"], "\\'" ) . '";' . $nl;
								$config .= '$settings["db"]["port"] = ' . addcslashes( $dbsettings["port"], "\\'" ) . ';' . $nl;
								$config .= '$settings["db"]["name"] = "' . addcslashes( $dbsettings["name"], "\\'" ) . '";' . $nl;
								$config .= '$settings["db"]["user"] = "' . addcslashes( $dbsettings["user"], "\\'" ) . '";' . $nl;
								$config .= '$settings["db"]["pass"] = "' . addcslashes( $dbsettings["pass"], "\\'" ) . '";' . $nl;
								
								// Guest view
								$config .= '$settings["user"]["guestview"] = ' . ($uConfig['guestview']?'true':'false') . ';' . $nl;
								
								// Template
								$config .= '$settings["template"] = "' . addslashes($uConfig['template']) . '";' . $nl;
								
								// Close
								$config .= "?>";
								
								// Write
								$file = $loc . "config/config.php";
								$fsuccess = true;
								$handle = @fopen($file, "w+");
								$fsuccess &= isset($handle);
								$fsuccess &= @fwrite($handle, $config) !== false;
								$fsuccess &= @fclose($handle);
								if(!$fsuccess) {
									$Website->assign("error", FAILED_TO_WRITE_FILE);
								} else {
									// Go to the next step
									header("Location: ./?go=" . $nextstep);
									exit();
								}
							}
						}
						break;
						
	case "database":	/**
						 * Create or upgrade the database
						 */
						// Connect to the database
						try {
							$Database = new Database($settings["db"]);
						} catch(Exception $e) {
							echo $e->getMessage();
							exit();
						}
						
						// New installation or upgrade?
						$tables = array("movies" => true, "users" => true);
						foreach(R::getCol("SHOW TABLES;") as $table) {
							unset($tables[$table]);
						}
						$new_installation = !empty($tables);
						$Website->assign("new_installation", $new_installation);
						
						// Update database
						if(isset($_POST["accepted"])) {
							// Select utf8mb4 or utf8 depending on MySQL/MariaDB
							$charset_collate = $Database->getMysqlEncoding();
							
							// Search after the following inside .sql 
							$search = array(
								'__DATABASE__',
								'__CHARACTER__',
								'__COLLATE__',
								'__NAME_ORDER__'
							);
							
							// Replace matching strings with
							$replace = array(
								$settings["db"]["name"],
								$charset_collate['charset'],
								$charset_collate['collate'],
								$settings["name_order"]
							);
		
							// Iterate sql files since last version and execute these files
							$v = number_format(DB_VERSION + 0.1, 1);
							
							// Run first script when this is a new installation
							if($new_installation) {
								$php4dvd_sql = readFileContent($loc . "install/sql/php4dvd-3.3.sql");
								if($php4dvd_sql) {
									$php4dvd_sql = str_replace($search,$replace,$php4dvd_sql);
									try {
										R::exec($php4dvd_sql);
									} catch(Exception $e) {
										echo $e->getMessage();
										exit();
									}
								}
								
								// Start upgrade at lowest supported version, which is v3.4
								$v = 3.4;
							}
							
							// Run all upgrade scripts
							for(; $v <= NEW_DB_VERSION; $v = number_format($v + 0.1, 1)) {
								$sql = readFileContent($loc . "install/sql/update-".$v.".sql");
								if($sql) {
									$sql = str_replace($search,$replace,$sql);
									try {
										R::exec($sql);
									} catch(Exception $e) {
										echo $e->getMessage();
										exit();
									}
								}
							}
							
							// Done, so go to the next step!
							header("Location: ./?go=" . $nextstep);
							exit();
						}						
						break;
						
						
	case "finished":	/**
						 * Update version and finish the installation
						 */
						if(isset($_POST["finish"])) {
							// Make version file
							$nl = "\r\n";
							$version = "<?php" . $nl;
	
							// Version
							$version .= 'define(\'VERSION\', \'' . NEW_VERSION . '\');' . $nl;
							$version .= 'define(\'DB_VERSION\', \'' . NEW_DB_VERSION . '\');' . $nl;
							
							// Close
							$version .= "?>";
							
							// Write
							$file = $loc . "config/version.inc.php";
							$fsuccess = true;
							$handle = @fopen($file, "w+");
							$fsuccess &= isset($handle);
							$fsuccess &= @fwrite($handle, $version) !== false;
							$fsuccess &= @fclose($handle);
							if(!$fsuccess) {
								echo FAILED_TO_WRITE_FILE;
								exit();
							} else {
								// Finish!
								header("Location: " . $webroot);
								exit();
							}
						}
						break;
}

// PHP parse time
$time_end = microtime(true);
$managertime = $time_end - $time_start;

// Display template
try {
	$Website->display($template);
} catch(Exception $e) {
	echo "<h1>Error</h1>";
	echo "<p>Make sure the /compiled/ folder is writable (chmod 777).</p>";
	echo "<pre>" . $e . "</pre>";
}

// Smarty template parse time
$time_end = microtime(true);
$tpltime = $time_end - $time_start - $managertime;

// Print the parse timings at the end of the HTML page
print "\n\n<!-- ** php parsetime: ".number_format($managertime, 5)." sec. ** -->\n";
print "<!-- ** tpl parsetime: ".number_format($tpltime, 5)." sec. ** -->";
?>