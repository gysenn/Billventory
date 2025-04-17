<?php
session_start();

if (isset($_SESSION["fullname"], $_SESSION["username"], $_SESSION["email"], $_SESSION["phone"], $_SESSION["password"])) {
    $fullname = $_SESSION["fullname"];
    $username = $_SESSION["username"];
    $email = $_SESSION["email"];
    $phone = $_SESSION["phone"];
    $upassword = $_SESSION["password"]; // Already hashed from JS


   include "templates/dbconnect.php";   

    // Check if username already exists
    $sql = "SELECT id FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<script>alert('Username already used'); window.location.href='register.php';</script>";
    } else {
        // Insert new user
        $sql = "INSERT INTO user (fullname, username, phone_number, email, password) 
                VALUES ('$fullname', '$username', '$phone', '$email', '$upassword')";

        if ($conn->query($sql) === TRUE) {
            session_unset();

            // Destroy the session
            session_destroy();

            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Error occurred while inserting data');</script>";
        }
    }

    $conn->close();
}
?>
