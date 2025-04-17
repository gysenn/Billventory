    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Billventory</title>
        <link rel="stylesheet" href="assets/css/login_style.css">
        <link rel="stylesheet" href="assets/css/variables.css">
        <script src="assets/js/validation.js"></script>

    </head>
    <body>
        <?php
        session_start();
        $error_password =$error_username= ""; // Initialize error variable
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST["user_name"];
            $upassword = $_POST["userpassword"];
    
            include "templates/dbconnect.php";

    
            // Corrected SQL query
            $sql = "SELECT * FROM user WHERE username='$username'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($username == $row['username'] && $upassword == $row['password']) {
                    $_SESSION['username'] = $row['username']; // Fixed variable usage
                    header('Location: user_dashboard.php');
                    exit;
                }
                else if($username === $row['username'] && $upassword !== $row['password']){
                    $error_password="Incorrect password";
            } 
            } 
            else{
                $error_username="Incorrect username";
        } 
            $conn->close();
        }
        ?> 
        <div class="form-container">
            <h2>Login to Billventory</h2>
            <form  id="form" action="" method="post">
                <div class="inputbox">
                    <label>Username</label>
                    <input type="text" name="user_name" id="username" placeholder="Enter Your username"  onblur="username_validation();">
                    <span id="error_username"  class="error_massage"><?php if(isset($error_username)) echo $error_username?></span>
                </div>
                <div class="inputbox">
                    <label>Password</label>
                    <input type="password" name="userpassword" id="password" placeholder="Enter Your password"  onblur="password_validation();">
                    <span id="error_password" class="error_massage"><?php if(isset($error_password)) echo $error_password?></span>
                </div>
                <div class="btnbox">
                    <input type="submit" value="Login" id="Login">
                </div>
                <div class="register-link">
                    <p>Don't have an account? <a href="register.php">Create Account</a></p>
                </div>
            </form>
        </div>
    <script>
        function customHash(password) {
    let hash = 0;
    for (let i = 0; i < password.length; i++) {
        let charCode = password.charCodeAt(i);
        hash = (hash << 5) - hash + charCode;  // Bitwise left shift & subtract hash
        hash &= hash;  // Convert to 32-bit integer
    }
    return Math.abs(hash).toString(16);  // Convert to hexadecimal
}

        // Submit validation
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("form").addEventListener("submit", function(event) {
            isvalid = true;  // Reset before form submission   
            if (!username_validation()) isvalid = false;
            if (!password_validation()) isvalid = false;
            if (!isvalid) {
                alert("Please fill in all required fields.");
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