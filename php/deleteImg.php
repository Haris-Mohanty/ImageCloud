<?php

//Database Linked
require_once("../Common_files/php/database.php");

$id = $_POST['id'];

$deleteImg = "DELETE FROM pics WHERE id = '$id'";

if($db -> query($deleteImg)){
    echo "success";
}else{
    echo "Unable to Delete Image!";
}



?>