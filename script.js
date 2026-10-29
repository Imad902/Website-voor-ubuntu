// two buttons and koppeling that event listener 
const signUpButton = document.getElementById('signUpButton'); // Get the register button
const signInButton = document.getElementById('signInButton'); // Get the login button
const signInForm = document.getElementById('signIn'); // Get the login container
const signUpForm = document.getElementById('signUp'); // Get the register container

// When clicking the register here link show the registration form and hide the login form 
signUpButton.addEventListener('click', function() {
    signInForm.style.display = "none";
    signUpForm.style.display = "block";
});

// When clicking the login here link show the login form and hide the registration form 
signInButton.addEventListener('click', function() {
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
});

// Search for eye icons
const togglePasswords = document.querySelectorAll('.toggle-password');

// Add event to all eye iocons
togglePasswords.forEach(icon => {
    icon.addEventListener('click', function() {
        // Search fill inbox
        const input = this.parentElement.querySelector('input');
        
        // Control if the bol(oval) is hidden
        if (input.type === 'password') {
            input.type = 'text'; // Make the text visible
            this.classList.remove('fa-eye'); // Delete normal eye
            this.classList.add('fa-eye-slash'); // Show eye with stripe
        } else {
            input.type = 'password'; // Make the text visible
            this.classList.remove('fa-eye-slash'); // Delete eye with stripe
            this.classList.add('fa-eye'); // Show normal eye
        }
    });
});

// Check if the password match with the registration
const signUpFormElement = document.querySelector('#signUp form');

// Listen for submissions and get values of the both paswords boxes
signUpFormElement.addEventListener('submit', function(e) {
    const password = document.getElementById('password').value;
    const cpassword = document.getElementById('cpassword').value;

    // Check if passwords are the same
    if (password !== cpassword) {
        e.preventDefault(); // Block sending the form
        alert("Passwords do not match!"); // Display message to user
    }
});