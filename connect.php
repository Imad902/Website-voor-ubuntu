<?php
//Database connection var
$host = "localhost";
$user = "root";
$password = "";
$db = "websitewithlogin";

//Create mySQLi connection
$conn = new mysqli($host, $user, $password, $db);

//Check if the connection has failed than show eror
if($conn->connect_error) {
    echo "Failed to connect to database: " . $conn->connect_error;
}
?>