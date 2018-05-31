<?php
class Annee{
    public static function Get_Years(){
        require_once('/config/connect.php');
        $bdheroku = myPDO();
        $req = $bdheroku->prepare('SELECT année FROM année');
        $req->execute();
        while($data=$req->fetch()){
          $result[] = $data;
        }
        return $result;
      }
}
?>