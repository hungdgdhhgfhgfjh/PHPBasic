<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
include_once "database.php";
$id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
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

if($_SERVER["REQUEST_METHOD"]  == "POST")
{

$sql    = "DELETE FROM staff1 WHERE id=".$id."";
//thực hiện truy vấn
$stmt  = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$rows   = $stmt->fetch();
header("location:tableList.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="" method='post'>
        <button type="submit" onclick="return confirm('anh muốn xóa em à')" class="btn btn-danger">DELETE</button>
    </form>
</body>
</html>