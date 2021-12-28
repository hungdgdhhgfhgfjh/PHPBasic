<?php

class User {
    public $email;
    public $password;
 }

$erroemail              = "";
$erropassword           = "";
$_SESSION["email"]      = "";
$_SESSION["password"]   = "";
include_once "./constant/headessr.php";
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
    $emailValid = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";

    if($email == "" &&  $password == "" ){
        $erroemail      = "Please enter your email";
        $erropassword   = "Please enter your password";
    }
    else
    {
      if(!preg_match($emailValid,$email))
      {
        $erroemail = "Please enter your email";
      }
      else
      {
      $objuser              = new User;
      $objuser->email       = $email;
      $objuser->password    = $password;
      $objuser->id          = time();
      $user_json            = file_get_contents("user.json");
      if($user_json)
      {
          $user = json_decode($user_json);
      }
      else
      {
        $user = [];
      }
      $user[]      = $objuser;
      $userString   = json_encode($user);
      file_put_contents("user.json",$userString);
      var_dump($userString);
    }
    }
   }

?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="post">
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