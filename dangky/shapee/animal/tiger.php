<?php
namespace tiger;
include_once ("animal.php");
include_once ("interfaceeat.php");
use animal\Animal;
use Edible\Edible;
use Edible\Drink;
class Tiger extends Animal implements Edible,Drink
{
   public $speed = "";
    public function setspeed($speed)
    {
        $this->speed = $speed;
    }
    public function getspeed()
    {
        return $speed;
    }
    public $food = "meal";
    public $say = "";
    public function setdrink()
    {

    }
    
    public function __construct($name,$say)
    {
        parent::__construct($name);
        $this->say = $say;
    }
    public function ssetsay($say)
    {
        $this->say = $say;
    }
    public function getsay()
    {
      return $this->say;
    }
    
     public function setsay()
     {
           echo __METHOD__;
           echo ":::  hello hello I am tiger alls King of the jungle";
     }
     public function setfood()
    {
        return  $this->food;
    }
} 