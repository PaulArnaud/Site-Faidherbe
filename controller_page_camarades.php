<?php
require_once("Users.php");
$khlasseID = $_GET['idkhlasse'];
$var1 = Users::Get_Khlasse($khlasseID);
$var2 = Users::Get_All_Camarades($khlasseID);
$GLOBALS['camarades'] = true;
echo("<div ng-click='tab=11' > </div>");
require_once('accueil.php');
?>