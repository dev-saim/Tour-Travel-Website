<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $command ="SELECT * FROM data WHERE username='$username'";

        $result = mysqli_query($connection, $command);

        while($row=mysqli_fetch_assoc($result))
        {
            $temp=$row['username'];
        } 


        if($temp=="")
        {
            $request = "insert into data(name, email, username, password) values ('$name', '$email', '$username', '$password')";
            mysqli_query($connection, $request);
            header('location:login.php'); 
        }
        
        else
        {
            echo "<script> alert('username already exist') </script>";
        }

    }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="assests/css/style.css">  
    <title>Create account</title>  

</head>
<body>

    <header class="header">

        <a href="#" class="logo"><span><i class="fas fa-hiking"></i> </span> Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
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


    <div class="heading" style="background:url(assests/images/banner/sign-up-banner.jpg) no-repeat"> 
    
        <h1>#Sign-Up</h1>

    </div>


    <section id="login">

        <div class="container">

            <h3> Sign-Up here </h3>

            <form action="signup.php" method="post">

                <label> Name </label>
                <input type="text" placeholder="Enter name here" name="name" required>

                <label> Email </label>
                <input type="email" placeholder="Enter email here" name="email" required>

                <label> Create Username </label>
                <input type="text" placeholder="Create username here" name="username" required>

                <label> Create Password </label>
                <input type="password" placeholder="Create password here" name="password" required>

                <input type="submit" value="Sign-Up" name="send">

                <h4>Already have account <a href="login.php"> &nbsp;login here! </a></h4>

            </form>
        </div>

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

                <a href="Admin.php"><i class="fas fa-angle-right"> </i>Admin</a>
                <a href="login.php"><i class="fas fa-angle-right"> </i>Login</a>
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
                    $(".header .navbar a").css("color", "white");
                    $(".header").css("border-bottom", "1px solid gray");
                    
                    a = 'fas fa-sun';
                }
                else if (a == "fas fa-sun") {
                    $("#theme-btn").attr("class", "fas fa-moon");
                    $("body").css("background", "white");
                    $(".header").css("background", "white");
                    $(".header .logo").css("color", "black");
                    $(".header .navbar").css("background", "white");
                    $(".header .navbar a").css("color", "black");

                    a = 'fas fa-moon';
                }
            });
        });

    </script>

    
</body>
</html>