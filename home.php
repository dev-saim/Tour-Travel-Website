<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="assests/css/style.css">  

    <title>Tour & Travel</title>  

</head>
<body>

    <header class="header">

        <a href="#" class="logo"> <span><i class="fas fa-hiking"></i> </span> Travel</a>

        <nav class="navbar">
            <a href="home.php" style="color:#e67e22" class="active-page">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div class="icons">
            <i class="fas fa-moon" id="theme-btn"></i>
            <a class="dropdownn"><i class="fas fa-user" id="user-btn"></i>
                <div class="sub-menu">
                    <ul>
                        <li class="web"><a href="admin.php">Admin</a></li>
                        <li class="web"><a href="login.php">User</a></li>
                    </ul>
                </div>
            </a>
            
            <i class="fas fa-bars" id="menu-bars"></i>

        </div>

    </header>


    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide slide" style="background:url(assests/images/slider/slider-1.jpg) no-repeat ">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">Explore more </a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(assests/images/slider/slider-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Exlpore the new places</h3>
                        <a href="package.php" class="btn">Explore more </a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(assests/images/slider/slider-3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make your tour worthwhile</h3>
                        <a href="package.php" class="btn">Explore more </a>
                    </div>
                </div>
            </div>
             
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

        </div>
    </section>


    <section class="services">
    
        <h1 class="heading-title">Our Services</h1>

        <div class="box-container">

            <div class="box">
                <img src="assests/images/icons/1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="assests/images/icons/2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="assests/images/icons/3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="assests/images/icons/4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="assests/images/icons/5.png" alt="">
                <h3>Off ROad</h3>
            </div>

            <div class="box">
                <img src="assests/images/icons/6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>
    </section>


    <section class="home-about">

        <div class="image">
            <img src="assests/images/banner/about-us.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil eius fugit officiis non eligendi ea consectetur tempora id vel doloremque veritatis enim facere doloribus quis voluptates temporibus quas veniam illo, natus, maiores reiciendis delectus dolores. Recusandae doloremque quis temporibus quia.
            </p> 
            <a href="about.php" class="btn">Read More</a>
        </div>

    </section>


    <section class="home-pakages">
        <h1 class="heading">Our Packages</h1>
        <div class="box-container">

            <div class="box">
                
                <div class="image">
                    <img src="assests/images/visit/1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, enim iste? Cupiditate libero quos explicabo.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>

            </div>

            <div class="box">
                
                <div class="image">
                    <img src="assests/images/visit/2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, enim iste? Cupiditate libero quos explicabo.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>

            </div>

            <div class="box">
                
                <div class="image">
                    <img src="assests/images/visit/3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, enim iste? Cupiditate libero quos explicabo.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>

            </div>

            <div class="box">
                
                <div class="image">
                    <img src="assests/images/visit/4.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, enim iste? Cupiditate libero quos explicabo.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>

            </div>

            <div class="box">
                
                <div class="image">
                    <img src="assests/images/visit/5.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, enim iste? Cupiditate libero quos explicabo.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>

            </div>

            <div class="box">
                
                <div class="image">
                    <img src="assests/images/visit/6.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, enim iste? Cupiditate libero quos explicabo.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>

            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>

    </section>


    <section class="footer">

        <div class="box-container">

            <div class="box">

                <h3>Quick Links</h3>

                <a href="home.php"><i class="fas fa-angle-right"> </i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"> </i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"> </i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"> </i>Book</a>

            </div>

            <div class="box">

                <h3>User Links</h3>

                <a href="admin.php"><i class="fas fa-angle-right"> </i>Admin</a>
                <a href="login.php"><i class="fas fa-angle-right"> </i>login</a>
                <a href="signup.php"><i class="fas fa-angle-right"> </i>Sign-Up</a>

            </div>



            <div class="box">

                <h3>Follow Us</h3>

                <a href="#"><i class="fab fa-facebook-f"> </i>Facebook</a>
                <a href="#"><i class="fab fa-instagram"> </i>Instagram</a>
                <a href="#"><i class="fab fa-twitter"> </i>Twitter</a>
                <a href="#"><i class="fab fa-linkedin"> </i>Linkedin</a>

            </div>

            <div class="box">

                <h3>Contact Info</h3>

                <a href="#"><i class="fas fa-phone"> </i>+923081808805</a>
                <a href="#"><i class="fas fa-phone"> </i>+923357796687</a>
                <a href=""><i class="fas fa-envelope"></i>saimasif885@gmail.com</a>

            </div>

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="assests/js/script.js"></script>
    <script src=assests/js/jquery1.js></script>

    <script>

        var a = 'fas fa-moon';

        $(document).ready(function () {
            $("#theme-btn").click(function () {
                if (a == 'fas fa-moon') {
                    $("#theme-btn").attr("class", "fas fa-sun");
                    $("body").css("background", "rgb(29, 28, 28)");
                    $(".header").css("background", "rgb(20, 17, 17)");
                    $(".header .logo").css("color", "white");
                    $(".header .navbar").css("background", "rgb(20, 17, 17)");
                    $(".header").css("border-bottom", "1px solid gray");
                    $(".header .navbar a").css("color", "white");
                    $(".header .navbar .active-page").css("color", "#e67e22");
                    $(".services h1").css("color", "white");
                    $(".services .box-container .box h3").css("color", "white");
                    $(".home-about .content").css("background", "black");
                    $(".home-about .content h3").css("color", "white");
                    $(".home-about .content p").css("color", "lightgray");
                    $(".home-pakages").css("background", "rgb(29, 28, 28)");
                    $(".home-pakages h1").css("color", "white");
                    $(".home-pakages .box-container .box .content h3").css("color", "white");
                    $(".home-pakages .box-container .box .content p").css("color", "lightgray");

                    
                    a = 'fas fa-sun';
                }
                else if (a == "fas fa-sun") {
                    $("#theme-btn").attr("class", "fas fa-moon");
                    $("body").css("background", "white");
                    $(".header").css("background", "white");
                    $(".header .logo").css("color", "black");
                    $(".header .navbar").css("background", "white");
                    $(".header .navbar a").css("color", "black");
                    $(".header .navbar .active-page").css("color", "#e67e22");
                    $(".services h1").css("color", "black");
                    $(".services .box-container .box h3 ").css("color", "black");
                    $(".home-about .content").css("background", "#f6f6f6");
                    $(".home-about .content h3").css("color", "black");
                    $(".home-about .content p").css("color", "black");
                    $(".home-pakages").css("background", "#f6f6f6");
                    $(".home-pakages h1").css("color", "black");
                    $(".home-pakages .box-container .box .content h3").css("color", "black");
                    $(".home-pakages .box-container .box .content p").css("color", "black");


                    a = 'fas fa-moon';
                }
            });
        });

    </script>

    
</body>
</html>