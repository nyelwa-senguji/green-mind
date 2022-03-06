<?php

for ($i = 0; $i < count($all_students_array); $i++) {

?>
    <div id="add_student_fee_modal_<?= $all_students_array[$i]['student_id']?>" class="modal">

        <div class="modal-content">

            <div class="modal-header">
                <b>ADD STUDENT FEE</b>
                <span><i class="fas fa-times" onclick="closeModal(<?= $all_students_array[$i]['student_id']?>);" style="cursor: pointer;"></i></span>
            </div>

            <hr class="modal-hr" align="left">

            <div class="modal-body">

                <label for="fee_full_name">Student name</label>

                <input type="text" name="fee_full_name" id="fee_full_name_<?= $all_students_array[$i]['student_id']?>" class="inp-padding">

            </div>

        </div>

    </div>
<?php
}
?>