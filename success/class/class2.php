<?php
class METAL{
    public $weight  = 0;
    public $stiffness = 0;
    public $conductive = 0;
    public $soft = 0;
    public $name="";
    public function setWeight($weight){
        $this->weight=$weight;
    }
    public function getWeight(){
       return $this->weight;
    }
    public function setStiffness($stiffness){
        $this->stiffness=$stiffness;
    }
    public function getStiffness(){
        return $this->stiffness;
    }
    public function setConductive($conductive){
        $this->conductive=$conductive;
    }
    public function getConductive(){
        return $this->conductive;
    }
    public function setSoft($soft){
        $this->soft=$soft;
    }
    public function getSoft(){
        return $this->soft;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name ;
    }
}

$GOLD=new METAL();
$KALI=new METAL();
$GOLD->setWeight(10);
$GOLD->setStiffness(20);
$GOLD->setConductive(30);
$GOLD->setSoft(40);
$GOLD->setName("GOLD");
print_r($GOLD->getName());
echo "<pre>";
print_r($GOLD);
echo "</pre>";
$KALI->setWeight(10);
$KALI->setStiffness(20);
$KALI->setConductive(30);
$KALI->setSoft(40);
$KALI->setName("KALI");
print_r($KALI->getname());
echo "<pre>";
print_r($KALI);
echo "</pre>";
$GOLD->getName();
print_r($GOLD->getName());
echo "<br>" ;
print_r($KALI->getname());