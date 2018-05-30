<?php
require_once("../Users.php");
require_once("../Khlasse.php");
$khlasseID = $_GET['idkhlasse'];
$var1 = Khlasse::Get_Khlasse($khlasseID);
$var2 = Users::Get_All_Camarades($khlasseID);
$GLOBALS['camarades'] = true;
echo("<div ng-init='tab=11' > </div>");
require_once('controller_page_accueil.php');
?>