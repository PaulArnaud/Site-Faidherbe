<?php
require_once('/BD/connexionBD.php');

class ecole{

    var $id_ecole;
    var $nomecole;
    var $domaine;
    var $id_ville;

    public function getAllEcole(){
        $req = myPDO() -> query ('SELECT * FROM  ecole');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "ecole");
        return $object;
    }

    public function getEcole($ecoleID) {
        $req = myPDO()->prepare('SELECT * FROM ecole WHERE id_ecole = :id_ecole');
        $req->execute(array(':id_ecole' => $ecoleID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "ecole");
        return $object;
    }

}

?>