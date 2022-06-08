<?php
session_start();
$_id = $_POST['id'];
$_icon = $_POST['icon'];
$_icon_color = $_POST['icon_color'];
$_title = $_POST['title'];
$_details = $_POST['details'];
$_stat = $_POST['status'];
if ($_stat == '') {
    $_status = 0;
} else {
    $_status = 1;
}


$_submit = $_POST['submit'];
$_rediract = 'Location: ../dashboard/add_post.php';
$_rediract_all = 'Location: ../dashboard/all_post.php';
if (isset($_submit)) {
    // validation start
    // icon validation
    if (empty($_icon)) {
        $_SESSION['error_icon'] = "Input icon class";
        header($_rediract);
    }
    // icon validation
    if (empty($_icon)) {
        $_SESSION['error_iconc'] = "Input icon color";
        header($_rediract);
    }
    // title validation
    if (empty($_title)) {
        $_SESSION['error_title'] = "Input title here";
        header($_rediract);
    }
    // icon validation
    if (empty($_details)) {
        $_SESSION['error_details'] = "Input details here";
        header($_rediract);
    }
    // end validation
    else {
        require_once '../inc/env.php';
        $_post_update = "UPDATE posts SET icon='$_icon',icon_color='$_icon_color',title='$_title',details='$_details',status='$_status' WHERE id='$_id'";
        $_post_query = mysqli_query($_conn, $_post_update);
        if ($_post_query) {
            $_SESSION['success'] = 'Data Inserted Successfully';
            header($_rediract_all);
        } else {
            $_SESSION['success'] = 'Data is not Inserted';
            header($_rediract_all);
        }
    }
}
