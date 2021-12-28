<?php
namespace Animal;
abstract class Animal{
    public $name          = "";
    public $image         = "";
    public $perSonaLity   = "";
    public $food          = "";
    protected $wildGuard  = "";
    public $weight        = "";
   abstract public function setName($name);
   abstract public function getName();
   abstract public function setImage($image);
   abstract public function getImage();
   abstract public function setPersonaLiTy($perSonaLity);
   abstract public function getPerSonaLiTy();
   abstract public function setFood($food);
   abstract public function getFood();
   abstract protected function setWildGuard($wildGuard);
   abstract protected function getWildGuard();

}