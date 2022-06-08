<?php
include_once './include/header.php';
?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
            <div class="card text-center">
                <div class="card-header">
                    WHY CHOOSE US INFORMATION HERE
                </div>
                <div class="card-body">
                    <form action="../controller/whyus_store.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPicture">Upload Picture:</label>
                                <input type="file" class="form-control mb-2" id="inputPicture" placeholder="Upload your picture here" name="picture">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_picture']) ? $_SESSION['error_picture'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputVidlink">Video Link:</label>
                                <input type="text" class="form-control mb-2" id="inputVidlink" placeholder="Video link here" name="video_link">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_link']) ? $_SESSION['error_link'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputFirsticon">First Icon:</label>
                                <input type="text" class="form-control mb-2" id="inputFirsticon" placeholder="First icon class" name="first_icon">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_f_icon']) ? $_SESSION['error_f_icon'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputFirsttitle">First Title:</label>
                                <input type="text" class="form-control mb-2" id="inputFirsttitle" placeholder="First title here" name="first_title">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_f_title']) ? $_SESSION['error_f_title'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputSecondicon">Second Icon:</label>
                                <input type="text" class="form-control mb-2" id="inputSecondicon" placeholder="Second Icon class" name="second_icon">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_s_icon']) ? $_SESSION['error_s_icon'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputSecondtitle">Second Title:</label>
                                <input type="text" class="form-control mb-2" id="inputSecondtitle" placeholder="Second Title here" name="second_title">
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_s_title']) ? $_SESSION['error_s_title'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputFirstdescription">First Description:</label>
                                <textarea name="first_description" class="form-control" id="inputFirstdescription" placeholder="First Description here"></textarea>
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_f_details']) ? $_SESSION['error_f_details'] : '' ?>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSeconddescription">Second Description:</label>
                                <textarea name="second_description" class="form-control" id="inputSeconddescription" placeholder="Second Description here"></textarea>
                                <span class="text-danger">
                                    <?= isset($_SESSION['error_s_details']) ? $_SESSION['error_s_details'] : '' ?>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="statusCheck" name="status" value="1">
                                <label class="form-check-label" for="statusCheck">Check ME for Active</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-uppercase" name="submit">add info</button>
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
unset($_SESSION['error_picture']);
unset($_SESSION['error_link']);
unset($_SESSION['error_f_icon']);
unset($_SESSION['error_f_title']);
unset($_SESSION['error_s_icon']);
unset($_SESSION['error_s_title']);
unset($_SESSION['error_f_details']);
unset($_SESSION['error_s_details']);
