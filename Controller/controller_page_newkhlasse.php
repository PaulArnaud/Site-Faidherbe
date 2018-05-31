<?php
//require_once("Annee.php");
require_once("TypeKhlasse.php");
$types = TypeKhlasse::Get_Types();
$years = Annee::Get_Years();
require_once("view/createkhlasse.php");
?>