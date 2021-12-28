<?php
namespace square;
include_once ("rectangle.php");
use rectangle\Rectangle;
class Square extends Rectangle
{
    public function __construct($name,$width,$height)
    {
        parent::__construct($name,$width,$height);
    }
}