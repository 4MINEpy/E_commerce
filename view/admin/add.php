<?php
ob_start();
?>
<form action="../../controller/admin/add.php" method="post" enctype="multipart/form-data" class="form-control">
    <label for="">Libellé</label><input type="text" name="lib" id="" class="form-control"><br>
    <label for="">Prix</label><input type="text" name="prix" id="" class="form-control"><br>
    <label for="">Quantité</label><input type="text" name="qta" id="" class="form-control"><br>
    <label for="">Description</label><input type="text" name="desc" id="" class="form-control"><br>
    <label for="">Image</label><input type="text" name="img" id="" class="form-control"><br>
    <label for="">En promo</label><input type="text" name="pro" id="" value=0 class="form-control"><br>
    <input type="submit" value="Ajouter" name="ok" class="btn btn-primary btn-lg">
</form>
<?php
    $contenu = ob_get_clean();
    $titre = "Ajout d'un produit";
    include "layout.php";
?>