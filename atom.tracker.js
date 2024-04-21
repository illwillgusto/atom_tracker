$(document).ready(function () {
  $("#form-new").submit(function (event) {
    // when a form is submitted run a function

    event.preventDefault();

    const form = $(this);
    const data = form.serialize();

    $.ajax({
      url: "log.php",
      data: data,
    });
  });

  $('#log').load('log.php'); // allow us to take the data from the log.php and display it on the main page

});
