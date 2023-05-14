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
        if(response.trim() == "success"){
          swal("Successfully!", "Signup Successfully!", "success");
          $(".signup-form")[0].reset();
        }else{
          swal(response.trim(), response.trim(), "error");
        }
      },
    });
  });
});
// SIGNUP CODE END