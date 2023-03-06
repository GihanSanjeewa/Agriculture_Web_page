<?php
    //include form submittion Script
    include 'iteamupdate.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="Stylesheet" href="admincss.css">
    <link href="StyleSheet.css" rel="stylesheet" />

    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!--GOOGAL FONTS (MONTSERRANT)-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!--SWIPER JS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <style>
        .input_form_1{
            padding-top:7rem;
            padding-left:15rem;
            align-items: center;
            

        }
    </style>
    
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="#"><h4>Department of Agriculture</h4></a>
            
            <ul class="nav_menu">
                <li><a href="adminpannel.php">INSERT DATA</a> </li>
                <li><a href="update.php">UPDATE DATA</a> </li>
                <li><a href="delete.php">DELETE DATA</a> </li>
               

            </ul>
            <button id="open-menu-btn"> <i class="uil uil-bars"></i> </button>
            <button id="close-menu-btn"> <i class="uil uil-multiply"></i> </button>
        </div>
    </nav>

    <form  method="POST" class="input_form_1" action="update.php" enctype="multipart/form-data">

        <h4> iteam ID :</h4> <input type="number" name="id" placeholder="iteam id" required /></br></br>
        <h4> iteam name :</h4> <input type="text" name="iteamname" placeholder="iteam Name" required /></br></br>
        <h4>no of iteams : </h4> <input type="number" name="noofproduct" placeholder="no of product" required />   </br></br>
        <h4> Iteam Descroption : </h4> <textarea name="discription"  placeholder="discription" required></textarea> </br></br>
        <h4>Iteam Photo : </h4> 

     

        <input type="file" name="itemimage" > 
        <p>Note: JPEG files only.</p> </br></br>

        <button type="submit" name='update' class="btn btn-primary">Insert Data</button>
      
    </form>

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