<?php
session_start();
$_title = $_POST['title'];
$_details = $_POST['details'];
$_stat = $_POST['status'];
if ($_stat == '') {
    $_status = 0;
} else {
    $_status = 1;
}
$_submit = $_POST['submit'];
$_rediract = "Location: ../dashboard/add_feature_top.php";
$_rediract_all = "Location: ../dashboard/view_feature_top.php";
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
        $_ftop_insert = "INSERT INTO feature_top(title, details, status) VALUES ('$_title','$_details','$_status')";
        $_ftop_query = mysqli_query($_conn, $_ftop_insert);
        if ($_ftop_query) {
            $_SESSION['success'] = 'Data Inserted Successfully';
            header($_rediract_all);
        } else {
            $_SESSION['success'] = 'Data is not Inserted';
            header($_rediract_all);
        }
    }
}
