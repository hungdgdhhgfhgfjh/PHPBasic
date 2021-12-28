<?php
session_start();
include_once "./class/user.php";
$objuser = new User;
$user    = $objuser->getAll();
// echo "<pre>";
// print_r($user);
// echo "</pre>";
$newsLost               = "";
$newsSuccess            = "";
$news                   = "";
$erroemail              = "";
$erropassword           = "";
$_SESSION["email"]      = "";
$_SESSION["password"]   = "";
include_once "./constant/headessr.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
//     Array
// (
//     [email] => lequochung2001@gmail.com
//     [password] => 123123
// )
  
    $email      = $_REQUEST["email"];
    $password   = $_REQUEST["password"];
    $flag       = 0;
    if($email == "" &&  $password == "")
    {
        $erroemail      = "Please enter your email";
        $erropassword   = "Please enter your password";
    }
   foreach($user as $users)
   {
         if($users->email == $email && $users->password == $password)
         {
            header("location:tableList.php");
            $flag                   = 1;
            $newsSuccess            = "login succcess";  
            $_SESSION["user"]       = $user;
            $objuser->email         = $email;
            $objuser->password      = $password;
          
          echo "<pre>";
          print_r($objuser);
          echo "</pre>";
         }

   }
   if($flag  == 0)
   {
    $newsLost = "check lost ";
   }
   
}
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="post">
                    <div class="form-group">
                        <h3 class="alert-success" ><?= $newsSuccess;  ?></h3>
                        <h3 class="alert-danger" ><?=  $newsLost;  ?></h3>
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