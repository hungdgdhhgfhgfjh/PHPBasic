<?php 
$mang=[[
    "tên"=>"Lê Quốc Hưng",
    "ngaysinh"=>"22/01/2002",
    "diachi"=>"Hà Nội",
    "ảnh"=>"5883.jpg_wh1200.jpg"
],[
    "tên"=>"Lê Ngọc tuyết",
    "ngaysinh"=>"22/01/2002",
    "diachi"=>"Hà Nội",
    "ảnh"=>"imager_1_5450_600.jpg"
],
[
    "tên"=>"Lê Ngọc lan",
    "ngaysinh"=>"22/01/2002",
    "diachi"=>"Hà Nội",
    "ảnh"=>"nhan-vien-van-phong.jpg"
],
[
    "tên"=>"Lê Ngọc lan",
    "ngaysinh"=>"22/01/2002",
    "diachi"=>"Hà Nội",
    "ảnh"=>"th.jfif"
]
];




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
    <form action="">
       <table>
           <tr>
               <th>họ và tên</th>
               <th>ngày sinh</th>
               <th>địa chỉ</th>
               <th>ảnh</th>
           </tr>
           <?php foreach( $mang as $danhsach => $khachhang): ?>
           <tr>
                   <td><?php echo $khachhang["tên"]; ?></td>
                   <td><?php echo $khachhang["ngaysinh"]; ?></td>
                   <td><?php echo $khachhang["diachi"]; ?></td>
                   <td><img width="50px" src="<?php echo $khachhang["ảnh"]; ?>" alt=""></td>
           </tr>
           <?php endforeach; ?>
       </table>
    </form>
</body>
</html>