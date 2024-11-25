<?php
        require_once "../../model/crud.php";
        $crud = new Crud_Produit();
        $id = $_GET['id'];
        $produit = $crud->find($id);
        include "../../view/admin/detail.php";
?>  