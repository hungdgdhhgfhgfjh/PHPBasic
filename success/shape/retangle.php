<?php
namespace Retangle;
include_once "shape.php";
use shape\shape;
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