<?php
require_once("Users.php");
$listkhlasse = Users::Get_All_Khlasse();
require_once("view/khlasse.php");
?>