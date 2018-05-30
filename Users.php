<?php
class Users
{
  public static function Get_User_Id($cookiecode)
	//User_Cookie_Code => User_Id
	//données : $userCookieCode string correspondant à un code cookie
	//résultat : vérifie si un code cookie existe dans la base de données, et le cas échéant renvoie un int correspondant à l'id de l'utilisateur auquel appartient le code cookie
	{
		require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT id_user 
    FROM users 
    WHERE cookiecode= :cc');
    $req->bindParam(':cc',$cookiecode);
		$req->execute();
		$data=$req->fetch();
		return $data['id_user']; //Verifier si null
	}
  public static function Get_Users_Mail($userid)
  {
    require_once('connect.php');
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
    require_once('connect.php');
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
  public static function Get_Users_Role($userid){
    require_once('connect.php');
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
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('UPDATE users 
    SET cookiecode= :cookie 
    WHERE email= :email');
    $req->bindParam(':cookie',$usercookie);
    $req->bindParam(':email',$email);
    $req->execute();
  }
  public static function checkLogin($email,$userPassword)
  {
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT userpassword 
    FROM users 
    WHERE email= :email');
    $req->bindParam(':email',$email);
    $data = $req->fetch();
    return($data['userpassword']==$userPassword);
  }
  
  public static function Check_Password($email,$userpw)
  {
    require_once('connect.php');
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
    require_once('connect.php');
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
  public static function Get_All_Khlasse()
  {
      require_once('connect.php');
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

  public static function Get_All_Ecole()
  {
      require_once('connect.php');
      $bdheroku = myPDO();
      $req = $bdheroku->prepare('SELECT id_ecole,nomecole 
      FROM ecole');
      $req->execute();
      while($data=$req->fetch()){
          $result[] = $data;
      }
      return $result;
  }

  public static function Get_Mykhlasse(){
    require_once('connect.php');
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
    require_once('connect.php');
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

  public static function Get_Types(){
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT nomkhlasse FROM typekhlasse');
    $req->execute();
    while($data=$req->fetch()){
      $result[] = $data;
    }
    return $result;
  }

  public static function Set_Khlasse($type,$year){
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('INSERT INTO khlasse(id_khlasse,id_type,annee)  
    VALUES((SELECT count(*) FROM khlasse)+1,(SELECT id_typekhlasse FROM typekhlasse WHERE nomkhlasse = :typekhlasse), :annee)');
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


  public static function Get_All_Camarades($khlasseID){
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku -> prepare('SELECT U.id_user,U.nom,U.prenom 
    FROM users U,a_etudie A,khlasse K 
    WHERE U.id_user = A.id_user AND A.id_khlasse=K.id_khlasse AND K.id_khlasse = :idkhlasse');
    $req->bindParam(':idkhlasse',$khlasseID);
    $req->execute();
    while($data=$req->fetch()){
      $result[] = $data;
    }
    return $result;
  }

  public static function Get_Khlasse($khlasseID){
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku -> prepare('SELECT nomkhlasse,annee 
    FROM typekhlasse T,khlasse K 
    WHERE K.id_type = T.id_typekhlasse AND K.id_khlasse = :idkhlasse');
    $req->bindParam(':idkhlasse',$khlasseID);
    $req->execute();
    $data=$req->fetch();
    return $data;
  }


  public static function Get_Khlasse_User($IDuser){
    require_once('connect.php');
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
    require_once('connect.php');
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
    require_once('connect.php');
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
      require_once('connect.php');
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
      require_once('connect.php');
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
      require_once('connect.php');
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

    public static function Get_Years(){
      require_once('connect.php');
      $bdheroku = myPDO();
      $req = $bdheroku->prepare('SELECT année FROM année');
      $req->execute();
      while($data=$req->fetch()){
        $result[] = $data;
      }
      return $result;
    }

    public static function Del_A_Etudie(){
      require_once('connect.php');
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

    public static function Set_Ecole($nom,$dom){
      require_once('connect.php');
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

    public static function Del_User($id){
      require_once('connect.php');
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

    public static function Del_Ecole($id){
      require_once('connect.php');
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

    public static function Del_Khlasse($id){
      require_once('connect.php');
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
  
} ?>