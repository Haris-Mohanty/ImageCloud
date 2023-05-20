
<?php

$db = new mysqli("localhost", "root", "865876@", "imagecloud");

if($db -> connect_error){
    echo "Database Not connected!";
}

?>