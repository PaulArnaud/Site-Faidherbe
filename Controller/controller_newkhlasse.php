<?php
require_once("../Khlasse.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
Khlasse::Set_Khlasse($typekhlasse,$annee);  
header('Location: Controller/controller_page_accueil.php');
?>