<?php
    define("ROOT",dirname(__FILE__));
    define("DS",DIRECTORY_SEPARATOR);
    define("CORE",ROOT.DS."core");
    define("BASE_URL",dirname(dirname($_SERVER["SCRIPT_NAME"])));
    /*require(CORE.DS.'includes.php');*/
    require_once('/config/connect.php');
    $res = myPDO()->query('SELECT * FROM khlasse');
    //new Dispatcher();
?>