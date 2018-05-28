<?php

class Khlasse{
    public static function Get_All_Khlasse()
    {
      require_once('connect.php');
      $bdheroku = myPDO();
      $req = $bdheroku->prepare('SELECT * FROM  khlasse');
      $req->execute();
      while($data=$req->fetch())
          {
              $result[] = $data;
          }
        return $result;
    }
}

?>
