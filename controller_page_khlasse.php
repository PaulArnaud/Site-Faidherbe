<?php
try{
    require_once("Khlasse.php");
}
catch (Exception $e){
    echo 'erreur require';
}
//$listkhlasse = Khlasse::Get_All_Khlasse();
require_once("view/khlasse.php");
?>