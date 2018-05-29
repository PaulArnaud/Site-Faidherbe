<?php
require_once("Users.php");
$userID = $_GET['iduser'];
$khlasseuser = Users::Get_Khlasse_User($khlasseID);
$infouser = Users::Get_Info_User($khlasseID);
//$ecoleuser = Users::Get_School_User($khlasseID);
$GLOBALS['individu'] = true;
echo("<div ng-init='tab=12' > </div>");
require_once('accueil.php');
?>