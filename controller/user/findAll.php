    
    <?php
        require_once "../../model/crud.php";
        $crud = new Crud_Produit();
        $lesProduit = $crud->findAll();
        include "../../view/user/findAll.php";