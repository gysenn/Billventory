<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billventory</title>
    <link rel="stylesheet" href="assets/css/register_style.css">
    <link rel="stylesheet" href="assets/css/variables.css">
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/otp_generater.js"></script>
</head>

<body>
  
    <main>
        
        <div class="form-container">
            <h2>Create Your Account</h2>
            <form id="form" action="otpsenderpage.php" method="post">
                <div class="inputbox">
                    <label>Full Name</label>
                    <input type="text" name="userfullname" id="fullname" placeholder="Enter Your full name" onblur="fullname_validation();">
                    <span id="error_fullname" class="error_massage"></span>
                </div>
                <div class="inputbox">
                    <label>Username</label>
                    <input type="text" name="user_name" id="username" placeholder="Enter Your username" onblur="username_validation();">
                    <span id="error_username" class="error_massage"></span>
                </div>
                <div class="inputbox">
                    <label>Email</label>
                    <input type="text" name="useremail" id="email" placeholder="Enter Your email" onblur="email_validation();">
                    <span id="error_email" class="error_massage"></span>
                </div>
                <div class="inputbox">
                    <label>Phone Number</label>
                    <input type="text" name="userphonenumber" id="phonenumber" placeholder="Enter Your phone number" onblur="phonenumber_validation();">
                    <span id="error_phonenumber" class="error_massage"></span>
                </div>
                <div class="inputbox">
                    <label>Password</label>
                    <input type="password" name="userpassword" id="password" placeholder="Enter Your password" onblur="password_validation();">
                    <span id="error_password" class="error_massage"></span>
                </div>
                <div class="inputbox">
                    <label>Confrim Password</label>
                    <input type="password" name="confrimpassword" id="confrimpassword" placeholder="Enter Your password again" onblur="confrimpassword_validation();">
                    <span id="error_confrimpassword" class="error_massage"></span>
                </div>
                <div class="tcbox">
                    <p><input type="checkbox" name="tandc" id="termandcondition" onblur="tandc_validation();">
                        &nbsp;I agree to the <a href="term&condition.html">Terms & Condition</a></p>
                    <span id="error_termandcondition" class="error_massage"></span>
                </div>
                <input type="number" id="otp" name="user_otp"  hidden>
                <div class="btnbox">
                    <input type="submit" value="Register" onclick="getOtp();">
                </div>
                <div class="login-link">
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>
            </form>
        </div>
    </main>
    <script>
        function customHash(password) {
            let hash = 0;
            for (let i = 0; i < password.length; i++) {
                let charCode = password.charCodeAt(i);
                hash = (hash << 5) - hash + charCode; // Bitwise left shift & subtract hash
                hash &= hash; // Convert to 32-bit integer
            }
            return Math.abs(hash).toString(16); // Convert to hexadecimal
        }
        // Submit validation
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector("form").addEventListener("submit", function(event) {
                let isvalid = true; // Ensure this is reset before validation

                // Run all validation functions and update isvalid accordingly
                if (!fullname_validation()) isvalid = false;
                if (!username_validation()) isvalid = false;
                if (!email_validation()) isvalid = false;
                if (!phonenumber_validation()) isvalid = false;
                if (!password_validation()) isvalid = false;
                if (!confrimpassword_validation()) isvalid = false;
                if (!tandc_validation()) isvalid = false;

                if (!isvalid) { // Prevent form submission if validation fails
                    alert("Please fill in all required fields correctly.");
                    event.preventDefault();
                }

                // Get the password value from the form
                const passwordField = document.getElementById('password');
                const plainPassword = passwordField.value;

                // Hash the password before submitting
                const hashedPassword = customHash(plainPassword);

                // Replace password with hashed version
                passwordField.value = hashedPassword;
            });
        });
    </script>
</body>

</html>