<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        .btn-color {
            background-color: #0e1c36;
            color: #fff;
        }

        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
        }

        .cardbody-color {
            background-color: #ebf2fa;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-4 bg-primary">
                    <span class="<?= isset($_SESSION['success']) ? 'text-light m-auto p-2 text-uppercase' : '' ?>">
                        <?= isset($_SESSION['success']) ? $_SESSION['success'] : '' ?>
                    </span>
                    <div class="card-body cardbody-color p-lg-5">
                        <form action="./login.php" method="POST">
                            <h2 class="text-center text-dark">Login Form</h2>
                            <div class="text-center mb-5 text-dark"></div>
                            <div class="text-center mb-4">
                                <i class="fas fa-user-tie" style="font-size: 125px;"></i>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="User email">
                                <div class="text-warning">
                                    <?= isset($_SESSION['error_email']) ? $_SESSION['error_email'] : '' ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <div class="text-warning">
                                    <?= isset($_SESSION['error_password']) ? $_SESSION['error_password'] : '' ?>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-color px-5 mb-5 w-100">Login</button>
                            </div>
                            <div id="emailHelp" class="form-text text-center text-dark">
                                Not Registered?
                                <a href="./signup.php" class="text-dark fw-bold"> Create an Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
session_unset();
?>