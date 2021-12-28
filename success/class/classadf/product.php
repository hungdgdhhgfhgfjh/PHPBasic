<?php
class Product{
    public $name = "";
    public float $price;
    public function __construct($nam = null ,$price = 0) {
        $this->name = $name;
        $this->price = $price;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
           return $this->name;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice()  {
        return  $this->price;
    }
}