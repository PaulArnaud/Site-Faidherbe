<?php
class Ecole
{

    public static function Set_Ecole($nom,$dom){
      $db = parse_url(getenv("DATABASE_URL"));
      $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));

        $req = $pdo->prepare('INSERT INTO ecole(id_ecole,nomecole,domaine)  
        VALUES((SELECT MAX(id_ecole) FROM ecole)+1,:nom, :dom)');
        $req->bindParam(':nom',$nom);
        $req->bindParam(':dom',$dom);
        try {
          $req->execute();
          return true;
        }
        catch (Exception $e) {
          http_response_code(400);
          return false;
        }
      }

      public static function Del_Ecole($id){
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));
  
        $req = $pdo->prepare(' DELETE FROM ecole
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
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));
  
          $req = $pdo->prepare('SELECT id_ecole,nomecole,domaine 
          FROM ecole');
          $req->execute();
          while($data=$req->fetch()){
              $result[] = $data;
          }
          return $result;
      }
      
}
?>