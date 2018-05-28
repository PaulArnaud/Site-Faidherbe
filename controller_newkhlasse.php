<?php
require_once("Users.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
echo $annee;
echo $typekhlasse;
echo Users::Set_Khlasse($typekhlasse,$annee);
//var_dump(Users::Set_Khlasse($typekhlasse,$annee));
//header('Location: index.php');



?>