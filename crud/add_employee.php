<?php include_once "database.php";
$sql    = "SELECT * FROM staff1";
//thực hiện truy vấn
$stmt  = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$rows   = $stmt->fetchAll();
echo "<pre>";
print_r($rows);
echo "</pre>";
if($_SERVER["REQUEST_METHOD"] == "POST")
{

        $age = $_REQUEST["age"];
        $name = $_REQUEST["name"];
        $work = $_REQUEST["work"];
        if( $age == "" && $name == "" &&  $work == '')
        {
            $erroage = "Please enter your age";
            $erroname = "Please enter your name";
            $errowork = "Please enter your work";
        }
        else
        {
            $sql ="INSERT INTO `staff1` (`id`, `age`, `name`, `work`) VALUES (NULL, '".$age."', '".$name."', '".$work."')";
            $stmt  = $connect->query( $sql );
            //tùy chọn kiểu trả về
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            //lấy tất cả kết quả
            $add   = $stmt->fetchAll();
            header("location:tableList.php");
        }
}
?>
<?php include_once "./htmlcss/html.php"; ?>
<div class="container">
        <div class="row" >
            <div class="col-sm-4">
                <strong class="strong1" >EMPLOYEE</strong>
            <form action=""  method="POST">
                <div class="form-group">
                <strong >age</strong>
                  <input type="text" class="form-control" placeholder="Enter age" name="age" >
                </div>
                <div class="form-group">
                  <strong>name</strong>
                  <input type="text" class="form-control" placeholder="Enter name" name="name">
                
                <div class="form-group">
                  <strong for="pwd">work</strong>
                  <input type="text" class="form-control" placeholder="work"  name="work" >
                  
                </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">ADD</button>
              </form>
            </div>
        </div>
    </div>
    <?php include_once "./htmlcss/footerr.php"; ?>