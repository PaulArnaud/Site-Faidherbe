<?php
require_once("../Users.php");
require_once("../Ecole.php");
require_once("../Khlasse.php");
$profil = Users::Get_Info();
$khlasses = Khlasse::Get_All_Khlasse();
$ecoles = Ecole::Get_All_Ecole();
require_once("../view/Infoperso.php");
?>