<?php
require_once("Users.php");
$profil = Users::Get_Info();
$khlasses = Users::Get_All_Khlasse();
$ecoles = Users::Get_All_Ecole();
require_once("view/Infoperso.php");
?>