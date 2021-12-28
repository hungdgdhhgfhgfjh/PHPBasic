<?php
session_start();
include_once "./Controller/customerController.php";
include_once "./Controller/CategoryController.php";
include_once "./Views/layout/header.php";
use Controller\CustomerController;
use Controller\CategoryControler;
?>
<?php
$customers = (isset($_REQUEST["customers"])  && !empty($_REQUEST["customers"])) ? $_REQUEST["customers"]:"";
$objCustomer = new CustomerController();
switch($customers)
{
    case "add":
    $objCustomer->add();
    break;
    case "edit":
    $objCustomer->edit();
    break;   
    case "delete":
    $objCustomer->delete();
    break;
    case "list":
    $objCustomer->list();
    break;
    default:
    
    break;

}
?>
<?php
$category = (isset($_REQUEST["category"])  && !empty($_REQUEST["category"])) ? $_REQUEST["category"]:"";
$objCategory = new CategoryControler();
switch($category)
{
    case "add":
        $objCategory->add();
    break;
    case "edit":
        $objCategory->edit();
    break;   
    case "delete":
        $objCategory->delete();
    break;
    case "list":
        $objCategory->list();
    break;
}
?>
<?php include_once "./Views/layout/footer.php";?>