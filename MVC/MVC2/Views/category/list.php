
<div class="container">
<h2 class="text-center text-warning">Category</h2>
<form action="" method="POST">
<input type="text" name="search"><button type="submit" >find</button>
</form>
<table class="table table-striped">
    <a class="btn btn-primary"  href="index.php?customer=add">Add</a>
    <thead>
        <tr>
            <th>id</th>
            <th>category</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categorys as $key =>$category):?>
        <tr>
            <td><?= $category->id; ?></td>
            <td><?= $category->category;?></td>
            <td><a class="btn btn-primary" href="index.php?customer=edit&&id=<?= $category->id;?>">edit</a></td>
            <td><a class="btn btn-danger" href="index.php?customer=delete&&id=<?= $category->id;?>">delete</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
