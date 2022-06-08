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
                    <form action="../controller/banner_store.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputTitle">Title:</label>
                                <input type="text" class="form-control mb-2" id="inputTitle" placeholder="Banner title here" name="title">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_title']) ? $_SESSION['error_title'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputDetails">Details:</label>
                                <textarea name="details" class="form-control" id="inputDetails"></textarea>
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_details']) ? $_SESSION['error_details'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputbtnText">Button Text:</label>
                                <input type="text" class="form-control" id="inputbtnText" placeholder="Button text here" name="btn_text">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_btntext']) ? $_SESSION['error_btntext'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputbtnLink">Button Link:</label>
                                <input type="text" class="form-control" id="inputbtnLink" placeholder="Button link here" name="btn_link">
                                <span class="text-danger">    
                                    <?= isset($_SESSION['error_btnlink']) ? $_SESSION['error_btnlink'] : '' ?>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="statusCheck" name="status" value="1">
                                <label class="form-check-label" for="statusCheck">Check ME for Active Status</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-uppercase" name="submit">add banner</button>
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
