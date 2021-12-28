<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if(isset($_REQUEST["id"]))
{
  if(!empty($_REQUEST["id"]))
  {
    $id = $_REQUEST["id"];
  }
  else
{
  $id = 0;
}
}
if($id == 0)
{
  header("location:tableList.php");
  die();
}
include_once "./class/user1.php";
$objuser        = new User();
$user           = $objuser->find($id);

echo "<pre>";
print_r($user);
echo "</pre>";
var_dump($id);
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
    if($email == "" &&  $password == ""){
        $erroemail      = "Please enter your email";
        $erropassword   = "Please enter your password";
    }
    else
    {
      $objuser              = new User;
      $objuser->email       = $email;
      $objuser->password    = $password;
      $data                 = ["email"    =>$email,
                               "password"=>$password];
      $objuser->update($id,$data);
     header("location: tableList.php");
    }
   }
?>
<?php include_once "./constant/headessr.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="post">
                    <div class="form-group">
                        <h1 class="h1">register</h1>
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?= $user->email;  ?>" >
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

