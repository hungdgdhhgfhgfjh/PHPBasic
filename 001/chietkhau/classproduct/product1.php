<?php
namespace product1;
include_once "sample.php";
use sample\Sample;
class Product extends  Sample
{
    public function setName($name)
    {
      $this->name = $name;
    }
     public function getName()
    {
       return $this->name;
    }
     public function setImage($image)
    {
        $this->image = $image;
    }
     public function getImage()
     {
        return $this->image;
     }
     public function setPrice($price)
     {
        $this->price = $price;
     }
     public function getPrice()
     {
        return $this->price;
     }
     public function setButton($button)
     {
        $this->button = $button;
     }
     public function getButton()
     {
        return $this->button;
     }
    }

