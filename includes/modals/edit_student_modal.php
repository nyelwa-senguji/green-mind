<div id="edit_student_modal_<?= $all_students_array[$i]['student_id'] ?>" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <b>EDIT STUDENT INFORMATION</b>
            <span><i class="fas fa-times" onclick="closeModal(<?= $all_students_array[$i]['student_id'] ?>);" style="cursor: pointer;"></i></span>
        </div>

        <hr class="modal-hr" align="left">

        <div class="modal-body">

            <label for="edit_full_name">Student name</label>

            <input type="text" name="edit_full_name" id="edit_full_name_<?= $all_students_array[$i]['student_id'] ?>" class="inp-padding">

        </div>

    </div>

</div>