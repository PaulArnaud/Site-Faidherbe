<?php
require_once('models/test.php');
$users = test::Get_All_Users();
var_dump($users);
$ecoles = test::Get_All_Ecole();
$khlasses = test::Get_All_Khlasse();
require_once('view/admin.php');
?>