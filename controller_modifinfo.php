<?php
require_once("Users.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$portable = $_POST['num_portable'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$kh1 = $_POST['khlasse1'];
$kh2 = $_POST['khlasse2'];
$ecole = $_POST['ecole'];
Users::Update_My_Data($nom,$prenom,$portable,$facebook,$linkedin,$kh1,$kh2,$ecole);
echo("<div ng-init='tab=3' > </div>");
header('Location: accueil.php');

