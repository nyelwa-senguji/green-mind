<?php

include("../includes/connection.php");

session_start();

$username = mysqli_real_escape_string($conn, trim($_POST['username']));

$password = mysqli_real_escape_string($conn, trim($_POST['password']));

$check_if_user_exists = "SELECT id, username, password
                            FROM tbl_admin
                            WHERE username = ? and password = ?";

$stmt = mysqli_prepare($conn, $check_if_user_exists);

mysqli_stmt_bind_param($stmt, "ss", $username, $password);

mysqli_stmt_execute($stmt);

mysqli_stmt_store_result($stmt);

if(mysqli_stmt_num_rows($stmt) > 0){

    mysqli_stmt_bind_result($stmt, $id, $username, $password);

    mysqli_stmt_fetch($stmt);

    $_SESSION['userID'] = $id;

    echo "Success";
}