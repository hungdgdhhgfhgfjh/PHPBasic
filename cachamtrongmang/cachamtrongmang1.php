<?php
class Obj{
   private $data = ["itemt"=>[]];
   public function add($emplement)
   {
   
           array_push($this->data["itemt"],$emplement);
   }
   public function remove($number)
   {
    
    array_splice($this->data['itemt'],$number,1);
   }
}
$object = new Obj;
$object->add("sss");
$object->add("asd");
$object->remove(0);
echo "<pre>";
print_r($object);
echo "</pre>";
