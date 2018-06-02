<?php
require("../Models/Khlasse.php");
$khlasseID = $_GET['idkhlasse'];
$var1 = Khlasse::Get_Khlasse($khlasseID);
$var2 = Khlasse::Get_All_Camarades($khlasseID);
require('../view/camarades.php');
?>