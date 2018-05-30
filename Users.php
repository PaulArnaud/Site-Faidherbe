<?php
class Users
{
  public static function Get_User_Id($cookiecode)	{
		require_once('config/connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT id_user 
    FROM users 
    WHERE cookiecode= :cc');
    $req->bindParam(':cc',$cookiecode);
		$req->execute();
		$data=$req->fetch();
		return $data['id_user']; //Verifier si null
	}
  public static function Get_User_Mail($userid)
  {
    require_once('config/connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT email 
    FROM users 
    WHERE id_user= :userid');
    $req->bindParam(':userid',$userid);
    $req->execute();
    $data = $req->fetch();
    return $data['email'];
  }

  public static function Get_All_Users()
  {
    require_once('config/connect.php');
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
  public static function Get_User_Role($userid){
    require_once('config/connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT isadmin 
    FROM users 
    WHERE id_user= :usersid');
    $req->bindParam(':usersid',$userid);
    $req->execute();
    $data = $req->fetch();
    return($data['isadmin']);
  }
  public static function Set_User_Cookie($email,$usercookie)
  {
    require_once('config/connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('UPDATE users 
    SET cookiecode= :cookie 
    WHERE email= :email');
    $req->bindParam(':cookie',$usercookie);
    $req->bindParam(':email',$email);
    $req->execute();
  }
  
  public static function Check_Password($email,$userpw)
  {
    require_once('config/connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT userpassword,email 
    FROM users 
    WHERE email= :email');
    $req->bindParam(':email',$email);
    $req->execute();
    $data = $req->fetch();
    return($data['userpassword'] === $userpw);
    //return($data['userspassword'] == $userpw);
  }

  public static function Get_Info(){
    require_once('config/connect.php');
      $bdheroku = myPDO();
      $cook = $_COOKIE["cookieperso"];
      $req = $bdheroku->prepare('SELECT nom,prenom,email,num_portable,facebook,linkedin 
      FROM  users 
      WHERE cookiecode = :cook');
      $req->bindParam(':cook',$cook);
      $req->execute();
      $data=$req->fetch();
      return $data;
  }


  public static function Get_Mykhlasse(){
    require_once('config/connect.php');
    $bdheroku = myPDO();
    $cook = $_COOKIE["cookieperso"];
    $req = $bdheroku->prepare('SELECT T.nomkhlasse,annee 
    FROM  khlasse E,typekhlasse T,a_etudie A,users U 
    WHERE T.id_typekhlasse = E.id_type AND A.id_user = U.id_user AND A.id_khlasse= E.id_khlasse  AND U.cookiecode = :cook ');
    $req->bindParam(':cook',$cook);
    $req->execute();
    while($data=$req->fetch()){
        $result[] = $data;
    }
    return $result;
  }

  public static function Get_MySchool(){
    require_once('config/connect.php');
    $bdheroku = myPDO();
    $cook = $_COOKIE["cookieperso"];
    $req = $bdheroku->prepare('SELECT nomecole,domaine 
    FROM ecole E, users U, a_etudie_postfaidherbe P
    WHERE P.id_user=U.id_user AND E.id_ecole=P.id_ecole AND U.cookiecode = :cook');
    $req->bindParam(':cook',$cook);
    $req->execute();
    $data=$req->fetch();
    return $data;
    }




  public static function Get_Khlasse_User($IDuser){
    require_once('config/connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT T.nomkhlasse,annee 
    FROM  khlasse E,typekhlasse T,a_etudie A,users U 
    WHERE T.id_typekhlasse = E.id_type AND A.id_user = U.id_user AND A.id_khlasse= E.id_khlasse  AND U.id_user = :user ');
    $req->bindParam(':user',$IDuser);
    $req->execute();
    while($data=$req->fetch()){
        $result[] = $data;
    }
    return $result;
  }


  public static function Get_Info_User($IDuser){
    require_once('config/connect.php');
      $bdheroku = myPDO();
      $req = $bdheroku->prepare('SELECT nom,prenom,email,num_portable,facebook,linkedin 
      FROM  users 
      WHERE id_user = :user');
      $req->bindParam(':user',$IDuser);
      $req->execute();
      $data=$req->fetch();
      return $data;
  }

  public static function Get_School_User($IDuser){
    require_once('config/connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT nomecole,domaine 
    FROM ecole E, users U, a_etudie_postfaidherbe P 
    WHERE P.id_user=U.id_user AND E.id_ecole=P.id_ecole AND U.id_user = :user');
    $req->bindParam(':user',$IDuser);
    $req->execute();
    $data=$req->fetch();
    return $data;
    }


    public static function Update_My_Data($params1,$params2,$params3,$params4,$params5){
      require_once('config/connect.php');
      $bdheroku = myPDO();
      $cook = $_COOKIE["cookieperso"];
      $req = $bdheroku->prepare('UPDATE users  
      SET nom = :params1 , prenom = :params2 ,num_portable = :params3 facebook = :params4 , linkedin = :params5 
      WHERE cookiecode = :cook');
      $req->bindParam(':params1',$params1);
      $req->bindParam(':params2',$params2);
      $req->bindParam(':params3',$params3);
      $req->bindParam(':params4',$params4);
      $req->bindParam(':params5',$params5);
      $req->bindParam(':cook',$cook);
      try{
        $req->execute();
        return true;
      }catch (Exception $e){
        return false;
      }
    }
    
    public static function Insert_A_Etudie($params){
      require_once('config/connect.php');
      $bdheroku = myPDO();
      $cook = $_COOKIE["cookieperso"];
      $req1 = $bdheroku->prepare('INSERT INTO a_etudie 
      VALUES ((SELECT id_user FROM users WHERE cookiecode = :cook), :idkhlasse)');
      $req1->bindParam(':cook',$cook);
      $req1->bindParam(':idkhlasse',$params);
      try{
        $req1->execute();
        return true;
      }catch (Exception $e){
        return false;
      }
    }
    public static function Insert_A_Etudie_PF($params){
      require_once('config/connect.php');
      $bdheroku = myPDO();
      $cook = $_COOKIE["cookieperso"];
      $req3 = $bdheroku->prepare('INSERT INTO a_etudie_postfaidherbe 
      VALUES ((SELECT id_user FROM users WHERE cookiecode = :cook), :idecole)');
      $req3->bindParam(':cook',$cook);
      $req3->bindParam(':idecole',$params);
      try{
        $req3->execute();
        return true;
      }catch (Exception $e){
        return false;
      }
    }

    public static function Del_A_Etudie(){
      require_once('config/connect.php');
      $bdheroku = myPDO();
      $cook = $_COOKIE["cookieperso"];
      $id = Users::Get_User_Id($cook); 
      $req = $bdheroku->prepare(' DELETE FROM a_etudie
      WHERE id_user= :id');
      $req->bindParam(':id',$id);
      try{
        $req->execute();
        return true;
      }catch (Exception $e){
        return false;
      }
    }

    public static function Del_User($id){
      require_once('config/connect.php');
      $bdheroku = myPDO();
      $req = $bdheroku->prepare(' DELETE FROM users
      WHERE id_user= :id');
      $req->bindParam(':id',$id);
      try{
        $req->execute();
        return true;
      }catch (Exception $e){
        return false;
      }

    }



  
} ?>