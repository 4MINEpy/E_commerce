<?php
    $id = $_GET['id'];
    require_once '../../model/crud.php';
    $crud = new Crud_Produit();
    $res = $crud->delete($id);
    if($res){
        header("location: findAll.php");exit;
    }else{echo("deleting problem, check product ID");}
