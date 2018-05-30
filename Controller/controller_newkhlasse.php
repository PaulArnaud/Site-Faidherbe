<?php
require_once("../Models/Users.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
Users::Set_Khlasse($typekhlasse,$annee);  
header('Location: ../accueil.php');
?>