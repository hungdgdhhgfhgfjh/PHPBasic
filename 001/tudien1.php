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
        <input type="text" name="search">
        <button>submit</button>
    </form>
    <?php
    $mang=[
        "book"=>"quyển vở",
        "love"=>"yêu"
    ]; 
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $search=$_REQUEST["search"];
        $flag=0;
        foreach($mang as $en => $vn){
          if(  $search == $en) {
               echo "từ " . $en;
               echo "<br>" . $vn;
               $flag=1;
          }

        }
        if($flag == 0){
            echo "không tìm thấy";
        }
    }
     ?>
</body>
</html>