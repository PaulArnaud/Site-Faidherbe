<?php
require_once('../connexionBD.php');

class ville{

    var $id_ville;
    var $nomville;

    public function getAllVille(){
        $req = myPDO() -> query ('SELECT * FROM  ville');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "ville");
        return $object;
    }

    public function countKhlasse() {
        $req = myPDO()->query('SELECT id_ville FROM ville');
        $count = $req->rowCount();
        return $count;
    }

    public function getKhlasse($villeID) {
        $req = myPDO()->prepare('SELECT * FROM ville WHERE id_khlasse = :id_ville');
        $req->execute(array(':id_ville' => $villeID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "ville");
        return $object;
    }

    public getIDVille($villenom){
        $req = myPDO()->prepare('SELECT id_ville FROM ville WHERE nomville = :nomville');
        $req->execute(array(':nomville' => $villenom));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "ville");
        return $object;
    }
}

?>