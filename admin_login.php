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

    <div class="form-container">
        <h2>Admin Login</h2>

        <form id="form" method="post">
            <div class="inputbox">
                <label>Username</label>
                <input type="text" name="user_name" id="username" placeholder="Enter Your username" onblur="username_validation();">
                <span id="error_username" class="error_message" style="color:red;"><?php if (isset($error_username)) echo $error_username; ?></span>
            </div>
            <div class="inputbox">
                <label>Password</label>
                <input type="password" name="userpassword" id="password" placeholder="Enter Your password" onblur="password_validation();">
                <span id="error_password" class="error_message " style="color:red;"><?php if (isset($error_password)) echo $error_password; ?></span>
            </div>
            <div class="btnbox">
                <input type="submit" value="Login" id="Login">
            </div>
        </form>
    </div>

    <script>
        // Submit validation
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector("form").addEventListener("submit", function(event) {
                isvalid = true; // Reset before form submission   
                username_validation();
                password_validation();
                if (!isvalid) {
                    alert("Please fill in all required fields.");
                    event.preventDefault();
                }
            });
        });
    </script>
<?php
    session_start();
    $error = ""; // Initialize error variable
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST["user_name"];
        $upassword = $_POST["userpassword"];

        $servername = "localhost:3306";
        $dbname = "bca6thsemproject";
        $dbusername = "root";
        $dbpassword = "";
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_errno != 0) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Corrected SQL query
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($username == $row['username'] && $upassword == $row['password']) {
                $_SESSION['username'] = $row['username']; // Fixed variable usage
                header('Location: admin_dashboard.php');
                exit;
            }else if($username != $row['username'] && $upassword == $row['password']){
                    $error_username="Incorrect username";
            } 
            else if($username == $row['username'] && $upassword != $row['password']){
                $error_password="Incorrect password";
        } 
        } 
        $conn->close();
    }
    ?>


</body>

</html>
