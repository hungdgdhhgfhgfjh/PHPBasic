<?php
namespace Product;
include_once "sample.php";
use Sample\Sample;
class Product extends Sample
{
      public function setImage($image)
      {
          $this->image  = $image;
      }
      public function getImage()
      {
          return $this->image;
      }
      public function setName($name)
      {
        $this->name  = $name;
      }
      public function getName()
      {
        return $this->name;
      }
      public function setNote($note)
      {
        $this->note  = $note;
      }
      public function getNote()
      {
        return $this->note;
      }
}