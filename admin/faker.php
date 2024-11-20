<?php require_once "../connection.php"; 
    $connect = new Connexion();
    $pdo = $connect->getConnexion();
    $sql = "delete from produit";
    $pdo->exec($sql);
    $sql = "";
    for ($i=1; $i < 100; $i++) { 
        $lib="Produit n $i";
        $dollar = random_int(500,3000);
        $qte = random_int(1,100);
        $des = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dicta possimus optio doloribus accusamus laborum vero, 
                debitis asperiores voluptatem placeat nam dignissimos quaerat voluptates labore eveniet. Temporibus consequuntur reiciendis aliquid?";
        $img = "https://picsum.photos/400/?random=$i";
        $pro = random_int(0,1);
        $sql =$sql."INSERT INTO `produit` (`id`, `libelle`, `prix`, `qta`, `descreption`, `image`, `promo`) VALUES (NULL, '$lib',$dollar, $qte,'$des','$img' ,$pro);";
    }
    $pdo->exec($sql);
    ?>
