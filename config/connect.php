<?php
require_once(ROOT.DS.'config'.DS.'conf.php');
class Connect {
    
  public static $pdo;
  private $hostname;
  private $login;
  private $password;
  private $database_name;


  public static function Init(){
    $hostname = Conf::getHostname();
    //echo $hostname;
    $login = Conf::getLogin();
    //echo $login;
    $password = Conf::getPassword();
    //echo $password;
    $database_name = Conf::getDatabase();
    //echo $database_name;
    try{
      self::$pdo = new PDO("pgsql:host=$hostname;dbname=$database_name", $login, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //var_dump( self::$pdo) ;
    } 
    catch (PDOException $e) {
      if (Conf::getDebug()) {
        echo $e->getMessage(); // affiche un message d'erreur
      } else {
        echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
      }
      die();
    }
    }
  }
Connect::Init();