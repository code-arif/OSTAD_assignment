<?php
class Product {
    // Properties
    private $id;
    private $name;
    private $price;

    // Constructor
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to get the formatted price
    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    // Method to show product details
    public function showDetails() {
        echo "Product ID: {$this->id} </br>";
        echo "Product Name: {$this->name} </br>";
        echo "Product Price: $" . $this->getFormattedPrice() . "</br>";
    }
}

// Instantiate
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
