<?php
require_once("models/Users.php");
$profil = Users::Get_Info();
$khlasse = Users::Get_Mykhlasse();
$ecole = Users::Get_MySchool();
require_once("view/profil.php");
?>