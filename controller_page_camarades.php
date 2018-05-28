<?php
require_once("Users.php");
//$khlasseID = htmlspecialchars($_GET['id']);
$khlasse = Users::Get_Khlasse(1);
$camarades = Users::Get_All_Camarades(1);
require_once("view/camarades.php");
?>