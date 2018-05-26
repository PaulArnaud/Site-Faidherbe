<?php
class Routeur{
    static function parse($url){
        $url = trim($url,'/');
        $params = explode('/',$url);
        print_r($params);
    }
}
?>