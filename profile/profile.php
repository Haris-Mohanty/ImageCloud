
<?php

// GET DATA
require_once("../Common_files/php/database.php");

session_start();
$username = $_SESSION['username'];

$get_data = "SELECT * FROM students WHERE email = '$username'";

$stu_res = $db -> query($get_data)

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
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container-fluid">
            <img src="../Image/login-2.jfif.jpg" class="rounded-circle mx-2" width="48" height="48" alt="">
            <a href="#" class="navbar-brand">Image Cloud</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myNavBar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="myNavBar">
                <ul class="navbar-nav justify-content-end w-100">
                    <div class="input-group w-50">
                        <input type="file" class="form-control">
                        <span class="input-group-text btn text-white">Upload Pic</span>
                    </div> 
                    <button class="btn mx-2 text-white">Log Out</button>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAV CODE END -->
    <br><br>

    <!-- MAIN PAGE CODE START -->
    <div class="container mt-5">
        <div class="row">
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
        </div>
    </div>
    <!-- MAIN PAGE CODE END -->
    
</body>
<script src="profile.js"></script>
</html>