<?php
require("../Khlasse.php");
$khlasseID = $_GET['idkhlasse'];
$var1 = Khlasse::Get_Khlasse($khlasseID);
$var2 = Khlasse::Get_All_Camarades($khlasseID);
$GLOBALS['camarades'] = true;
$GLOBALS['action'] = 1;
var_dump($GLOBALS['action']);
/*
header('Location: ../accueil.php');
exit();*/
?>