<?php

//Database Linked
require_once("../Common_files/php/database.php");

$pic = $_FILES['pic'];

$image = "";

$location = "";

if($pic['name'] == ""){
  $image = "";
  $location = "";
}else{
  $location = $pic['tmp_name'];
  $image = addslashes(file_get_contents($location));
}

$get_data = "SELECT * FROM pics";

$response = $db -> query($get_data);

if($response)
{

}
else
{
  $create_table = 
}


?>