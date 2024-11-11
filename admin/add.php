<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "../connection.php"; 
    $connect = new Connexion();
    $pdo = $connect->getConnexion();
    $sql = "INSERT INTO `produit` (`id`, `libelle`, `prix`, `qta`, `descreption`, `image`, `promo`) VALUES (NULL, 'Ecran 20', 499, 9,'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, mollitia!','https://picsum.photos/200/200' , 0);";
    $res = $pdo->exec($sql);
    var_dump($res);
    ?>
</body>
</html>