<?php
   $customer_list = array(
        "1"   => array("name"  => "Mai Văn Hoàn",
                        "Day Of Birth" => "1921/08/20",
                        "Address" => "Hà Nội",
                        "image" => "images/img1.jpg"),
        "2"   => array("name"  => "Nguyễn Văn Nam",
                        "Day Of Birth" => "1991/08/21",
                        "Address" => "Bắc Giang ",
                        "image" => "images/img2.jpg"),
        "3"   => array("name"  => "Nguyễn Văn C",
                        "Day Of Birth" => "2021/08/22",
                        "Address" => "Huế",
                        "image" => "images/img3.jpg"),
        "4"   => array("name"  => "Nguyễn Văn D",
                        "Day Of Birth" => "2002/08/23",
                        "Address" => "Hà Tĩnh",
                        "image" => "images/img4.jpg"),
        "5"   => array("name"  => "Nguyễn Văn E",
                        "Day Of Birth" => "2001/08/20",
                        "Address" => "Hà Nội",
                        "image" => "images/img5.jpg"),                

   );
  function searchByDate($customers , $from_date , $to_date)
  {
    if(empty($from_date)  && empty($to_date))
    {
        return $customers;
    }
    $fill_customer = [];
    foreach($customers as $customer)
    {
        if(strtotime($customer["Day Of Birth"]) < strtotime($from_date))
        continue;
        if(strtotime($customer["Day Of Birth"]) > strtotime($to_date))
        continue;
        $fill_customer[] = $customer;
    }
    return $fill_customer;
  }
  $from_date = null;
  $to_date   = null;
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $from_date = $_REQUEST["from"];
    $to_date = $_REQUEST["to"];
  }
  $fill_customer = searchByDate($customer_list , $from_date , $to_date);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.list {
    height: 110px;
    width :190px;
    padding: 10px;
    bottom: 190px;
    background: yellowgreen;
    
    border: 1px #CCC solid;
    border-radius: 10px;
}
.list input {
    padding: 1px;
    margin: 1px;
}
  .btn {
      color :red;
      border-radius :5px;
  }
  table {
      height: 400px;
      width: 1300px;
      text-align: center;
  }
</style>    
<body>
  

    <form method = "post">
            <div class="list">
        From :<input type = "date" name ="from" placeholder="yyyyy/mm/dd">
        <br>
        To:  <input type ="date"  name ="to"placeholder="yyyyy/mm/dd">
        
          <input type ="submit" id = "submit" value ="filter" class="btn">  
<table border ="1">
    <caption><h2> Danh Sách Nhân VIên</h2> </caption>
    <tr>
        <th> STT </th>
        <th> Tên </th>
        <th> Ngày Sinh</th>
        <th> Địa chỉ</th>
        <th> Ảnh </th>
    </tr>
    <?php
    if(count($fill_customer) === 0):
    ?>
    <tr><td>khong tim thay</td></tr>
    <?php endif; ?>
    <?php
    foreach ($fill_customer as $index => $khachkhang ):
    ?>
    <tr>
        <td><?php echo $index +1; ?></td>
        <td><?php echo $khachkhang["name"]; ?></td>
        <td><?php echo $khachkhang["Day Of Birth"]; ?></td>
        <td><?php echo $khachkhang["Address"]; ?></td>
        <td><?php echo $khachkhang["image"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
    </form>

</body>
</html>