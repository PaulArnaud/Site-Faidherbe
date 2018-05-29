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
$id_khlasse2 = explode('-',$kh2);
$id_ecole = explode('-',$ecole);
Users::Update_My_Data($nom,$prenom,$portable,$facebook,$linkedin);
Users::Insert_A_Etudie($id_khlasse1[0]);
Users::Insert_A_Etudie($id_khlasse2[0]);
Users::Insert_A_Etudie_PF($id_ecole);
header('Location: accueil.php');
?>

