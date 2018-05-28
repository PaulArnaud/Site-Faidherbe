<?php
require_once("Users.php");
$profil = Users::Get_Info();
require_once("view/profil.php");
?>