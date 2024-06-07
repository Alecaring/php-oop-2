<?php

class Product {
    public $title;
    public $price;
    public $image;
    public $category;
    public $type;

    public function __construct($title, $price, $image, $category, $type) {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
    }

    public function displayCard() {
        echo "<div class='card'>";
        echo "<img src='{$this->image}' alt='{$this->title}'>";
        echo "<h2>{$this->title}</h2>";
        echo "<p>Price: \${$this->price}</p>";
        echo "<p>Category: {$this->category->name}</p>";
        echo "<p>Type: {$this->type}</p>";
        echo "</div>";
    }
}

?>
