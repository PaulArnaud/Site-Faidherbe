<?php
require_once("Users.php");
$nomecole=htmlspecialchars($_POST['nomecole']);
$domaine=htmlspecialchars($_POST['domaine']);
Users::Set_Ecole($nomecole,$domaine);  
header('Location: accueil.php');
?>