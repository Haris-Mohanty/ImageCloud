// SIGNUP CODE START
$(document).ready(function () {
  $(".signup-form").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    //ajax request
    $.ajax({
      type: "POST",
      url: "php/signup.php",
      data: formData,
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function () {},
      success: function (response) {
        alert(response);
      },
    });
  });
});
// SIGNUP CODE END