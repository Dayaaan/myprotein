<?php 
session_start();
include '../services/tools.php';
include '../services/myproteinService.php';
include '../views/header.phtml';

pre($_SESSION);
exit;

?>

<div class="container-product">
                <?php 
                include '../services/myproteinService.php';
                $reponse = $bdd->query('SELECT * FROM products');
                while ($product = $reponse->fetch()): ?>
                <div class="product">
                     <ul>
                        <li>
                            <img src="<?= $product['image'] ?>">
                            <h3><?= $product['name'] ?></h3>
                            <p style="color:red;">Prix: <?= $product['price'] ?>€</p>
                            <?php if ($product['is_active'] = 1): ?>
                                DISPONIBLE EN <span style='color:green;'>STOCK</span>;
                            <?php endif ?>
                            <p style="color:green;">Quantité : <?= $product['quantity'] ?></p>
                            <a href="../public/product.php?id=<?= $product['id'] ?>" class="btn btn-primary">Voir la fiche du produit</a>
                        </li>
                    </ul>
                </div>  
                <?php endwhile ?>
            </ul>
        </div>
    </div>

 

 <br><br><br><br><br><br><br><br>
</main>
<?php
include '../views/footer.phtml';
