<?php
include_once './include/header.php';
// $_post_select = "SELECT * FROM posts ORDER BY id DESC";
$_post_select = "SELECT * FROM banners ORDER BY id ASC";
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
            <h2>ALL BANNERS</h2>
        </div>
        <div class="row">
            <?php
            foreach ($_fetch as $_key => $_banner) {
            ?>
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-uppercase badge badge-warning">content id: <?= ++$_key ?></p>
                            <p class="badge <?= $_banner['status'] == 0 ? 'badge-success' : 'badge-danger' ?> text-light"><?= $_banner['status'] == 0 ? 'Active' : 'Deactive' ?></p>
                            <h5 class="card-title"><?= $_banner['title'] ?></h5>
                            <p class="card-text mb-2">
                                <?php
                                if (strlen($_banner['details']) >= 80) {
                                    echo substr($_banner['details'], 0, 50);
                                    echo '<a class="badge badge-primary btn-sm" href="#" type="button">More</a>';
                                } else {
                                    echo $_banner['details'];
                                }
                                ?>

                            </p>
                            <p class="card-text mb-2">Button Text=> <?= $_banner['button_text'] ?></p>
                            <p class="card-text mb-2">Button Link=> <?= $_banner['button_link'] ?></p>
                            <a href="../controller/update_banner.php?id=<?= $_banner['id'] ?>" class="btn <?= $_banner['status'] == 0 ? 'btn-danger' : 'btn-success' ?> text-light"><?= $_banner['status'] == 0 ? 'Deactive' : 'Active' ?></a>
                            <a href="../controller/delete_banner.php?id=<?= $_banner['id'] ?>" class="btn btn-danger">DELETE</a>
                            <a href="./edit_banner.php?id=<?= $_banner['id'] ?>" class="btn btn-primary">EDIT</a>
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
