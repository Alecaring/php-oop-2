<?php

require_once __DIR__ . "/products.php";

class Cuccia extends Product {
    public function __construct($title, $price, $image, $category) {
        parent::__construct($title, $price, $image, $category, 'Cuccia');
    }
}

?>
