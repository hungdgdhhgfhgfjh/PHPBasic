<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$data               = [];
$erroemail           = '';
$erropassword        = '';
$erronumberPhone     = '';
$erroname            = '';
$id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
include_once "database.php";
echo $id;
$sql    = "SELECT * FROM staff1 WHERE id=".$id."";
//thực hiện truy vấn
$stmt  = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$rows   = $stmt->fetch();
echo "<pre>";
print_r($rows);
echo "</pre>";
if($_REQUEST["id"] == "")
{
    header("location: tableList.php");
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
//   Array
// (
//     [email] => lequochung2001@gmail.com
//     [password] => 1111
//     [numberPhone] => 1111
//     [name] => 111111
// )

//   echo "<pre>";
//   print_r($_REQUEST);
//   echo "<pre>";
$age                 = $_REQUEST["age"];
$work                = $_REQUEST["work"];
$name                = $_REQUEST["name"];
$RegexEmail          = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
$RegexNumberPhone    = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";
$RegexName           = "/[a-zA-Z]/";
if($age == '' && $work == "" && $name == "")
{
  $erroemail        = "Please enter your Email";
  $erropassword     = "Please enter your Password";
  $erronumberPhone  = "Please enter your number Phone";
  $erroname         = "Please enter your name";
}
else
 {
    $sql    = "UPDATE staff1 set age=".$age.",name='".$name."',work='".$work."' WHERE id=".$id."";
    echo $sql;
    $stmt  = $connect->query( $sql );
    //tùy chọn kiểu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //lấy tất cả kết quả
    $staff   = $stmt->fetch();
    echo "<pre>";
    print_r($staff);
    echo "</pre>";
    header("location:tableList.php");
 }
}
?>
<?php include_once "./htmlcss/html.php"; ?>
    <div class="container">
        <div class="row" >
            <div class="col-sm-4">
                <strong class="strong1" >UPDATE</strong>
            <form action=""  method="POST">
                <div class="form-group">
                <strong >age</strong>
                  <input type="text" class="form-control" placeholder="Enter age" name="age" value="<?= $rows->age;?>">
               <strong class="alert-Danger" ><?=$erroemail;?></strong>
                </div>
                <div class="form-group">
                  <strong>name</strong>
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?= $rows->name;?>">
                  <strong class="alert-Danger" ><?=$erropassword;?></strong>
                <div class="form-group">
                  <strong for="pwd">work</strong>
                  <input type="text" class="form-control" placeholder="Enter numberPhone"  value="<?= $rows->work;?>" name="work" >
                  <strong class="alert-Danger" ><?=$erronumberPhone;?></strong>
                </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
    <?php include_once "./htmlcss/footerr.php"; ?>