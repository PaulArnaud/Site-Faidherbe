<?php
require("../Khlasse.php");
$khlasseID = $_GET['idkhlasse'];
$var1 = Khlasse::Get_Khlasse($khlasseID);
$var2 = Khlasse::Get_All_Camarades($khlasseID);
$GLOBALS['camarades'] = true;
echo("<div ng-init='tab=11' > </div>");
header('Location: ../accueil.php');
?>