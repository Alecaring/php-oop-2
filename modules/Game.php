<?php

require_once __DIR__ . "/products.php";

class Game extends Product {
    public function __construct($title, $price, $image, $category) {
        parent::__construct($title, $price, $image, $category, 'Game');
    }
}

?>
