<?php
namespace Sample;
abstract class Sample{
    public $image   =  "";
    public $name    =  "";
    public $note    =  "";
    public float $price  ;
    abstract  public function setImage($image);
    abstract  public function getImage();
    abstract  public function setName($name);
    abstract  public function getName();
    abstract  public function setNote($note);
    abstract  public function getNote();
}