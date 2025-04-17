<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard - Billventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .bg-dark {
            background-color: #343a40 !important;
        }

        .nav-link:hover {
            background-color: #495057;
        }

        .card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .vh-100 {
            height: 100vh;
        }

        .text-primary {
            color: #007bff !important;
        }

        .rounded {
            border-radius: 12px !important;
        }

        .shadow-sm {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<?php
session_start();
if(isset( $_SESSION['username'])){
    $username = $_SESSION['username'];
$servername = "localhost:3306";
$dbname = "bca6thsemproject";
$dbusername = "root";
$dbpassword = "";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_errno != 0) {
    die("Connection failed: " . $conn->connect_error);
}
// SQL query to count the total number of users in the 'user' table
$sql = "SELECT COUNT(*) AS total_users FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $total_users = $row['total_users'];
} else {
   $total_users="No users found.";
}

$conn->close();
}
else{
    header('Location: admin_login.php');

}
?>
<head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-dark text-white vh-100 p-3">
                <h4 class="text-center py-3">Billventory</h4>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link text-white">Dashboard</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="manageuser.php" class="nav-link text-white">Manage Users</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link text-white">Reports</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link text-white">Settings</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="logout.php" class="nav-link text-white">Logout</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-4">
                <div style="display: flex; justify-content:space-between;">
                    <h2 class="mb-4 text-primary">Admin Dashboard</h2>
                    <span><h2><?php  echo "Welcome, " . $username;  ?></h2></span>
                </div>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card shadow-sm p-3 bg-white rounded">
                            <h5>Total Users</h5>
                            <h3><?php echo $total_users;?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
