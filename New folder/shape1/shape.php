<?php
namespace shape;
class Shape
{
    public $name = "";
    public function __construct($name = "")
    {
       $this->name = $name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
      return  $this->name;
    }
    public function setsay(){
        echo "Hello I am SHAPE :D:D:D:D:D:D";
    }
}