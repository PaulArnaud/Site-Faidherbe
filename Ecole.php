<?php
class Ecole
{
    public static function Set_Ecole($nom,$dom){
        require_once('config/connect.php');
        $bdheroku = myPDO();
        $req = $bdheroku->prepare('INSERT INTO ecole(id_ecole,nomecole,domaine)  
        VALUES((SELECT count(*) FROM ecole)+1,:nom, :dom)');
        $req->bindParam(':nom',$nom);
        $req->bindParam(':dom',$dom);
        try {
          $req->execute();
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