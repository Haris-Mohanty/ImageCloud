
<?php

$db = new mysqli("localhost", "root", "******", "imagecloud");

if($db -> connect_error){
    echo "Database Not connected!";
}

?>
