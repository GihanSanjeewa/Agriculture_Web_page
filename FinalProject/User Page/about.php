<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />
    <title>Agriculture Web site</title>
    
    <!--Css Links-->
    <link href="StyleSheet.css" rel="stylesheet" />
    <link href="about.css" rel="stylesheet" />

    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!--GOOGAL FONTS (MONTSERRANT)-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="home.php"><h4>Department of Agriculture</h4></a>
            <img src="navlogo.svg" style="max-width: 3%; margin-left: -480px; ">
            <ul class="nav_menu">
                <li><a href="home.php">Home</a> </li>
                <li><a href="about.php">About</a> </li>
                <li><a href="category.php">Category</a> </li>
                <li><a href="reports.php">Reports</a> </li>
                <li><a href="contact.php">Contact</a> </li>
            </ul>

            <button id="open-menu-btn"> <i class="uil uil-bars"></i> </button>
            <button id="close-menu-btn"> <i class="uil uil-multiply"></i> </button>
        </div>
    </nav>

    <section class="about_achievments">
        <div class="about_achievments-container">
            <div class="about_achievments-left">
                <img src="icons8-achievement-64.png" />
            </div>

            <div class="about_achievments-right">
                <h1>About Us</h1>
                <p>


                    North Western Province comprised of Kurunegala  and Puttalam District making out 12%<br>of the total land and occupied 16.9% of the small scale cultivated extent of the whole country.<br> North Western Province has contributed 10.7% of GDP, Nationally, approximately 25.5% of the total<br> employed population are engaged in agriculture, inclusive of forestry and fishery.The ministry of<br> Agriculture consist with three Departments.
                </p>

                <div class="achievments_cards">
                    <article class="achievment_card">
                        <span class="achievment_icon">
                            <i class="uil uil-shopping-cart-alt"></i>
                        </span>
                        <h3>50+</h3>
                        <p>Service</p>
                    </article>

                    <article class="achievment_card">
                        <span class="achievment_icon">
                            <i class="uil uil-user"></i>
                        </span>
                        <h3>79,000+</h3>
                        <p>Customers</p>
                    </article>

                    <article class="achievment_card">
                        <span class="achievment_icon">
                            <i class="uil uil-trophy"></i>
                        </span>
                        <h3>10+</h3>
                        <p>Awards</p>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="container team_container">
            <article class="team_member">
                <div class="team_member-image">
                    <img src="tm1.jpeg" />
                </div>
                <div class="team_member-info">
                    <h4>Ishan Shanuka</h4>
                    <p>Backend Designer</p>
                </div>

                <div class="team_member-socials">
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100008294448741" target="_blank"><i class="uil uil-facebook"></i></a>
                </div>
            </article>

            <article class="team_member">
                <div class="team_member-image">
                    <img src="tm2.jpeg" />
                </div>
                <div class="team_member-info">
                    <h4>Bawantha Mayuru</h4>
                    <p>Backend Designer</p>
                </div>

                <div class="team_member-socials">
                    <a href="https://www.instagram.com/_ba_wa_nt_ha_/" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://www.facebook.com/bawantha.mayuranga" target="_blank"><i class="uil uil-facebook"></i></a>
                </div>
            </article>

            <article class="team_member">
                <div class="team_member-image">
                    <img src="tm3.jpg" />
                </div>
                <div class="team_member-info">
                    <h4>Gihan Sanjeewa</h4>
                    <p>Backend Designer</p>
                </div>

                <div class="team_member-socials">
                    <a href="https://www.instagram.com/g_i_h_a_n_sanjeewa/" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100010035218304" target="_blank"><i class="uil uil-facebook"></i></a>
                </div>
            </article>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer_container">
            <div class="footer_1">
                 <a href="home.php" class="footer_logo"><h4>Department of Agriculture</h4></a>
                <p>
                    Department of Agriculture, P.O.Box. 01,<br>
                    Peradeniya
                </p>
            </div>

            <div class="footer_2">
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="category.php">Category</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4>Privacy</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Condition</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Contact us</h4>
                <div>
                    <p>+9737 75 25 354</p>
                    <p>gihansanjeewa.m@gmail.com</p>
                </div>

                <ul class="footer_socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer_copyright">
            <small>Copyright &copy; Group Project</small>
        </div>

    </footer>

    <script src="main.js"></script>

</body>
</html>