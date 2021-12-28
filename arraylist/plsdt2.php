<?php
session_start();
$erronumber_phone   = "";
$newsnumber_phone   = "";
if($_SERVER["REQUEST_METHOD"]  == "POST")
{
    $number_phone = $_REQUEST["number_phone"];
    if( $number_phone == $_SESSION["so_vinaphone"] )
    {
        $newsnumber_phone ="đây là số vinaphone ";
    }
    if( $number_phone == $_SESSION["so_viettell"])
    {
        $newsnumber_phone ="đây là số Viettell ";
    }
    if( $number_phone == $_SESSION["so_mobiphone"])
    {
        $newsnumber_phone ="đây là số Mobiphone ";
    }
    if ($number_phone == "")
    {
        $erronumber_phone = "mời bạn nhập số điện thoại";
    }
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        background-color: #e84393;
    width: 280px;
    height: 138px;
    margin-top: 85px;
    text-align: center;
    font-size: 20px;
    }
    input{
        border-radius: 10px;
    }
    button{
        background-color: springgreen;
border-radius: 100%;

}
h3{
    background-color:#fd79a8;
    color:#d63031;
}
</style>
<body>
    <div>
<form action="" method="post">
<br>
  số điện thoại  <input type="text" name="number_phone" id="">
  <h3><?php echo $erronumber_phone; ?></h3>
  <h3><?php echo $newsnumber_phone; ?></h3>
   <button type="submit">check</button>
</form>
</div>
</body>
</html>