<?php 
ob_start(); 

?>
<table class="table" id="example">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Libellé</th>
      <th scope="col">Prix on DT</th>
      <th scope="col">Quantité</th>
      <th scope="col">Action</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($lesProduit as $produit) {
        ?>
        <tr>
            <td><?=$produit[0]?></td>
            <td><?=$produit[1]?></td>
            <td><?=$produit[2]?></td>
            <td><?=$produit[3]?></td>
            <td><a href="../../controller/admin/detail.php?id=<?=$produit[0]?>" class="btn btn-info btn-small">Voir détail</a></td>
            <td><a href="../../controller/admin/Delete_Produit.php?id=<?=$produit[0]?>" class="btn btn-danger btn-small">Supprimer</a></td>
            <td><a href="update.php?id=<?=$produit[0]?>" class="btn btn-dark btn-small">Modifier</a></td>
        </tr>
<?php
    }
  ?>
  </tbody>
</table>
<?php
    $contenu = ob_get_clean();
    $titre = "Liste des produit";
    include "layout.php";
?>