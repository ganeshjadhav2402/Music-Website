<?php
session_start();

include("db_connect.php");
$msg = false;
if (isset($_POST["user_name"])) {
    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];

    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password."' limit 1";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        header("Location: index.php");
    } else {
        $msg = "Inccorect Password.!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="shortcut icon" href="images/download2.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
    <title>Music App || Login</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name:</label>
                        <input type="text" name="user_name" placeholder="Enter Your Name.." required>
                    </div>
                    <div class="card">
                        <label for="password">Password:</label>
                        <input type="password" name="user_password" placeholder="Enter Your Passsowrd.." required>
                    </div>
                    <input type="submit" value="Log In" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id="" required><span>Remeber Me.</span>
                    </div>
                    <p>Don't have a account yet?<a href="signup.php">Sing Up</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="imac.png" alt="login" width="550px">
            <!-- <h3>Incoreect Password Hey Tera</h3> -->
            <?php
               echo ("<h3>" . $msg . "</h3>");
            ?>
        </div>
    </header>
</body>

</html>