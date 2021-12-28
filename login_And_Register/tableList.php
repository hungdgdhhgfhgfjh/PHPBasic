<?php
session_start();
$user_json = file_get_contents('user.json');
if($user_json)
{
    $users = json_decode($user_json);
}
else
{
    $users = [];
}
$userLogin = (isset($_SESSION['user']) && !empty($_SESSION['user']))?$_SESSION['user']:"";
if(!$userLogin)
{
    header("location: login.php");
}
// echo "<pre>";
// print_r($users);
// echo "</pre>";
?>
<?php include_once "./htmlcss/html.php"; ?>
<div class="container">
  <h2 style="margin-left: 434px;font-size: 53px;color: salmon;" >Customers</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Number</th>
        <th>Email</th>
        <th>numberPhone</th>
        <th>name</th>
        <th>password</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($users as $key => $user): ?>
     <tr>
         <td><?= $key +1; ?></td>
         <td><?= $user->email; ?></td>
         <td><?= $user->numberPhone; ?></td>
         <td><?= $user->name; ?></td>
         <td><?= $user->password; ?></td>
         <td><a href="edit.php?id=<?= $user->id; ?>" class="btn btn-success">Edit</a></td>
         <td><a href="delete.php?id=<?= $user->id;  ?>" onclick="return confirm('xoa that a')" class="btn btn-danger">Delete</a></td>
     </tr>
     <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php include_once "./htmlcss/footerr.php"; ?>