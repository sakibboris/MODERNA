<?php
session_start();
$_title = $_POST['title'];
$_details = $_POST['details'];
$_picture = $_FILES['picture	'];
$_stat = $_POST['status'];
if ($_stat == '') {
    $_status = 0;
} else {
    $_status = 1;
}
$_submit = $_POST['submit'];
$_rediract = "Location: ../dashboard/add_features.php";
$_rediract_all = "Location: ../dashboard/view_features.php";
if (isset($_submit)) {
    // validation start
    // picture validation
    if (empty($_picture['name'])) {
        $_SESSION['error_picture'] = "Input Picture";
        header($_rediract);
    } else if ($_picture['size'] > 655360) {
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
        // image process.
        $_imgName = $_picture['name'];
        $_imgArray = explode('.', $_imgName);
        $_extention = end($_imgArray);
        $_random = rand();
        $_new_imgName = 'Feature_' . $_random . '.' . $_extention;
        $_target = $_picture['tmp_name'];
        $_destination = $_SERVER["DOCUMENT_ROOT"] . '/CIT/moderna/img/features/' . $_new_imgName;
        $_move = move_uploaded_file($_target, $_destination);
        // process end 
        require_once '../inc/env.php';
        $_ftop_insert = "INSERT INTO features (picture, title, details, status) VALUES ('$_new_imgName','$_title','$_details','$_status')";
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
