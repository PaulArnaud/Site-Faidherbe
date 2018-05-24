<?php
var_dump($_GET);

$url = '';
if (isset($_GET['url'])){
    $url = explode('/',$_GET['url']);
}
var_dump($url);
?>