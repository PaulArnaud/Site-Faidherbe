<?php
require_once("Users.php");
$userID = $_GET['iduser'];
$khlasseuser = Users::Get_Khlasse_User($userID);
$infouser = Users::Get_Info_User($userID);
$ecoleuser = Users::Get_School_User($userID);
$GLOBALS['individu'] = true;
echo("<div ng-init='tab=12' > </div>");
require_once('controller_page_accueil.php');
?>