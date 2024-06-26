<?php
include 'controller.php';
$products = getProducts();
?>

<section id="products" class="category" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">Catalogue des produits</h2>
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4 product-item" data-title="<?= $product['title']; ?>" data-price="<?= $product['price']; ?>">
                <img src="images/<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="product-image img-fluid">
                <h3 class="text-center"><?= $product['title']; ?></h3>
                <p class="text-center"><?= $product['price']; ?>€</p>
                <button class="add-to-cart btn btn-primary btn-block">Ajouter au panier</button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
