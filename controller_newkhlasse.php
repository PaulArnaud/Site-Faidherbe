<?php
require_once("Users.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
var_dump($annee);
var_dump($typekhlasse);

var_dump(Users::Set_Khlasse($typekhlasse,$annee));
//header('Location: index.php');



?>