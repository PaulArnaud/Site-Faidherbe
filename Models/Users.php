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
		$req = $bdheroku->prepare("SELECT usersid FROM Users WHERE userscookiecode='".$cookiecode."'");
		$req->execute();
		$data=$req->fetch();
		return $data["usersid"]; //Verifier si null
	}
  public static function Get_Users_Mail($userid)
  {
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare("SELECT usersmail FROM Users WHERE usersid= :userid");
    $req->bindParam(':userid',$userid);
    $req->execute();
    $data = $req->fetch();
    return $data['usersmail'];
  }
  public static function Add_User($firstname,$lastname,$nick,$mail,$gender,$password,$cookiecode)
  {
    require_once('connect.php');
		$bdheroku = myPDO();
    $req = $bdheroku->prepare('INSERT INTO Users(usersfirstname, userslastname, usersnick, usersmail, usersgender, userscookiecode, userspassword) VALUES (:firstname,:lastname,:nick,:mail,:gender,:cookiecode,:password)');
    $req->bindParam(':firstname',$firstname);
		$req->bindParam(':lastname',$lastname);
		$req->bindParam(':nick',$nick);
		$req->bindParam(':mail',$mail);
    $req->bindParam(':gender',$gender);
    $req->bindParam(':cookiecode',$cookiecode);
    $req->bindParam(':password',$password);
    $req->execute();
  }
  public static function Get_All_Users()
  {
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT * FROM Users');
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
    $req = $bdheroku->prepare("SELECT usersrole FROM Users WHERE usersid= :usersid");
    $req->bindParam(':usersid',$userid);
    $req->execute();
    $data = $req->fetch();
    return($data['usersrole']);
  }
  public static function Set_User_Cookie($usersnick,$usercookie)
  {
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('UPDATE Users SET userscookiecode= :cookie WHERE usersnick= :nick');
    $req->bindParam(':cookie',$usercookie);
    $req->bindParam(':nick',$usersnick);
    $req->execute();
  }
  public static function checkLogin($userNick,$userPassword)
  {
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('SELECT userspassword FROM Users WHERE usersnick= :usersnick');
    $req->bindParam(':usersnick',$userNick);
    $data = $req->fetch();
    return($data['userspassword']==$userPassword);
  }
  public static function Get_Userid_By_Nick($userNick)
  {
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare("SELECT usersid FROM Users WHERE usersnick=\'".$userNick."\'");
    $data = $req->fetch();
    return $data['usersid'];
  }
  public static function Check_Password($usernick,$userpw)
  {
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare("SELECT userspassword FROM Users WHERE usersnick= '".$usernick."'");
    //$req->bindParam(':usersnick',$usernick);
    $req->execute();
    $data = $req->fetch();
    return($data['userspassword'] == $userpw);
  }
  public static function Delete_User($userid)
  {
    require_once('connect.php');
    $bdheroku = myPDO();
    $req = $bdheroku->prepare('DELETE FROM Users WHERE usersid= :usersid');
    $req->bindParam(':usersid',$userid);
    $req->execute();
  }
} ?>