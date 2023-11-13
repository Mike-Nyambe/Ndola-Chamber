<?php
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

require_once("auth.php");
$connection = create_mysql_connection();

// Process Login
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // username
    $uname = addslashes($connection->real_escape_string($_POST['username']));
    // Check user if Exist
    $sql = "SELECT * FROM `accounts` where `username` = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();
   if($result->num_rows > 0){
    // If user data exist
    $details = $result->fetch_assoc();
    // verify given password
    $password_verify = password_verify($_POST['password'], $details['password']);
    if($password_verify){
        // Save user details on session
        foreach($details as $k => $v){
            $_SESSION[$k] = $v;
        }
        header('location: dashbord.php');
    }else{
        // If Password does not match
        $err = "Invalid match of username and password.";
    }
   }else{
        // If User details does not exist
    $err = "Invalid username.";
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
    <title>NDCCI Login</title>
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

<body class="bg-danger bg-opcaity-75 bg-gradient">
    <div class="container my-auto d-flex flex-column align-items-center justify-content-center h-100">
        <h2 class="text-center text-light">Login Page</h2>
        <hr>
        <div class="col-lg-5 mx-auto">
            <div class="card rounded-0">
                <div class="card-body rounded-0">
                    <div class="container-fluid">
                        <form id="login-form" action="" method="POST">
                            <div class="mb-3">
                                <label for="username"><b>Username</b></label>
                                <input type="text" class="form-control  rounded-0" id="username" name="username"
                                    required="required"
                                    value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>"
                                    placeholder="myusername">
                            </div>
                            <div class="mb-3">
                                <label for="password"><b>Password</b></label>
                                <input type="password" class="form-control  rounded-0" id="password" name="password"
                                    required="required" placeholder="********">
                            </div>
                            <?php if(isset($err) && !empty($err)): ?>
                            <div class="alert alert-danger">
                                <?= $err ?>
                            </div>
                            <?php endif; ?>

                        </form>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-danger rounded-0" form="login-form">Login</button>
                </div>
            </div>
        </div>
    </div>
    <?php
$connection->close();
?>
</body>

</html>