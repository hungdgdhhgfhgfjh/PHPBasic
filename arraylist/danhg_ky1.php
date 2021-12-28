<?php
session_start();
$_SESSION["account"] = "hungdeptrai";  
$_SESSION["password"] = "hungdeptrai";  
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
