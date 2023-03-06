<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />
    <title>Agriculture Web site</title>
    <link href="StyleSheet.css" rel="stylesheet" />
    <link href="paymentstyle.css" rel="stylesheet" />

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
    <div class="container">

        <form action="">
    
            <div class="row">
    
                <div class="col">
    
                    <h3 class="title">billing address</h3>
    
                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text" placeholder="john deo">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="example@example.com">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="room - street - locality">
                    </div>
                    <div class="inputBox">
                        <span>city :</span>
                        <input type="text" placeholder="colombo">
                    </div>
    
                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" placeholder="Sri Lanka">
                        </div>
                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" placeholder="123 456">
                        </div>
                    </div>
    
                </div>
        
            </div>
    
            <input type="submit" value="proceed to checkout" class="submit-btn">
    
        </form>
    
    </div>    

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