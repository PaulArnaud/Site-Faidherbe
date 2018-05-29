<?php
require_once("Users.php");
$khlasseID = $_GET['idkhlasse'];
$khlasse = Users::Get_Khlasse($khlasseID);
$camarades = Users::Get_All_Camarades($khlasseID);
$GLOBALS['camarades'] = true;
?>