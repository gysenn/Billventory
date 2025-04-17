<nav>
    <div class="nav_col-1">
            <h3><a href="index.php" style="text-decoration: none;">Billventory</a></h3>
        </div>
       
        <div class="nav_col-2">
            <div class="user_profile_pic">
               <img src="assets/images/userprofile.webp" alt="user profile picture" >
           </div>
              <div class="user_profile_name">
                <h3><?php echo $_SESSION['username'];?></h3>
              </div>

        </div>
    </nav>
    <div class="pop_menu">
        <ul>
            <li><a href="#home">Setting</a></li>
            <li><a href="logout.php">Logout</a></li>   
        </ul>
    </div>