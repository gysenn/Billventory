<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserDashboard</title>
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/shopowner/user_staff_management_page_style .css">
</head>

<body>
    <div class="nav">
        <?php
        include 'templates/shopowner/navbar.php';
        ?>
    </div>
    <main>
        <div class="sliderframe"><?php include 'templates/shopowner/slidemenu.php'; ?></div>
        <div class="contentframe">
            <div class="contentframe__content">
                <div class="page_heading">
                    <h2>Staff Information</h2>
                    <button>+ Add Employee</button>
                </div>
                <div class="info_table">
                    <table>
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Gmail</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Kathmandu, Nepal</td>
                                <td>9800000001</td>
                                <td>john.doe@gmail.com</td>
                                <td>28</td>
                                <td>johndoe@email.com</td>
                                <td>
                                    <button class="btn btn-edit">Edit</button>
                                    <button class="btn btn-delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>Lalitpur, Nepal</td>
                                <td>9800000002</td>
                                <td>jane.smith@gmail.com</td>
                                <td>32</td>
                                <td>janesmith@email.com</td>
                                <td>
                                    <button class="btn btn-edit">Edit</button>
                                    <button class="btn btn-delete">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
    <footer>

    </footer>
</body>

</html>