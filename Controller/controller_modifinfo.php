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

if (!empty($kh1) && !empty($kh2)){
    $id_khlasse1 = explode('-',$kh1);
    $id_khlasse2 = explode('-',$kh2);
    Users::Del_A_Etudie();
    Users::Insert_A_Etudie($id_khlasse1[0]);
    Users::Insert_A_Etudie($id_khlasse2[0]);
}

if (!empty($ecole)){
    $id_ecole = explode('-',$ecole);
    Users::Del_A_Etudie_PF();
    Users::Insert_A_Etudie_PF($id_ecole[0]);
}
if (!empty($nom)){
    Users::Update_My_Name($nom);
}
if (!empty($prenom)){
    Users::Update_My_FirstName($prenom);
}
if (!empty($portable)){
    Users::Update_My_Portable($portable);
}
if (!empty($facebook)){
    Users::Update_My_Facebook($facebook);
}
if (!empty($linkedin)){
    Users::Update_My_Linkedin($linkedin);
}
//header('Location: ../accueil.php');
?>

