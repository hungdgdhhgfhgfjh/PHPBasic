<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.container{
background-image: url("da40215284cf6bef76b0037eea558310 (1).jpg");
width: 1250px;
height:1433px;
}
.class1{
margin: 0 auto;
width: 60%;
height: 300px;
background-color: aliceblue;
display: flex;
}
h3{
    margin-top: -177px;
    margin-left: 23px;
}
td{
    height: 100px;
}
</style>
<body>
    <div class ="container">
        <div class="class1">
            <?php foreach ($objectGentle as $index => $Gentle): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $Gentle->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $Gentle->name; ?></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                 <p style="margin-top: -137px";>   <?php echo " tốc độ trung bình " .  $Gentle->speed . "<br>".
                   " cân nặng " . $Gentle->weight . "<br>". " thức ăn ". $Gentle->food
                   . "<br>". " đặc điểm ". $Gentle->perSonaLity ;  ?></p>
                    
              </div>
            <?php endforeach; ?>
        </div>
        <div class="class1">
            <?php foreach ($objectGood as $index => $Gentle): ?>
                <div>
            <img  style="width: 241px;height: 133px;" src="<?php echo $Gentle->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $Gentle->name; ?></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                 <p style=" margin-top: -137px";>   <?php echo " tốc độ trung bình " .  $Gentle->speed . "<br>".
                   " cân nặng " . $Gentle->weight . "<br>". " thức ăn ". $Gentle->food
                   . "<br>". " đặc điểm ". $Gentle->perSonaLity ;  ?></p>
                    
              </div>
            <?php endforeach; ?>
            
        </div>
        <div class="class1">
            <?php foreach ($objectWild as $index => $Gentle): ?>
                <div>
            <img  style="width: 241px;height: 133px;" src="<?php echo $Gentle->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $Gentle->name; ?></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                 <p style=" margin-top: -137px";>   <?php echo " tốc độ trung bình " .  $Gentle->speed . "<br>".
                   " cân nặng " . $Gentle->weight . "<br>". " thức ăn ". $Gentle->food
                   . "<br>". " đặc điểm ". $Gentle->perSonaLity ;  ?></p>
                    
              </div>
            <?php endforeach; ?>
            
        </div>
        <div class="class1">
            <?php foreach ($objectBirdBig as $index => $Gentle): ?>
                <div>
            <img  style="width: 241px;height: 133px;" src="<?php echo $Gentle->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $Gentle->name; ?></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                 <p style="margin-top: -137px";>   <?php echo " tốc độ trung bình " .  $Gentle->speed . "<br>".
                   " cân nặng " . $Gentle->weight . "<br>". " thức ăn ". $Gentle->food
                   . "<br>". " đặc điểm ". $Gentle->perSonaLity ;  ?></p>
                    
              </div>
            <?php endforeach; ?>
            
        </div>
        <div class="class1">
            <?php foreach ($objectBirdSmall as $index => $Gentle): ?>
                <div>
            <img  style="width: 241px;height: 133px;" src="<?php echo $Gentle->image; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $Gentle->name; ?></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                 <p style="margin-top: -137px";>   <?php echo " tốc độ trung bình " .  $Gentle->speed . "<br>".
                   " cân nặng " . $Gentle->weight . "<br>". " thức ăn ". $Gentle->food
                   . "<br>". " đặc điểm ". $Gentle->perSonaLity ;  ?></p>
                    
              </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</body>
</html>