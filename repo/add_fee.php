<?php

include("../includes/connection.php");

$fee_amount = mysqli_real_escape_string($conn, trim($_POST['fee_amount']));

$category_of = mysqli_real_escape_string($conn, trim($_POST['category_of']));

$fee_start_at = mysqli_real_escape_string($conn, trim($_POST['fee_start_at']));

$fee_end_at = mysqli_real_escape_string($conn, trim($_POST['fee_end_at']));

$insert_fee = "INSERT INTO tbl_fee (fee_amount, category_id, start_at, end_at)
                VALUES (?, ?, ?, ?)";

$insert_stmt = mysqli_prepare($conn, $insert_fee);

mysqli_stmt_bind_param($insert_stmt, "iiss", $fee_amount, $category_of, $fee_start_at, $fee_end_at);

if (mysqli_stmt_execute($insert_stmt) or die(mysqli_error($conn))) {

    echo "Fee Structure Added successfully";
} else {

    echo "Fee could not be added";
}