<?php
require('/models/typekhlasse.php');

class typekhlasseController{
    private $typekhlasse;
    private $params;

    function __construct($params = null){
        $this->typekhlasse = new typekhlasse();
        if ($params != null){
            $this->params = $params;
        }
    }
    function getAllTypeKhlasse(){
        return $this->typekhlasse->getAllTypeKhlasse();
    }
    function getTypeKhlasse(){
        return $this->typekhlasse->getTypeKhlasse($this->params['id_typekhlasse']);
    }
}
?>