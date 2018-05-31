<?php
$GLOBALS['camarades'] = false;
$GLOBALS['individu'] = false;
$_POST['action'] = '';
try {
    require_once("accueil.php");
}catch (Exception $e){
    var_dump($e->getMessage());
}
?>
