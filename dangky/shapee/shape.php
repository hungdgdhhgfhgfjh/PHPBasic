<?php
namespace shape;
class shape 
{
    public $name = "";
    public function __construct($name = "")
     {
      $this->name = $name;
    }
    public function show() 
    {
        echo "I am shape I Hello YOU";
    }
}
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
   class Cilynder extends Circle{
    public $height;

 public function __construct($name, $radius, $height)
 {
     parent::__construct($name, $radius);
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
class Retangle extends shape 
{
    public int $width;
    public int $height;
    public function __construct($name = "",$width = "",$height = "")
    {
        parent::__construct($name);
        $this->width=$width;
        $this->height=$height;
    }
    public function setWidth($width)
    {
        $this->width=$width;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function setHeight($height)
    {
        $this->height=$height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setchuvi()
    {
       $cv=($this->height + $this->width)*2;
       return $cv;
    }
    public function getchuvi()
    {
        $dt=$this->height * $this->width;
        return $dt;
    }

}
$hcn      = new Retangle("Retangle",20,15);
$hv       = new Retangle("hình vuông",10,10);
$cilynder = new Cilynder("Cilynder",13,25);
$Cricle   = new Circle("Cricle",12);
$tonghophinh = [];
$tonghophinh[]=$hcn;
$tonghophinh[]=$hv;
$tonghophinh[]=$cilynder;
$tonghophinh[]=$Cricle;
echo "<pre>";
print_r($tonghophinh);
echo "</pre>";