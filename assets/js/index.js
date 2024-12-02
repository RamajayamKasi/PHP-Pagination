var page = 1;
$(document).on("click", "#previous_data", function (e) {
  page -= 1;
  pagination();
});

$(document).on("click", "#next_data", function (e) {
  page += 1;
  pagination();
});

function pagination() {
  if (page > 0) {
    $.ajax({
      method: "post",
      url: "../../actions/action.index.php",
      data: { page: page },
      success: function (reponse) {
        $("#StudentDetails").html(reponse);
      },
    });
  }
}
pagination();
