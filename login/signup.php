<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGN UP</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="registration-form">
        <form action="./store.php" method="POST" enctype="multipart/form-data">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <div class="text-warning">
                    <?= isset($_SESSION['success_message']) ? $_SESSION['success_message'] : '' ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Username" name="name">
                <span class="text-danger">
                    <?= isset($_SESSION['error_name']) ? $_SESSION['error_name'] : '' ?>
                </span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Email" name="email">
                <span class="text-danger">
                    <?= isset($_SESSION['error_email']) ? $_SESSION['error_email'] : '' ?>
                </span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Password" name="password">
                <span class="text-danger">
                    <?= isset($_SESSION['error_password']) ? $_SESSION['error_password'] : '' ?>
                </span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                <span class="text-danger">
                    <?= isset($_SESSION['error_con_password']) ? $_SESSION['error_con_password'] : '' ?>
                </span>
            </div>
            <div class="form-group">
                <input type="file" class="form-control item" id="profile_img" name="profile_img" placeholder="upload a picture">
                <span class="text-danger">
                    <?= isset($_SESSION['error_profile']) ? $_SESSION['error_profile'] : '' ?>
                </span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inputStatus" name="status" value="1">
                <label class="form-check-label" for="inputStatus">Active Profile</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" name="submit">Create Account</button>
            </div>
            <div id="emailHelp" class="form-text text-center text-dark">
                Registered?
                <a href="./index.php" class="text-info text-bold"><strong>Log in</strong></a>
            </div>
        </form>
        <div class="social-media"> </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="./main.js"></script>
</body>

</html>
<?php
session_unset();
?>