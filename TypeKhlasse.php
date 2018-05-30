<?php
class TypeKhlasse{
    public static function Get_Types(){
        require_once('config/connect.php');
        $bdheroku = myPDO();
        $req = $bdheroku->prepare('SELECT nomkhlasse FROM typekhlasse');
        $req->execute();
        while($data=$req->fetch()){
          $result[] = $data;
        }
        return $result;
      }
}
?>

