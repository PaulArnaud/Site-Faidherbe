<?php
class Ecole
{
    public static function Set_Ecole($nom,$dom){
        require_once('../config/connect.php');
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

      public static function Del_Ecole($id){
        require_once('../config/connect.php');
        $bdheroku = myPDO();
        $req = $bdheroku->prepare(' DELETE FROM ecole
        WHERE id_ecole= :id');
        $req->bindParam(':id',$id);
        try{
          $req->execute();
          return true;
        }catch (Exception $e){
          return false;
        }
  
      }

      public static function Get_All_Ecole()
      {
          require_once('../config/connect.php');
          $bdheroku = myPDO();
          $req = $bdheroku->prepare('SELECT id_ecole,nomecole 
          FROM ecole');
          $req->execute();
          while($data=$req->fetch()){
              $result[] = $data;
          }
          return $result;
      }
}
?>