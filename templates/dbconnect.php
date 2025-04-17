
<?php
$servername = "localhost:3306";
$dbname = "bca6thsemproject";
$dbusername = "root";
$dbpassword = "";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_errno != 0) {
    die("Connection failed: " . $conn->connect_error);
}
?>
