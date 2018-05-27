<?php
require('/config/connect.php');
require('/models/model.php');

class khlasse extends model{

    var $id_khlasse;
    var $id_type;
    var $annee;

    public function getAnnee(){
        return $this->annee;
    }

    public function getIdMax() {
        $maxId = myPDO()->query('SELECT MAX(id_khlasse) FROM khlasse');
        return $maxId->fetch()[0];
    }

    public function getAllKhlasse(){
        echo '456';
        $req = myPDO()->query ('SELECT * FROM  khlasse');
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

    public function insertKhlasse($typeID,$annee){
        $khlasseID = $this->getIdMax() + 1;
        $sql = "INSERT INTO khlasse VALUES (:id_khlasse, :id_type, :annee)";
        $req = myPDO()->prepare($sql);
        $params = [
          ':id_khlasse' => $khlasseID,
          ':id_type' => $typeID,
          ':annee' => $annee,

        ];
        try {
            $req->execute($params);
            return true;
        }
        catch (Exception $e) {
            // error during execute (bad request)
            http_response_code(400);
            return false;
        }

    }


}

?>
