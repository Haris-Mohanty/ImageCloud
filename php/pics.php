<?php

//Database Linked
require_once("../Common_files/php/database.php");

$pic = $_FILES['files'];
$username = $_POST['username'];


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
  $insert_data = "INSERT INTO pics (pic, username) VALUES ('$image', '$username')";
  if($db -> query($insert_data)){
    echo "success";
  }else
  {
    echo "Unable to Insert Data!";
  }
}
else
{
  $create_table = "CREATE TABLE pics(
    id INT(11) NOT NULL AUTO_INCREMENT,
    pic LONGBLOB,
    username VARCHAR(55),
    PRIMARY KEY(id)
  )";
  if($db -> query($create_table)){
    $insert_data = "INSERT INTO pics(pic, username) VALUES ('$image', '$username')";
    if($db -> query($insert_data)){
      echo "success";
    }else
    {
      echo "Unable to Insert Data!";
    }
  }else{
    echo "Unable to Create Table!";
  }
}


?>