<?php
require_once("Users.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
echo $annee;
echo $typekhlasse;
require_once('connect.php');
$bdheroku = myPDO();
$req = $bdheroku->prepare('INSERT INTO khlasse(id_khlasse,id_type,annee)  VALUES ((SELECT count(*) FROM khlasse)+1,(SELECT id_typekhlasse FROM typekhlasse WHERE nomkhlasse =:typekh),:ann');
var_dump($req);
$req->bindParam(':typekh',$type);
$req->bindParam(':ann',$year);
$req->execute();
//var_dump(Users::Set_Khlasse($typekhlasse,$annee));
//header('Location: index.php');



?>