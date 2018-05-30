<?php
require_once("../Users.php");
$email    = htmlspecialchars($_POST['Email']);
$password = htmlspecialchars($_POST['password']);


if (empty($email) || empty($password)) {
    $message = "Merci de remplir tous les champs!";
    //header("Location: Erreur.php?=".$message);
} else {
    if (Users::Check_Password($email, $password)) {
        $cookieconnexion = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
        $cookiegood      = setcookie("cookieperso", $cookieconnexion, time() + (60 * 60 * 24 * 30), "/");
        Users::Set_User_Cookie($email, $cookieconnexion);
        header("Location: ../accueil.php");
    } else {
        header("Location: controller_page_connexion.php");
    }
}
?>