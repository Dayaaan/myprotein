<?php 
session_start();
include '../services/tools.php';
include '../services/myproteinService.php';
include '../views/header.phtml';

?>
<main class="container">
<?php

$tbl = $_SESSION["panier"];
$i = 0;
if (count($tbl) == 0) : ?>
     <h1><?= "Pas de produit dans le panier"; ?></h1>
    <?php else : ?>
      <?php foreach ($tbl as $key => $value) : ?>
       <?php $sql = "SELECT * FROM `products` WHERE id LIKE '$value'";
        $statement = $bdd->prepare($sql);
        $statement->execute();

        $product = $statement->fetch(\PDO::FETCH_ASSOC); ?>
        <img src="<?= $product['image'] ?>" class="img-cart">
        <div class="displayProduct">
        <h3 class="titleh3"><?= $product['name'] ?></h3>
        <p style="color:red;">Prix: <?= $product['price'] ?>€</p>
        <?php if ($product['is_active'] = 1): ?>
            DISPONIBLE EN <span style='color:green;'>STOCK</span>;
        <?php endif ?>
        <p style="color:green;">Quantité : <?= $product['quantity'] ?></p>
        <a href="" class="btn btn-primary">Commandez</a>
        </div>


      <?php endforeach ?>
    <?php endif ?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	</main>
<?php

include '../views/footer.phtml';
