<?php
class ProductManeger{
    private $products;
    public function __construrt($products) {
        $this->products = [];
    }
    public function add($product) {
        $this->products[]=$product;
    }
    public function getProducts() {
        return $this->products;
    }
}