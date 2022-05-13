var user_id;

/**********  ACTION MODALS **********/
var add_student_fee_modal;

var view_student_fee_modal;

var edit_student_modal;

function selectedModal(id) {
  /**********  OPEN ADD STUDENT FEE MODAL **********/
  add_student_fee_modal = document.getElementById(
    "add_student_fee_modal_" + id
  );
  add_student_fee_modal.style.display = "block";
  /**********  END OPEN ADD STUDENT FEE MODAL **********/

  /**********  OPEN VIEW STUDENT FEE MODAL **********/
  view_student_fee_modal = document.getElementById(
    "view_student_fee_modal_" + id
  );
  view_student_fee_modal.style.display = "block";
  /**********  END OPEN VIEW ADD STUDENT FEE MODAL **********/

  /**********  OPEN EDIT STUDENT MODAL **********/
  edit_student_modal = document.getElementById("edit_student_modal_" + id);
  edit_student_modal.style.display = "block";
  /**********  END OPEN EDIT STUDENT MODAL **********/

  user_id = id;
}

function closeModal(id) {
  /**********  CLOSE STUDENT FEE MODAL **********/
  add_student_fee_modal = document.getElementById(
    "add_student_fee_modal_" + id
  );
  add_student_fee_modal.style.display = "none";
  /**********  END CLOSE STUDENT FEE MODAL **********/

  /**********  CLOSE STUDENT FEE MODAL **********/
  view_student_fee_modal = document.getElementById(
    "view_student_fee_modal_" + id
  );
  view_student_fee_modal.style.display = "none";
  /**********  END CLOSE STUDENT FEE MODAL **********/

  /**********  CLOSE EDIT STUDENT MODAL **********/
  edit_student_modal = document.getElementById("edit_student_modal_" + id);
  edit_student_modal.style.display = "none";
  /**********  END CLOSE EDIT STUDENT MODAL **********/
}

/**********  END ACTION MODALS **********/

/**********  DELETE ROW **********/
function deleteRow(r, id) {
  var student_id = id;
  $.ajax({
      type: "POST",
      url: "repo/delete_student.php",
      data: {
          student_id: student_id
      },
      success: function (response) {
          alert(response);
          var i = r.parentNode.parentNode.rowIndex;
          document.getElementById("result_table").deleteRow(i);
          location.reload();
      }
  });
}
/**********  END DELETE ROW **********/

/**********  YEAR JS **********/
var dateDropdown = document.getElementById("year");

var currentYear = new Date().getFullYear();
var earliestYear = 2022;
while (currentYear >= earliestYear) {
  var dateOption = document.createElement("option");
  dateOption.text = currentYear;
  dateOption.value = currentYear;
  dateDropdown.add(dateOption);
  currentYear -= 1;
}
/**********  END YEAR JS **********/

$(document).ready(function () {
  $("#add_student").click(function (e) {
    e.preventDefault();
    addStudent();
  });

  $("#add_fee_structure").click(function (e) {
    e.preventDefault();
    addFee();
  });

  $("#add_category").click(function (e) {
    e.preventDefault();
    addCategory();
  });

  $("#result_table").on("click", ".add_fee", function (e) {
    e.preventDefault();
    var name = $(this).data("name");
    $("#fee_full_name_" + user_id).val(name);
  });

  $("#result_table").on("click", ".view_fee", function (e) {
    e.preventDefault();
    var name = $(this).data("name");
    $("#view_fee_full_name_" + user_id).val(name);
  });

  $("#result_table").on("click", ".edit_student", function (e) {
    e.preventDefault();
    var name = $(this).data("name");
    $("#edit_full_name_" + user_id).val(name);
  });
});
