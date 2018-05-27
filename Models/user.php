<?php
require_once('/config/connect.php');

class user extends model{

    var $email;
    var $nom;
    var $prenom;
    var $id_user;
    var $num_portable;
    var $facebook;
    var $linkedin;
    var $id_khlasse;
    var $isAdmin;

    public function getIdMax() {
        $maxId = myPDO()->query('SELECT MAX(id_user) FROM user');
        return $maxId->fetch()[0];
    }

    public getAllUser(){
        $req = myPDO() -> query ('SELECT nom,prenom FROM  user');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "user");
        return $object;
    }

    public function getUsers($userID) {
        $req = myPDO()->prepare('SELECT * FROM user WHERE id_user = :id_user');
        $req->execute(array(':id_user' => $userID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "user");
        return $object;
    }
    public function getUsersFromKhlasse($userID,$khlasseID) {
        $req = myPDO()->prepare('SELECT nom,prenom FROM user,khlasse WHERE id_user = :id_user and id_khlasse =:id_khlasse');
        $req->execute(array(':id_user' => $userID,'id_khlasse'=> $khlasseID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "user");
        return $object;
    }


    public function insertUser($email,$nom,$prenom){
        $userID = $this->getIdMax() + 1;
        $sql = "INSERT INTO user VALUES (:email, :nom, :prenom,:id_user,:num_portable,:facebook,:linkedin,:isAdmin,:password,:id_ecole)";
        $req = myPDO()->prepare($sql);
        $params = [
            ':email' => $email,
             ':nom' => $nom,
             ':prenom' => $prenom,
             ':id_user' => $userID,
             ':num_portable' => null,
             ':facebook' => null,
             ':linkedin'=> null,
             ':isAdmin' => false,
             ':password'=> null,
             ':id_ecole' => null,
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
