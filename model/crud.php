<?php
    require_once "produit.php";
    require_once "connection.php";
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
        function find($id){
            $sql = "select * from produit where id=$id";
            $res = $this->pdo->query($sql);
            return $res->fetch(PDO::FETCH_NUM);
        }
        function delete($id){
            $sql = "delete from produit where id=$id";
            $res = $this->pdo->exec($sql);
            return $res;
        }
        function add(Produit $prod){
            $lib = $prod->getLibille();
            $prix = $prod->getPrix();
            $qta = $prod->getQte();
            $desc = $prod->getDesc();
            $img = $prod->getImg();
            $pro = $prod->getPromo();
            $sql = "INSERT INTO `produit` (`id`, `libelle`, `prix`, `qta`, `descreption`, `image`, `promo`) 
            VALUES (NULL,'$lib','$prix',$qta,'$desc','$img','$pro');";
            $res = $this->pdo->exec($sql);
            return $res;
        }
        function edit(Produit $prod){
            $id = $prod->getId();
            $lib = $prod->getLibille();
            $prix = $prod->getPrix();
            $qta = $prod->getQte();
            $desc = $prod->getDesc();
            $img = $prod->getImg();
            $pro = $prod->getPromo();
            $sql = "UPDATE produit SET libelle='$lib', prix=$prix, qta=$qta, descreption='$desc', image='$img', promo=$pro WHERE id=$id";   
            $res = $this->pdo->exec($sql);
            return $res;
        }

    }