<?php
class Model{

    static $connections = array();

    public $db = 'default';

    public function __construct(){
        $conf = Conf::$databases[$this -> db];
        if (isset(Model :: $connections[$this->db])){
            return true;
        }

        try {
            $pdo = new PDO('pgsql:host='.$conf['host'].';dbname='.$conf['database'].';',$conf['login'],$conf['password']);
            Model :: $connections[$this->db] = $pdo;
        }catch(PDOException $e){
            if (Conf::$debug > 1 ){
                die ($e->getMessage());
            }
            else{
                die('Impossible de se connecter à la base de donnée');
            }
            
        }
    }

    public function find(){

    }
}
?>