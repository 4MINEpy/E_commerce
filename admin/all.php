    
    <?php
        ob_start();
        require_once "crud.php";
        $crud = new Crud_Produit();
        $lesProduit = $crud->findAll();

    ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Libellé</th>
      <th scope="col">Prix on DT</th>
      <th scope="col">Quantité</th>
      <th scope="col" colspan="3">Action</th>
    </tr>
  </thead>
  <?php
    foreach ($lesProduit as $produit) {
        ?>
        <tr>
            <td><?=$produit[0]?></td>
            <td><?=$produit[1]?></td>
            <td><?=$produit[2]?></td>
            <td><?=$produit[3]?></td>
            <td><a href="detail.php?id=<?=$produit[0]?>" class="btn btn-info btn-small">Voir détail</a></td>
            <td><a href="Delete_Produit.php?id=<?=$produit[0]?>" class="btn btn-danger btn-small">Supprimer</a></td>
            <td><a href="update.php?id=<?=$produit[0]?>" class="btn btn-dark btn-small">Modifier</a></td>
        </tr>
<?php
    }
  ?>
</table>
<?php
    $contenu = ob_get_clean();
    $titre = "Liste des produit";
    include "layout.php";
?>