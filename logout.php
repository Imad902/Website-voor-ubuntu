<?php
session_start(); //Resume the active session
session_destroy(); //Destroy all session data to log out the user
header("Location: index.php"); //Go back to the login page
?>