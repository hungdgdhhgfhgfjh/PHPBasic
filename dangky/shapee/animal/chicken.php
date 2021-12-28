<?php
namespace chicken;
include_once ("tiger.php");
include_once ("interfaceeat.php");
use tiger\Tiger;
use Edible\Edible;
use Edible\Drink;
class Chicken extends Tiger implements Edible,Drink 
{
    public $food  = "sâu, bọ";
    public $speed = "";
    public function setspeed($speed)
    {
        $this->speed = $speed;
    }
    public function getspeed()
    {
        return $speed;
    }
    
     public function __construct($name,$say)
     {
         parent::__construct($name,$say);
     }
     public function setsay()
     {
           echo __METHOD__;
           echo ":::  hello hello I am CHICKEN and I am Đồng hồ báo thức cho nông dân có tiếng gáy O O O O O O";
     }
     public function setfood(){
        return $this->food;
    }
}