<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billventory</title>
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/index_style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="assets/js/index.js"></script>

</head>

<body>
    <nav>
        <div class="nav_col-1">
            <h3><a href="index.php" style="text-decoration: none;">Billventory</a></h3>
        </div>
        <div class="nav_col-2">
            <ul>
                <li class="nav_item"><a href="#home" class="active">Home</a></li>
                <li class="nav_item"><a href="#feature">Features</a></li>
                <li class="nav_item"><a href="#about">About</a></li>
                <li class="nav_item"><a href="#contact">Contact</a></li>

            </ul>
        </div>
        <div class="nav_col-3">
            <button class="login_btn"><a href="login.php">Login</a></button>
        </div>
        <div class="nav_col-4">
            <div class="menu">
               <i class="bi bi-list" onclick="display_slider();"></i>
            </div>
        </div>
    </nav>
    <main>
        <div class="slider-menu"> 
            <i class="bi bi-x" onclick="hide_slider();"></i>
            <hr>
            <ul>
                <li class="nav_item"><a href="#home" >Home</a></li>
                <li class="nav_item"><a href="#feature">Features</a></li>
                <li class="nav_item"><a href="#about">About</a></li>
                <li class="nav_item"><a href="#contact">Contact</a></li>

            </ul>
            <hr>
            <div class="btn-login">
                <button class="login_btn"><a href="login.html">Login</a></button>
            </div>
            
        </div>
        <section  id="home" class="section-1">
            <div class="intro">
                <h1>Welcome to<div>Billventory</div>
                </h1>
                <p>Streamline your billing and inventory management with smart, efficeint and reliable
                    solution.</p>
                <a href="register.php" class="intro_login_btn">Join Us</a>
            </div>
            <div class="intro_image">
                <img src="assets/images/intro.webp" alt="intro image">
            </div>
        </section>
        <section id="feature" class="section-2">
            <div class="container text-center">
                <h2 class="s2-head text-primary">Key Features of Billventory</h2>
                <p class="s2-para">Effortlessly manage your billing and inventory with smart, intuitive tools.</p>
                <div class="row">
                    <div class="col">
                        <div class="feature-card">
                            <i class="bi bi-receipt text-primary mb-3"></i>
                            <h4>Smart Billing</h4>
                            <p>Generate accurate invoices with tax and discount calculations in seconds.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <i class="bi bi-box-seam text-success mb-3"></i>
                            <h4>Inventory Management</h4>
                            <p>Track stock levels and get alerts to restock before running out.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <i class="bi bi-bar-chart-line text-danger mb-3"></i>
                            <h4>Insightful Reports</h4>
                            <p>View detailed sales, profit, and inventory reports to make data-driven decisions.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <i class="bi bi-people-fill text-warning mb-3"></i>
                            <h4>User Management</h4>
                            <p>Users can manage their staff efficiently</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <i class="bi bi-shield-lock text-secondary mb-3"></i>
                            <h4>Secure and Reliable</h4>
                            <p>Ensure data security with encrypted and secure logins.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="section-3">
            <div class="about_container">
                <h2 class="text-primary">About Billventory</h2>
                <div class="about_row">
                    <div class="about_col">
                       <div class="about_des">
                        <p>
                            At <strong>Billventory</strong>, we simplify billing and inventory management for retail and
                            wholesale shops. Our subscription-based platform empowers shop owners to seamlessly manage
                            sales, stock, and finances — all in one place.
                        </p>
                        <p>
                            Whether you're a small business or a growing enterprise, Billventory offers user-friendly
                            tools to help you save time and make smarter business decisions.
                        </p>
                        <ul>
                            <li>✔️ Efficient billing and invoicing system.</li>
                            <li>✔️ Real-time inventory tracking.</li>
                            <li>✔️ Secure data management with insightful reports.</li>
                        </ul>
                        <a href="https://wa.me/9842605730" target="_blank" class="btn">Get in Touch</a>
                       </div>
                    </div>
                    <div class="about_col img">
                        <img src="assets/images/ppt img1.png" alt="About Billventory">
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="section-4">
            <div class="contact-container">
                <h2 class="text-primary">Get in Touch</h2>
                <p>We would love to hear from you! Whether you have questions or need support, feel free to contact us.
                </p>
                <div class="contact-row">
                    <div class="contact-form">
                        <form action="" method="post">
                            <div class="inputbox">
                                <label>Name:</label>
                                <input type="text" name="user-name" placeholder="Enter your Name">
                            </div>
                            <div class="inputbox">
                                <label>Email:</label>
                                <input type="text" name="user-email" placeholder="Enter your email">
                            </div>
                            <div class="inputbox">
                                <label>Your Massage:</label>
                                <textarea name="massage" id="user-massage" placeholder="Enter your massage"></textarea>
                            </div>
                            <div class="btnbox">
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3443.6050621303457!2d84.65161807535401!3d27.603446976242278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDM2JzEyLjQiTiA4NMKwMzknMTUuMSJF!5e1!3m2!1sen!2snp!4v1742978119067!5m2!1sen!2snp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3>Our Location on Google Map</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <hr>
        <div class="footer-row1">
            <div class="footer-logo">
                <img src="assets/images/logo/Logo2.png" alt="Billventory's logo">
            </div>
            <div class="quick-menu">
                <h3>Quick Link</h3>
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#feature">Features</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

            </div>
            <div class="follow-icon text-center">
                <h3>Follow Us</h3>
                <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://wa.me/9842605730" target="_blank"><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.instagram.com/ig_bibek73/" target="_blank"><i class="bi bi-instagram"></i></a>
              </div>
        </div>
        <div class="footer-row2">
            <hr>
            <p>&copy; 2025 Billventory. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>