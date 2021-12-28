<?php
include_once "./class/class_product_type.php";
use  product_type\Product_type;
$motobike                       = new Product_type;
$motobike->id                   = 1;
$motobike->product_type         = "motobike";
$motobike->image                = "https://cdn.honda.com.vn/motorbikes/September2021/VqwSmsw6pPMfRuQm5b6N.png";
$car                            = new Product_type;
$car->id                        = 4;
$car->product_type              = "car";
$car->image                     = "https://cellphones.com.vn/sforum/wp-content/uploads/2021/01/tinh-nang-Apple-Car-1.jpg";
$smart_phone                    = new Product_type;
$smart_phone->id                = 2;
$smart_phone->product_type      = "Smart Phone";
$smart_phone->image             = "https://m.media-amazon.com/images/I/61OiHUy-bfS._SX679_.jpg";
$notebook_laptop                = new Product_type;
$notebook_laptop->product_type  = "Notebook-Laptop";
$notebook_laptop->image         = "https://salt.tikicdn.com/cache/280x280/ts/product/72/5f/4d/0839a0593b21b69ed09215ff478e0391.jpg";
$notebook_laptop->id            = 3;
$shirt                          = new Product_type;
$shirt->id                      = 5;
$shirt->product_type            = "shirt";
$shirt->image                   = "https://cdnb.lystit.com/photos/5c47-2013/12/25/dsquared2-blue-camouflage-denim-shirt-product-1-16432078-2-051192661-normal.jpeg";
$objects                        = [];
$objects[]                      = $motobike;
// echo "<pre>";
// print_r($objects);
// echo "</pre>";
$objects[]                      = $smart_phone;
$objects[]                      = $notebook_laptop;
$objects[]                      = $car;
$objects[]                      = $shirt;

?>
<?php include_once "./view/headeer.php"; ?>
<?php include_once "./view/body_product_Type.php"; ?>
<?php include_once "./view/foooter.php"; ?>



