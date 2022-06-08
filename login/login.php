<?php
session_start();
include_once '../inc/env.php';
$_submit = $_POST['submit'];
if (isset($_submit)) {
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_enc_password = sha1($_password);
    $_rediract = 'Location: ./index.php';
    $_rediract_dashboard = 'Location: ../dashboard/index.php';
    // validation start here--im
    // email validation--ss
    if (empty($_email)) {
        $_SESSION['error_email'] = "Input your email";
        header($_rediract);
    } else if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_email'] = "Input validate Email";
        header($_rediract);
    }

    // password validation--im
    if (empty($_password)) {
        $_SESSION['error_password'] = "Input your Password";
        header($_rediract);
    }

    // validation end here--im
    // process start here--im
    else {
        $_select = "SELECT email from users WHERE email = '$_email'";
        $_query = mysqli_query($_conn, $_select);
        if (mysqli_num_rows($_query) > 0) {
            $_select = "SELECT id, password from users WHERE password = '$_enc_password'";
            $_query = mysqli_query($_conn, $_select);
            $_fetch = mysqli_fetch_assoc($_query);
            if (mysqli_num_rows($_query) > 0) {
                $_SESSION['success'] = 'Login Successfully';
                $_SESSION['access'] = true;
                $_SESSION['user_id'] = $_fetch['id'];
                header($_rediract_dashboard);
            } else {
                $_SESSION['error_password'] = 'Password is not matched';
                header($_rediract);
            }
        } else {
            $_SESSION['error_email'] = 'Email is not found in database';
            header($_rediract);
        }
    }
}
