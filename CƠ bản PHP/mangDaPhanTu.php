<?php
// mảng đa phân tử cơ bản nhất
$customers = [ "name" => "Lê Quốc Hưng",
               "lớp " =>"C08",
               "age" => "20",
];
echo "<pre>";
print_r($customers);
echo "</pre>";
/*
Array là $customers
(
   là key : [name] => Lê Quốc Hưng là giá trị của key
      key : [lớp ] => C08
      key : [age] => 20
)
*/
// cách để để sử dùng vòng lặp foreach vs mảng này:
    foreach($customers as $key => $customer)// customers là một cái mảng trên có key và giá trị là $customer
  {
    // echo "<pre>";
    // print_r($customers);
    // echo "</pre>";
    echo $customers[$key] ."<br>";
  } 

  ?>
    