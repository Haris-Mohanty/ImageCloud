<?php

//Database Linked
require_once("../Common_files/php/database.php");


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

$get_data = "SELECT * FROM signup";

$response = $db -> query($get_data);

if($response){
    echo "found";
}
else
{
    $create_table = 
}

?>
