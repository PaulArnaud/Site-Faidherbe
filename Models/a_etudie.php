<?php
require_once('/config/connect.php');

class a_etudie extends model{

    var $id_user;
    var $id_khlasse;

    public getAllAssoc(){
        $req = myPDO() -> query ('SELECT * FROM  a_etudie');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "a_etudie");
        return $object;
    }

    public insertAssoc($userID,$khlasseID){
        $sql = "INSERT INTO a_etudie VALUES (:id_user,:id_khlasse)";
        $req = myPDO()->prepare($sql);
        $params = [
            ':id_user' => $userID,
            ':id_khlasse' => $khlasseID,
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

    public deleteAssoc($userID,$khlasse){
  
            $sql = "DELETE FROM a_etudie WHERE id_user = :id_user AND id_khlasse =:id_khlasse";
            $req = myPDO()->prepare($sql);
            $params = [
                ':id_user' => $userID,
                ':id_khlasse' => $khlasseID,
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