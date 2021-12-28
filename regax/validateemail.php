<?php
// $a ="/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
// $subject = "Chào mừng bạn đến với . CodeGym - Hệ thống đào tạo lập trình hiện đại.";
// $pattern = '/CodeGym/';
// print('<pre>');
// preg_match_all($pattern, $subject, $matches);
// print_r($matches);
// print('</pre>');

// $ip = "091243245,213213312,09032123";
// $iparr = preg_split ("/\,/", $ip);
// echo "<pre>";
// print_r($iparr);
// echo "</pre>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST["email"];
    $checkemail ="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    if(empty($email))
    {
        echo "<strong style='color:red;'>moi ban nhap email </strong>";
    }
    else
    {
        if(!preg_match($checkemail,$email))
        {
            echo "  khong hop le";
        }
        else
        {
            echo "hop le";
            echo "<pre>;";
            print_r($_REQUEST);
            echo "</pre>;";
            
        }
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text"  name="email">
        <button type="submit"  >submit</button>
        
    </form>
    
</body>
</html>