<?php
session_start();

include("db_connect.php");
$msg = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $user_re_password = $_POST["user_re-password"];

    if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
        if ($user_password === $user_re_password) {
            $query = "insert into user (user, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
            mysqli_query($con, $query);
            header("Location: login.php");
        } else {
            $msg = "Password Not Match";
        }
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
    <title>Music App || Sign Up</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>Sign Up</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" id="name" placeholder="Enter Your Name.." required>
                    </div>
                    <div class="card">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" id="email" placeholder="Enter Your Email.." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" id="pass" placeholder="Enter Your Passsowrd.." required>
                    </div>
                    <div class="card">
                        <label for="re-password">Re-Password</label>
                        <input type="password" name="user_re-password" id="pass" placeholder="Enter Your Re-Passsowrd.." required>
                    </div>
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Remeber Me.</span>
                    </div>
                    <p>Already have an account? <a href="login.php">Log In</a></p>
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