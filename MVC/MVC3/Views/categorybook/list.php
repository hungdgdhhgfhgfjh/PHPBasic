<div class="container">
  <h2 class="text-center">Categorybook</h2>
  <table class="table table-dark table-striped">
    <form action="" method="POST">
      <input type="text" class="input1" name="search" placehoder="search"><button style="border-radius: 46px;margin-left: -52px;" type="submit" class="btn btn-warning" >find</button>
      <a style="margin-left: 644px;" class="btn btn-success" href="index.php?categoryBooks=add">Add</a>
      </form>
      <?php
if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger">
                <?= $_SESSION['error'];
        unset($_SESSION['error']); ?>
            </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['success'];
        unset($_SESSION['success']); ?>
            </div>
            <?php endif; ?>
    <thead>
      <tr>
        <th>id</th>
        <th>category</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($categoryBooks as $key =>$categoryBook): ?>
     <tr>
        <td><?= $categoryBook->id; ?></td>
        <td><?= $categoryBook->category; ?></td>
        <td><a href="index.php?categoryBooks=edit&&id=<?=$categoryBook->id;?>" class="btn btn-primary">edit</a></td>
        <td><a href="index.php?categoryBooks=delete&&id=<?=$categoryBook->id;?>" class="btn btn-danger">delete</a></td>
     </tr>
     <?php endforeach;?>
    </tbody>
  </table>
</div>