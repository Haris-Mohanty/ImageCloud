
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
         <!-- <div class="col-md-2 mb-3 text-center"> -->

      <!-- CARD START -->
        <?php
                    
                    $pics = "SELECT * FROM pics WHERE username = '$username'";

                    $pic_res = $db -> query($pics);
                    
                    if($pic_res){
                        while($data = $pic_res -> fetch_assoc()){


                echo "<div class='col-md-2 mb-3 text-center'>
                             <div class='card' index=".$data['id'].">
                                    <div class='card-header'>
                                        <p>".$data['imgName']."</p>
                                    </div>
        
                            
                                        <div class='card-body sm-size'>";
                                            $image = "data:image/png;base64,".base64_encode($data['pic']);
                                        echo "<img src='".$image."' class='w-100'>";
                                    echo "</div>


                                        <div class='card-footer d-flex justify-content-between'>
                                           <button class='btn text-white w-75 mx-1' data-bs-toggle='modal' data-bs-target='#my-modal'><i class='fa fa-eye'></i></button>
                                           <button class='btn text-white del-btn w-25'><i class='fa fa-trash'></i></button>
                                        </div>
                                 </div>
                        </div>";
        
                        }
                    }
                    ?>
                    <!-- CARD END -->


            
        </div>
    </div>
    <!-- MAIN PAGE CODE END -->


    <!-- MODAL CODE START -->
    <div class="modal animate__animated animate_bounce" id="my-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        Haris Mohanty
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="../Image/bg-2.jpg" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL CODE END -->
    
</body>
<script src="profile.js"></script>
</html>