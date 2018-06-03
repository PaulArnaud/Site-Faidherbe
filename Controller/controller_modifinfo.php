<?php
require_once("../Models/Users.php");
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']); 
$portable = htmlspecialchars($_POST['portable']);
$facebook = htmlspecialchars($_POST['facebook']);
$linkedin = htmlspecialchars($_POST['linkedin']);
$kh1 = htmlspecialchars($_POST['khlasse1']);
$kh2 = htmlspecialchars($_POST['khlasse2']);
$ecole = htmlspecialchars($_POST['ecole']);
$id_khlasse1 = explode('-',$kh1);
$id_khlasse2 = explode('-',$kh2);
$id_ecole = explode('-',$ecole);
Users::Del_A_Etudie();
Users::Del_A_Etudie_PF();
Users::Update_My_Data($nom,$prenom,$portable,$facebook,$linkedin);
Users::Insert_A_Etudie($id_khlasse1[0]);
Users::Insert_A_Etudie($id_khlasse2[0]);
Users::Insert_A_Etudie_PF($id_ecole[0]);
header('Location: ../accueil.php');
?>

