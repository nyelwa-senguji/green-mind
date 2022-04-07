/**********  ADD CATEGORY JS **********/
var add_category_modal = document.getElementById("add_category_modal");

var add_category_btn = document.getElementById("add_category_btn");

var close_add_category_modal = document.getElementById("close_add_category_modal");

add_category_btn.onclick = function () {
    add_category_modal.style.display = "block";
}

close_add_category_modal.onclick = function () {
    add_category_modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == add_category_modal) {
        add_category_modal.style.display = "none";
    }
}
/**********  END ADD CATEGORY JS **********/

/**********  ADD NEW CATEGORY JS **********/
function addCategory(){
    var category_name = $("#category_name").val();

    $.ajax({
        type: "POST",
        url: "repo/add_category.php",
        data: {
            category_name: category_name
        },
        success: function (response) {
            alert(response);

            $("#category_name").val("");

            add_category_modal.style.display = "none";
        }
    });
}
/**********  END ADD NEW CATEGORY JS **********/