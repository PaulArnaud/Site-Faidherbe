<?php
require('/models/annee.php');
class anneeController{
    private $annee;
    private $params;

    function __construct($params = null){
        $this->annee = new annee();
        if ($params != null){
            $this->params = $params;
        }
    }
    function getAllAnnee(){
        return $this->annee->getAllAnnee();
    }
    function insertAnnee(){
        $this->annee->insertAnnee($this->params['annee']);
    }
}
?>