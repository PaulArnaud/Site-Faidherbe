<?php
require_once("Users.php");
require_once("Ecole.php");
$profil = Users::Get_Info();
$khlasses = Users::Get_All_Khlasse();
$ecoles = Ecole::Get_All_Ecole();
require_once("view/Infoperso.php");
?>