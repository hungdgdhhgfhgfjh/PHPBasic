<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if(isset($_REQUEST["id"]))
{
  if(!empty($_REQUEST["id"]))
  {
    $id = $_REQUEST["id"];
  }
  else
{
  $id = 0;
}
}
if($id == 0)
{
  header("location:tableList.php");
  die();
}
include_once "./class/user.php";
$objuser        = new User();
$users           = $objuser->find($id);
$objuser->delete($id);

// header("location: tableList.php");