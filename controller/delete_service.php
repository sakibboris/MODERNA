<?php
session_start();
include_once '../inc/env.php';
$_ij_id = $_GET['id'];
$_ij_delete = "DELETE FROM `posts` WHERE id = '$_ij_id'";
$_ij_query = mysqli_query($_conn, $_ij_delete);
header('Location: ../dashboard/all_post.php');