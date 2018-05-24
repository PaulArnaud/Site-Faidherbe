<?php
require_once('../connexionBD.php');

class entreprise{

    var $id_entreprise;
    var $nomentreprise;
    var $contact;

    public function getAllEntreprise(){
        $req = myPDO() -> query ('SELECT * FROM  entreprise');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "entreprise");
        return $object;
    }

    public function getEntreprise($entrepriseID) {
        $req = myPDO()->prepare('SELECT * FROM entreprise WHERE id_entreprise = :id_entreprise');
        $req->execute(array(':id_entreprise' => $entrepriseID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "entreprise");
        return $object;
    }


}

?>