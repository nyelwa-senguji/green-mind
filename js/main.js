/**********  EDIT STUDENT JS **********/
var add_student_modal = document.getElementById("add_student_modal");

var add_student_btn = document.getElementById("add_student_btn");

var close_add_student_modal = document.getElementById("close_add_student_modal")

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
/**********  END EDIT STUDENT JS **********/

/**********  PHONE NO JS **********/
const phoneInputField1 = document.getElementById("phone1");
const phoneInput1 = window.intlTelInput(phoneInputField1, {
    utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

const phoneInputField2 = document.getElementById("phone2");
const phoneInput2 = window.intlTelInput(phoneInputField2, {
    utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});
/**********  END PHONE NO JS **********/

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

var dateDropdown1 = document.getElementById('fee_year');

var currentYear1 = new Date().getFullYear();
var earliestYear1 = 2022;
while (currentYear1 >= earliestYear1) {
    var dateOption1 = document.createElement('option');
    dateOption1.text = currentYear1;
    dateOption1.value = currentYear1;
    dateDropdown1.add(dateOption1);
    currentYear1 -= 1;
}
/**********  END YEAR JS **********/