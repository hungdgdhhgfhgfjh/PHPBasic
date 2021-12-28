<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"]:"";
echo $id;
if(!$id)
{
    header("location: tableList.php");

}
include_once "./classes/user.php";
$objectUser = new User;
$objectUser->delete($id);
header("location:tableList.php");