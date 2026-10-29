<!DOCTYPE html>  <!--Exclamation mark automatically does HTML skeleton--> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fontys Events</title> <!--Name of the tab-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> <!--Fonts and icons-->
    <link rel="stylesheet" href="style.css"> <!--Link to they style.css file-->
</head>
<body> <!-- . makes automatically one div-->
    
    <!-- Registration Page -->
    <div class="container" id="signUp" style="display: none">
      <img src="fontys-logo.png" alt="Fontys" class="logo">
      <h1 class="form-title">Register page</h1> <!--Titel of the login page-->
      <form method="Post" action="register.php"> 
        
        <!--First name-->
        <div class="input-group">
         <i class="fas fa-user"></i> <!--For solide icons-->
         <input type="text" name="fName" id="fName" placeholder="First Name" required>
         <label for="fName">First Name:</label> <!--Connect id to input field-->
        </div>

        <!--Last name-->
        <div class="input-group"> 
          <i class="fas fa-user"></i>
          <input type="text" name="lName" id="lName" placeholder="Last Name" required>
          <label for="lName">Last Name:</label> <!--Connect id to input field-->
        </div> <!-- .input-group makes automatically one class-->
        
        <!--Email-->
        <div class="input-group"> 
          <i class="fas fa-envelope"></i>
          <input type="text" name="email" id="email" placeholder="Email" required>
          <label for="email">Email:</label> <!--Connect id to input field-->
        </div>

        <!--Password-->
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" placeholder="Password" required>
          <label for="password">Password:</label> <!--Connect id to input field-->
        </div>  

        <!--Confirm Password-->
        <div class="input-group">
          <i class="fas fa-check"></i>
          <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
          <label for="cpassword">Confirm Password:</label> <!--Connect id to input field-->
        </div>  

        <!--Registration button-->
        <input type="submit" class="btn" value="REGISTER" name="signUp"> 
      </form>
      <!--Other types of login Google/Facebook-->
      <p class="or"> <!--text-->
      ------------------or------------------
      </p> 
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>

      <!--Password recover button-->
      <div class="recover">
        <p>Forget your password?</p>
        <button id="recoverButton">Change here</button> 
      </div>

      <!--Login button-->
      <div class="links">
        <p>Already have an account?</p>
        <button id="signInButton">Login here</button> 
      </div>
    </div>

    <!-- Login page -->
    <div class="container" id="signIn">
      <img src="fontys-logo.png" alt="Fontys" class="logo">
      <h1 class="form-title">Login page</h1> <!--Titel of the login page-->
      <form method="Post" action="register.php"> 
        
        <!--Username (Email)-->
        <div class="input-group"> 
          <i class="fas fa-user"></i> 
          <input type="text" name="email" id="emailSignIn" placeholder="Email" required>
          <label for="emailSignIn">Username:</label> <!--Connect id to input field-->
        </div>

        <!--Password-->
        <div class="input-group">
          <i class="fas fa-eye toggle-password"></i> <!--Eye to see password-->
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="passwordSignIn" placeholder="Password" required>
          <label for="passwordSignIn">Password:</label> <!--Connect id to input field-->
        </div>  

        <!--Login button-->
        <input type="submit" class="btn" value="LOGIN" name="signIn"> 
      </form>

      <!--Other types of login Google/Facebook-->
      <p class="or"> 
      ------------------or------------------
      </p> <!--Text-->
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>

       <!--Password recover button-->
      <div class="recover">
        <p>Forget your password?</p>
        <button id="recoverButton">Change here</button> 
      </div>

      <!--Sign up button-->
      <div class="links">
        <p>Don't have an account?</p>
        <button id="signUpButton">Register here</button> 
      </div>
    </div>
    <!--Link to the javascript-->
    <script src="script.js"></script>
</body>
</html>

