<?php
function myPDO(){
    $dsn = "pgsql:"
    ."host=ec2-54-228-181-43.eu-west-1.compute.amazonaws.com;"
    ."dbname=d84nlnmfgu4vji;"
    ."user=csgwojauygcbjo;"
    ."port=5432;"
    ."sslmode=require;"
    ."password=d0fe7c66c47196fea644214cf2cd232a65f0a805ce28d3d798115e11df7b68b0";
    try{
        $db = new PDO($dsn);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    return($db);
}