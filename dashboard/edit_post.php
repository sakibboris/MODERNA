<?php
include_once './include/header.php';

$_id = $_GET['id'];
$_post_select = "SELECT * FROM posts WHERE id = $_id";
$_post_query = mysqli_query($_conn, $_post_select);
$_post_fetch = mysqli_fetch_assoc($_post_query);
// echo '<pre>';
// var_dump($_fetch);
// echo '</pre>';
?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
            <div class="card text-center">
                <div class="card-header">
                    ADD POST HERE
                </div>
                <div class="card-body">
                    <form action="../controller/post_update.php" method="POST">
                        <input type="hidden" name="id" value="<?= $_post_fetch['id']?>">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputIcon">icon class</label>
                                <input type="text" class="form-control mb-2" id="inputIcon" placeholder="icon class" name="icon" value="<?= $_post_fetch['icon']?>">
                                <?= isset($_SESSION['error_icon']) ? $_SESSION['error_icon'] : '' ?>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputIconcolor">icon color</label>
                                <input type="text" class="form-control mb-2" id="inputIconcolor" placeholder="icon color" name="icon_color" value="<?= $_post_fetch['icon_color']?>">
                                <?= isset($_SESSION['error_iconc']) ? $_SESSION['error_iconc'] : '' ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputTitle">Title</label>
                                <input type="text" class="form-control" id="inputTitle" placeholder="Title" name="title" value="<?= $_post_fetch['title']?>">
                                <?= isset($_SESSION['error_title']) ? $_SESSION['error_title'] : '' ?>
                            </div>
                            <label for="inputDetails">Details</label>
                            <textarea name="details" class="form-control" id="inputDetails"><?= $_post_fetch['details']?></textarea>
                            <?= isset($_SESSION['error_details']) ? $_SESSION['error_details'] : '' ?>
                        </div>
                        <div class="form-group">
                            <div class="form-check mt-3">
                            <?php
                                if ($_post_fetch['status'] == 1) {
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
                        <button type="submit" class="btn btn-warning text-uppercase" name="submit">add post</button>
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
unset($_SESSION['error_iconc']);
unset($_SESSION['error_title']);
unset($_SESSION['error_details']);
