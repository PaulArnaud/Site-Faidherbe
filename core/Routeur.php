<?php
class Routeur{
    static function parse($url){
        $params = explode('/',$url);
        print_r($params);
    }
}
?>