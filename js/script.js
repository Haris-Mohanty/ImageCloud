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
        if (response.trim() == "success") {
          swal("Successfully!", "Signup Successfully!", "success");
          $(".signup-form")[0].reset();
        } else {
          swal(response.trim(), response.trim(), "error");
        }
      },
    });
  });
});
// SIGNUP CODE END

// LOGIN CODE START
$(document).ready(function () {
  $(".login-form").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    let loginBtn = document.querySelector(".login-btn");
    //ajax request
    $.ajax({
      type: "POST",
      url: "php/login.php",
      data: formData,
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function () {},
      success: function (response) {
        if(response.trim() == "success")
        {
          loginBtn.innerHTML = "Please Wait...";
          setTimeout(() => {
            sessionStorage.setItem
            window.location = "profile/profile.html";
          }, 3000);
        }
        else
        {
          swal(response.trim(), "Please Check Again!", "error");
        }
      },
    });
  });
});
// LOGIN CODE END
