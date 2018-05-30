<?php
require_once('/config/connect.php');

class ecole extends model{

    var $id_ecole;
    var $nomecole;
    var $domaine;
    var $id_ville;

    public function getIdMax() {
        $maxId = myPDO()->query('SELECT MAX(id_ecole) FROM ecole');
        return $maxId->fetch()[0];
    }

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

    public function insertEcole($nomecole,$domaine){
        $ecoleID = $this->getIdMax() + 1;
        $sql = "INSERT INTO ecole VALUES (:id_ecole, :nomecole, :domaine)";
        $req = myPDO()->prepare($sql);
        $params = [
          ':id_ecole' => $ecoleID,
          ':nomecole' => $nomecole,
          ':domaine' => $domaine,
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