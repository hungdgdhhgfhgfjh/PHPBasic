<?php
session_start();
$news = "";
$erroaccount = "";
$erropassword = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$account = $_REQUEST["account"];
$password = $_REQUEST["password"];
if($account == "" &&  $password == "")
{
$erroaccount = " bạn chưa nhập tài khoản";
$erropassword = "bạn chưa nhập mật khẩu";
}
if($account == $_SESSION["account"] && $password == $_SESSION["password"] )
{
    $news = "chúc mừng bạn đã đăng nhập thành công";
}
else
{
    $news = " bạn đã đăng nhập thất bại ";
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
    height: 500px;
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

  tai khoan  <input type="text" name="account" id="">
  <p><?php echo $erroaccount; ?></p>
    <br>
    <br>
   mat khau <input type="text" name="password" id="">
   <p><?php echo $erropassword; ?></p>
   <button type="submit">submit</button>
   <h3><?php echo $news; ?></h3>
</form>
</div>

</body>
</html>
