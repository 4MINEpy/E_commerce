<?php
class Connexion{
    private $pdo;
    
    function __construct(){
        $dsn ='mysql:host=localhost;dbname=e_commerce';
        $user = "root";
        $pwd="";
        $this->pdo = new PDO($dsn,$user,$pwd);
    }
    function getConnexion(){
        return $this->pdo;
    }
}