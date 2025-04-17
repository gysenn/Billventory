<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["fullname"] = $_POST["userfullname"];
        $_SESSION["username"] = $_POST["user_name"];
        $_SESSION["email"] = $_POST["useremail"];
        $_SESSION["phone"] = $_POST["userphonenumber"];
        $_SESSION["password"] = $_POST["userpassword"];

        $_SESSION["otp"] = $_POST["user_otp"];
        $otpgenerated = $_POST["user_otp"];
        $email = $_SESSION["email"];

        include "templates/dbconnect.php";


        // Corrected SQL query
        $sql = "INSERT INTO otp_table (	otpid,email,otpcode, date) 
    VALUES (null, '$email', '$otpgenerated',NOW())";

        $result = $conn->query($sql);

        if ($result) {
            include "templates/mailsender.php";

            // Redirect after successful insertion
            header("Location: otp_page.php");
            // Always call exit after header redirection
        } else {
            echo "<script>alert('Error occurred');</script>";
        }
    } else {
        // Show error message
        echo "<script>alert('error occur.');</script>";
    }
    ?>