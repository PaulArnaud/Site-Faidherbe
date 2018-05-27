<?php
require_once('/config/connect.php');

class annee extends model{

    var $annee;

    public function getAllAnnee(){
        $req = myPDO() -> query ('SELECT * FROM  annee');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "annee");
        return $object;
    }

    public insertAnnee($annee){
        $sql = "INSERT INTO annee VALUES (:annee)";
        $req = myPDO()->prepare($sql);
        $params = [
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