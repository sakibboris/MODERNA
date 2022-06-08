<?php
include_once './include/header.php';
$_id = $_GET['id'];
$_ftop_select = "SELECT * FROM feature_top WHERE id = $_id";
$_ftop_query = mysqli_query($_conn, $_ftop_select);
$_ftop_fetch = mysqli_fetch_assoc($_ftop_query);

?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
            <div class="card text-center col">
                <div class="card-header">
                    ADD FEATURES HERE
                </div>
                <div class="card-body">
                    <form action="../controller/ftop_update.php" method="POST">
                        <input type="hidden"name="id" value="<?= $_ftop_fetch['id'] ?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputTitle">Title</label>
                                <input type="text" class="form-control" id="inputTitle" placeholder="Title" name="title" value="<?= $_ftop_fetch['title'] ?>">
                                <?= isset($_SESSION['error_title']) ? $_SESSION['error_title'] : '' ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputDetails">Details</label>
                                <textarea name="details" class="form-control" placeholder="Details" id="inputDetails"><?= $_ftop_fetch['details'] ?></textarea>
                                <?= isset($_SESSION['error_details']) ? $_SESSION['error_details'] : '' ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check mt-3">
                                <?php
                                if ($_ftop_fetch['status'] == 1) {
                                ?>
                                    <input class="form-check-input" type="checkbox" id="statusCheck" name="status" value="1" checked>
                                <?php
                                } else {
                                ?>
                                    <input class="form-check-input" type="checkbox" id="statusCheck" name="status" value="1">
                                <?php
                                }
                                ?>
                                <label class="form-check-label" for="statusCheck">Check ME for Active Status</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-uppercase" name="submit">update post</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <?= date('Y-m-d H:i:s'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once './include/footer.php';
unset($_SESSION['error_icon']);
unset($_SESSION['error_title']);
unset($_SESSION['error_details']);
