<?php
namespace Animal;
abstract class Animal
{
    public $image  = "" ;
    public $name   = "";
    public $say    = "";
    public $food   = "";
    public $speed  = "";
    public $weight = "";
    abstract public function setName($name);
    abstract public function getName();
    abstract public function setSay($say);
    abstract public function getSay();
    abstract public function setFood($food);
    abstract public function getFood();
    abstract public function setSpeed($speed);
    abstract public function getSpeed();
    abstract public function setWeight($weight);
    abstract public function getWeight();
}