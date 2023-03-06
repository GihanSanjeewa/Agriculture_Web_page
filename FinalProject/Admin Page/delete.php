<?php   
 include 'connection.php';  
 $query = "select * from iteam_details";  
 $run = mysqli_query($connection,$query);  
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="Stylesheet" href="deletefrm.css">
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

<header></header>  
 <table cellspacing="0" cellpadding="0">  
      <tr class="heading">  
          
           <th>ID</th>  
           <th>Iteam Name</th>  
           <th>NO of iteams</th>  
           <th>Discription</th>  
           <th>photo</th>  
           
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['id']."</td>  
                               <td>".$result['iteam_name']."</td>  
                               <td>".$result['no_of_iteams']."</td>  
                               <td>".$result['discription']."</td>  
                               
                               
                               <td><a href='fndelete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                       ";
                }  
           }  
      ?>  
 </table>  

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