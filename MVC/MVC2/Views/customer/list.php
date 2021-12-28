<div class="container">
    <h2 class="text-center text-warning">Customer</h2>
    <form action="" method="POST">
    <input type="text" name="search"><button type="submit" >find</button>
    </form>
    <table class="table table-striped">
        <a class="btn btn-primary"  href="index.php?customers=add">Add</a>
        <thead>
            <tr>
                <th>fullName</th>
                <th>email</th>
                <th>numberPhone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($customers as $key =>$customer):?>
            <tr>
                <td><?= $customer->fullName; ?></td>
                <td><?= $customer->email;?></td>
                <td><?= $customer->numberPhone;?></td>
                <td><a class="btn btn-primary" href="index.php?customers=edit&&id=<?= $customer->id;?>">edit</a></td>
                <td><a class="btn btn-danger" href="index.php?customers=delete&&id=<?= $customer->id;?>">delete</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>