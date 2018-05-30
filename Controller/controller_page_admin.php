<?php
require_once('../Users.php');
require_once("../Ecole.php");
require_once("../Khlasse.php");
$users = Users::Get_All_Users();
$ecoles = Ecole::Get_All_Ecole();
$khlasses = Khlasse::Get_All_Khlasse();
require_once('../view/admin.php');
?>