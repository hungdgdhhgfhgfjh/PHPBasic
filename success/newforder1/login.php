<?php
session_start();
$_SESSION["user"] = '';
$erro             = '';
$user_json        = file_get_contents("user.json");
$erroemail        = '';
$erropassword     = '';
if($user_json)
{
  $users = json_decode($user_json);
}
else
{
  $users = [];
}
// echo "<pre>";
// print_r($users);
// echo "</pre>";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//   Array
// (
//     [email] => lequochung2001@gmail.com
//     [password] => 1111
//     [numberPhone] => 1111
//     [name] => 111111
// )

//   echo "<pre>";
//   print_r($_REQUEST);
//   echo "<pre>";
$email               = $_REQUEST["email"];
$password            = $_REQUEST["password"];
$RegexEmail          = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
$flag                 = 0;
if($email == '' && $password == "")
{
  $erroemail        = "Please enter your Email";
  $erropassword     = "Please enter your Password";
  $erro             = "login lost";

}
else
 {
  if(!preg_match($RegexEmail,$email))
  {
    $erroemail        = "Please enter your Email";
    $erronumberPhone  = "Please enter your number Phone";
    $erro             = "login lost";
  }
  else
  {
      foreach($users as $key => $user)
      {
        if($user->email == $email && $user->password  == $password)
        {
          $erro             = "login success";
          $flag             = 1;
          header("location:List_staff.php");
          break;

          
        }
      }
  }
 }
 if($flag == 0)
 {
  $erro             = "login lost";
 }
 if($email  == "admin@gmail.com"  && $password == "password")
 {
  $_SESSION["user"] = $user;
  header("location:tableList.php");
 }
}
?>
<?php include_once "./htmlcss/html.php"; ?>
<div class="container">
        <div class="row" >
            <div class="col-sm-4">
<form action="" method ="post">
                <div class="form-group">
                    <h2 style="color: springgreen;margin-left: 116px;font-size: 48px;">login</h2>
                    <h3 class="alert-success"><?php echo $erro; ?></h3>
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                  <strong class="alert-Danger" ><?=$erroemail;?></strong>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
                  <strong class="alert-Danger" ><?=$erropassword;?></strong>
                </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
   </form>         
   </div>
        </div>
    </div> 
    <?php include_once "./htmlcss/footerr.php"; ?>