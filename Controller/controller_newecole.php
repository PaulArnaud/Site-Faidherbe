<?php
require_once("../Models/Ecole.php");
$nomecole=htmlspecialchars($_POST['nomecole']);
$domaine=htmlspecialchars($_POST['domaine']);
Ecole::Set_Ecole($nomecole,$domaine);  
header('Location: ../accueil.php');
?>