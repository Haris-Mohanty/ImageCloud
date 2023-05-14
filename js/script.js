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
          swal()
        }else{
          
        }
      },
    });
  });
});
// SIGNUP CODE END