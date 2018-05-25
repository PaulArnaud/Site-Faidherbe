<?php
require_once('/BD/connexionBD.php');

class professeur{

    var $id_professeur;
    var $nomprofesseur;
    var $matièreprofesseur;

    public function getAllProf(){
        $req = myPDO() -> query ('SELECT * FROM  professeur');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "professeur");
        return $object;
    }

    public function getProf($profID) {
        $req = myPDO()->prepare('SELECT * FROM professeur WHERE id_professeur = :id_professeur');
        $req->execute(array(':id_professeur' => $profID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "professeur");
        return $object;
    }
}

?>