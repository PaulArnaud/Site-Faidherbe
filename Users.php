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
    $req = $bdheroku->prepare('SELECT id_user FROM users WHERE cookiecode= :cc');
    $req->bindParam(':cc',$cookiecode);
		$req->execute();
		$data=$req->fetch();
		return $data['id_user']; //Verifier si null
	}
  public static function Get_Users_Mail($userid)
  {
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT email FROM users WHERE id_user= :userid');
    $req->bindParam(':userid',$userid);
    $req->execute();
    $data = $req->fetch();
    return $data['email'];
  }/*
  public static function Add_User($firstname,$lastname,$nick,$mail,$gender,$password,$cookiecode)
  {
    require_once('../config/connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('INSERT INTO user(nom, prenom, email, userscookiecode, userpassword) VALUES (:firstname,:lastname,:mail,:gender,:cookiecode,:password)');
    $req->bindParam(':firstname',$firstname);
		$req->bindParam(':lastname',$lastname);
		$req->bindParam(':nick',$nick);
		$req->bindParam(':mail',$mail);
    $req->bindParam(':gender',$gender);
    $req->bindParam(':cookiecode',$cookiecode);
    $req->bindParam(':password',$password);
    $req->execute();
  }*/
  public static function Get_All_Users()
  {
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT * FROM users');
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
    $req = $bdheroku->prepare('SELECT isadmin FROM users WHERE id_user= :usersid');
    $req->bindParam(':usersid',$userid);
    $req->execute();
    $data = $req->fetch();
    return($data['isadmin']);
  }
  public static function Set_User_Cookie($email,$usercookie)
  {
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('UPDATE users SET cookiecode= :cookie WHERE email= :email');
    $req->bindParam(':cookie',$usercookie);
    $req->bindParam(':email',$email);
    $req->execute();
  }
  public static function checkLogin($email,$userPassword)
  {
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT userpassword FROM users WHERE email= :email');
    $req->bindParam(':email',$email);
    $data = $req->fetch();
    return($data['userpassword']==$userPassword);
  }
  
  public static function Check_Password($email,$userpw)
  {
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT userpassword,email FROM users WHERE email= :email');
    $req->bindParam(':email',$email);
    $req->execute();
    $data = $req->fetch();
    return($data['userpassword'] === $userpw);
    //return($data['userspassword'] == $userpw);
  }


  /*
  public static function Delete_User($userid)
  {
    require_once('../config/connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('DELETE FROM Users WHERE usersid= :usersid');
    $req->bindParam(':usersid',$userid);
    $req->execute();
  }*/
  public static function Get_Info(){
    require_once('connect.php');
      $bdheroku = myPDO();
      $cook = $_COOKIE["cookieperso"];
      $req = $bdheroku->prepare('SELECT nom,prenom,email,num_portable,facebook,linkedin FROM  users WHERE cookiecode = :cook');
      $req->bindParam(':cook',$cook);
      $req->execute();
      $data=$req->fetch();
      return $data;
  }
  public static function Get_All_Khlasse()
  {
      require_once('connect.php');
      $bdheroku = myPDO();
      $req = $bdheroku->prepare('SELECT E.id_khlasse,T.nomkhlasse,annee,(SELECT count(*) FROM a_etudie A WHERE A.id_khlasse= E.id_khlasse) FROM  khlasse E,typekhlasse T WHERE T.id_typekhlasse = E.id_type');
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

  public static function Get_Myschool(){
    require_once('connect.php');
    $bdheroku = myPDO();
    $cook = $_COOKIE["cookieperso"];
    $req = $bdheroku->prepare('SELECT nomecole,domaine FROM ecole E, users U, a_etudie_postfaidherbe P where P.id_user=U.id_user AND E.id_ecole=P.id_ecole AND U.cookiecode = :cook');
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
    $req1 = $bdheroku->prepare('SELECT count(*) FROM khlasse)');
    $req1->execute();
    $res1 = $req1 -> fetch();
    $req2 $bdheroku->prepare('SELECT id_typekhlasse FROM typekhlasse WHERE nomkhlasse =:typekh');
    $req2->bindParam(':typekh',$type);
    $req2 -> execute();
    $res2 = $req2 -> fetch();

    $req = $bdheroku->prepare('INSERT INTO khlasse(id_khlasse,id_type,annee)  VALUES (:id_khlasse,:id_type,:annee)');
    
    $req->bindParam(':id_khlasse',$res1);
    $req->bindParam(':id_type',$res2);
    $req->bindParam(':ann',$year);

    try {
      $req->execute();
  }
  catch (Exception $e) {
      // error during execute (bad request)
      http_response_code(400);
  }
  return $res1,$res2 ; 
  }
} ?>