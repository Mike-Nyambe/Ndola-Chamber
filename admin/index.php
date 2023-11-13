<?php

require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Home - Secure Login and Registration</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <style>
    html,
    body {
        height: 100%;
        width: 100%;
        margin: unset;
    }
    </style>
</head>

<body class="bg-primary bg-opcaity-75 bg-gradient">
    <div class="container h-100 d-flex flex-column align-items-center justify-content-center">
        <div class="col-6 mb-3">
            <h1 class="text-center text-light fw-bolder">PHP Secure Login and Registration</h1>
            <hr class="border-light">
        </div>
        <div class="col-lg-5">
            <div class="card rounded-0">
                <div class="card-body rounded-0">
                    <div class="container-fluid">
                        <h3 class="text-center">Welcome!</h3>
                        <hr>
                        <h4>Your Account Details:</h4>
                        <dl>
                            <dt>First Name</dt>
                            <dd class="ps-4"><?= $_SESSION['first_name'] ?></dd>
                            <dt>Middle Name</dt>
                            <dd class="ps-4"><?= $_SESSION['middle_name'] ?></dd>
                            <dt>Last Name</dt>
                            <dd class="ps-4"><?= $_SESSION['last_name'] ?></dd>
                            <dt>Username</dt>
                            <dd class="ps-4"><?= $_SESSION['username'] ?></dd>
                        </dl>
                    </div>
                    <div class="d-grid mt-3">
                        <a href="logout.php" class="btn btn-sm btn-danger bg-gradient rounded-0">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
$conn->close();
?>
</body>

</html>