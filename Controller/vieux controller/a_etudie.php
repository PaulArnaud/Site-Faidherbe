<?php
require('/models/a_etudie.php');

class a_etudieController{
    private $a_etudie;
    private $params;

    function __construct($params = null){
        $this->a_etudie = new a_etudie();
        if ($params != null){
            $this->params = $params;
        }
    }
    function getAllAssoc(){
        return $this->a_etudie->getAllAssoc();
    }

    function insertAssoc(){
        $this->a_etudie->insertAssoc($this->params['id_user'],$this->params['id_khlasse']);
    }
}
?>