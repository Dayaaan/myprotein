<?php 
session_start();
include '../services/myproteinService.php';
include '../views/header.phtml';

?>
<main class="container">
<?php 



if (isset($_GET["id"])) {
     $id = $_GET['id'];
     $requete = $bdd->prepare("SELECT * FROM products WHERE id = ?");
     $requete->execute(array($id));

    while ($product = $requete->fetch()): ?>
        <img src="<?= $product['image'] ?>" class="img-product">
        <div class="displayProduct">
        <h3 class="titleh3"><?= $product['name'] ?></h3>
        <p style="color:red;">Prix: <?= $product['price'] ?>€</p>
        <?php if ($product['is_active'] = 1): ?>
            DISPONIBLE EN <span style='color:green;'>STOCK</span>;
        <?php endif ?>
        <p style="color:green;">Quantité : <?= $product['quantity'] ?></p>
        <p><?= $product['description'] ?></p>
        <p><?= $product['description2'] ?></p>
        <a href="ajoutPanier.php?id=<?= $product['id'] ?>" class="btn btn-primary">Ajoutez au panier</a>
        </div>
    <?php endwhile; ?>
<?php
 };
?>


<br><br><br><br><br><br><br><br>
</main>
<?php
include '../views/footer.phtml';