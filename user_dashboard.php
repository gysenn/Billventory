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
    <link rel="stylesheet" href="assets/css/shopowner/user_dashboard_style.css">
</head>
<body>
   <div class="nav">
    <?php
    include 'templates/shopowner/navbar.php';
    ?>
   </div>
    <main>
    <div class="sliderframe"><?php include 'templates/shopowner/slidemenu.php';?></div>
    <div class="contentframe">
        <div class="contentframe__content">
            <h1>Welcome to the User Dashboard</h1>
            <p>This is the main content area.</p>
        </div>
        <div class="contentframe__content">
            <h2>Dashboard</h2>
            <p>Here you can manage your shop, view sales, and more.</p>
    </main>
    <footer>
        
    </footer>
</body>
</html>