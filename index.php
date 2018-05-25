<?php
    define("WEBROOT",dirname(__FILE__));
    define("ROOT",dirname(WEBROOT));
    define("DS",DIRECTORY_SEPARATOR);
    define("CORE",ROOT.DS."core");
    echo WEBROOT , ROOT , DS , CORE ;
?>