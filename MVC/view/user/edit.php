<?php include_once 'view/layout/header.php' ?>
<?php
    if (isset($_SESSION['alert']))
        echo $_SESSION['alert'];
    unset($_SESSION['alert']);
    ?>
<div class="row">
    <div class="col-lg-12">
        <form action="" method="post">
            <div class="form-group">
                <label>Tên</label>
                <input type="text" class="form-control" placeholder="Tên" name="name" value="<?= $user->ten; ?>">
                    <?php
                    if (isset($errors['name'])) {
                        echo $errors['name'];
                    } ?>
                </small>
            </div>
            <div class="form-group">
                <label>Mô Tả</label>
                <input type="text" class="form-control" placeholder="Nghề Nghiệp" name="nghe" value="<?= $user->nghe; ?>">
                <small class="form-text text-danger">
                    <?php echo (isset($errors['nghe'])) ? $errors['nghe'] : ''; ?>
                </small>
            </div>
      
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="home.php?user1=list" class="btn btn-danger">Quay Lại </a>

        </form>
    </div>


</div>


<?php include_once 'view/layout/footer.php' ?>




