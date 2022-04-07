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