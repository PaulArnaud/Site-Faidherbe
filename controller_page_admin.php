<?php
require_once('Users.php');
require_once("Models/Ecole.php");
$users = Users::Get_All_Users();
$ecoles = Ecole::Get_All_Ecole();
$khlasses = Users::Get_All_Khlasse();
require_once('view/admin.php');
?>