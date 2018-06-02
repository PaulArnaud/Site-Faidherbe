<?php

class Annee{
      
    public static function Get_Years(){
      $db = parse_url(getenv("DATABASE_URL"));
      $pdo = new PDO("pgsql:" . sprintf("host=%s;port=%s;user=%s;password=%s;dbname=%s",$db["host"],$db["port"],$db["user"],$db["pass"],ltrim($db["path"], "/")));

      $req = $pdo->prepare('SELECT année FROM année');
      $req->execute();
      while($data=$req->fetch()){
        $result[] = $data;
      }
      return $result;
      }

}
?>