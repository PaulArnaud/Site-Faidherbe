<?php
require_once("../Users.php");
require_once("../Ecole.php");
$nomecole=htmlspecialchars($_POST['nomecole']);
$domaine=htmlspecialchars($_POST['domaine']);
Ecole::Set_Ecole($nomecole,$domaine);  
header('Location: ../controller_page_accueil.php');
?>