<?php
session_start();
include_once '../inc/env.php';
$_id = $_GET['id'];
$_select = "SELECT status FROM banners WHERE id = '$_id'";
$_query = mysqli_query($_conn, $_select);
$_fetch = mysqli_fetch_assoc($_query);

if ($_fetch['status'] == 0) {
    $_status = 1;
} else {
    $_status = 0;
}

$_update = "UPDATE banners SET status = '$_status' WHERE banners.id = '$_id'";
$_query = mysqli_query($_conn, $_update);
header('Location: ../dashboard/all_banner.php');