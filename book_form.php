<?php

    $connection = mysqli_connect('localhost','root','','book_db');


    if(isset($_POST['send']))
    {
        session_start();

        if($_SESSION['name']=="")
        {
            header("location:login.php");
        }
         
        else
        {
            $name = $_POST['name'];
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $location = $_POST['location'];
            $guest = $_POST['guests'];
            $arrival = $_POST['arrival'];
            $leaving = $_POST['leaving'];
        

            $request = "insert into book_form(name, fname, email, phone, address, location, guests, arrivals, leaving) values
                    ('$name', '$fname', '$email', '$phone', '$address', '$location', '$guest', '$arrival', '$leaving')";

        
            mysqli_query($connection, $request);

            header('location:home.php');
        }

    }

?>