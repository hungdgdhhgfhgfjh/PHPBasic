<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

$id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"]))?$_REQUEST["id"]:"";
if(!$_REQUEST["id"])
{
    header("location: tableList.php");
}
include_once "./classes/user.php";
$objectUser = new User;
$users = $objectUser->find($id);
echo "<pre>";
print_r($users);
echo "</pre>";
$objectUser->delete($id);
header("location: tableList.php");