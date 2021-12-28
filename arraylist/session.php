<?php
session_start();
$_SESSION["account"]  = "hungrandy";
$_SESSION["password"] = "howisbeatiful";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";