<?php
    $id = $_GET['id'];
    require_once 'crud.php';
    $crud = new Crud_Produit();
    $res = $crud->delete($id);
    if($res){
        header("location: all.php");exit;
    }else{echo("deleting problem, check product ID");}
