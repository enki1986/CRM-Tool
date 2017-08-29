<?php

$server = "localhost";
$user_name = "root";
$user_password = "admin";
$dbname = "cms";

$conn = mysqli_connect($server, $user_name, $user_password, $dbname);

if ($conn->connect_error) {
    die ("connection failed: " . $conn->connect_error);
}

?>
