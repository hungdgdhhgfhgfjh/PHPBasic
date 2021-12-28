<?php
session_start();
// $_SESSION["user"] = '';
$erro                 = "";
$erroemail            = "";
$erropassword         = "";
$newsSuccess          = "";
$user_json            = file_get_contents("user.json");
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
if($_SERVER["REQUEST_METHOD"]  == "POST")
{
        $flag                 = 0; 
        $email                = $_REQUEST["email"]; 
        $password             = $_REQUEST["password"];    
        $regexEmail           = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
        if( $email == "" &&  $password == "")
        {
            $erroemail        = "Please enter your email";
            $erropassword     = "Please enter your password";
        }
        else
        {
            if(!preg_match($regexEmail,$email))
            {
                $erroemail        = "Please enter your email";
            }
            else
            {
            foreach($users as $key => $user)
            {
                if($user->email == $email && $user->password == $password)
                {
                    $objectUser              = new User;
                    $objectUser->email       = $email;
                    $objectUser->password    = $password;
                    $objectUser->numberPhone = $numberPhone;
                    $objectUser->name        = $name;
                    $newsSuccess      = " login Success";
                    $_SESSION["user"] =  $users;
                    $flag             = 1; 
                    header("location:tableList.php");
                    // echo "<pre>";
                    // print_r($_SESSION['user']);
                    // echo "<pre>";
                    break;
                }
            }
        }
        if($flag == 0)
        {
            $erro = "login Lost";
        }
    }  
}

?>
<?php include_once "./htmlcss/html.php"; ?>
<div class="container">
        <div class="row" >
            <div class="col-sm-4">
                <h2 class="alert-success"><?= $newsSuccess;  ?></h2>
                <h2 class="alert-success"><?= $erro;  ?></h2>
                <strong class="strong1" >login</strong>
<form action="" method ="post">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                  <strong class="alert-danger" ><?= $erroemail; ?></strong>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
                  <strong class="alert-danger" ><?= $erropassword; ?></strong>
                </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
   </form>         
   </div>
        </div>
    </div> 
    <?php include_once "./htmlcss/footerr.php"; ?>