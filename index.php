<?php
$url = '';
if (isset($_GET['url'])){
    $url = explode('/',$_GET['url']);
}
if ($url == ''){
    require('main.php');
}
else if ($url[0] == 'chants'){
    require('chants.php');
}
else {
    require('main.php');
}
?>