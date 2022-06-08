<?php
session_start();
$_id = $_POST['id'];
$_title = $_POST['title'];
$_details = $_POST['details'];
$_stat = $_POST['status'];
if ($_stat != '') {
    $_status = 1;
} else {
    $_status = 0;
}
$_submit = $_POST['submit'];
$_rediract = 'Location: ../dashboard/edit_ftop.php';
$_rediract_all = 'Location: ../dashboard/view_feature_top.php';
if (isset($_submit)) {
    // validation start
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
        $_features_insert = "UPDATE feature_top SET title='$_title',details='$_details',status='$_status' WHERE $_id = id";
        $_features_query = mysqli_query($_conn, $_features_insert);
        // echo '<pre>';
        // var_dump($_features_query);
        // echo '</pre>';
        // die();
        if ($_features_query) {
            $_SESSION['success'] = 'Data Updated Successfully';
            header($_rediract_all);
        } else {
            $_SESSION['success'] = 'Data is not Updated';
            header($_rediract_all);
        }
    }
}
