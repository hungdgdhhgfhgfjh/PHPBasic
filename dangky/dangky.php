<?php
$errors = [];
$thong_bao = '';
$errolast_name="";
$errofirst_name="";
$erroemail="";
$erropassword="";
$errothang="";
$errongay="";
$erronam="";
$newdangky="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$last_name=$_REQUEST["last_name"];
$first_name=$_REQUEST["first_name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$ngay=$_REQUEST["ngay"];
$thang=$_REQUEST["thang"];
$nam=$_REQUEST["nam"];
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if  ( $last_name == "" && $first_name == "" &&  $email == "" && $password=="" &&  $ngay == "" && $thang == "" && $nam == ""){
    $errolast_name="vui long nhap ho ";
    $errofirst_name="vui long nhap ten";
    $erroemail="vui long nhap email";
    $erropassword="vui long nhap mat khau";
    $errothang="vui long nhap mat khau";
    $errongay="vui long nhap ngay";
    $erronam="vui long nhap nam";
}
else{
    $newdangky="dang ky thanh cong";
    $user=$_REQUEST;
$webnews="dangkys.json";
    $users = file_get_contents($webnews);
    
    if( $users == '' ){
        $users = [];
    }else{
        //json.parse
        //chuyển từ chuỗi json sang mảng, tham số thứ 2 là có muốn thành mảng hay ko
        $users = json_decode($users, true );
    }

    //array_push
    $users[] = $user;

    //chuyển từ mảng sang json
    $data = json_encode($users); //Json.stringfy

    //lưu nội dung vào 1 file có tên là users.json và dữ liệu là data
    file_put_contents($webnews,$data);

    $thong_bao = 'Lưu thành công';
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
<style>
    input{
        width:100%;
    }
    button{
        width: 40%;
    }
</style>
<body>
    <h3><?php echo $thong_bao;?></h3>
    <form action="" method="POST">
        <table>
  <tr>
      <td>  <input type="text" name="last_name" placeholder="họ"></td>
      <p><?php echo  $errolast_name; ?></p>
      <td><input type="text" name="first_name" placeholder="tên"></td>
      <p><?php echo  $errofirst_name; ?></p>

  </tr>
    <tr>
<td colspan="2">
    <input type="text" name="email" placeholder="email">
    <p><?php echo  $errofirst_name; ?></p>
</td>
    </tr>
    <tr>
        <td colspan="2"><input type="password" name="password" placeholder="mat khau"></td>
        <p><?php echo  $erropassword; ?></p>
    </tr>
    <tr>
    <table>
        <tr>
            <td><select name="ngay" id="">
                <option  value="">vui long chon ngay</option>
                <p><?php echo  $errongay; ?></p>
                <?php for($i=0;$i<31;$i++):?>
                <option value="<?php echo " ngày". $i ;?>"><?php echo " ngày". $i ;?></option>

                <?php endfor;?>
            </select></td>

            <td><select name="thang" id="">
            <p><?php echo  $errothang; ?></p>
                <option value="">vui long chon thang</option>
                <?php for($i=0;$i<13;$i++):?>
                <option value="<?php echo "tháng " .$i?>"><?php echo "tháng " .$i?></option>
                <?php endfor;?>
            </select></td>
            <td><select name="nam" id="">
            <p><?php echo  $erronam; ?></p>
                <option value="">vui long chon nam</option>
                <?php for($i=1990;$i<2010;$i++):?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php endfor;?>
            </select></td>
        </tr>
    </table>
    </tr>
    <tr>
        <td><button type="submit">dang ky</button></td>
        <p><?php echo $newdangky;?></p>
    </tr>
</table>
</form>
</body>
</html>