<?php

require_once __DIR__ . "/products.php";

class Food extends Product {
    public function __construct($title, $price, $image, $category) {
        parent::__construct($title, $price, $image, $category, 'Food');
    }
}

?>
