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