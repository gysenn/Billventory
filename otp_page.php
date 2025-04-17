<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billventory</title>
    <link rel="stylesheet" href="assets/css/otp_page_style.css">
    <link rel="stylesheet" href="assets/css/variables.css">
    <script src="assets/js/otp_validation.js"></script>
    <script src="assets/js/otp_generater.js"></script>
</head>

<body>
    <?php
    session_start();

    // Initialize an error message variable
    $error_otpCode = "";

    // Check if the OTP form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["otpcode"])) {
        // Get the OTP from the form and retrieve the user's email from session
        $otpEntered = $_POST['otpcode'];
        $useremail  = $_SESSION["email"];

        // Create a database connection
        include "templates/dbconnect.php";


        // Query to fetch the latest OTP for the email, making sure it is within the last 2 minutes
        $sql = "SELECT * FROM otp_table 
              WHERE email = '$useremail' 
              AND `date` >= (NOW() - INTERVAL 2 MINUTE)
              ORDER BY `date` DESC 
              LIMIT 1";

        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            // Fetch the row
            $row = $result->fetch_assoc();
            $to = "recipient@example.com";
            $subject = "Test Email from PHP";
            $message = "Hello, this is a test email sent using PHP.";
            $headers = "From: ghanashyamshrestha";
            if (mail($to, $subject, $message, $headers)) {
                echo "Email sent successfully!";
            } else {
                echo "Failed to send email.";
            }
            
            // Compare the OTP entered by the user with the one in the database
            if ($otpEntered === $row['otpcode']) {
                // If OTP matches, redirect to dataconnection.php (uncomment header() below after testing)
                header('Location: dataconnection.php');
            } else {
                $error_otpCode = "OTP doesn't match.";
            }
        } else {
            $error_otpCode = "No OTP found for this email or the OTP expired.";
        }
        $conn->close();
    }
    ?>

    <div class="form-container">
        <h2>OTP Verification</h2>
        <p>Enter the OTP sent to your registered email</p>
        <form id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="inputbox">
                <input type="text" name="otpcode" id="otp_code" placeholder="Enter OTP" onblur="otp_validation();">
                <span id="error_otpCode" class="error_massage"><?php echo $error_otpCode; ?></span>
            </div>
            <div class="btnbox">
                <input type="submit" value="Verify">
            </div>
        </form>

        <div class="resend-link">
            <p>Don't receive the code?
            <form action="resend_otp.php" method="post">
                <input type="number" id="otp" name="user_otp" hidden>
                <input type="email" id="useremail" name="user_email"  value="<?php echo  $_SESSION["email"]?>" hidden>
                <input type="submit" value="Resend OTP" onclick="getOtp();">
            </form>
            </p>
        </div>
    </div>
</body>

</html>