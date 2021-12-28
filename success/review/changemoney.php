<?php
$change="";
$errovnd="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $vnd=$_REQUEST["VND"];
    $action=$_REQUEST["action"];
    if($vnd==""){
        $errovnd="vui lòng số tiền cần đổi";
    }
    if($vnd){
        if($action=="VND"){
           $change=$vnd ." VND"; 
        }
        if($action=="USD"){
            $change=(float)$vnd/23000 ." USD"; 
         } if($action=="GBD"){
            $change=(float)$vnd/30907 ." GBP"; 
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
    VND<input type="text" name="VND">
    <p><?php echo $errovnd; ?></p>
        <select name="action" id="">
            <option name="VND" value="VND">VND</option>
           <option value="USD" value="USD">USD</option>
           <option value="GBP" value="GBP">GBP</option>
        </select>
        <p><?php echo $change; ?></p>
        <button type="submit">submit</button>
     

</form>
</body>
</html>