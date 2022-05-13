<?php

include("../includes/connection.php");

$student_id = mysqli_real_escape_string($conn, trim($_POST['student_id']));

$update_student = "UPDATE tbl_student SET is_Deleted = 'Yes' WHERE student_id = ? ";

$update_stmt = mysqli_prepare($conn, $update_student);

mysqli_stmt_bind_param($update_stmt, "i", $student_id);

if (mysqli_stmt_execute($update_stmt) or die(mysqli_error($conn))) {

    echo "Student successfully deleted";
} else {

    echo "Student could not deleted";
}