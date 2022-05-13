<?php

include("../includes/connection.php");

$full_name = mysqli_real_escape_string($conn, trim($_POST['full_name']));

$parent_name = mysqli_real_escape_string($conn, trim($_POST['parent_name']));

$adm_date = mysqli_real_escape_string($conn, trim($_POST['adm_date']));

$student_category = mysqli_real_escape_string($conn, trim($_POST['student_category']));

$sex = mysqli_real_escape_string($conn, trim($_POST['sex']));

$dob = mysqli_real_escape_string($conn, trim($_POST['dob']));

$age = mysqli_real_escape_string($conn, trim($_POST['age']));

$phone1 = mysqli_real_escape_string($conn, trim($_POST['phone1']));

$phone2 = mysqli_real_escape_string($conn, trim($_POST['phone2']));

$insert_student = "INSERT INTO tbl_student (student_name, parent_name, admission_date, category, sex, date_of_birth, age, phone_no_one, phone_no_two)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$insert_stmt = mysqli_prepare($conn, $insert_student);

mysqli_stmt_bind_param($insert_stmt, "sssssssss", $full_name, $parent_name, $adm_date, $student_category, $sex, $dob, $age, $phone1, $phone2);

if (mysqli_stmt_execute($insert_stmt) or die(mysqli_error($conn))) {

    echo "Student Registered successfully";
} else {

    echo "Data insertion failure";
}
