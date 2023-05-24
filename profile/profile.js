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
          swal("Inserted Successfully!", "The Image has been Inserted Successfully!", "success");
        } else {
          swal(response.trim(), response.trim(), "error");
        }
      },
    });
  });
});
// UPLOAD PIC CODE END

// DELETE IMAGE CODE START
$(".del-btn").on("click", function(){
  let parent = this.parentElement.parentElement;
  let id = $(parent).attr("INDEX");
  // ajax request
  $.ajax({
    type : "POST",
    url : "../php/deleteImg.php",
    data : {
      id : id
    },
    beforeSend : function(){},
    success : function(response){

      if (response.trim() == "success") {
        swal("Image Deleted", "Image Delete Successfully!", "success");
      } else {
        swal(response.trim(), response.trim(), "warning");
      }
     
    }
  });
});
// DELETE IMAGE CODE END


// VIEW CODE START
let allViewBtn = document.querySelectorAll(".view-btn");
 let i;
 for(i=0; i<allViewBtn.length; i++){
  allViewBtn[i].onclick = function(){
    let parent = this.parentElement.parentElement;
    let imgName = parent.querySelector("P").innerHTML;
    let imgUrl = parent.querySelector("IMG").scr;
    $(".modal-title").html(imgName);

  }
 }
// VIEW CODE END