<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $names = array('Anh', 'Hùng', 'Linh', 'Thanh');
    for($i = 0; $i < count($names); $i++){
        echo $names[$i] . ' ';
        }
        ?>
    ?>
    <?php
    $i = 0;
   while($i < count($names)){
   echo $names[$i] . ' ';
   $i++;
   }
    ?>
</body>
</html>