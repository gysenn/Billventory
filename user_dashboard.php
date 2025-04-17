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
    <link rel="stylesheet" href="assets/css//shopowner/user_dashboard_style.css">
</head>
<body>
   <div class="nav">
    <?php
    include 'templates/navbar.php';
    ?>
   </div>
    <main>
    <div class="sliderframe"><?php include 'templates/slidemenu.php';?></div>
    </main>
    <footer>
        
    </footer>
</body>
</html>