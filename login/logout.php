<?php
session_start();
session_unset();
session_destroy();
$_rediract = 'Location: ../index.php';
$_SESSION['success'] = "You Don't have access to dashboard";
header($_rediract);