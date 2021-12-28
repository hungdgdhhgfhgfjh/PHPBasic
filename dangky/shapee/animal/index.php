<?php
include_once ("tiger.php");
include_once ("chicken.php");
include_once ("animal.php");
include_once ("interfaceeat.php");
include_once ("owl.php");
include_once ("Eagle.php");
use Eagle\Eagle;
use Owl\Owl;
use animal\Animal;
use tiger\Tiger;
use chicken\Chicken;
$ObjectOwl          =new Owl("");
$ObjectOwl->say     ="quoắc quoắc quoắc quoắc   quoắc   quoắc";
$ObjectOwl->food    ="chim bé";
$ObjectOwl->bay     ="40km/h";
$ObjectOwl->name    ="OWL";
$ObjectOwl->speed   ="40km/h";
$ObjectEagle        = new Eagle("");
$ObjectEagle->say   ="DIW DIW DIW DIW";
$ObjectEagle->food  ="động vật";
$ObjectEagle->bay   ="80km/h";
$ObjectEagle->name  ="Eagle";
$ObjectEagle->speed ="80km/h";
$objectAnimal       = [];
$objectTiger        = new Tiger("Tiger","GỪM GỪM GỪM");
$objectChicken      = new Chicken("CHICKEN","O O  O O O O O");
$objectTiger->speed   = "80km/h";
$objectChicken->speed = "10km/h";
$objectAnimal[]       = $objectTiger;
$objectAnimal[]       = $objectChicken;
$objectAnimal[]       = $ObjectEagle;
$objectAnimal[]       = $ObjectOwl;
echo "<pre>";
print_r($objectAnimal);
echo "</pre>";
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
    <table border="1">
        <tr>
            <td>STT</td>
            <td>ĐỘNG VẬT</td>
            <td>Thức ăn</td>
            <td>tiếng</td>
            <td>tốc độ</td>
        </tr>
        <?php
      foreach ($objectAnimal as $index => $key):
        ?>
        <tr>
          <td><?php echo $index+1;?></td>  
          <td><?php echo $key->name;?></td>  
          <td><?php echo $key->food;?></td>  
          <td><?php echo $key->say;?></td>  
          <td><?php echo $key->speed;?></td>  
         
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

