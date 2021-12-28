<?php
namespace Reptiles;
include_once ("animal.php");
use Animal\Animal;
class Reptiles extends Animal
{
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSay($say)
    {
         $this->say = $say;
    }
    public function getSay()
    {
        return $this->say;
    }

    public function setFood($food)
    {
        $this->food = $food;
    }
    public function getFood()
    {
        return $this->food;
    }
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
    public function getSpeed()
    {
        return $this->speed;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}