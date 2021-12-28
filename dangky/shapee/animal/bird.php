<?php
namespace Bird;
include_once ("animal.php");
use animal\Animal;
class Bird extends Animal
{
    public $say  = "";
    public $bay  = "";
    public $food = "";

    public function setsay()
    {
       
    }
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getSay()
    {
       return  $this->say;
    }
    public function setBay($bay)
    {
        $this->bay = $bay;
    }
    public function getBay()
    {
        return  $this->bay;
    }
    public function setFood($food)
    {
        $this->food = $food;
    }
    public function getFood()
    {
        return  $this->food;
    }
}