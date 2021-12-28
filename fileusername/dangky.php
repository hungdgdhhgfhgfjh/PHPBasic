<?php

include_once "./class/user.php";
 $news_Success          = "";
$erroemail              = "";
$erropassword           = "";
$_SESSION["email"]      = "";
$_SESSION["password"]   = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
//     Array
// (
//     [email] => lequochung2001@gmail.com
//     [password] => 123123
// )
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    $email      = $_REQUEST["email"];
    $password   = $_REQUEST["password"];
    if($email == "" &&  $password == "")
    {
        $erroemail  = "Please enter your email";
        $erropassword  = "Please enter your password";
    }
    else
    {
         $objUser             = new User();
         $objUser->email      = $email;
         $objUser->password   = $password;
         $objUser->id         = time();
         $user_json           = file_get_contents("user.json");
        //  $news_Success = "bạn đăng ký thành công hãy bấm vào <a href='dangnhap.php'>đây </a> để đăng nhập";
         if($user_json)
         {
            $users  = json_decode($user_json);
        
         }
         else
         {
             $users = [];
         }
         $users[]       = $objUser;
         $usersString   = json_encode($users);
         file_put_contents("user.json",$usersString);
         echo "<pre>";
         print_r($users);
         echo "</pre>";
        
    }
}
include_once "./constant/headessr.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="post">
                <strong class="alert-success" ><?= $news_Success; ?></strong>
                    <div class="form-group">
                        <h1 class="h1">register</h1>
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" placeholder="Enter email" name="email" >
                    </div>
                     <strong class="alert-danger"><?=  $erroemail  ; ?></strong>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter password" >
                    </div>
                     <strong class="alert-danger"><?=  $erropassword ; ?></strong> 
                    <button style="margin-left: 113px;width: 105px;" type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <?php include_once "./constant/footer.php";?>