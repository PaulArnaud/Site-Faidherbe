<?php
require_once("Users.php");
$khlasseID = $_COOKIE['cookiecamarades'];

$khlasse = Users::Get_Khlasse($khlasseID);
$camarades = Users::Get_All_Camarades($khlasseID);
require_once("view/camarades.php");
?>