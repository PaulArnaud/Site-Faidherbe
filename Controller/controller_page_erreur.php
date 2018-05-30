<?php
require_once("Controller/controller_etat_user.php");
$messageErreur = htmlspecialchars($_GET['erreur']);
require("view/erreur.php");
?>