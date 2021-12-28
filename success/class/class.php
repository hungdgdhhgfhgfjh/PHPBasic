<?php
class Person{
    public $age=12;
    public $name="";
    public $gender="";
    public $say="";
    public function setAge($age){
        $this->age=$age;
    }
    public function getAge(){
        return $this->age;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public function setGender($gender){
        $this->gender=$gender;
    }
    public function getGender(){
        return $this->gender;
    }
    public function setSay($say){
      $this->say=$say;
    }
    public function getSay(){
        return $this->say;
    }
}
$WInliam=new Person();
$MYCILL=new Person();
$WInliam->age=30;
$WInliam->name="WInliam";
$WInliam->gender="Nam";
$MYCILL->age=32;
$MYCILL->name="MYCILL";
$MYCILL->gender="Nam";
echo "cuộc nói chuyện của 2 kẻ tội phạm đứng đầu"."<br>";
echo $WInliam->age . " " .$WInliam->name . " " .$WInliam->gender." " ;
echo "<br>". $MYCILL->age." " .$MYCILL->name." " .$MYCILL->gender;
$WInliam->say="hello, you are person come late";
echo "<br>". $WInliam->say ;
$MYCILL->say="FACE iT : I am LOOKING FOR YOU HOW LONG TIME ";
echo "<br>". $MYCILL->say ;
$WInliam->say="ohh I am so sorry I have one job have to do .THIs is my wife gave birth ";
echo "<br>". $WInliam->say ;
$MYCILL->say="ohh I am so sorry, i don't know it, I don't know have to how to congratulation; ";
echo "<br>". $MYCILL->say ;
?>