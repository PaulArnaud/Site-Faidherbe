<?php
require_once("Models/Annee.php");
require_once("TypeKhlasse.php");
$types = TypeKhlasse::Get_Types();
$years = Annee::Get_Years();
require_once("view/createkhlasse.php");
?>