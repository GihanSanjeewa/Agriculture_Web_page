<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />
    <title>Agriculture Web site</title>
    <link href="StyleSheet.css" rel="stylesheet" />

    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!--GOOGAL FONTS (MONTSERRANT)-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!--SWIPER JS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="home.php"><h4>Department of Agriculture</h4></a>
            <img id="image_logo" src="navlogo.svg" style="max-width: 3%; margin-left: -480px; ">
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

    <!--******End Of NavBar*****-->

    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Agriculture of NWP</h1>
                <p>"The agriculture sector of the province consists of non-plantation sector, plantation sector and livestock sector. The non-plantation sector consists of paddy, supplementary food crops, fruits, vegetables, export agricultural crops, flowers, leaves and ornamental plants. The major crops in the plantation sector are coconut and cashew while the export agricultural crops are betel, coffee, pepper, ginger, turmeric and arecanut.

"
                </p>
                <a href="about.php" class="btn btn-primary"> Get Start</a>
            </div>

            <div class="header_right">
                <div class="header_right-image">
                    <img src="digital_agriculture3.jpg" />
                </div>
            </div>

        </div>
    </header>

    <!--******End Of Header*****-->

    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Main Production</h1>
                <p>basically ministry target to increase the agricultural production under three main production categories
                
                <!--<a href="#" class="btn">Learn More</a>-->
            </div>

            <div class="categories_right">

                <article class="category">
                    <span class="category_icon">
                        <i class="uil uil-apple"></i>

                    </span>
                    <h5>Fruits</h5>
                    <p>pineapple ,mango, papaya and banana are the prominante fruits which are grow in north western province </p>

                </article>

                <article class="category">
                    <span class="category_icon">
                        <i class="uil uil-palette"></i>
                    </span>
                    <h5>Vegetable</h5>
                    <p>Brinjol,long beans,Pumpkins, okra and Bitter gourd are the prominante Vegetable which are grow in north western province </p>

                </article>

                <article class="category">
                    <span class="category_icon">
                        <i class="uil uil-circle-layer"></i>
                    </span>
                    <h5>other food crops</h5>
                    <p>Green gram ,cowpea,ground nut,Chilli,Red onion,Black gram and sesame</p>

                </article>

               
            </div>
        </div>
    </section>
    <!--******End Of Categories*****-->

    <section class="courses">
        <h2>Our Main Product</h2>
        <div class="container courses_container">
            <article class="courses">
                <div class="courses_image">
                    <img src="vegetables-1085063_640.jpg" />
                </div>

                <div class="course_info">
                    <h4>Vegetable</h4>

                    <p>
                        Long bean is the prominant crop in vegetable category Annual production aproximate 11564 MT and it is near 6% contribute to national production.
                    </p>

                    <a href="cropsproduct.php" class="btn btn-primary">Learn More</a>
                </div>

            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="apples-1776744_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Fruits</h4>

                    <p>
                       Banana is the prominant crop in Fruits category Annual production aproximate  864120 MT and it is near 14% contribute to national production. 
                    </p>

                    <a href="cropsproduct.php" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="vegetables-752153_640.jpg" />
                </div>

                <div class="course_info">
                    <h4>Other food crops</h4>

                    <p>
                        Chilli is the prominant crop in other food crops category Annual production aproximate 24633 MT and it is near 31% contribute to national production.
                    </p>

                    <a href="cropsproduct.php" class="btn btn-primary">Learn More</a>
                </div>

            </article>
        </div>
    </section>

    <!--******End Of Courses*****-->


    <section class="faqs">
        <h2>Frequently asked Question</h2>
        <div class="container faqs_container">
            <article class="faq">
                <div class="faq_icon">
                    <i class="uil uil-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>Where can buy fertilizer?</h4>
                    <p>
                        Contact the Agriculture inspector in youre area 
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="uil uil-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>Where can buy seed paddy?</h4>
                    <p>
                        Batalagoda paddy research insitute and Zonal office of department of Agriculture Nwp
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="uil uil-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>Where can be find vegetable seed?</h4>
                    <p>
                        Depatment outlet in Dambulla road
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="uil uil-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>How can we sell our products ?</h4>
                    <p>
                        Contact the cordinator of "Isuru kushi weladapola" in youre area.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="uil uil-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>how can get a advice about pest management </h4>
                    <p>
                       Contact the Agriculture inspector in youre area  
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="uil uil-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>How can we learn new Aggricultural technology?</h4>
                    <p>
                        contact the Training section of department of  Agriculture
                        037 222 3100
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="uil uil-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>Where can buy grafted fruit plants </h4>
                    <p>
                        from madagama and wariyapola 
                         Goverment farm.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq_icon">
                    <i class="uil uil-plus"></i>
                </div>
                <div class="question_answer">
                    <h4>Where can buy tissue culture plants</h4>
                    <p>
                        from Wariyapola,pambala and denewar watta department labs
                    </p>
                </div>
            </article>
        </div>
    </section>

    <!--******End Of FAQs*****-->



    <section class="container testimonials_container mySwiper">
        <h2>Customer's Testimonials</h2>
        <div class="swiper-wrapper">
        
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="tm3.jpg" />
                </div>

                <div class="testimonial_info">
                    <h5>Gihan Sanjeewa</h5>
                    <small>Customer</small>
                </div>

                <div class="testimonial_body">
                    <p>
                        excellent departmnet can contact officers and can byu items ❤️
                    </p>
                </div>

            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="tm2.jpeg" />
                </div>

                <div class="testimonial_info">
                    <h5>Bawantha Mayuru</h5>
                    <small>Customer</small>
                </div>

                <div class="testimonial_body">
                    <p>
                        Good Site can we use it very easily
                    </p>
                </div>

            </article>

        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!--******End Of testimonials*****-->

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

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="main.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            //when windows width is >= 600px
            breakpoints: {
                600: {
                    slidesPerView: 2
                }
            }
        });
    </script>
</body>


</html>