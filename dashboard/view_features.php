<?php
include_once './include/header.php';
$_ftop_select = "SELECT * FROM features ORDER BY id ASC";
$_ftop_query = mysqli_query($_conn, $_ftop_select);
$_ftop_fetch = mysqli_fetch_all($_ftop_query, 1);

?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="text-center mb-3">
            <span class="text-warning my-5">
                <?= isset($_SESSION['success']) ? $_SESSION['success'] : '' ?>
            </span>
            <h2>VIEW FEATURES INFORMATION</h2>
        </div>
        <div class="row">
            <?php
            foreach ($_ftop_fetch as $_key => $_ftop) {
            ?>
                <div class="col-sm-4 mb-3 text-center">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-uppercase badge badge-warning">content id: <?= ++$_key ?></p>
                            <p class="badge <?= $_ftop['status'] == 1 ? 'badge-success' : 'badge-danger' ?> text-light"><?= $_ftop['status'] == 1 ? 'Active' : 'Deactive' ?></p>
                            <h5 class="card-title"><?= $_ftop['title'] ?></h5>
                            <div class="m-2 my-4">
                                <img src="../img/features/<?= $_ftop['picture'] ?>" alt="<?= $_ftop['title'] ?>" height="150px">
                            </div>
                            <p class="card-text mb-2"><?= $_ftop['details'] ?></p>
                            <a href="../controller/features_status.php?id=<?= $_ftop['id'] ?>" class="btn <?= $_ftop['status'] == 1 ? 'btn-danger' : 'btn-success' ?> text-light"><?= $_ftop['status'] == 1 ? 'Deactive' : 'Active' ?></a>
                            <a href="../controller/delete_features.php?id=<?= $_ftop['id'] ?>" class="btn btn-danger">DELETE</a>
                            <a href="./edit_features.php?id=<?= $_ftop['id'] ?>" class="btn btn-primary">EDIT</a>
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
