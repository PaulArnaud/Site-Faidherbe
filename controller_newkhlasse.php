<?php
require_once("models/Users.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
Users::Set_Khlasse($typekhlasse,$annee);  
header('Location: accueil.php');
?>