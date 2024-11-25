<?php
ob_start(); 
?>
    <div class="row">
        <?php
        foreach ($lesProduit as $produit) {
           
        ?>
        <div class="col-3">
            <div class="card">
                <img src="<?=$produit[5]?>" class="img-fluid" alt="photo du produit">
                <div class="card-body">
                    <h1 class="card-title"><?=$produit[1]?></h1>
                    <p class="card-text"><?=$produit[2]?></p>
                    <a href="#" class="btn btn-success btn-sm">Details</a>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i>Ajouter</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
<?php
    $contenu = ob_get_clean();
    $titre = "Liste des produit";
    include "layout.php";
?>