
<?php
require_once("../Users.php");
$email=htmlspecialchars($_POST['Email']);
$password=htmlspecialchars($_POST['password']);

if(empty($email) || empty($password)){
  $message="Merci de remplir tous les champs!";
  //header("Location: Erreur.php?=".$message);
}
if(Users::Check_Password($email,$password)){
  $cookieconnexion=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
  $cookiegood = setcookie("cookieperso", $cookieconnexion, time()+(60*60*24*30), "/");
  Users::Set_User_Cookie($email,$cookieconnexion);
  header("Location: Controller/controller_page_accueil.php");
}
/*
else
{
  //$password=sha1(sha1($password));
  if(Users::Check_Password($email,$password)){
    $cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
		setcookie("cookieperso", $cookie, time()+(60*60*24*30), "/");
		Users::Set_User_Cookie($email,$cookie);
		header("Location: Accueil.php");
  }
  else {
    $message="Mauvais mdp";
    header("Location: Erreur.php?=".$message);
  }
}*/
?>