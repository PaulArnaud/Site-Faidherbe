<?php
require_once("Users.php");
$userID = $_GET['iduser'];
$khlasseuser = Users::Get_Khlasse_User($userID);
$infouser = Users::Get_Info_User($userID);
$ecoleuser = Users::Get_School_User($userID);
$GLOBALS['individu'] = true;
$GLOBALS['action'] = 2;

header('Location: ../accueil.php');
exit();
?>