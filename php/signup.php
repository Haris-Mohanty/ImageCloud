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
    
    $insert_data = "INSERT INTO signup(f_name, l_name, email, password, mobile) VALUES ('$f_name', '$l_name', '$email', '$password', '$mobile')";
        if($db -> query($insert_data))
        {
            echo "success";
        }
        else
        {
            echo "Unable to Insert data!";
        }
}
else
{
    $create_table = "CREATE TABLE signup(
        id INT(11) NOT NULL AUTO_INCREMENT,
        f_name VARCHAR(55),
        l_name VARCHAR(55),
        email VARCHAR(55),
        password VARCHAR(55),
        mobile VARCHAR(55),
        PRIMARY KEY(id)
    )";
    if($db -> query($create_table))
    {
        $insert_data = "INSERT INTO signup(f_name, l_name, email, password, mobile) VALUES ('$f_name', '$l_name', '$email', '$password', '$mobile')";
        if($db -> query($insert_data))
        {
            echo "success";
        }
        else
        {
            echo "Unable to Insert data!";
        }
    }else
    {
        echo "Unable to Create Table!";
    }
}

?>
