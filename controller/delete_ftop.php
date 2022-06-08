<?php
session_start();
include_once '../inc/env.php';
$_id = $_GET['id'];
$_delete = "DELETE FROM feature_top WHERE id = '$_id'";
$_query = mysqli_query($_conn, $_delete);
header('Location: ../dashboard/view_feature_top.php');