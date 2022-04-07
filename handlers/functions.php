<?php
function get_all_students($conn)
{

    $data = array();

    $d = array();

    $select_all_students = "SELECT * FROM tbl_student";

    $stmt = mysqli_prepare($conn, $select_all_students);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $student_id, $student_name, $parent_name, $admission_date, $sex, $date_of_birth, $age, $phone_no_one, $phone_no_two);

    while (mysqli_stmt_fetch($stmt)){

        $d['student_id'] = $student_id;

        $d['student_name'] = $student_name;

        $d['parent_name'] = $parent_name;

        $d['admission_date'] = $admission_date;

        $d['sex'] = $sex;

        $d['date_of_birth'] = $date_of_birth;

        $d['age'] = $age;

        $d['phone_no_one'] = $phone_no_one;

        $d['phone_no_two'] = $phone_no_two;

        array_push($data, $d);

    }

    return $data;
}

function get_all_fees($conn)
{
    $data = array();

    $d = array();

    $select_all_categories = "SELECT category_id, category_name FROM tbl_category";

    $stmt = mysqli_prepare($conn, $select_all_categories);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $category_id, $category_name);

    while (mysqli_stmt_fetch($stmt)){

        $d['category_id'] = $category_id;

        $d['category_name'] = $category_name;

        array_push($data, $d);

    }

    return $data;
}
