<?php
$GLOBALS['camarades'] = false;
$GLOBALS['individu'] = false;
$_POST['action'] = NULL ;
try {
    require_once("accueil.php");
}catch (Exception $e){
    var_dump($e->getMessage());
}
?>
