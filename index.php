<?php
$GLOBALS['camarades'] = false;
$GLOBALS['individu'] = false;
try {
    require_once("accueil.php");
}catch (Exception $e){
    var_dump($e->getMessage());
}
?>
