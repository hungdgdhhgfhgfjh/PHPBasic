<?php
namespace circle;
include_once "shape.php";
use shape\shape;
class Circle extends shape
{
    public $radius = 0;
    public function __construct($radius = 0,$name)
    {
        parent::__construct($name);
        $this->radius=$radius;
    }
    public function setRadius($radius)
    {
        $this->radius=$radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
   }
