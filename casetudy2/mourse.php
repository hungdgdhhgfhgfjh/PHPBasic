<?php
include_once "product.php";
use Product\Product;
$mourseGenius                    = new Product;
$mourseGenius->name              = "chuột Genius";
$mourseGenius->image             = "https://phongvu.vn/media/wysiwyg/phongvu/Mouse/chuot-may-tinh-genius-dx-120-1.png";
$mourseGenius->price             = 75.000;
$mourseGenius->note              = "Chuột máy tính Genius DX120 (Đen)";
$mourseE_Blue                    = new Product ;
$mourseE_Blue->name              = "chuột E-Blue"  ;
$mourseE_Blue->image             = "https://salt.tikicdn.com/ts/product/60/ec/cd/ef9051288cb4213ee2444ab4be46d113.jpg"  ;
$mourseE_Blue->price             = 198.000  ;
$mourseE_Blue->note              = "Chuột máy tính không dây A4 sạc được pin"  ;
$mourseMaRVO                     = new Product;
$mourseMaRVO->name               = " chuột MaRVO";
$mourseMaRVO->image              = "https://catthanh.com/1_html/img/product_img/thum/1445173615_chuot-may-tinh.jpg";
$mourseMaRVO->note               = "Chuột máy tính MARVO M-300";
$mourseMaRVO->price              = 220.000;
$mourse_DARE                     = new Product ;
$mourse_DARE->name               = " chuột DARE" ;
$mourse_DARE->image              = "https://himalaya.asia/wp-content/uploads/2019/09/em908.png" ;
$mourse_DARE->note               = "Chuột máy tính DARE-U EM908" ;
$mourse_DARE->price              = 399,000 ;
$mourse_AZZOR                    = new Product;
$mourse_AZZOR->name              = " chuột AZZOR EAGLE";
$mourse_AZZOR->image             = "https://cf.shopee.vn/file/79623b1c6c1fff78bee949da5ac811fd";
$mourse_AZZOR->price             = 105.000;
$mourse_AZZOR->price             = "Chuột máy tính không dây tự sạc pin<br> AZZOR EAGLE cực ngầu";
$mourses                         = [];
$mourses[]                       = $mourse_AZZOR;
$mourses[]                       = $mourse_DARE;
$mourses[]                       = $mourseMaRVO;
$mourses[]                       = $mourseE_Blue;
$mourses[]                       = $mourseGenius;
echo "<pre>";
print_r($mourses);
echo "</pre>";

