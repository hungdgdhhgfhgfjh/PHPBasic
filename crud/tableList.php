<?php include_once "database.php";
//Lấy tất cả từ bảng thể loại
$sql    = "SELECT * FROM staff1";
//thực hiện truy vấn
$stmt  = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$rows   = $stmt->fetchAll();


?>
<?php include_once "./htmlcss/html.php"; ?>
<div class="container">

    <div >

   
  <h2 style="margin-left: 434px;font-size: 53px;color: salmon;" >Customers</h2>           
  <table class="table table-striped">
  
    <thead>
    <a class="btn btn-primary" href="add_employee.php">ADD employee</a>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Work</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach($rows as $key => $user): ?>
        <tr>

            <td><?= $user->id; ?></td>
            <td><?= $user->name; ?></td>
            <td><?= $user->work; ?></td>
            <td><a class="btn btn-success" href="edit.php?id=<?= $user->id; ?>">edit</a></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?= $user->id; ?>">delete</a></td>
        </tr>
        <?php endforeach;?>
    </tbody>
  </table>
</div>
</div>
<?php include_once "./htmlcss/footerr.php"; ?>