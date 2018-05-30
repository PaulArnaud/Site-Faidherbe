<?php
$GLOBALS['camarades'] = false;
$GLOBALS['individu'] = false;
try {
    require_once("Controller/controller_page_accueil.php");
}catch (Exception $e){
    var_dump($e->getMessage());
}
?>
