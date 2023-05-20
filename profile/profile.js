//GET SESSION CODE START
let username = sessionStorage.getItem("username");
if (username == null) {
  window.location = "../index.html";
}
//GET SESSION CODE END

// LOGOUT CODE START
let logoutBtn = document.querySelector(".logout-btn");
logoutBtn.addEventListener("click", () => {
  sessionStorage.removeItem("username");
  window.location = "../index.html";
});
// LOGOUT CODE END

// UPLOAD PIC CODE START
let uploadInput = document.querySelector(".upload-input");
$(".upload-btn").addClass("disabled");
uploadInput.addEventListener("change", () => {
  $(".upload-btn").removeClass("disabled");
  $(".input-form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "../php/pics.php",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function () {},
      success: function (response) {
        if (response.trim() == "success") {
          swal("Inserted Successfully!", "The Image has been Inserted Successfully!", "success");
          
        } else {
          swal(response.trim(), response.trim(), "error");
        }
      },
    });
  });
});
// UPLOAD PIC CODE END
