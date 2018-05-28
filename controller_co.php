
<?php
require_once("Users.php");
$email=htmlspecialchars($_GET['Email']);
$password=htmlspecialchars($_GET['password']);
echo $email;
echo $password;
$isGood = Users::Check_Password($email,$password));
var_dump($isGood);



?>