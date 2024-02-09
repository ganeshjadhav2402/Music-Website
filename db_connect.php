<?php

$server_name = "localhost";
$user_name = "root";
$user_pass = "";
$database_name = "music_user";

$con = mysqli_connect($server_name, $user_name, $user_pass, $database_name);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

// else {
//     echo ("Database Succefully Connected");
// }

?>