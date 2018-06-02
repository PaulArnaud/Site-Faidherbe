<?php
require_once("../Models/Users.php");
$userID = $_GET['iduser'];
$khlasseuser = Users::Get_Khlasse_User($userID);
$infouser = Users::Get_Info_User($userID);
$ecoleuser = Users::Get_School_User($userID);

require('../view/individu.php');
?>