<?php
require_once("Users.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$portable = $_POST['portable'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$kh1 = $_POST['khlasse1'];
$kh2 = $_POST['khlasse2'];
$ecole = $_POST['ecole'];
$id_khlasse1 = explode('-',$kh1);

var_dump($id_khlasse1);
var_dump($id_khlasse1[0]);
var_dump($prenom);
var_dump($portable);
var_dump($facebook);
var_dump($linkedin);
var_dump($kh1);
var_dump($kh2);
var_dump($ecole);
//Users::Update_My_Data($nom,$prenom,$portable,$facebook,$linkedin);
//Users::Insert_A_Etudie($kh1,$kh2)
//Users::Insert_A_Etudie_PF($ecole);
//header('Location: accueil.php');
?>

