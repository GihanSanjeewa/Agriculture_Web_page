﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />
    <title>Agriculture Web site</title>

    <!--Css Links-->
    <link href="StyleSheet.css" rel="stylesheet" />
    <link href="about.css" rel="stylesheet" />
   <link href="category.css" rel="stylesheet"/>
    <style>
        .courses{
            margin-top:1rem;
        }

        .courses_container{
             display:grid;
             grid-template-columns:repeat(2 , 1fr);
             gap:2rem;
        }
    </style>

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


    <section class="courses">
        <h2>Welcome Users</h2>
        <div class="container courses_container">
            <article class="courses">
                <div class="courses_image">
                    <img src="equipment-2047314_640.jpg" style="  height: 550px;"/>
                </div>

                <div class="course_info">
                    <h4>SELLS ITEMS</h4>

                    <p>
                        Visit to purchase tools and seeds associated with the agricultural
                    </p>

                    <a class="btn btn-primary">Visit</a>
                <div class="linkbody">
                    <div class="list">
                        <a href="fertilizer.php" class="links">fertilizers</a>
                        <a href="seeds.php" class="links">seeds</a>
                    </div>
              
                </div>

                </div>

            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="farmer-2260636_640.jpg"  style="  height: 550px;" />
                </div>
                <div class="course_info">

                    <h4>CROPS</h4>

                    <p>
                        Visit to see crops associated with the agricultural
                    </p>

                    <a href="cropsproduct.php" class="btn btn-primary">Visit</a>
                    
                </div>
            </article>

            
        </div>
    </section>


<!--FOOTER SECTION -->

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
    <script>
        let click = document.querySelector('.btn-primary');
        let list = document.querySelector('.list');
        click.addEventListener("click",()=>{
                list.classList.toggle('newlist');
        });
    </script>

</body>
</html>