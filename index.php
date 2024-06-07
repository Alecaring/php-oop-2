<?php

require_once __DIR__ . '/modules/Category.php';
require_once __DIR__ . '/modules/Food.php';
require_once __DIR__ . '/modules/Game.php';
require_once __DIR__ . '/modules/Cuccia.php';

$catCategory = new Category("Cat", "assets/cat.png");
$dogCategory = new Category("Dog", "assets/dog.png");

$products = [
    new Food("Cat Food", 10.99, "assets/cat-food.jpg", $catCategory),
    new Game("Dog Ball", 5.99, "assets/dog-ball.jpg", $dogCategory),
    new Cuccia("Cat Bed", 20.99, "assets/cat-bed.jpg", $catCategory),
    new Food("Dog Food", 15.99, "assets/dog-food.jpg", $dogCategory),
    new Cuccia("Dog Bed", 25.99, "assets/dog-bed.jpg", $dogCategory),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 16px;
            margin: 16px;
            text-align: center;
            width: 200px;
            display: inline-block;
        }
        .card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <h1>Welcome to the Animal Shop</h1>

    <div class="products">
        <?php
        foreach ($products as $product) {
            $product->displayCard();
        }
        ?>
    </div>

</body>
</html>
