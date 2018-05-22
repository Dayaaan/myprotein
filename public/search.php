<?php 
include '../services/myproteinService.php';
include '../views/header.phtml';


if (isset($_GET["search"])) {
	 $word = $_GET['search'];
	 $requete = $bdd->prepare("SELECT * FROM products WHERE name = ? LIKE '%$word%' OR description LIKE '%$word%'");
	 $requete->execute(array($word));

	 if ($requete->rowCount() == 0) {
	 	echo "Article introuvable";
	 }
	while ($product = $requete->fetch()): ?>
		<div>
		<img src="<?= $product['image'] ?>">
		<h3><?= $product['name'] ?></h3>
		<p>Prix: <?= $product['price'] ?>€</p>
		<?php if ($product['is_active'] = 1): ?>
			DISPONIBLE EN <span style='color:green;'>STOCK</span>;
		<?php endif ?>
		<p>Quantité : <?= $product['quantity'] ?></p>
		<p><?= $product['description'] ?></p>
		</div>
	<?php endwhile ?>
<?php
 };
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><
<?php
include '../views/footer.phtml';
