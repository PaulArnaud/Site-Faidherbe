<?php
require_once('/BD/connexionBD.php');

class khlasse{

    var $id_khlasse;
    var $id_type;
    var $annee;

    public function getAllKhlasse(){
        $req = myPDO() -> query ('SELECT * FROM  khlasse');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "khlasse");
        return $object;
    }

    public function countKhlasse() {
        $req = myPDO()->query('SELECT id_khlasse FROM khlasse');
        $count = $req->rowCount();
        return $count;
    }

    public function getKhlasse($khlasseID) {
        $req = myPDO()->prepare('SELECT * FROM khlasse WHERE id_khlasse = :id_khlasse');
        $req->execute(array(':id_khlasse' => $khlasseID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "khlasse");
        return $object;
    }
}

?>
