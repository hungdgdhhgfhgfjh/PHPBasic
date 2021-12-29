<?php
session_start();
include_once "./Views/layout/header.php";
include_once "./Controller/HomeController.php";
include_once "./Controller/UserController.php";
 use Controller\HomeController;
use Controller\UserController;

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
            // $objHomeController->home();;
            break;

        }
  
    $users =(isset($_REQUEST["users"])  && !empty($_REQUEST["users"])) ? $_REQUEST["users"] : "";
    $objUserController = new UserController();
    switch($users)
    {
        case "register":
            $objUserController->register();
        break;
        case "HandleRegister":
            $objUserController->HandleRegister();
        break;   
        case "handleLogin":
            $objUserController->handleLogin();
        break;
        case "login":
            $objUserController->login();

        break;
        default:
            $objHomeController->home();;
        break;

    }

?>
<?php
include_once "./Views/layout/footer.php"
?>