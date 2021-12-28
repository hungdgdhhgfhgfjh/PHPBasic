<?php
session_start();
include_once "controllers/userController.php";
 include_once 'view/layout/headeer.php';

$objUser = new userController();
$user1 = (isset($_SESSION["user1"])) ? $_SESSION["user1"] : '';
switch($user1)
{
  case "add":
    $objUser->add();
  break;
  case "edit":
  $objUser->edit();
  break;
  case "delete":
  $objUser->delete();
  break;
  case "list":
  $objUser->list();
  break;
  default:
  $objUser->list();
  break;

}
 include_once 'view/layout/footeer.php' ?>