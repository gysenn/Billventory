<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';



$mail = new PHPMailer(true);


try {
    // Server settings
    $mail->isSMTP();                                    
    $mail->Host       = 'smtp.gmail.com';               
    $mail->SMTPAuth   = true;                           
    $mail->Username   = 'ghanashyamshrestha340283@gmail.com';         
    $mail->Password   = 'wsxd ofux wiox dmlf';           // App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;                            

    // Recipients
    $mail->setFrom('ghanashyamshrestha340283@gmail.com', 'Billventory');

    // Use session email
    $receiverEmail = $_SESSION["email"];
    $mail->addAddress($receiverEmail);         

    // Content
    $otp = $_SESSION["otp"];
    $mail->isHTML(true);                                
    $mail->Subject = 'OTP Code to Verify';
    $mail->Body    = 'Your OTP code is <b>' . $otp . '</b>';  // Corrected string concatenation

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
