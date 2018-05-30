<?php
$GLOBALS['camarades'] = false;
$GLOBALS['individu'] = false;
try {
    require_once("controller_page_accueil.php");
}catch (Exception $e){
    var_dump($e->getMessage());
}
?>
