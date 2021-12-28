<h1 class="text-center text-warning">Update</h1>
<div style="height: 503px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
    <div class="container">
        <form action="" method="POST">
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
            <div class="form-group">
                <label for="email">Category Book</label>
                <input type="text" value="<?= $categoryBook->category;?>" class="form-control"  name="categoryBook">
                <strong class="alert-danger"  style="color:red"></strong>
            </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
        </form>
    </div>
   