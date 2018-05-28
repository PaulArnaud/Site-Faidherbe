<?php
require_once("Users.php");
$typekhlasse=htmlspecialchars($_POST['type']);
$annee=htmlspecialchars($_POST['annee']);
try{
    Users::Set_Khlasse($typekhlasse,$annee);
}
catch(Exception $e){
    echo '123';
}
header('Location: index.php');
?>