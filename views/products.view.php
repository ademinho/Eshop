<?php 

include '../partials/header.php';
include '../config/cURL.php';

?>

<div class="wrapper">
    <h1>Page de produits</h1>

    <ul class="grid">
        <?php foreach($products as $product) :  ?>
            <li>
                <a href="home.view.php?test=2">Lien test</a>
                <a href="product.view.php?product=<?= $product['id'] ?>"><img src="<?= $product['image'] ?>" alt=""></a>
                <h2><?= $product['title'] ?></h2>
                <h3><?= substr($product['description'], 0, 50) ?> ...</h3>
                <h2><?= $product['price'] ?> €</h2>
                <button><a>Ajouter au panier</a></button>
            </li>
        <?php endforeach ?>
   </ul>    


</div>

<?php include '../partials/footer.php' ?>
