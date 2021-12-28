<?php  

?>

<div class="container">
  <h2 class="text-center">Categorybook</h2>
  <table class="table table-dark table-striped">
    <form action="" method="POST">
      <input type="text" class="input1" name="search" placehoder="search"><button style="border-radius: 46px;margin-left: -52px;" type="submit" class="btn btn-warning" >find</button>
      <a style="margin-left: 644px;" class="btn btn-success" href="index.php?book=add">Add</a>
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
        <th>Book Code</th>
        <th>Book Name</th>
        <th>category</th>
        <th>image Book</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($books as $key =>$book): ?>
     <tr>
        <td><?= $book->book_code; ?></td>
        <td><?=  $book->book_name; ?></td>
        <td><?=  $book->category; ?></td>
        <td><img class="img1" src="<?=  $book->image_book; ?>" alt=""></td>
        <td><a href="index.php?book=edit&&id=<?=$book->book_code;?>" class="btn btn-primary">edit</a></td>
        <td><a href="index.php?book=delete&&id=<?=$book->book_code;?>" class="btn btn-danger">delete</a></td>
     </tr>
     <?php endforeach;?>
    </tbody>
  </table>
</div>