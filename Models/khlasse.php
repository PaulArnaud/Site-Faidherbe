<?php
require('connect.php');
require('model.php');

class khlasse extends model{

    var $id_khlasse;
    var $id_type;
    var $annee;

    public static function getAnnee(){
        return $this->annee;
    }

    public function getID(){
        return $this->id_khlasse;
    }

    public static function getType($id_type){
        $type = myPDO()->query('SELECT nomkhlasse FROM typekhlasse WHERE id_type =: pa ');
        $req->bindParam(':pa',$id_type);
        $req->execute();
        $data=$req->fetch();
        return $data['nomkhlasse'];

    }

    public static function getIdMax() {
        $maxId = myPDO()->query('SELECT MAX(id_khlasse) FROM khlasse');
        return $maxId->fetch()[0];
    }

    public static function getAllKhlasse(){
        $req = myPDO()->query ('SELECT * FROM  khlasse');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "khlasse");
        return $object;
    }

    public static function countKhlasse() {
        $req = myPDO()->query('SELECT id_khlasse FROM khlasse');
        $count = $req->rowCount();
        return $count;
    }

    public static function getKhlasse($khlasseID) {
        $req = myPDO()->prepare('SELECT * FROM khlasse WHERE id_khlasse = :id_khlasse');
        $req->execute(array(':id_khlasse' => $khlasseID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "khlasse");
        return $object;
    }

    public static function insertKhlasse($typeID,$annee){
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
