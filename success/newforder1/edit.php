<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$data               = [];
$erroemail           = '';
$erropassword        = '';
$erronumberPhone     = '';
$erroname            = '';
$id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
echo $id;
if($_REQUEST["id"] == "")
{
    header("location: tableList.php");
}
include_once "./classes/user.php";

$objectUser = new User;
$users = $objectUser->findId($id);
echo "<pre>";
print_r($users);
echo "</pre>";
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
        foreach($users as $key => $user)
        {
            if($users->id == $id)
            {
                $data = ["email"        =>$email,
                         "password"     =>$password,               
                         "numberPhone"  =>$numberPhone,               
                         "name"         =>$name               ];
                         $objectUser->update($data,$id);
            header("location: tableList.php");
            break;
            }
        }
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
                  <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?= $users->email;?>">
               <strong class="alert-Danger" ><?=$erroemail;?></strong>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password" value="<?= $users->password;?>">
                  <strong class="alert-Danger" ><?=$erropassword;?></strong>
                <div class="form-group">
                  <label for="pwd">number Phone:</label>
                  <input type="text" class="form-control" placeholder="Enter numberPhone" id="pwd" value="<?= $users->numberPhone;?>" name="numberPhone" >
                  <strong class="alert-Danger" ><?=$erronumberPhone;?></strong>
                </div>
                <div class="form-group">
                    <label for="pwd">name</label>
                    <input type="text" class="form-control" placeholder="Enter password" id="pwd" value="<?= $users->name;?>" name="name">
                    <strong class="alert-Danger" ><?=$erroname;?></strong>
                  </div>
               
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
    <?php include_once "./htmlcss/footerr.php"; ?>