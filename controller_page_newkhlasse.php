<?php
require_once("models/Users.php");
$types = Users::Get_Types();
$years = Users::Get_Years();
require_once("view/createkhlasse.php");
?>