<?php
$newsProduct_Description = "";
$erroProduct_Description="";
$erroList_Price="";
$erroDiscount_Percent="";
$Discount_Price=0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    $Product_Description=$_REQUEST['Product_Description'];
    $List_Price=$_REQUEST['List_Price'];
    $Discount_Percent=$_REQUEST['Discount_Percent'];
    if($Product_Description == "" && $Discount_Percent == "" && $List_Price == ""  ){
        $erroProduct_Description="vui lòng nhập Product Description ";
        $erroList_Price="vui lòng nhập List Price ";
        $erroDiscount_Percent="vui lòng nhập Discount Percent ";
        $newsProduct_Description="không có sản phẩm này";
    }
    if ( $Product_Description && $Discount_Percent  && $List_Price ){
        $newsProduct_Description="tên sản phẩm " . $Product_Description;
        $Discount_Amount="lượng chiết khấu " . $Discount_Percent;
        $Discount_Price=(float)$List_Price * (float)$Discount_Percent * 0.1 ;
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
    <p><?php echo $newsProduct_Description; ?></p>
    <p><?php echo $Discount_Price; ?></p>
    <p><?php echo  $erroProduct_Description ?></p>
    <p><?php echo  $erroList_Price ?></p>
    <p><?php echo  $erroDiscount_Percent ?></p>
</body>
</html>