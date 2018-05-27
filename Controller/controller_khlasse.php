<?php
require_once('../../models/khlasse.php');

class khlasseController{
    public $khlasse;
    public $params;

    function __construct($params = null){
        $this->khlasse = new khlasse();
        if ($params != null){
            $this->params = $params;
        }
    }
    function getAllKhlasse(){
        return $this->khlasse->getAllKhlasse();
    }
    function getKhlasse(){
        return $this->khlasse->getKhlasse($this->params['id_khlasse']);
    }
    function insertKhlasse(){
        $this->khlasse->insertKhlasse($this->params['id_typekhlasse'],$this->params['annee']);
    }
}
?>