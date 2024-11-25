    <?php
    require_once "crud.php";
    require_once "produit.php";
    if(isset($_GET['id'])){
        ob_start();
        $crud = new Crud_Produit();
        $id = $_GET['id'];
        $prd = $crud->find($id);
    }
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>?id=<?=$id?>" method="post"class="form-control">
        <label for="">Libellé</label><input type="text" name="lib" id="" class="form-control" value="<?=$prd[1]?>"><br>
        <label for="">Prix</label><input type="text" name="prix" id="" class="form-control" value="<?=$prd[2]?>"><br>
        <label for="">Quantité</label><input type="text" name="qta" id="" class="form-control" value="<?=$prd[3]?>"><br>
        <label for="">Description</label><input type="text" name="desc" id="" class="form-control" value="<?=$prd[4]?>"><br>
        <label for="">image</label><input type="text" name="img" id="" class="form-control" value="<?=$prd[5]?>"><br>
        <label for="">En promo</label><input type="text" name="pro" id="" class="form-control" value="<?=$prd[6]?>"><br>
        <input type="submit" value="Editer" name="ok" class="btn btn-primary btn-lg">
    </form>
    <?php

        if(isset($_POST["ok"])){
            $produit = new produit($id,$_POST["lib"],$_POST["prix"],$_POST["qta"],$_POST["desc"],$_POST["img"],$_POST["pro"]);
            $res = $crud->edit($produit);
            if($res == 1){
            header("location: all.php");exit;}
        }
    ?>


    <?php
        $contenu = ob_get_clean();
        $titre = "modifier d'un produit";
        include "layout.php";
    ?>