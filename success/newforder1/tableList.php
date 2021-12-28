<?php
session_start();
$user_json = file_get_contents("user.json");
if($user_json)
{
    $users = json_decode($user_json);

}
else
{
    $users = [];
}
$userlogin = (isset($_SESSION["user"]) && !empty($_SESSION["user"])) ? $_SESSION["user"]:"";
if(!$userlogin)
{
  header("location:login.php");
}
// echo "<pre>";
// print_r($users);
// echo "</pre>";
?>
<?php include_once "./htmlcss/html.php"; ?>
<body>

<div class="container">
  <h2 style="color:blue;" class="text-center" >Hello'Sir</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Email</th>
        <th>Password</th>
        <th>Number Phone</th>
        <th>Name</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $key => $user): ?>
        <tr>
            <td><?=  $user->email;?></td>
            <td><?=  $user->password;?></td>
            <td><?=  $user->numberPhone;?></td>
            <td><?=  $user->name;?></td>
            <td><a class="btn btn-primary" href="edit.php?id=<?= $user->id;?>">edit</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('xoa that a????')" href="delete.php?id=<?= $user->id;?>">delete</a></td>
        </tr>
        <?php endforeach;?>  
    </tbody>
  </table>
</div>

<?php include_once "./htmlcss/footerr.php"; ?>