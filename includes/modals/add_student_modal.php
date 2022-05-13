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

            <label for="parent_name">Parent/Guardian name</label>

            <input type="text" name="parent_name" id="parent_name" class="inp-padding">

            <label for="adm_date">Admission Date</label>

            <input type="date" name="adm_date" id="adm_date" class="inp-padding">

            <label for="student_category">Category</label>

            <select name="student_category" id="student_category" class="inp-padding">
                <option value="">Select</option>
                <?php for ($i = 0; $i < count($all_category_array); $i++) { ?>
                    <option value='<?php echo $all_category_array[$i]['category_name'] ?>'><?php echo $all_category_array[$i]['category_name']; ?></option>
                <?php } ?>
            </select>

            <div class="row">
                <label for="amount_payable" class="content">Amount payable</label>
                <label for="amount_paid" class="content">Amount paid</label>
                <label for="status" class="content">Status</label>
            </div>

            <div class="row">
                <input type="text" name="amount_payable" id="amount_payable" class="inp-padding content">
                <input type="text" name="amount_paid" id="amount_paid" class="inp-padding content">
                <input type="text" name="status" id="status" class="inp-padding content">
            </div>

            <label for="sex">Sex</label>

            <select name="sex" id="sex" class="inp-padding">
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <div class="row">
                <label for="dob" class="content">Date of birth</label>
                <label for="age" class="content">Age</label>
            </div>

            <div class="row">
                <input type="date" name="dob" id="dob" class="inp-padding content" onchange="getAge(this.value);">
                <input type="text" name="age" id="age" class="inp-padding content">
            </div>

            <div class="row">
                <label for="phone1" class="content">Phone number 1</label>
                <label for="phone2" class="content">Phone number 2</label>
            </div>

            <div class="row">
                <input type="text" name="phone1" id="phone1" class="inp-padding content" style="width: 100%;">
                <input type="text" name="phone2" id="phone2" class="inp-padding content" style="width: 100%;">
            </div>

            <div class="row">
                <button id="add_student" class="add-btn modal-btn"><b>ADD STUDENT</b></button>
            </div>

        </div>

    </div>

</div>