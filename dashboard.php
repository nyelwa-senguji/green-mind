<?php

include("./includes/check_session.php");

include("logout.php");

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

            <tr>
                <td>1</td>
                <td>Abdallah Alli</td>
                <td>Alli maulid</td>
                <td>12/09/2020</td>
                <td>male</td>
                <td>3</td>
                <td>0789674523</td>
                <td><i class="fas fa-plus" style="margin-right: 6px; font-size: small;"></i> | <i class="fas fa-eye" style="margin-left: 6px; font-size: small;"></i></td>
                <td><i class="fas fa-edit" style="margin-right: 6px; font-size: small;"></i> | <i class="fas fa-trash-alt" style="margin-left: 6px; font-size: small;"></i></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Abdallah Alli</td>
                <td>Alli maulid</td>
                <td>12/09/2020</td>
                <td>male</td>
                <td>3</td>
                <td>0789674523</td>
                <td><i class="fas fa-plus" style="margin-right: 6px; font-size: small;"></i> | <i class="fas fa-eye" style="margin-left: 6px; font-size: small;"></i></td>
                <td><i class="fas fa-edit" style="margin-right: 6px; font-size: small;"></i> | <i class="fas fa-trash-alt" style="margin-left: 6px; font-size: small;"></i></td>
            </tr>
        </table>

    </div>

    <div class="item-d"></div>

    <div id="add_student_modal" class="modal">

        <div class="modal-content">

            <div class="modal-header">
                <b>ADD NEW STUDENT</b>
                <span><i class="fas fa-times" id="close_add_student_modal" style="cursor: pointer;"></i></span>
            </div>

            <hr class="modal-hr" align="left">

            <div class="modal-body">

                <label for="full_name">Student name</label>

                <input type="text" name="full_name" id="full_name" class="inp-padding">

                <label for="full_name">Parent/Guardian name</label>

                <input type="text" name="parent_name" id="full_name" class="inp-padding">

                <label for="reg_date">Admission Date</label>

                <input type="date" name="reg_date" id="reg_date" class="inp-padding">

                <label for="sex">Sex</label>

                <input type="text" name="sex" id="sex" class="inp-padding">

                <div class="row">
                    <label for="dob" class="content">Date of birth</label>
                    <label for="age" class="content">Age</label>
                </div>

                <div class="row">
                    <input type="date" name="dob" id="dob" class="inp-padding content">
                    <input type="text" name="age" id="age" class="inp-padding content">
                </div>

                <div class="row">
                    <label for="phone1" class="content">Phone number 1</label>
                    <label for="phone2" class="content">Phone number 2</label>
                </div>

                <div class="row">
                    <input type="tel" name="phone1" id="phone1" class="inp-padding content" style="width: 100%;">
                    <input type="tel" name="phone2" id="phone2" class="inp-padding content" style="width: 100%;">
                </div>

                <div class="row">
                    <button class="add-btn modal-btn"><b>ADD STUDENT</b></button>
                </div>

                <!-- <div class="row">
                    <label for="amount_payable" class="content">Amount payable</label>
                    <label for="amount_remaining" class="content">Amount remaining</label>
                </div>

                <div class="row">
                    <input type="text" name="amount_payable" id="amount_payable" class="inp-padding content">
                    <input type="text" name="amount_remaining" id="amount_remaining" class="inp-padding content">
                </div>

                <div class="row">
                    <label for="fee_year" class="content">Fee year</label>
                    <label for="fee_month" class="content">Fee month</label>
                </div>

                <div class="row">
                    <select name="fee_year" id="fee_year" style="width: 100%;">
                        <option value="">Select year</option>
                    </select>
                    <select name="fee_month" id="fee_month" class="inp-padding content" style="width: 100%;">
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
                </div> -->
            </div>

        </div>

    </div>

</body>

<script src="js/main.js"></script>

</html>