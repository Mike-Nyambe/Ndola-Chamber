<?php
require_once("auth.php");

// Database Functions
function create_mysql_connection() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database_name = "ndolaChamber";  // Specify your database name here

    $connection = new mysqli($host, $username, $password, $database_name);

    if ($connection->connect_error) {
        die("MySQL connection failed! " . $connection->connect_error);
    }

    return $connection;
}

$connection = create_mysql_connection();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = addslashes($connection->real_escape_string($_POST['email']));
    $fname = addslashes($connection->real_escape_string($_POST['first_name']));
    $lname = addslashes($connection->real_escape_string($_POST['last_name']));
    $uname = addslashes($connection->real_escape_string($_POST['username']));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // Check username duplication
    $check = $connection->query("SELECT id FROM `accounts` where `username` = '{$uname}'")->num_rows;
    if($check > 0){
        $err = "Username is already taken!";
    }else{
        $sql = "INSERT INTO `accounts` (`email`, `first_name`, `last_name`, `username`, `password`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssss", $email, $fname, $lname, $uname, $password);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $success = "Account has been created succesfully. <a href='login.php'>Login Now!</a>";
            $_SESSION['success_msg'] = $success;
            header('location: register.php');
            unset($_POST);
            exit;
        }else{
            $err = "Creating your account has been failed for some reason!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registration - Secure Login and Registration</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <style>
    html,
    body {
        min-height: 100%;
        width: 100%
    }
    </style>
</head>

<body class="bg-primary bg-opcaity-75 bg-gradient">
    <div class="container my-5 py-4">
        <h2 class="text-center text-light">Create New Account</h2>
        <div class="col-lg-5 mx-auto">
            <hr class="border-light" height="2px">
            <div class="card rounded-0">
                <div class="card-body rounded-0">
                    <div class="container-fluid">
                        <form id="registration-form" action="" method="POST">
                            <div class="mb-3">
                                <label for="email"><b>Email</b> <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-0" id="email" name="email"
                                    required="required" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"
                                    placeholder="John@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="first_name"><b>First Name</b></label>
                                <input type="text" class="form-control rounded-0" id="first_name" name="first_name"
                                    value="<?= isset($_POST['first_name']) ? $_POST['first_name'] : '' ?>"
                                    placeholder="first name">
                            </div>
                            <div class="mb-3">
                                <label for="last_name"><b>Last Name</b> <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-0" id="last_name" name="last_name"
                                    required="required"
                                    value="<?= isset($_POST['last_name']) ? $_POST['last_name'] : '' ?>"
                                    placeholder="last name">
                            </div>
                            <div class="mb-3">
                                <label for="username"><b>Username</b></label>
                                <input type="text" class="form-control rounded-0" id="username" name="username"
                                    required="required"
                                    value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>"
                                    placeholder="myusername">
                            </div>
                            <div class="mb-3">
                                <label for="password"><b>Password</b></label>
                                <input type="password" class="form-control rounded-0" id="password" name="password"
                                    required="required" placeholder="********">
                            </div>
                            <?php if(isset($_SESSION['success_msg']) && !empty($_SESSION['success_msg'])): ?>
                            <div class="alert alert-success">
                                <?= $_SESSION['success_msg'] ?>
                            </div>
                            <?php unset($_SESSION['success_msg']); ?>
                            <?php else: ?>

                            <?php endif; ?>
                            <?php if(isset($err) && !empty($err)): ?>
                            <div class="alert alert-danger">
                                <?= $err ?>
                            </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary rounded-0" form="registration-form">Create Account</button>
                </div>
            </div>
        </div>
    </div>
    <?php
$connection->close();
?>
</body>

</html>