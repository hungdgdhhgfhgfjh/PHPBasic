<?php
namespace Reptiles;
include_once "animal.php";
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
     public function setImage($image)
     {
        $this->image = $image;
     }
     public function getImage()
     {
        return $this->image;
     }
     public function setPersonaLiTy($perSonaLity)
     {
        $this->perSonaLity = $perSonaLity;
     }
     public function getPerSonaLiTy()
     {
        return $this->perSonaLity;
     }
     public function setFood($food)
     {
        $this->food = $food;
     }
     public function getFood()
     {
        return $this->food;
     }
     protected function setWildGuard($wildGuard)
     {
        $this->wildGuard = $wildGuard;
     }
     protected function getWildGuard()
     {
        return $this->wildGuard;
     }
}