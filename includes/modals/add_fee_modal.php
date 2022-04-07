<div id="add_fee_modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <b>ADD FEE STRUCTURE</b>
            <span><i class="fas fa-times" id="close_add_fee_modal" style="cursor: pointer;"></i></span>
        </div>

        <hr class="modal-hr" align="left">

        <div class="modal-body">

            <label for="fee_amount">Fee amount</label>

            <input type="text" name="fee_amount" id="fee_amount" class="inp-padding">

            <label for="category_of">Category of</label>

            <select name="category_of" id="category_of" class="inp-padding">
                <option value="">Select</option>
                <?php for ($i = 0; $i < count($all_category_array); $i++) { ?>
                    <option value='<?php echo $all_category_array[$i]['category_id'] ?>'><?php echo $all_category_array[$i]['category_name']; ?></option>
                <?php } ?>
            </select>

            <label for="fee_start_at">Start At</label>

            <input type="date" name="fee_start_at" id="fee_start_at" class="inp-padding">

            <label for="fee_end_at">End At</label>

            <input type="date" name="fee_end_at" id="fee_end_at" class="inp-padding">

            <div class="row">
                <button id="add_fee_structure" class="add-btn modal-btn"><b>ADD FEE</b></button>
            </div>

        </div>

    </div>

</div>