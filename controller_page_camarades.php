<?php
require_once("Users.php");
//$khlasseID = htmlspecialchars($_GET['id']);
$camarades = Users::Get_All_Camarades(1);
require_once("view/camarades.php");
?>