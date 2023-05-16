<?php

//Database Linked
require_once("../Common_files/php/database.php");

$email = $_POST['email'];
$password = $_POST['password'];

$check_email = "SELECT email FROM signup WHERE email = '$email'";

$response = $db -> query($check_email);

if($response -> num_rows != 0)
{
    $check_pass = "SELECT password FROM signup WHERE password = '$password'";

    $pass_res = $db -> query($check_pass);
    if($pass_res -> num_rows != 0)
    {
        echo ""
    }
}


?>