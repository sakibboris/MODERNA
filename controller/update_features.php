<?php
session_start();
$_id = $_POST['id'];
$_title = $_POST['title'];
$_details = $_POST['details'];
$_picture = $_FILES['picture'];
$_stat = $_POST['status'];
if ($_stat == '') {
    $_status = 0;
} else {
    $_status = 1;
}
$_submit = $_POST['submit'];
$_rediract = 'Location: ../dashboard/edit_features.php';
$_rediract_all = 'Location: ../dashboard/view_features.php';
if (isset($_submit)) {
    // validation start
    // picture validation
    if ($_picture['size'] > 655360) {
        $_SESSION['error_picture'] = "Input a picture less then 5MB!";
        header($_rediract);
    }
    // title validation
    if (empty($_title)) {
        $_SESSION['error_title'] = "Input title here";
        header($_rediract);
    }
    // details validation
    if (empty($_details)) {
        $_SESSION['error_details'] = "Input details here";
        header($_rediract);
    }
    // end validation
    else {
        require_once '../inc/env.php';
        // image process.
        if ($_picture['name'] != '') {
            $_imgName = $_picture['name'];
            $_imgArray = explode('.', $_imgName);
            $_extention = end($_imgArray);
            $_random = rand();
            $_new_imgName = 'Feature_' . $_random . '.' . $_extention;
            $_target = $_picture['tmp_name'];
            $_destination = $_SERVER["DOCUMENT_ROOT"] . '/CIT/moderna/img/features/' . $_new_imgName;
            $_move = move_uploaded_file($_target, $_destination);
            $_old_path = $_SERVER["DOCUMENT_ROOT"] . '/CIT/moderna/img/features/' . $_POST['old_picture'];
            if (file_exists($_old_path)) {
                unlink($_old_path);
                $_SESSION['unlink'] = "File unlinked successfully";
            } else {
                $_SESSION['unlink'] = "File isn't exist";
            }
        } else {
            $_new_imgName = $_POST['old_picture'];
        }
        // process end 
        $_features_update = "UPDATE features SET picture='$_new_imgName',title='$_title',details='$_details',status='$_status' WHERE id='$_id'";
        $_features_query = mysqli_query($_conn, $_features_update);
        if ($_features_query) {
            $_SESSION['success'] = 'Data Updated Successfully';
            header($_rediract_all);
        } else {
            $_SESSION['success'] = 'Data is not Updated';
            header($_rediract_all);
        }
    }
}
