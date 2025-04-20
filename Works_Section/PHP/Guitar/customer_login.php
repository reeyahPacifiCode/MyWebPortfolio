<?php
session_start();
include 'function/con.php';

$Error_Msg = "";

if (isset($_POST['log-in'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (!empty($username) && !empty($password)) {
        $stmt = $con->prepare("SELECT `password`, `customers_id` FROM `customer_tbl` WHERE `username` = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];
            $user_id = $row['customers_id'];

            if (password_verify($password, $hashedPassword)) {
                // Regenerate session ID to prevent session fixation
                session_regenerate_id(true);

                $_SESSION['username'] = $username;
                $_SESSION['customers_id'] = $user_id;

                header("Location: home.php");
                exit();
            } else {
                $Error_Msg = "<div class='alert alert-danger'>Wrong Username or Password!</div>";
            }
        } else {
            $Error_Msg = "<div class='alert alert-warning'>No User Found!</div>";
        }
    } else {
        $Error_Msg = "<div class='alert alert-info'>Enter Username and Password!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="icon" href="img/Icon/icon.png" type="image/x-icon">
        <link rel="icon" href="img/icon/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/phones.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/fa4/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
    .login-container {
        max-width: 500px;
        margin-top: 100px;
    }

    .login-item {
        background: #f7f7f7;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .alert {
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <?php require 'navbar.php';?>


    <div class="container">
        <div class="login-container mx-auto">
            <div class="login-item">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <!-- Form Name -->
                        <legend class="text-center">Login</legend>

                        <?php echo $Error_Msg; ?>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="username">Username</label>
                            <div class="col-md-12">
                                <input id="username" name="username" type="text" placeholder="Enter Username"
                                    class="form-control input-md" required />
                            </div>
                        </div>
                        <br>

                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password</label>
                            <div class="col-md-12">
                                <input id="password" name="password" type="password" placeholder="Enter Password"
                                    class="form-control input-md" required />
                            </div>
                        </div>
                        <br>

                        <!-- Button -->
                        <div class="form-group text-center">
                            <div class="col-md-12">
                                <button id="Login" name="log-in" class="btn btn-success btn-block">Login</button>
                                <a href="customer_signup.php" class="btn btn-info btn-block">I don't have an account</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br><br>

    <?php require 'footer.php';?>

</body>

</html>