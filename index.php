<?php
    define("WEBROOT",dirname(__FILE__));
    define("ROOT",dirname(WEBROOT));
    define("DS",DIRECTORY_SEPARATOR);
    define("CORE",WEBROOT.DS."core");
    define("BASE_URL",dirname(dirname($_SERVER["SCRIPT_NAME"])));
    ///echo WEBROOT , ROOT , DS , CORE , BASE_URL;
    
    require(CORE.DS.'includes.php');
    new Dispatcher();
?>