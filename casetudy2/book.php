<?php
include_once "./class/product.php";
use Product\Product;
$book_Get_Human_Heart               = new  Product;
$book_Get_Human_Heart->name         = "Sách Đắc Nhân Tâm";
$book_Get_Human_Heart->image        = "https://revisach.com/wp-content/uploads/2020/06/review-sach-dac-nhan-tam-dale-carnegie.png";
$book_Get_Human_Heart->price        = 183000;
$book_Get_Human_Heart->note         = "sách có tầm ảnh đắc đc lòng nhân";
$book_FalunDaFa                     = new  Product;                   
$book_FalunDaFa->name               = "Sách Chuyển Pháp Luân";                   
$book_FalunDaFa->image              = "https://khaimo.com/wp-content/uploads/2017/12/4hqJQR-20170524-nhung-trai-nghiem-phep-mau-cua-nguoi-phu-nu-tu-mot-cuon-sach-co.jpg";  
$book_FalunDaFa->price              = 100000;                   
$book_FalunDaFa->note               = "Chiểu Theo Đặc Tính Chân Thiện Nhẫn của vũ trụ";                   
$book_master_the_mind               = new Product;
$book_master_the_mind->name         = "Sách Làm Chủ Tư Duy";
$book_master_the_mind->image        = "https://sachnoi.com.vn/wp-content/uploads/2020/10/lam-chu-tu-duy-thay-doi-van-menh.jpg";
$book_master_the_mind->price        = 200000;
$book_master_the_mind->note         = "giúp bạn làm chủ tư duy và sử dụng áp dụng thực";
$book_Metal_Working_house           = new Product;
$book_Metal_Working_house->name     = "Sách Nhã Giã Kim";
$book_Metal_Working_house->image    = "https://revisach.com/wp-content/uploads/2020/07/review-cuon-sach-nha-gia-kim-revisach.com_.jpg";
$book_Metal_Working_house->price    = 100000;
$book_Metal_Working_house->note     = " kể về một chuyến đi của một người già";
$book_Clever                        = new Product;
$book_Clever->name                  = "Sách Tài Giỏi";
$book_Clever->image                 = "https://prices.vn/photos/8/product/sach-toi-tai-gioi-ban-cung-the-cua-adam-khoo.jpg";
$book_Clever->price                 = 150000;
$book_Clever->note                  = "Tôi tài giỏi và bạn cũng thế";
$books                              = [];
$books[]                            = $book_Clever;
$books[]                            = $book_Metal_Working_house;
$books[]                            = $book_master_the_mind;
$books[]                            = $book_FalunDaFa;
$books[]                            = $book_Get_Human_Heart;
echo "<pre>";
print_r($books);
echo "</pre>";
?>
<?php include_once "./view/headder.php"; ?>
<?php include_once "./view/body.php"; ?>
<?php include_once "./view/footter.php"; ?>

