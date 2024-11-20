<?php
    require_once "produit.php";
    require_once "../connection.php";
    class Crud_Produit{
        private $pdo; //Object PDO

        function __construct(){
            $con = new Connexion();
            $this->pdo = $con->getConnexion();
        }

        function findAll(){
            $sql="select * from produit";
            $res = $this->pdo->query($sql);
            return $res->fetchAll(PDO::FETCH_NUM);
        }
        function find($id){}
        function delete($id){
            $sql = "delete from produit where id=$id";
            $res = $this->pdo->exec($sql);
            return $res;
        }
        function add(Produit $prod){}

    }