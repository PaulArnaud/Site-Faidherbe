<?php
require('/models/user.php');

class userController{
    private $user;
    private $params;

    function __construct($params = null){
        $this->user = new user();
        if ($params != null){
            $this->params = $params;
        }
    }
    function getAllUser(){
        return $this->user->getAllUser();
    }
    function getUsers(){
        return $this->user->getUsers($this->params['id_user']);
    }
    function insertEcole(){
        $this->user->insertEcole($this->params['nomecole'],$this->params['domaine']);
    }
}
?>