<?php
include_once './include/header.php';
?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
            <div class="card text-center">
                <div class="card-header">
                    ADD POST HERE
                </div>
                <div class="card-body">
                    <form action="../controller/post_store.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputIcon">icon class</label>
                                <input type="text" class="form-control mb-2" id="inputIcon" placeholder="icon class" name="icon">
                                <?= isset($_SESSION['error_icon']) ? $_SESSION['error_icon'] : '' ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputTitle">Title</label>
                                <input type="text" class="form-control" id="inputTitle" placeholder="Title" name="title">
                                <?= isset($_SESSION['error_title']) ? $_SESSION['error_title'] : '' ?>
                            </div>
                            <label for="inputDetails">Details</label>
                            <textarea name="details" class="form-control" id="inputDetails"></textarea>
                            <?= isset($_SESSION['error_details']) ? $_SESSION['error_details'] : '' ?>
                        </div>
                        <div class="form-group">
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="statusCheck" name="status" value="1">
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
unset($_SESSION['error_title']);
unset($_SESSION['error_details']);
