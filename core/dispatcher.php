<?php
class Dispatcher{

    var $request;
    
    function __construct(){
        $this->request = new Request(); 
        Routeur::parse($this->request->url);
    }
}
?>
