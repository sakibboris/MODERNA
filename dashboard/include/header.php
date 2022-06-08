<?php
session_start();
include_once '../inc/env.php';
if (!isset($_SESSION['access'])) {
    $_SESSION['success'] = 'You are not a authentic user to access that directory';
    header("Location: ../login/index.php");
}
$_user_id = $_SESSION['user_id'];
$_select = "SELECT name, email, profile_img from users WHERE id = '$_user_id'";
$_query = mysqli_query($_conn, $_select);
$_fetch = mysqli_fetch_assoc($_query);

// echo '<pre>';
// print_r($_fetch);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="css/nice-select.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="css/gijgo.min.css" />
    <link rel="stylesheet" href="./new_card/new_card.scss" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/tagsinput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="css/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="css/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="css/material-icons.css" />
    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="crm_body_bg">



    <!-- main content part here -->

    <!-- sidebar  -->
    <!-- sidebar part here -->
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.php"><img src="https://creativeitinstitutectg.com/storage/logo/logo_6055bcd524c62.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu" class="text-uppercase">
            <li class="">
                <a href="#" aria-expanded="true">
                    <!-- <i class="fas fa-th"></i> -->
                    <i class="fas fa-columns"></i>
                    <span>dashboard</span>
                </a>
                <ul>
                    <li><a class="active" href="#">Classic</a></li>
                    <li><a href="#">Minimal</a></li>
                </ul>

            </li>
            <li class=" ">
                <a href="#" aria-expanded="true">
                    <!-- <i class="fas fa-th"></i> -->
                    <i class="fas fa-columns"></i>
                    <span>Banners</span>
                </a>
                <ul>
                    <li><a class="active" href="./add_banner.php">Add Banner</a></li>
                    <li><a href="./all_banner.php">All Banner</a></li>
                </ul>
            </li>
            <li class=" ">
                <a href="#" aria-expanded="true">
                    <!-- <i class="fas fa-th"></i> -->
                    <i class="fas fa-columns"></i>
                    <span>Services</span>
                </a>
                <ul>
                    <li><a class="active" href="./add_post.php">Add Services</a></li>
                    <li><a href="./all_post.php">All Services</a></li>
                </ul>

            </li>
            <li class=" ">
                <a href="#" aria-expanded="true">
                    <!-- <i class="fas fa-th"></i> -->
                    <i class="fas fa-columns"></i>
                    <span>WHY US</span>
                </a>
                <ul>
                    <li><a class="active" href="./add_why_us_info.php">Add WHY US</a></li>
                    <li><a href="./view_why_us.php">WHY US Info</a></li>
                </ul>

            </li>
            <li class=" ">
                <a href="#" aria-expanded="true">
                    <!-- <i class="fas fa-th"></i> -->
                    <i class="fas fa-columns"></i>
                    <span>Features</span>
                </a>
                <ul>
                    <li><a class="active" href="./add_feature_top.php">Add feature top</a></li>
                    <li><a href="./view_feature_top.php">features top info</a></li>
                    <li><a href="./add_features.php">Add features</a></li>
                    <li><a href="./view_features.php">features info</a></li>
                </ul>

            </li>



        </ul>

    </nav>
    <!-- sidebar part end -->
    <!--/ sidebar  -->


    <section class="main_content dashboard_part">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="../img/avatar/<?= $_fetch['profile_img'] ?>" alt="#">
                                <div class="profile_info_iner">
                                    <p>Welcome <?= $_fetch['name'] ?>!</p>
                                    <h5><?= $_fetch['name'] ?></h5>
                                    <div class="profile_info_details">
                                        <a href="../login/logout.php">Log Out<i class="fas fa-sign-out-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ menu  -->