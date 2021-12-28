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
height: 1500px;
}
.class1{
margin: 0 auto;
width: 60%;
height: 243px;
display:flex;
background-color: aliceblue;

}
.class2{
    margin: 0 auto;
width: 60%;
height: 243px;
background-color: aliceblue;
}
img{
    height: 200px;
    width: 243px;
}
}
</style>
<body>
    <div class ="container">
    <?php foreach ($objects as $index => $dongvat): ?>
        <div class ="class1">
                   <div>
                       <table>
                       <tr><td><img src="<?php echo $dongvat->image; ?>" alt=""></td></tr>
                       <tr>
                           <td><?php echo $dongvat->name; ?></td>
                       </tr>
                       </table>
                   </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>