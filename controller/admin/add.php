<?php
    require_once "../../model/crud.php";
    include "../../view/admin/add.php";
    $crud = new Crud_Produit();
    if(isset($_POST["ok"])){
        require_once "../../model/produit.php";
        $lib = htmlspecialchars($_POST["lib"]);
        $pr = htmlspecialchars($_POST["prix"]);
        $qta = htmlspecialchars($_POST["qta"]);
        $desc = htmlspecialchars($_POST["desc"]);
        $img = htmlspecialchars($_POST["img"]);
        $pro = htmlspecialchars($_POST["pro"]);
        $produit = new produit(null,$lib,$pr,$qta,$desc,$img,$pro);
        $res = $crud->add($produit);
        if($res == 1){
            header("location: findAll.php");exit;
        }
        else{
            echo("problem d'insertion");
        }
    }
?>