<?php
 $erroemail           = '';
 $erropassword        = '';
 $erronumberPhone     = '';
 $erroname            = '';
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
$numberPhone         = $_REQUEST["numberPhone"];
$name                = $_REQUEST["name"];
$RegexEmail          = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
$RegexNumberPhone    = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";
$RegexName           = "/[a-zA-Z]/";
if($email == '' && $password == "" && $numberPhone == "" && $name == "")
{
  $erroemail        = "Please enter your Email";
  $erropassword     = "Please enter your Password";
  $erronumberPhone  = "Please enter your number Phone";
  $erroname         = "Please enter your name";
}
else
{
  if(!preg_match($RegexEmail,$email) && !preg_match($RegexNumberPhone,$numberPhone) && !preg_match($RegexName,$name))
  {
    $erroemail        = "Please enter your Email";
    $erronumberPhone  = "Please enter your number Phone";
    $erroname         = "Please enter your name";
  }
  else
  {
    include_once ("./classes/user.php");
    $objectUser               = new User;
    $objectUser->email        = $email;
    $objectUser->numberPhone  = $numberPhone;
    $objectUser->password     = $password;
    $objectUser->name         = $name;
    $objectUser->id           = time();
    $user_json                = file_get_contents("user.json");
    if($user_json)
    {
      $users = json_decode($user_json);

    }
    else
    {
      $users = [];
    }
    $users[] = $objectUser;
    $userString = json_encode($users);
    file_put_contents("user.json",$userString);
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
               <strong class="alert-Danger" ><?=$erroemail;?></strong>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
                  <strong class="alert-Danger" ><?=$erropassword;?></strong>
                <div class="form-group">
                  <label for="pwd">number Phone:</label>
                  <input type="text" class="form-control" placeholder="Enter numberPhone" id="pwd" name="numberPhone" >
                  <strong class="alert-Danger" ><?=$erronumberPhone;?></strong>
                </div>
                <div class="form-group">
                    <label for="pwd">name</label>
                    <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="name">
                    <strong class="alert-Danger" ><?=$erroname;?></strong>
                  </div>
               
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
    <?php include_once "./htmlcss/footerr.php"; ?>