<!DOCTYPE html>
<html lang="en">

<head>
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

<body class="bg-light">
    <?php
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    ?>
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-2 bg-dark text-white vh-100 p-3">
                    <h4 class="text-center py-3">Billventory</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="admin_dashboard.php" class="nav-link text-white">Dashboard</a>
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
                        <h2>Welcome, <?php echo $username; ?></h2>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-12">
                            <?php
                             include "templates/dbconnect.php";


                            // Check if delete button is pressed
                            if (isset($_GET['delete_id'])) {
                                $delete_id = $_GET['delete_id'];
                                $delete_sql = "DELETE FROM user WHERE id = ?";
                                $stmt = $conn->prepare($delete_sql);
                                $stmt->bind_param("i", $delete_id);
                                if ($stmt->execute()) {
                                    echo "<script>alert('User deleted successfully'); </script>";
                                    header('Location: manageuser.php');
                                } else {
                                    echo "<script>alert('Error deleting user');</script>";
                                }
                                $stmt->close();
                            }

                            // Query to fetch all user details
                            $sql = "SELECT * FROM user";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo "<h2>User Details</h2>";
                                echo "<table class='table table-striped table-bordered'>
<thead class='table-dark'>
    <tr>
        <th>Full Name</th>
        <th>Username</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>";

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
    <td>" . htmlspecialchars($row['fullname']) . "</td>
    <td>" . htmlspecialchars($row['username']) . "</td>
    <td>" . htmlspecialchars($row['phone_number']) . "</td>
    <td>" . htmlspecialchars($row['email']) . "</td>
    <td>
        <a href='?delete_id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
    </td>
  </tr>";
                                }
                                echo "</tbody></table>";
                            } else {
                                echo "<p>No users found.</p>";
                            }
                            $conn->close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
        header("Location: login.php");
        exit;
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>