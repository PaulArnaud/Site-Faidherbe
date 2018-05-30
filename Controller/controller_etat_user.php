<?php
require_once("../Users.php");

function isLogged(){
  if(isset($_COOKIE['cookieperso'])){
    $cookierecup=$_COOKIE['cookieperso'];
    $user=Users::Get_User_Id($cookierecup);
    return(!empty($user));
  }
  else {
    return false;
  }
}

function loggedOnly(){
  if(!isLogged()){
    header("Location: Controller/controller_page_connexion.php");
  }
}

function unloggedOnly(){
  if(isLogged()){
    header("Location: Controller/controller_page_accueil.php");
  }
}

function isAdmin(){
  if(isset($_COOKIE['cookieperso'])){
    $cookie=$_COOKIE['cookieperso'];
    $userid=Users::Get_User_Id($cookie);
    $role=Users::Get_Users_Role($userid);

    if($role===true){
      return true;
    }
    else return false;
  }
  else return false;
}
 ?>