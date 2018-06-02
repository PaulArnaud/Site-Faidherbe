<?php
require_once("../Models/Users.php");
$email    = htmlspecialchars($_POST['Email']);
$password = htmlspecialchars($_POST['password']);
$pw = sha1(sha1($password));


if (Users::Check_Password($email, $pw)) {
    $cookieconnexion = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
    $cookiegood      = setcookie("cookieperso", $cookieconnexion, time() + (60 * 60 * 24 * 30), "/");
    Users::Set_User_Cookie($email, $cookieconnexion);
    header("Location: ../accueil.php");
} else {
    header("Location: ../accueil.php");
}

?>