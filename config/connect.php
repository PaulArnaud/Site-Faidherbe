<?php
function myPDO() {
    // Base de données Heroku Décibels
    $dsn = "pgsql:host=ec2-54-228-181-43.eu-west-1.compute.amazonaws.com;dbname=d84nlnmfgu4vji";
    $login = "csgwojauygcbjo";
    $mdp = "d0fe7c66c47196fea644214cf2cd232a65f0a805ce28d3d798115e11df7b68b0";
    // Création de la connexion
    
    try {
        $bd = new PDO($dsn, $login, $mdp);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'prout 123 ';
        
    }
    catch (Exception $e) {
        echo 'Error creating PDO -> ';
        var_dump($e->getMessage());
    }
    return $bd;
}