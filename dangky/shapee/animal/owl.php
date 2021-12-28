<?php
namespace Owl;
include_once ("bird.php");
use Bird\Bird;
class Owl extends Bird
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
}
