<?php
require_once('/BD/connexionBD.php');

class annee{

    var $annee;

    public function getAllAnnee(){
        $req = myPDO() -> query ('SELECT * FROM  annee');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "annee");
        return $object;
    }

}

?>