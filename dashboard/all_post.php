<?php
include_once './include/header.php';
// $_post_select = "SELECT * FROM posts ORDER BY id DESC";
$_post_select = "SELECT * FROM posts ORDER BY id ASC";
$_query = mysqli_query($_conn, $_post_select);
$_fetch = mysqli_fetch_all($_query, 1);
// echo '<pre>';
// var_dump($_fetch);
// echo '</pre>';
?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
    <div class="text-center mb-3">
            <span class="text-warning my-5">
                <?= isset($_SESSION['success']) ? $_SESSION['success'] : '' ?>
            </span>
            <h2>ALL SERVICES</h2>
        </div>
        <div class="row">
            <?php
            foreach ($_fetch as $_key => $_posts) {
            ?>
                <div class="col-sm-4 mb-3 text-center">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-uppercase badge badge-warning">content id: <?= ++$_key ?></p>
                            <p class="badge <?= $_posts['status'] == 1 ? 'badge-success' : 'badge-danger' ?> text-light"><?= $_posts['status'] == 1 ? 'Active' : 'Deactive' ?></p>
                            <h5 class="card-title"><?= $_posts['title'] ?></h5>
                            <p class="card-text mb-2"><?= $_posts['details'] ?></p>
                            <a href="../controller/update_status.php?id=<?= $_posts['id'] ?>" class="btn <?= $_posts['status'] == 1 ? 'btn-danger' : 'btn-success' ?> text-light"><?= $_posts['status'] == 1 ? 'Deactive' : 'Active' ?></a>
                            <a href="../controller/delete_service.php?id=<?= $_posts['id'] ?>" class="btn btn-danger">DELETE</a>
                            <a href="./edit_post.php?id=<?= $_posts['id'] ?>" class="btn btn-primary">EDIT</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include_once './include/footer.php';
unset($_SESSION['success']);
