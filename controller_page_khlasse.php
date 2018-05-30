<?php
require_once("models/Users.php");
$listkhlasse = Users::Get_All_Khlasse();
require_once("view/khlasse.php");
?>