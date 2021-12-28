<?php
$user_json = file_get_contents("user.json");
if($user_json)
{
    $users = json_decode($user_json);

}
else
{
    $users = [];
}
// echo "<pre>";
// print_r($users);
// echo "</pre>";
?>
<?php include_once "./htmlcss/html.php"; ?>
<body>

<div class="container">
  <h2 style="color: burlywood;" class="text-center">hello You Well Come To Staff</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Email</th>
        <th>Password</th>
        <th>Number Phone</th>
        <th>Name</th>
      
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $key => $user): ?>
        <tr>
            <td><?=  $user->email;?></td>
            <td><?=  $user->password;?></td>
            <td><?=  $user->numberPhone;?></td>
            <td><?=  $user->name;?></td>
        </tr>
        <?php endforeach;?>  
    </tbody>
  </table>
</div>

<?php include_once "./htmlcss/footerr.php"; ?>