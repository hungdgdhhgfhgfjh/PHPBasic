<?php
namespace cilynder;
include_once "circle.php";
use circle\Circle;
class Cilynder extends Circle{
    public $height;

 public function __construct($name, $radius, $height)
 {
     parent::__construct($name,$radius);
     $this->height = $height;
 }
 public function calculateArea()
 {
     return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
 }

 public function calculateVolume(){
     return parent::calculateArea() * $this->height;
 }
}
