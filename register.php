<?php
include 'connect.php'; //Connect to they database

// Registration
if(isset($_POST['signUp'])) {  //Check if form is submitted
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    //Check password and confirm that they passwords match
    if($password !== $cpassword) {
        echo "Passwords do not match!";
        exit();
    }

    //Encryption of they password
    $password = md5($_POST['password']); 
    
    //Check if email is registred in the database
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    
    //If row is found email already exists
    if($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {  //Insert new user in the database
        $insertQuery = "INSERT INTO users(firstName, lastName, email, password) 
                        VALUES ('$firstName', '$lastName', '$email', '$password')";
        if($conn->query($insertQuery) === TRUE) { //Go to login page when succefully registrated
            header("Location: index.php");
        } else { //Show eror when fails
            echo "Error: " . $conn->error;
        }
    }
}

// Login in
if(isset($_POST['signIn'])) { //Check if form is submitted
    $email = $_POST['email']; //Get the email
    $password = md5($_POST['password']); //Encrypt input password from user

    //Check for a user with matching email and password
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) { //If found
        session_start();  //Start session for the user
        $row = $result->fetch_assoc(); //Get user data
        $_SESSION['email'] = $row['email']; //Store email in the session
        header("Location: homepage.php"); //Go to the homepage
        exit();
    } else {  //Display eror when login fails
        echo "Not Found, Incorrect Email or Password";
    }
}
?>