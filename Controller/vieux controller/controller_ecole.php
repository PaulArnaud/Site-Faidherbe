<?php
require('/models/ecole.php');

class ecoleController{
    private $ecole;
    private $params;

    function __construct($params = null){
        $this->ecole = new ecole();
        if ($params != null){
            $this->params = $params;
        }
    }
    function getAllEcole(){
        return $this->ecole->getAllEcole();
    }
    function getEcole(){
        return $this->ecole->getEcole($this->params['id_ecole']);
    }
    function insertUser(){
        $this->ecole->insertUser($this->params['email'],$this->params['nom'],$this->params['prenom']);
    }
}
?>