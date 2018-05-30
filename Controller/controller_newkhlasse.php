<?php
require_once("../Users.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
Users::Set_Khlasse($typekhlasse,$annee);  
header('Location: ../controller_page_accueil.php');
?>