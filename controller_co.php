
<?php
require_once("Users.php");
$email=htmlspecialchars($_GET['Email']);
$password=htmlspecialchars($_GET['password']);
echo $email;
echo $password;

var_dump(Users::Check_Password($email,$password)));



?>