<?php
session_start();
include_once "./Views/layout/header.php";
include "./Controller/HomeController.php";
 use Controller\HomeController;
 
?>
<?php
    $home = (isset($_REQUEST["home"])  && !empty($_REQUEST["home"])) ? $_REQUEST["home"] : "";
    $objHomeController = new HomeController();
        switch($home)
        {
            case "home":
            $objHomeController->home();
            break;
            case "create":
            $objHomeController->createNote();
            break;   
            case "delete":
            $objCustomer->delete();
            break;
            case "list":
            $objCustomer->list();
            break;
            default:
            "home";
            break;

        }
?>
<?php
include_once "./Views/layout/footer.php"
?>