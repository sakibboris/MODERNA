<?php
session_start();

if (isset($_POST['submit'])) {
    $_picture = $_FILES['picture'];
    $_video_link = $_POST['video_link'];
    $_first_icon = $_POST['first_icon'];
    $_first_title = $_POST['first_title'];
    $_second_icon = $_POST['second_icon'];
    $_second_title = $_POST['second_title'];
    $_first_description = $_POST['first_description'];
    $_second_description = $_POST['second_description'];
    $_stat = $_POST['status'];
    if (empty($_stat)) {
        $_status = 0;
    } else {
        $_status = 1;
    }
    $_rediract = "Location: ../dashboard/add_why_us_info.php";
    $_rediract_con = "Location: ../dashboard/view_why_us.php";
    // picture validation
    if (empty($_picture['name'])) {
        $_SESSION['error_picture'] = "Input Picture";
        header($_rediract);
    } else if ($_picture['size'] > 655360) {
        $_SESSION['error_picture'] = "Input a picture less then 5MB!";
        header($_rediract);
    }
    // first name validation
    if (empty($_video_link)) {
        $_SESSION['error_link'] = "Please input video link here";
        header($_rediract);
    }
    // last name validation
    if (empty($_first_icon)) {
        $_SESSION['error_f_icon'] = "Please input first icon here";
        header($_rediract);
    }
    // last name validation
    if (empty($_first_title)) {
        $_SESSION['error_f_title'] = "Please input first title here";
        header($_rediract);
    }
    // last name validation
    if (empty($_second_icon)) {
        $_SESSION['error_s_icon'] = "Please input second icon here";
        header($_rediract);
    }
    // last name validation
    if (empty($_second_title)) {
        $_SESSION['error_s_title'] = "Please input second title here";
        header($_rediract);
    }
    // last name validation
    if (empty($_first_description)) {
        $_SESSION['error_f_details'] = "Please First Description here";
        header($_rediract);
    }
    // last name validation
    if (empty($_second_description)) {
        $_SESSION['error_s_details'] = "Please Second Description here";
        header($_rediract);
    }
    // validation end here
    // insert data into database 
    else {
        require_once '../inc/env.php';

        // image process.
        $_imgName = $_picture['name'];
        $_imgArray = explode('.', $_imgName);
        $_extention = end($_imgArray);
        $_random = rand();
        $_new_imgName = 'USER_' . $_random . '.' . $_extention;
        $_target = $_picture['tmp_name'];
        $_destination = $_SERVER["DOCUMENT_ROOT"] . '/CIT/moderna/img/why_us/' . $_new_imgName;
        $_move = move_uploaded_file($_target, $_destination);

        // file insert operations.
        $_insert = "INSERT INTO why_us (picture, video_link, first_icon, first_title, first_description, second_icon, second_title, second_description, status) VALUES ('$_new_imgName','$_video_link','$_first_icon','$_first_title','$_first_description','$_second_icon','$_second_title','$_second_description','$_status')";
        $_query = mysqli_query($_conn, $_insert);
        if ($_query) {
            $_SESSION['success'] = 'Data Inserted Successfully';
            header($_rediract_con);
        } else {
            $_SESSION['success'] = 'Data is not Inserted';
            header($_rediract_con);
        }
    }
} else {
    echo "please write something";
}
