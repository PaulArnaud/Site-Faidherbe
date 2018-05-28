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
    $req = $bdheroku->prepare("SELECT id_user FROM users WHERE cookiecode= :cc");
    $req->bindParam(':cc',$cookiecode);
		$req->execute();
		$data=$req->fetch();
		return $data["usersid"]; //Verifier si null
	}
  public static function Get_Users_Mail($userid)
  {
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare("SELECT email FROM users WHERE id_user= :userid");
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
    $req = $bdheroku->prepare("SELECT users.isAdmin FROM users WHERE id_user= :usersid");
    $req->bindParam(':usersid',$userid);
    $req->execute();
    $data = $req->fetch();
    return($data['isAdmin']);
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
    $req = $bdheroku->prepare("SELECT userpassword,email FROM users WHERE email= :email");
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
} ?>