<div id="add_student_fee_modal_<?= $all_students_array[$i]['student_id'] ?>" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <b>ADD STUDENT FEE</b>
            <span><i class="fas fa-times" onclick="closeModal(<?= $all_students_array[$i]['student_id'] ?>);" style="cursor: pointer;"></i></span>
        </div>

        <hr class="modal-hr" align="left">

        <div class="modal-body">

            <label for="fee_full_name">Student name</label>

            <input type="text" name="fee_full_name" id="fee_full_name_<?= $all_students_array[$i]['student_id'] ?>" class="inp-padding">

            <label for="amount">Amout</label>

            <input type="text" name="amount" id="amount" class="inp-padding">

            <label for="status">Status</label>

            <input type="text" name="status" id="status" class="inp-padding">

            <label for="start_at">Start At</label>

            <input type="date" name="start_at" id="start_at" class="inp-padding">

            <label for="end_at">End At</label>

            <input type="date" name="end_at" id="end_at" class="inp-padding">

            <div class="row">
                <button id="add_student_fee" class="add-btn modal-btn"><b>ADD FEE</b></button>
            </div>

        </div>

    </div>

</div>