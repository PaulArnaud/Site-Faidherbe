<?php
require_once("Users.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
/*
if(empty($typekhlasse) || empty($annee)){
  $message="Merci de remplir tous les champs!";
  //header("Location: Erreur.php?=".$message);
}
if(Users::Check_Password($email,$password)){
  $cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
  $cookiegood = setcookie("cookieperso", $cookie, time()+(60*60*24*30), "/");
  Users::Set_User_Cookie($email,$cookie);
  header("Location: accueil.php");
}
*/
?>