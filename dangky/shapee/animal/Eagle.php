<?php
namespace Eagle;
include_once ("bird.php");
use Bird\Bird;
class Eagle extends Bird
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