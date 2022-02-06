<?php

$host = "localhost";

$username = "root";

$database = "greenmind";

$password = "root";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed" . mysqli_connect_error($conn));
}

$database_select = mysqli_select_db($conn, $database);

if (!$database_select) {
    die("Database selection failed: " . mysqli_error($conn));
}
