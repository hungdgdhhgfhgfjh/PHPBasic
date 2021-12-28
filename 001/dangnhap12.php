<?php
     $erroaccount="";
     $erropassword="";
     $WEL="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $account=$_POST["account"];
        $password=$_POST["password"];
        if($account == "" && $password == ""){
              $erroaccount="vui lòng nhập tài khoản";
              $erropassword="vui lòng nhập mật khẩu";
        }
        if($account && $password){
            $WEL=" WELLCOME TO ".$account." đến với chúng tôi";
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
<body>
    <p> <?php echo  $WEL;   ?></p>
    <form action="" method="post">
       acount <input type="text" name="account">
       <p><?php echo $erroaccount;   ?></p>
       password <input type="text" name="password">
       <p><?php echo  $erropassword;   ?></p>
       <button>submit</button>
    </form>
   
</body>
</html>