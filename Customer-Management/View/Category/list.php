<?php include 'View/Layouts/header.php'; ?>


<div class="container">
    <?php
    if (isset($_SESSION['alert']))
        echo $_SESSION['alert'];
    unset($_SESSION['alert']);
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center"> Category
            </h3>

            <form class="form-inline">
                <a href="index.php?cate=add" class="btn btn-primary">Thêm </a>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Mô Tả</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($categorys) > 0) : ?>
                        <?php foreach ($categorys as $key => $category) : ?>
                            <tr>
                                <th scope="row"><?= $category->id ?></th>
                                <td><?= $category->ten; ?></td>
                                <td><?= $category->mo_ta; ?></td>
                                <td>
                                    <a href="index.php?cate=edit&id=<?= $category->id; ?>" class="btn btn-info">Edit </a>
                                    <a href="index.php?cate=delete&id=<?= $category->id; ?>" class="btn btn-danger" onclick="return confirm('Xóa thật chứ ?')">Delete </a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'View/Layouts/footer.php'; ?>