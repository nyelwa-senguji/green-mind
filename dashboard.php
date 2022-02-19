<?php

include("./includes/connection.php");

include("./includes/check_session.php");

include("logout.php");

include("./handlers/student.php");

$all_students_array = get_all_students($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREENMIND NURSERY | DASHBOARD</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fonts/css/all.css">

    <!--- Phone number for country ---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>

<body class="container">

    <div class="item-a">
        <h3 class="text-color">GREENMIND DAY CARE</h3>
        <form method='post'>
            <input type='submit' name='logout' class="logout-btn" value='LOGOUT'>
        </form>
    </div>

    <div class="item-b"></div>

    <div class="item-c">
        <div class="space-btn-row">
            <div class="header">
                <button class="pdf-btn" id="export_pdf">Export PDF</button>
                <button class="csv-btn" id="export_csv">Export CSV</button>
            </div>

            <div class="header">
                <button class="add-btn" id="add_student_btn"><i class="fas fa-plus" style="margin-right: 6px;"></i> Add New Student</button>
            </div>
        </div>

        <hr width="100%" style="border: #8f8f9d solid 0.2px;">

        <div class="space-btn-row">
            <div>
                <input type="text" name="search" id="search" placeholder="Search by name" class="inp-padding">
            </div>

            <div class="filters">
                <select name="month" id="month">
                    <option value="">Select month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select name="year" id="year">
                    <option value="">Select year</option>
                </select>
                <select name="status" id="status">
                    <option value="">Status</option>
                </select>
            </div>
        </div>

        <table>
            <tr style="color: #fff; background-color: #39ac39;">
                <th style="border-radius: 4px 0px 0px 0px;">S/No</th>
                <th>Student Name</th>
                <th>Parent/Guardian Name</th>
                <th>Date of admission</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Phone number</th>
                <th>Fees</th>
                <th style="border-radius: 0px 4px 0px 0px;">Action</th>
            </tr>

            <?php for ($i = 0; $i < count($all_students_array); $i++) { ?>
                <tr>
                    <td><?= $all_students_array[$i]['student_id'] ?></td>
                    <td><?= $all_students_array[$i]['student_name'] ?></td>
                    <td><?= $all_students_array[$i]['parent_name'] ?></td>
                    <td><?= $all_students_array[$i]['admission_date'] ?></td>
                    <td><?= $all_students_array[$i]['sex'] ?></td>
                    <td><?= $all_students_array[$i]['age'] ?></td>
                    <td><?= $all_students_array[$i]['phone_no_one'] ?></td>
                    <td><i class="fas fa-plus" id="add_student_fee_btn" style="margin-right: 6px; font-size: small;cursor:pointer;"></i> | <i class="fas fa-eye" style="margin-left: 6px; font-size: small;cursor:pointer;"></i></td>
                    <td><i class="fas fa-edit" style="margin-right: 6px; font-size: small;cursor:pointer;"></i> | <i class="fas fa-trash-alt" style="margin-left: 6px; font-size: small;cursor:pointer;"></i></td>
                </tr>
            <?php } ?>

        </table>

    </div>

    <div class="item-d"></div>

    <?php
    include("./includes/modals/add_student_modal.php");
    include("./includes/modals/add_student_fee_modal.php");
    ?>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>