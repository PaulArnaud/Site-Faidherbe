
<?php
require_once("Users.php");
$email=htmlspecialchars($_GET['Email']);
$password=htmlspecialchars($_GET['password']);
var_dump(Users::Check_Password($email,$password));
echo '123';
$cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20)
var_dump($cookie);
if(empty($email) || empty($password)){
  $message="Merci de remplir tous les champs!";
  //header("Location: Erreur.php?=".$message);
}/*
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