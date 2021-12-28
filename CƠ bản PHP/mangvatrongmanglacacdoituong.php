<?php
class User{
    public $image   =  "";
    public $name    =  "";
    public $note    =  "";
    public float $price  ;
    public function __construct($image,$name,$note,$price)
    {
        $this->image  = $image;
        $this->name  = $name;
        $this->note  = $note;
        $this->price  = $price;
    }
    public function setImage($image)
    {
        $this->image  = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setName($name)
    {
      $this->name  = $name;
    }
    public function getName()
    {
      return $this->name;
    }
    public function setNote($note)
    {
      $this->note  = $note;
    }
    public function getNote()
    {
      return $this->note;
    }
}
$users =[new User("anh","Lê quốc Hưng","đẹp trai",250),
new User("anh","Lê quốc Hưng","đẹp trai",250),
new User("anh","Lê quốc Hưng","đẹp trai",250),
new User("anh","Lê quốc Hưng","đẹp trai",250),
new User("anh","Lê quốc Hưng","đẹp trai",250),
new User("anh","Lê quốc Hưng","đẹp trai",250),
];//mảng và trong mảng là các đối tượng 
echo "<pre>";
print_r($users);
echo "</pre>";
/*
Array
(
    [0] => User Object
        (
            [image] => anh
            [name] => Lê quốc Hưng
            [note] => đẹp trai
            [price] => 250
        )

    [1] => User Object
        (
            [image] => anh
            [name] => Lê quốc Hưng
            [note] => đẹp trai
            [price] => 250
        )

    [2] => User Object
        (
            [image] => anh
            [name] => Lê quốc Hưng
            [note] => đẹp trai
            [price] => 250
        )

    [3] => User Object
        (
            [image] => anh
            [name] => Lê quốc Hưng
            [note] => đẹp trai
            [price] => 250
        )

    [4] => User Object
        (
            [image] => anh
            [name] => Lê quốc Hưng
            [note] => đẹp trai
            [price] => 250
        )

    [5] => User Object
        (
            [image] => anh
            [name] => Lê quốc Hưng
            [note] => đẹp trai
            [price] => 250
        )

)
*/
/// cách để để sử dùng vòng lặp foreach vs mảng này:
    foreach($users as $key => $user)//$users là một cái mảng trên có key và giá trị là $user và $user  là một đối tượng
    {
    //   echo "<pre>";
    //   print_r($users);
    //   echo "</pre>";
      echo $user->image ."<br>";
      echo $user->name ."<br>";
      echo $user->note ."<br>";
      echo $user->price ."<br>";
     
    } 
    