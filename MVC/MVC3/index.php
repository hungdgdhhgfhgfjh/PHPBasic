<?php
session_start();
include_once  "./Controller/CategorybookController.php";
include_once  "./Controller/BookController.php";
use Controller\CategorybookController;
use Controller\BookController;
include_once "./Views/layout/header.php";
?>
<?php
$categoryBooks = (isset($_REQUEST["categoryBooks"])  && !empty($_REQUEST["categoryBooks"])) ? $_REQUEST["categoryBooks"] :"";
$objCategoryBook = new CategorybookController(); 
switch ($categoryBooks){
    case "add":
        $objCategoryBook->add();
    break;
    case "edit":
        $objCategoryBook->edit();
    break;
    case "delete":
        $objCategoryBook->delete();
    break;
    case "list":
        $objCategoryBook->list();
    break;
    default:
    break;
}
$book = (isset($_REQUEST["book"])  && !empty($_REQUEST["book"])) ? $_REQUEST["book"] :"";
$objBook = new BookController(); 
switch ($book){
    case "add":
        $objBook->add();
    break;
    case "edit":
        $objBook->edit();
    break;
    case "delete":
        $objBook->delete();
    break;
    case "list":
        $objBook->list();
    break;
    default:
    break;
}

