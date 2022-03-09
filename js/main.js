$(document).ready(function () {

    $("#add_student").click(function (e) {
        e.preventDefault();
        addStudent();
    });

    $('#result_table').on("click", ".add_fee", function (e) {
        e.preventDefault();
        var name = $(this).data('name');
        $('#fee_full_name_' + user_id).val(name);
    });

    $('#result_table').on("click", ".view_fee", function (e) {
        e.preventDefault();
        var name = $(this).data('name');
        $('#view_fee_full_name_' + user_id).val(name);
        console.log(name);
    });

});

var user_id;

/**********  ADD STUDENT JS **********/
var add_student_modal = document.getElementById("add_student_modal");

var add_student_btn = document.getElementById("add_student_btn");

var close_add_student_modal = document.getElementById("close_add_student_modal");

add_student_btn.onclick = function () {
    add_student_modal.style.display = "block";
}

close_add_student_modal.onclick = function () {
    add_student_modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == add_student_modal) {
        add_student_modal.style.display = "none";
    }
}
/**********  END ADD STUDENT JS **********/

/**********  ACTION MODALS **********/
var add_student_fee_modal;

var view_student_fee_modal;

function selectedModal(id){

    /**********  OPEN ADD STUDENT FEE MODAL **********/
    add_student_fee_modal = document.getElementById("add_student_fee_modal_" + id);
    add_student_fee_modal.style.display = "block";
    /**********  END OPEN ADD STUDENT FEE MODAL **********/

    /**********  OPEN VIEW STUDENT FEE MODAL **********/
    view_student_fee_modal = document.getElementById("view_student_fee_modal_" + id);
    view_student_fee_modal.style.display = "block";
    /**********  END OPEN VIEW ADD STUDENT FEE MODAL **********/
    user_id = id;
}

function closeModal(id){

    /**********  CLOSE STUDENT FEE MODAL **********/
    add_student_fee_modal = document.getElementById("add_student_fee_modal_" + id);
    add_student_fee_modal.style.display = "none";
    /**********  CLOSE STUDENT FEE MODAL **********/

    /**********  CLOSE STUDENT FEE MODAL **********/
    view_student_fee_modal = document.getElementById("view_student_fee_modal_" + id);
    view_student_fee_modal.style.display = "none";
    /**********  CLOSE STUDENT FEE MODAL **********/
}

window.onclick = function (event) {
    if (event.target == view_student_fee_modal) {
        view_student_fee_modal.style.display = "none";
    }
    if (event.target == add_student_fee_modal) {
        add_student_fee_modal.style.display = "none";
    }
}
/**********  END ACTION MODALS **********/

/**********  YEAR JS **********/
var dateDropdown = document.getElementById('year');

var currentYear = new Date().getFullYear();
var earliestYear = 2022;
while (currentYear >= earliestYear) {
    var dateOption = document.createElement('option');
    dateOption.text = currentYear;
    dateOption.value = currentYear;
    dateDropdown.add(dateOption);
    currentYear -= 1;
}
/**********  END YEAR JS **********/

/**********  ADD NEW STUDENT JS **********/
function addStudent() {

    var full_name = $("#full_name").val();

    var parent_name = $("#parent_name").val();

    var adm_date = $("#adm_date").val();

    var sex = $("#sex").val();

    var dob = $("#dob").val();

    var age = $("#age").val();

    var phone1 = $("#phone1").val();

    var phone2 = $("#phone2").val();

    if (full_name != "" || parent_name != "" || adm_date != "" || sex != "" || dob != "" || age != "" || phone1 != "" || phone2 != "") {

        $.ajax({
            type: "POST",
            url: "repo/add_student.php",
            data: {
                full_name: full_name,
                parent_name: parent_name,
                adm_date: adm_date,
                sex: sex,
                dob: dob,
                age: age,
                phone1: phone1,
                phone2: phone2
            },
            success: function (response) {
                alert(response);
                document.location.reload();
            }
        });

    } else {
        alert("Please fill in all required fields");
    }

}
/**********  ADD NEW STUDENT JS **********/

/********** CALCULATE AGE JS **********/
function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    // return age;
    document.getElementById("age").value = age;
}
/********** END CALCULATE AGE JS **********/
