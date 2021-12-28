<?php
session_start();
include_once "./constant/headessr.php";
$news                   = "";
$erroemail              = "";
$erropassword           = "";
	$json_users = file_get_contents('user.json');
    if( $json_users ){
        $users = json_decode($json_users);
    }else{
        $users = [];
    }
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email      = $_REQUEST["email"];
    $password   = $_REQUEST["password"];
    $flag       = 0;
    if($email == "" &&  $password == "")
    {
        $erroemail  = "Please enter your email";
        $erropassword  = "Please enter your password";
    }
    foreach($users as $user)
    {
//         stdClass Object
// (
//     [email] => lequochung2001@gmail.com
//     [password] => 1111
// )
        // echo "<pre>";
        // print_r($user);
        // echo "</pre>";
        if($user->email ==  $email && $user->password  ==  $password)
        {
            $news                    = "login success";
            $flag                    = 1;
            $_SESSION['user']        = $user;
        
        }
    }
    if($flag == 0)
    {
        echo "lỗi";
    }
    else
    {
        header("Location: tableList.php");
    }
}
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            <h1 class="alert-success"><?=  $news; ?></h1>
                <form action="" method="post">
                    <div class="form-group">
                        <h1 class="h1">login</h1>
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <strong class="alert-danger"><?=  $erroemail  ; ?></strong>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" placeholder="Enter password" name="password">
                    </div>
                    <strong class="alert-danger"><?=  $erropassword ; ?></strong> 
                    <button style="margin-left: 113px;width: 105px;" type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
           <?php include_once "./constant/footer.php";?>