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
uploadInput.addEventListener("change", () => {
  let uploadBtn = document.querySelector(".upload-btn");
  uploadBtn.addEventListener("click", () => {
    // ajax request
    $.ajax({});
  });
});
// UPLOAD PIC CODE END
