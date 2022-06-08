<?php
include_once './include/header.php';

$_id = $_GET['id'];
$_banner_select = "SELECT * FROM banners WHERE id = $_id";
$_benner_query = mysqli_query($_conn, $_banner_select);
$_banner_fetch = mysqli_fetch_assoc($_benner_query);
?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
            <div class="card text-center">
                <div class="card-header">
                    EDIT POST HERE
                </div>
                <div class="card-body">
                    <form action="../controller/banner_update.php" method="POST">
                        <input type="hidden" name="id" value="<?= $_banner_fetch['id'] ?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputTitle">Title:</label>
                                <input type="text" class="form-control mb-2" id="inputTitle" placeholder="Banner title here" name="title" value="<?= $_banner_fetch['title'] ?>">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_title']) ? $_SESSION['error_title'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputDetails">Details:</label>
                                <textarea name="details" class="form-control" id="inputDetails"><?= $_banner_fetch['details'] ?></textarea>
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_details']) ? $_SESSION['error_details'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputbtnText">Button Text:</label>
                                <input type="text" class="form-control" id="inputbtnText" placeholder="Button text here" name="btn_text" value="<?= $_banner_fetch['button_text'] ?>">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_btntext']) ? $_SESSION['error_btntext'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputbtnLink">Button Link:</label>
                                <input type="text" class="form-control" id="inputbtnLink" placeholder="Button link here" name="btn_link" value="<?= $_banner_fetch['button_link'] ?>">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_btnlink']) ? $_SESSION['error_btnlink'] : '' ?>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check mt-3">
                                <?php
                                if ($_banner_fetch['status'] == 0) {
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
                        <button type="submit" class="btn btn-warning text-uppercase" name="submit">update banner</button>
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
unset($_SESSION['error_title']);
unset($_SESSION['error_details']);
unset($_SESSION['error_btntext']);
unset($_SESSION['error_btnlink']);
