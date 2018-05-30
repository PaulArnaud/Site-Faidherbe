<?php
//require_once('models/test.php');
class test{
    public static function Get_All_Users(){
    require_once('/config/connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT * 
    FROM users');
    $req->execute();
    while($data=$req->fetch())
		{
			$result[] = $data;
		}
	return $result;
  }

  public static function Get_All_Khlasse(){
      require_once('/config/connect.php');
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

  public static function Get_All_Ecole(){
      require_once('/config/connect.php');
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

$users = test::Get_All_Users();
var_dump($users);
$ecoles = test::Get_All_Ecole();
$khlasses = test::Get_All_Khlasse();
require_once('view/admin.php');
?>