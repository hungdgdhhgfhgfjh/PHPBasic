<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
include_once "./Views/layout/header.php";
include_once "./Controller/HomeController.php";
include_once "./Controller/UserController.php";
include_once "./Controller/NoteController.php";
 use Controller\HomeController;
use Controller\NoteController;
use Controller\UserController;

?>
<?php
    $home = (isset($_REQUEST["home"])  && !empty($_REQUEST["home"])) ? $_REQUEST["home"] : "";
    $objHomeController = new HomeController();
    $objNoteController = new NoteController();
    $objUserController = new UserController();
    
        switch($home)
        {
            case "home":
            $objHomeController->home();
            break;
            case "create":
            $objNoteController->createNote();
            break;   
            case "storeNote":
            $objNoteController->storeNote();
            break;
            case "show":
            $objNoteController->show();
            break;
            case "logout":
            $objUserController->logout();

                break;
            default:
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
        case "show":
            $objUserController->show();

        break;
        case "edit":
            $objUserController->edit();
        break;
        case "update":
            $objUserController->update();
        break;
        default:
           
        break;

    }
    $note =(isset($_REQUEST["note"])  && !empty($_REQUEST["note"])) ? $_REQUEST["note"] : "";
    switch($note)
    {
        case "edit":
            $objNoteController->edit();
            
        break;
        case "update":
            $objNoteController->update();
        break;   
        case "deleteShow":
            $objNoteController->deleteShow();

        break;
        case "detroy":
            $objNoteController->detroy();

        break;
        default:
           
        break;

    }
?>

<?php
include_once "./Views/layout/footer.php"
?>