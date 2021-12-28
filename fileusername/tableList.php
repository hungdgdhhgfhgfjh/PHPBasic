<?php
session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
 include_once "./constant/headertable.php";
$user_json  = file_get_contents("user.json");
if($user_json)
{
  $user = json_decode($user_json);
}
else
{
  $user = [];
}
$userLogin = (isset($_SESSION["user"]) && !empty($_SESSION["user"]))?$_SESSION["user"]:"";
if(!$userLogin)
{
  header("location:dangnhap1.php");
}
//  echo "<pre>";

//  print_r($user );
//  echo "</pre>";

?>
<strong class="alert alert-success" > chào mừng admin đến với trang quản lí</strong>
  <h2 style ="margin-left: 362px;font-size: 2rem;color: yellowgreen;" >LIST CUSTOMER</h2>
          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>STT</th>
        <th>Email</th>
        <th>password</th>
        <td></td>
        <td></td>
      </tr>
    </thead>
    <tbody>
      <?php   foreach($user as $number => $users):   ?>
        <tr>
          <td><?= $number +1; ?></td>
          <td><?= $users->email; ?></td>
          <td><?= $users->password; ?></td>
          <td><a href="edit.php?id=<?= $users->id?> " class="btn btn-primary">Edit</a></td>
          <td><a href="delete.php?id=<?= $users->id?> " onclick="return confirm('ban co muon xoa khong ??');" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php endforeach; ?>
        
</tbody>
  </table>
  <?php include_once "./constant/footter.php" ?>
