<?php
$profil = Users::Get_Info();
$khlasses = Khlasse::Get_All_Khlasse();
$ecoles = Ecole::Get_All_Ecole();
require_once("view/Infoperso.php");
?>