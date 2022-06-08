<?php
session_start();
$_submit = $_POST['submit'];
if (isset($_submit)) {
    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_confirm_password = $_POST['confirm_password'];
    $_enc_password = sha1($_password);
    $_profile_img = $_FILES['profile_img'];
    $_stat = $_POST['status'];
    if ($_stat == '') {
        $_status = 0;
    } else {
        $_status = 1;
    }
    $_rediract = "Location: ./signup.php";
    $_rediract_login = "Location: ./index.php";

    // validation starts here
    // name validation
    if (empty($_name)) {
        $_SESSION['error_name'] = "Input your name";
        header($_rediract);
    }

    // email validation
    if (empty($_email)) {
        $_SESSION['error_email'] = "Input your email";
        header($_rediract);
    } else if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_email'] = "Input validate Email";
        header($_rediract);
    }

    // password validation
    if (empty($_password)) {
        $_SESSION['error_password'] = "Input your Password";
        header($_rediract);
    } else if (strlen($_password) < 8) {
        $_SESSION['error_password'] = "Input a password longer then 8 character";
        header($_rediract);
    }

    // confirm passsword validation
    if (empty($_confirm_password)) {
        $_SESSION['error_con_password'] = "Input Confirm password";
        header($_rediract);
    } else if ($_password != $_confirm_password) {
        $_SESSION['error_con_password'] = 'Insert same password in both field';
        $_SESSION['error_password'] = 'Insert same password in both field';
        header($_rediract);
    }

    // picture validation
    if (empty($_profile_img['name'])) {
        $_SESSION['error_profile'] = "Input Picture";
        header($_rediract);
    } else if ($_profile_img['size'] > 2097152) {
        $_SESSION['error_profile'] = "Input a picture less then 2MB!";
        header($_rediract);
    }

    // validation end here
    // insert data into database 
    else {
        include '../inc/env.php';

        // image process.
        $_imgName = $_profile_img['name'];
        $_imgArray = explode('.', $_imgName);
        $_extention = end($_imgArray);
        $_random = rand();
        $_new_imgName = 'USER_' . $_random . '.' . $_extention;
        $_target = $_profile_img['tmp_name'];
        $_destination = $_SERVER["DOCUMENT_ROOT"] . '/CIT/moderna/img/avatar/' . $_new_imgName;
        $_move = move_uploaded_file($_target, $_destination);

        // file insert operations.
        $_insert = "INSERT INTO users(name, email, password, profile_img, status) VALUES ('$_name','$_email','$_enc_password','$_new_imgName','$_status')";
        $_query = mysqli_query($_conn, $_insert);
        if ($_query) {
            $_SESSION['success'] = 'Data Inserted Successfully';
            header($_rediract_login);
        } else {
            $_SESSION['success'] = 'Data is not Inserted';
            header($_rediract_login);
        }
    }
}
