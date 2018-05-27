<?php
require_once('/config/connect.php');

class typekhlasse extends model{

    var $id_typekhlasse;
    var $nomkhlasse;

    public function getAllTypeKhlasse(){
        $req = myPDO() -> query ('SELECT * FROM  typekhlasse');
        $object = $req -> fetchAll(PDO::FETCH_CLASS, "typekhlasse");
        return $object;
    }

    public function getTypeKhlasse($typekhlasseID) {
        $req = myPDO()->prepare('SELECT * FROM typekhlasse WHERE id_typekhlasse = :id_typekhlasse');
        $req->execute(array(':id_typekhlasse' => $typekhlasseID));
        $object = $req->fetchAll(PDO::FETCH_CLASS, "typekhlasse");
        return $object;
    }


}

?>
