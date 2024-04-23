function build() {
  $('#log').load('log.php?mode=build'); // allow us to take the data from the log.php and display it on the main page
}


$(document).ready(function () {

build();

  $("#form-new").submit(function (event) {
    // when a form is submitted run a function

    event.preventDefault();

    const form = $(this);
    const data = form.serialize();

    $.ajax({
      url: "log.php?mode=new",
      data: data,
      success: function() {
        build();
      },
      method: 'GET'
    });
  });


  $('#tally').load('log.php?mode=tally'); //allow us to pull the data and display it in the Total Time log


});
