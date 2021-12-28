<?php
namespace product;
include_once "class_product_type.php";
use product_type\Product_type;
class Product extends Product_type{
    public string $image;   
    public  string $name;    
    public float $price;
}