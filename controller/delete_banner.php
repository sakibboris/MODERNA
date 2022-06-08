<?php
session_start();
include_once '../inc/env.php';
$_id = $_GET['id'];
$_delete = "DELETE FROM banners WHERE id = '$_id'";
$_query = mysqli_query($_conn, $_delete);
header('Location: ../dashboard/all_banner.php');