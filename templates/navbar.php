<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/nav_style.css">
    <link rel="stylesheet" href="assets/css/variables.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="navcontainer">
            <div class="nav_col-1">
                <h3><a href="index.php" style="text-decoration: none;">Billventory</a></h3>
            </div>

            <div class="nav_col-2">
             
                <div class="user_profile">
                    
                    <div class="user_profile_pic">
                        <img src="assets/images/userprofile.webp" alt="user profile picture">
                    </div>
                    <div class="user_profile_name">
                        <h3><?php echo $_SESSION['username']; ?></h3>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="pop_menu">
            <ul>
                <li><a href="#home"><i class="bi bi-gear-fill"></i> Setting</a></li>
                <li><a href="logout.php" class="logout-link"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
            </ul>
        </div>
        
    </nav>
    <script>
    const profile = document.querySelector('.user_profile');
    const popMenu = document.querySelector('.pop_menu');

    profile.addEventListener('click', () => {
        popMenu.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!profile.contains(e.target) && !popMenu.contains(e.target)) {
            popMenu.classList.remove('active');
        }
    });
</script>

</body>

</html>