<?php
require_once("../Models/Users.php");
require_once("../Models/Ecole.php");
require_once("../Models/Khlasse.php");

$user = $_POST['user'];
$ecole = $_POST['ecole'];
$khlasse = $_POST['khlasse'];
if (!empty($user)){
    $id_user = explode('-',$user);
    Users::Del_User($id_user[0]);
}
if (!empty($ecole)){
    $id_ecole = explode('-',$ecole);
    Ecole::Del_Ecole($id_ecole[0]);
}
if (!empty($khlasse)){
    $id_khlasse = explode('-',$khlasse);
    Khlasse::Del_Khlasse($id_khlasse[0]);
}
header('Location: ../accueil.php');
?>