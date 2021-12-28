<?php
namespace sample;
abstract class Sample
{
  public  $name = "";
  public  $image = "";
  public  $price = "";
  public  $button = "";
  abstract public function setName($name);
  abstract public function getName();
  abstract public function setImage($image);
  abstract public function getImage();
  abstract public function setPrice($price);
  abstract public function getPrice();
  abstract public function setButton($button);
  abstract public function getButton();
}
