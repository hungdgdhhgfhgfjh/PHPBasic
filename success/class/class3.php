<?php
class Family{
    public $name= "";
    public $son = "";
    public $girl = "";
    public $father = "";
    public $mother = "";
    public $brother = "";
    public function setSon($son){
          $this->son = $son;
    }
    public function getSon() {
        return $this->son;
    }
    public function setGirl($girl) {
        $this->girl = $girl;
    }
    public function getGirl() {
        return $this->girl;
    }
    public function setFather($father) {
        $this->father = $father;

    }
    public function getFather() {
        return $this->father;
    }
    public function setMother($mother) {
        $this->mother = $mother;
    }
    public function getMother() {
       return  $this->mother;
    }
    public function setBrother($brother) {
        $this->brother=$brother;
    }
    public function getBrother() {
        return $this->brother;
    }
    public function setName($name) {
           $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }

}
$family1=new Family();
$family2=new Family();
$family1->setSon("JOHN");
$family1->setGirl("adli");
$family1->setFather("WILL");
$family1->setMother("LAN");
$family1->setBrother("CENA");
$family2->setMother("TAYLOR");
$family2->setBrother("CKALO");
$family2->setFather("DONNAD");
$family2->setSon("SWIFT");
$family2->setGirl("ANNA");
$family1->setName("JOHNSON");
$family2->setName("TAYLOR SWIFT");
echo $family1->getName();
echo "<pre>";
print_r($family1);
echo "</pre>";

echo $family2->getName();
echo "<pre>";
print_r($family2);
echo "</pre>";
