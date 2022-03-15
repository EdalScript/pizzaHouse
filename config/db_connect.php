<?php 


//connecting to DB
$conn = mysqli_connect('localhost', 'HIDDEN', 'HIDDEN', 'pizza_house');

//checking connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

?> 