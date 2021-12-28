<?php
namespace cylinder;
include_once ("circle.php");
use circle\Circle;
class Cylinder extends Circle
{
    public int $height;
    public function __construc($name,$radius,$height)
    {
        parent::__construc($name,$radius);
        $this->height = $height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
       return $this->height;
    }
    public function calculateArea()
    {
     return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

 public function calculateVolume()
    {
     return parent::calculateArea() * $this->height;
    }
}