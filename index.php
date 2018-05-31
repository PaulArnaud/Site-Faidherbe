<?php
$GLOBALS['camarades'] = false;
$GLOBALS['individu'] = false;
$GLOBALS['action'] = 0;
try {
    require_once("accueil.php");
}catch (Exception $e){
    var_dump($e->getMessage());
}
?>
