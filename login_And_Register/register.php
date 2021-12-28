<?php
session_start();
$erroemail            = '';
$erropassword         = '';
$erronumberPhone      = '';
$erroname             = '';
if($_SERVER["REQUEST_METHOD"]  == "POST")
{
  $email                = $_REQUEST["email"];
  $password             = $_REQUEST["password"];
  $numberPhone          = $_REQUEST["numberPhone"];
  $name                 = $_REQUEST["name"];
  $regexEmail           = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
  $regex_Phone          = "/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/";
  $regex_name           = "/^[A-Za-z]/";
  if($email == "" &&  $password == "" && $numberPhone == "" && $name == "" )
  {
    $erroemail        = "Please enter your email";
    $erropassword     = "Please enter your password";
    $erronumberPhone  = "Please enter your password";
    $erroname         = "Please enter your password";
  }
  else
  {
    if(!preg_match($regexEmail,$email)  && !preg_match($regex_Phone,$numberPhone) && !preg_match($regex_name,$name))
    {
    $erroemail        = "Please enter your email";
    $erropassword     = "Please enter your password";
    $erronumberPhone  = "Please enter your password";
    $erroname         = "Please enter your password";
    }
    else
    {
     include_once "./classes/user.php";
     $objectUser              = new User;
     $objectUser->email       = $email;
     $objectUser->password    = $password;
     $objectUser->numberPhone = $numberPhone;
     $objectUser->name        = $name;
     $objectUser->id          = time();
     $user_json               = file_get_contents('user.json');
     if($user_json)
     {
       $users = json_decode($user_json);
     }
     else
     {
      $users = [];
     }
     $users[]     = $objectUser;
     $userString  = json_encode($users);
     file_put_contents("user.json",$userString);
    //  echo "<pre>";
    //  var_dump($objectUser);
    //  echo "</pre>";
    }
  }
}
?>
<?php include_once "./htmlcss/html.php"; ?>
    <div class="container">
        <div class="row" >
            <div class="col-sm-4">
                <strong class="strong1" >Register</strong>
            <form action=""  method="POST">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email">
                 <strong class="alert-danger" ><?= $erroemail ; ?></strong>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
                  <strong class="alert-danger" ><?= $erropassword ; ?></strong>
                <div class="form-group">
                  <label for="pwd">number Phone:</label>
                  <input type="text" class="form-control" placeholder="Enter numberPhone" id="pwd" name="numberPhone" >
                  <strong class="alert-danger" ><?= $erronumberPhone ; ?></strong>
                </div>
                <div class="form-group">
                    <label for="pwd">name</label>
                    <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="name">
                    <strong class="alert-danger" ><?= $erroname ; ?></strong>
                  </div>
               
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
    <?php include_once "./htmlcss/footerr.php"; ?>