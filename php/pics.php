<?php

//Database Linked
require_once("../Common_files/php/database.php");

// $pic = $_FILES['pic'];

CREATE TABLE images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_data BLOB
  );

  // Check if the image file was uploaded successfully
if ($_FILES["pic"]["error"] == UPLOAD_ERR_OK) {
    $imageData = file_get_contents($_FILES["pic"]["tmp_name"]);
  
    // Prepare and execute the SQL statement to insert the image data into the database
    $stmt = $conn->prepare("INSERT INTO images (image_data) VALUES (?)");
    $stmt->bind_param("b", $imageData);
    $stmt->execute();
  
    if ($stmt->affected_rows > 0) {
      echo "Image uploaded successfully.";
    } else {
      echo "Error uploading image.";
    }
  
    $stmt->close();
  } else {
    echo "Error uploading image.";
  }



?>