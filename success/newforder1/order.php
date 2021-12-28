<?php
include_once ("./class/class_customer.php");
include_once ("./class/class_product.php");
use product\Product;
use customer\Customer;
class Order extends Product
{
    public int $customer_id;     
    public $image_Product   = "";
    
}


?>

<?php include_once "./view/headeer.php"; ?>

<?php include_once "./view/foooter.php"; ?>
