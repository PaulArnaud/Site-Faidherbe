<?php
$a = opendir(dirname(__FILE__).DIRECTORY_SEPARATOR.'models');
var_dump(readdir($a));
//require_once('models/test.php');
//$users = test::Get_All_Users();
//$ecoles = test::Get_All_Ecole();
//$khlasses = test::Get_All_Khlasse();
//require_once('view/admin.php');
?>