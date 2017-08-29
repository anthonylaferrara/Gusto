<?php
error_reporting(0);
define('WEBROOT',dirname(__FILE__));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR );
define('CORE', ROOT.DS.'core');
define('MODEL', ROOT.DS.'model');
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));
define('CTRL', BASE_URL . DS);
require CORE.DS.'Autoloader.php';
Autoloader::register();
Connexion::getInstance();
new Dispatcher();
?>
