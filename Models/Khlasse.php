<?php
class Khlasse
{

    public static function Get_All_Khlasse()
    {
      $db = parse_url(getenv("DATABASE_URL"));
      $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));

        $req = $pdo->prepare('SELECT E.id_khlasse,T.nomkhlasse,annee,(SELECT count(*) 
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
      $db = parse_url(getenv("DATABASE_URL"));
      $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));

        $req = $pdo->prepare('INSERT INTO khlasse(id_khlasse,id_type,annee)  
        VALUES((SELECT MAX(id_khlasse) FROM khlasse)+1,(SELECT id_typekhlasse FROM typekhlasse WHERE nomkhlasse = :typekhlasse), :annee)');
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
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));
  
        $req = $pdo -> prepare('SELECT nomkhlasse,annee 
        FROM typekhlasse T,khlasse K 
        WHERE K.id_type = T.id_typekhlasse AND K.id_khlasse = :idkhlasse');
        $req->bindParam(':idkhlasse',$khlasseID);
        $req->execute();
        $data=$req->fetch();
        return $data;
      }

      public static function Del_Khlasse($id){
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));
  
        $req = $pdo->prepare(' DELETE FROM khlasse
        WHERE id_khlasse= :id');
        $req->bindParam(':id',$id);
        try{
          $req->execute();
          return true;
        }catch (Exception $e){
          return false;
        }
      }


      public static function Get_All_Camarades($khlasseID){
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));
  
        $req = $pdo -> prepare('SELECT U.id_user,U.nom,U.prenom 
        FROM users U,a_etudie A,khlasse K 
        WHERE U.id_user = A.id_user AND A.id_khlasse=K.id_khlasse AND K.id_khlasse = :idkhlasse');
        $req->bindParam(':idkhlasse',$khlasseID);
        $req->execute();
        while($data=$req->fetch()){
          $result[] = $data;
        }
        return $result;
      }
      
}
?>