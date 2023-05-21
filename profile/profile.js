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
    let formData = new FormData(this);
    formData.append("username", username);
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "../php/pics.php",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function () {},
      success: function (response) {
        if (response.trim() == "success") {
          // $(".input-form").trigger('reset');
          getDataFunc();
          swal(
            "Inserted Successfully!",
            "The Image has been Inserted Successfully!",
            "success"
          );
          // window.location = location.href;
        } else {
          swal(response.trim(), response.trim(), "error");
        }
      },
    });
  });
});
// UPLOAD PIC CODE END

let allImageEl = document.querySelector(".all-image-field");

const getDataFunc = () => {
  allImageEl.innerHTML = `

  <div class="col-md-2 mb-3 text-center">
                <div class="card">
                    <div class="card-header">
                        <h5>Welcome</h5>
                    </div>
                    <div class="card-body">
                        <img src="../Image/login-2.jfif.jpg" class="w-100" alt="">
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn text-white w-75 mx-1"><i class="fa fa-eye"></i></button>
                        <button class="btn text-white w-25"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>

  `;
};
