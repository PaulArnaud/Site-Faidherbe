<?php
require_once("Users.php");
$users = Users::Get_All_Users();
$ecoles = Users::Get_All_Ecole();
$khlasses = Users::Get_All_Khlasse();
require_once('controller/controller_admin.php');
require_once('view/admin.php');
?>