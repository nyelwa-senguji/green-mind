<?php

include("../includes/connection.php");

$category_name = mysqli_real_escape_string($conn, trim($_POST['category_name']));

$insert_category = "INSERT INTO tbl_category (category_name)
                VALUES (?)";

$insert_stmt = mysqli_prepare($conn, $insert_category);

mysqli_stmt_bind_param($insert_stmt, "s", $category_name);

if (mysqli_stmt_execute($insert_stmt) or die(mysqli_error($conn))) {

    echo "Category  Added successfully";
} else {

    echo "Category could not be added";
}