<?php
  $students =[
    [
      "tên"=>"lê Quốc Hưng",
      "ngày sinh"=>"22/1/2001",
      "địa chỉ"=>"Hà nội",
      "ảnh"=>"5883.jpg_wh1200.jpg"
    ],
    [
      "tên"=>" linh ngọc đàm",
      "ngày sinh"=>"22/1/2002",
      "địa chỉ"=>"đông hà",
      "ảnh"=>"imager_1_5450_600.jpg"
    ]
    ];// mảng trong mảng 
echo "<pre>";
print_r($students);
echo "</pre>";
/*
Array là $students
(
là key có giá trị là một array   [0] => Array  
          (
              [tên] => lê Quốc Hưng
              [ngày sinh] => 22/1/2001
              [địa chỉ] => Hà nội
              [ảnh] => 5883.jpg_wh1200.jpg
           )

        [1] => Array
          (
              [tên] =>  linh ngọc đàm
              [ngày_sinh] => 22/1/2002
              [địa_chỉ] => đông hà
              [ảnh] => imager_1_5450_600.jpg
          )

)
*/// cách để để sử dùng vòng lặp foreach vs mảng này:
foreach($students as $key => $student)// $students là một cái mảng trên có key và giá trị là $student và $student  là một cái mảng
{
//   echo "<pre>";
//   print_r($student);
//   echo "</pre>";
echo $student["tên"] ."<br>";
echo $student["ngày sinh"] ."<br>";
echo $student["địa chỉ"] ."<br>";
echo $student["ảnh"] ."<br>";
} 