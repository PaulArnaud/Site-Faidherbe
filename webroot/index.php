<?php 
define('WEBROOT',dirname(__FILE__));
define('BROOT',dirname(WEBROOT));
define('DS',DIRECTORY_SEPARATOR);
define('CORE',ROOT.DS.'core');
define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME'])));

echo BASE_URL;
?>

