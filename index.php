<?php

$GLOBALS['camarades'] = false;
try {
    require_once("accueil.php");
}catch (Exception $e){
    var_dump($e->getMessage());
}
?>
