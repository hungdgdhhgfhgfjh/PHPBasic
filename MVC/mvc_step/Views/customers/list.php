<div class="container">
<h2>Secretary</h2>
<a  href="index.php?page=add" class="btn btn-primary">add</a>          
<table class="table table-striped">
  <thead>
    <tr>
      <th>name</th>
      <th>gender</th>
      <th>age</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach($Secretarys as $key =>$Secretary): ?>
    <tr>
    <td><?= $Secretary->name;  ?></td>
    <td><?= $Secretary->gender;  ?></td>
    <td><?= $Secretary->age;  ?></td>
    <td><a class="btn btn-primary" href="index.php?page=edit&&id=<?= $Secretary->id;  ?>">edit</a></td>
    <td><a href="index.php?page=delete&&id=<?= $Secretary->id;  ?>" class="btn btn-danger" >delete</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
