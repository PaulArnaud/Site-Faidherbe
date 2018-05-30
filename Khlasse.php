<?php
class Khlasse
{
    public static function Get_Idmax_Khlasse(){
      require_once('config/connect.php');
      $bdheroku = myPDO();
      $maxId = $bdheroku->query('SELECT MAX(id_khlasse) FROM khlasse');
      return $maxId->fetch();
    }

    public static function Get_All_Khlasse()
    {
        require_once('config/connect.php');
        $bdheroku = myPDO();
        $req = $bdheroku->prepare('SELECT E.id_khlasse,T.nomkhlasse,annee,(SELECT count(*) 
        FROM a_etudie A 
        WHERE A.id_khlasse= E.id_khlasse) 
        FROM  khlasse E,typekhlasse T 
        WHERE T.id_typekhlasse = E.id_type');
        $req->execute();
        while($data=$req->fetch()){
            $result[] = $data;
        }
        return $result;
    }



    public static function Set_Khlasse($type,$year){
        $id = Get_Idmax_Khlasse();
        require_once('config/connect.php');
        $bdheroku = myPDO();
        $req = $bdheroku->prepare('INSERT INTO khlasse(id_khlasse,id_type,annee)  
        VALUES(:id,(SELECT id_typekhlasse FROM typekhlasse WHERE nomkhlasse = :typekhlasse), :annee)');
        $req->bindParam(':id',$id);
        $req->bindParam(':typekhlasse',$type);
        $req->bindParam(':annee',$year);
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

      public static function Get_Khlasse($khlasseID){
        require_once('config/connect.php');
        $bdheroku = myPDO();
        $req = $bdheroku -> prepare('SELECT nomkhlasse,annee 
        FROM typekhlasse T,khlasse K 
        WHERE K.id_type = T.id_typekhlasse AND K.id_khlasse = :idkhlasse');
        $req->bindParam(':idkhlasse',$khlasseID);
        $req->execute();
        $data=$req->fetch();
        return $data;
      }

      public static function Del_Khlasse($id){
        require_once('config/connect.php');
        $bdheroku = myPDO();
        $req = $bdheroku->prepare(' DELETE FROM khlasse
        WHERE id_khlasse= :id');
        $req->bindParam(':id',$id);
        try{
          $req->execute();
          return true;
        }catch (Exception $e){
          return false;
        }
  
      }
}
?>