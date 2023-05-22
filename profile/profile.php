
<?php

// GET DATA
require_once("../Common_files/php/database.php");

session_start();
  $username = $_SESSION['username'];

$get_data = "SELECT * FROM signup WHERE email = '$username'";

$user_res = $db -> query($get_data);
$all_user_data = "";

if($user_res -> num_rows != 0)
{
    $all_user_data = $user_res -> fetch_assoc();
}



$get_datar = "SELECT * FROM pics WHERE email = '$username'";

$user_ress = $db -> query($get_datar);
$all_user_dataa = "";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS FILE -->
    <link rel="stylesheet" href="../Common_files/css/bootstrap.min.css">
    <!-- BOOTSTRAP CSS FILE -->
    
    <!-- BOOTSTRAP JS FILE -->
    <script src="../Common_files/js/bootstrap.bundle.min.js"></script>
    <!-- BOOTSTRAP JS FILE -->

    <!-- ANIMATE CSS LINK START -->
    <link rel="stylesheet" href="../Common_files/css/animate.min.css" />
    <!-- ANIMATE CSS LINK END -->

    <!-- SWEET ALERT JS LINK START -->
    <script src="../Common_files/js/sweetalert.min.js"></script>
    <!-- SWEET ALERT JS LINK END -->

     <!--FONT AWESOME LINK START -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
     <!--FONT AWESOME LINK END -->

     <!-- JQUERY LINK START -->
    <script src="../Common_files/js/jquery.min.js"></script>
    <!-- JQUERY LINK END -->

    <!--   GOOGLE FONT START -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--   GOOGLE FONT END -->

    <!-- LINK CSS FILE -->
    <link rel="stylesheet" href="profile.css">
    <!-- LINK CSS FILE -->

    <title>Profile</title>
</head>
<body>

    <!-- NAV CODE START -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <img src="../Image/login-2.jfif.jpg" class="rounded-circle mx-2" width="48" height="48" alt="">
            <a href="#" class="navbar-brand"><?php echo $all_user_data['f_name']; echo "\r"; echo $all_user_data['l_name']; ?></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myNavBar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="myNavBar">
                <ul class="navbar-nav justify-content-end w-100">

                    <form class="input-form">
                        <input type="file" id="file" name="files" class="form-control upload-input">
                        <button class="input-group-text btn text-white upload-btn float-end">Upload Pic</button>
                    </form>

                    <button class="btn mx-2 text-white logout-btn">Log Out</button>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAV CODE END -->
    <br><br><br>


    <!-- MAIN PAGE CODE START -->
    <div class="container mt-5">
        <div class="row all-image-field">
            
        </div>
    </div>
    <!-- MAIN PAGE CODE END -->
    
</body>
<script src="profile.js"></script>
</html>