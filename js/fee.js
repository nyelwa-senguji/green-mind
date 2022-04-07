/**********  ADD FEE JS **********/
var add_fee_modal = document.getElementById("add_fee_modal");

var add_fee_btn = document.getElementById("add_fee_btn");

var close_add_fee_modal = document.getElementById("close_add_fee_modal");

add_fee_btn.onclick = function () {
  add_fee_modal.style.display = "block";
};

close_add_fee_modal.onclick = function () {
  add_fee_modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == add_fee_modal) {
    add_fee_modal.style.display = "none";
  }
};
/**********  END ADD FEE JS **********/

/**********  ADD NEW FEE JS **********/
function addFee() {
  var fee_amount = $("#fee_amount").val();

  var category_of = $("#category_of").val();

  var fee_start_at = $("#fee_start_at").val();

  var fee_end_at = $("#fee_end_at").val();

  $.ajax({
    type: "POST",
    url: "repo/add_fee.php",
    data: {
      fee_amount: fee_amount,
      category_of: category_of,
      fee_start_at: fee_start_at,
      fee_end_at: fee_end_at,
    },
    success: function (response) {
      alert(response);

      $("#fee_amount").val("");

      $("#category_of").val("");

      $("#fee_start_at").val("");

      $("#fee_end_at").val("");

      add_fee_modal.style.display = "none";
    },
  });
}
/**********  END ADD NEW FEE JS **********/
