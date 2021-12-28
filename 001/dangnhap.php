<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-size: 20px;
        text-align: center;
        color: springgreen;
        background-color: steelblue;
    }
    input{
        text-align:center;
     border-radius: 10px;
    background-color: darkcyan;
        
    }
    button{
        text-align: center;
        background-color: springgreen;
        border-radius: 100%;
    }

</style>
<body>
    <form action=""  method = "post">
        <div>
     <h2>login</h2>
    
    account <input type="text" name="account"  placeholder="account">
    <br>
    <br>
    password <input type="text" name="password" placeholder="password">
    <br>
    <br>
    <button>sign in</button>
    </div>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["account"]; 
   $password = $_POST["password"];
	
   if ($username === "admin" && $password === "admin") {	 
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
   } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
   }
}
?>
</body>
</html>