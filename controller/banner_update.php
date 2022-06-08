<?php
session_start();
$_id = $_POST['id'];
$_title = $_POST['title'];
$_details = $_POST['details'];
$_btn_text = $_POST['btn_text'];
$_btn_link = $_POST['btn_link'];
$_stat = $_POST['status'];
if ($_stat == '') {
    $_status = 1;
} else {
    $_status = 0;
}
$_submit = $_POST['submit'];
$_rediract = 'Location: ../dashboard/edit_banner.php';
$_rediract_all = 'Location: ../dashboard/all_banner.php';
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
        $_banner_insert = "UPDATE banners SET title='$_title',details='$_details',button_text='$_btn_text',button_link='$_btn_link',status='$_status' WHERE $_id = id";
        $_bannery_query = mysqli_query($_conn, $_banner_insert);
        // echo '<pre>';
        // var_dump($_bannery_query);
        // echo '</pre>';
        // die();
        if ($_bannery_query) {
            $_SESSION['success'] = 'Data Updated Successfully';
            header($_rediract_all);
        } else {
            $_SESSION['success'] = 'Data is not Updated';
            header($_rediract_all);
        }
    }
}
