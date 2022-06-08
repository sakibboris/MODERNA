<?php
session_start();
$_ij_icon = $_POST['icon'];
$_ij_title = $_POST['title'];
$_ij_details = $_POST['details'];
$_ij_stat = $_POST['status'];
if ($_ij_stat == '') {
    $_ij_status = 0;
} else {
    $_ij_status = 1;
}
$_ij_submit = $_POST['submit'];
$_ij_rediract = 'Location: ../dashboard/add_post.php';
$_ij_rediract_all = 'Location: ../dashboard/all_post.php';
if (isset($_ij_submit)) {
    // validation start
    // icon validation
    if (empty($_ij_icon)) {
        $_SESSION['error_icon'] = "Input icon class";
        header($_ij_rediract);
    }
    // title validation
    if (empty($_ij_title)) {
        $_SESSION['error_title'] = "Input title here";
        header($_ij_rediract);
    }
    // icon validation
    if (empty($_ij_details)) {
        $_SESSION['error_details'] = "Input details here";
        header($_ij_rediract);
    }
    // end validation
    else {
        require_once '../inc/env.php';
        $_ij_post_insert = "INSERT INTO posts(icon, title, details, status) VALUES ('$_ij_icon','$_ij_title','$_ij_details','$_ij_status')";
        $_ij_post_query = mysqli_query($_conn, $_ij_post_insert);
        if ($_ij_post_query) {
            $_SESSION['success'] = 'Data Inserted Successfully';
            header($_ij_rediract_all);
        } else {
            $_SESSION['success'] = 'Data is not Inserted';
            header($_ij_rediract_all);
        }
    }
}
