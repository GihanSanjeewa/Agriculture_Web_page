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
    <link href="productdetails.css" rel="stylesheet"/>
    <!--<link href="category.css" rel="stylesheet"/> -->
    <style>
        .courses {
            margin-top: 1rem;
        }

        .courses_container{
    display:grid;
    grid-template-columns:repeat(4 , 1fr);
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
                <li><a href="report.php">Reports</a> </li>
                <li><a href="contact.php">Contact</a> </li>
            </ul>

            <button id="open-menu-btn"> <i class="uil uil-bars"></i> </button>
            <button id="close-menu-btn"> <i class="uil uil-multiply"></i> </button>
        </div>
    </nav>

    <section class="courses">
        <h2>Our Popular Product</h2>
        <div class="container courses_container">
            <article class="courses">
                <div class="courses_image">
                    <img src="beetroot-3490809_640.jpg" />
                </div>

                <div class="course_info">
                    <h4>Beet Root</h4>

                    <p>
                        Beet is belong to Chenopodiaceae family. It can be grown well in all the -ecological zones
                    </p>

                    <a onclick="togglepopup1()" class="btn btn-primary">More Details</a>
                    
                </div>

            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="onions-1238332_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Big Onion</h4>

                    <p>
                        
                        Big onion, an essential spice crop of Sri Lanka, is cultivated mainly in the dry zone. 
                    </p>

                    <a onclick="togglepopup2()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="cayenne-peppers-2779828_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>chilli</h4>

                    <p>
                        Per capita consumption of dried chillies per annum in Sri Lanka is around Rs. 2.10 - 2.31 and a second quantity is added to the consumption as uncooked pepper.
                    </p>

                    <a onclick="togglepopup3()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="maize-380701_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Maize</h4>

                    <p>   
                        The origin of the corn plant is in North America (Mexico). It is believed to have occurred 5,000 to 10,000 years ago, but no known (relative) wild species is known to be associated with it.
                    </p>

                    <a onclick="togglepopup4()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="potatoes-1585075_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Potato</h4>

                    <p>
                        Potato is belong to solanacea family. It was introduced to Sri Lanka by Samuel Baker in 1850
                    </p>

                    <a onclick="togglepopup5()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="agriculture-4220660_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Brinjal</h4>

                    <p>
                        Brinjal is considered as a highly marketable nutritious crop
                    </p>

                    <a onclick="togglepopup6()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="bush-beans-3702999_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Long bean</h4>

                    <p>
                        Bean belongs to the family Fabaceae and Genus Phaseolus.  It is widely cultivated in Badulla, Nuwara Eliya, Matale and Kandy Districts.
                    </p>

                    <a onclick="togglepopup7()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="carrots-2387394_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Carrot</h4>

                    <p>
                        Carrot is belongs to Apiaceae family.  It can be grown successfully, in all the agro-ecological zone.
                    </p>

                    <a onclick="togglepopup8()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="bananas-652497_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Banana</h4>

                    <p>  
                        Bananas can be grown successfully in all areas up to 1500 m above sea level. Mm. Rainfall extending from 1250 to 1900 and C.G. Can be grown in a temperature range of 15 - 38 degrees
                    </p>

                    <a onclick="togglepopup9()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="Mango">
                <div class="courses_image">
                    <img src="guava-144145_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Guava</h4>

                    <p>   
                        Avocados can be successfully grown in the wet zone as well as in the dry and intermediate zones at 1500-2000 m above sea level
                    </p>

                    <a onclick="togglepopup10()" class="btn btn-primary">More Details</a>
                    
                </div>
            </article>

            <article class="courses">
                <div class="courses_image">
                    <img src="papaya-1623023_640.jpg" />
                </div>
                <div class="course_info">

                    <h4>Papaya</h4>

                    <p>  
                        Papaya can be successfully grown in lowland wet and dry zone, intermediate zone and up to 500 m above sea level in the Mediterranean region.
                    </p>

                    <a onclick="togglepopup11()" class="btn btn-primary" >More Details</a>
                    
                </div>
            </article>

            
        </div>
    </section>


    <!--Product Details Forms -->

    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup1()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
     <div class="popup" id="popup-2">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup2()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-3">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup3()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-4">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup4()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-5">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup5()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-6">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup6()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-7">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup7()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-8">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup8()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-9">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup9()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-10">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup10()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
    <div class="popup" id="popup-11">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglepopup11()"><i class="uil uil-times"></i></div>
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit.</p>  
        </div>   
    </div> 
 
 


    <footer class="footer">
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>Department of Agriculture</h4></a>
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
                <h4>Privsacy</h4>
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
    <script src="productdetails.js" ></script>

</body>
</html>