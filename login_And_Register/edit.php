<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

$id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"]))?$_REQUEST["id"]:"";
if(!$_REQUEST["id"])
{
    header("location: tableList.php");
}
include_once "./classes/user.php";
$objectUser = new User;
$users = $objectUser->find($id);
echo "<pre>";
print_r($users);
echo "</pre>";
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
     $data                    =["email"         =>$email,
                                "password"      =>$password,
                                "numberPhone"   =>$numberPhone,
                                "name"          =>$name];
     $objectUser->update($id,$data);
     header("location: tableList.php");
     
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
                  <input type="email" value="<?= $users->email ?>" class="form-control" placeholder="Enter email" name="email">
                 <strong class="alert-danger" ><?= $erroemail ; ?></strong>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" value="<?= $users->password ?>" class="form-control" placeholder="Enter password" name="password">
                  <strong class="alert-danger" ><?= $erropassword ; ?></strong>
                <div class="form-group">
                  <label for="pwd">number Phone:</label>
                  <input type="text" value="<?= $users->numberPhone ?>" class="form-control" placeholder="Enter numberPhone" id="pwd" name="numberPhone" >
                  <strong class="alert-danger"  ><?= $erronumberPhone ; ?></strong>
                </div>
                <div class="form-group">
                    <label for="pwd">name</label>
                    <input type="text" value="<?= $users->name ?>" class="form-control" placeholder="Enter password" id="pwd" name="name">
                    <strong class="alert-danger" ><?= $erroname ; ?></strong>
                  </div>
               
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
    <?php include_once "./htmlcss/footerr.php"; ?>