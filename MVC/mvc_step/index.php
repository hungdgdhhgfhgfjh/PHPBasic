<?php
session_start();
include_once "./Controller/customer.php";
$objCustomer = new Customer();
$page = ( isset($_REQUEST["page"]) )?$_REQUEST["page"]:"";
?>
<?php include_once "./Views/layout/header.php";?>
<?php
switch($page)
{
    case "add":
        $objCustomer->add();
    break;
    case "edit":
        $objCustomer->edit();
    break;
    case "list":
        $objCustomer->list();
    break;
    case "delete":
        $objCustomer->delete();
    break;
    default:
        $objCustomer->list();
    break;
}
?>
<?php include_once "./Views/layout/footer.php";?>