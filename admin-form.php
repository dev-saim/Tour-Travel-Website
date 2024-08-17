<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    session_start();

    if($_SESSION['name']=="")
    {
        header("location:admin.php");
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
    <link rel="stylesheet" href="assests/css/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/style2.css">
    <title>Admin Page</title>  

</head>
<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6">All Users Details</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">

                            <tr class="table-head">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Username</td>
                                <td>Password</td>
                            </tr>

                            <?php

                                $userdata = "select * from data";

                                $result = mysqli_query($connection,$userdata);

                                while($row = mysqli_fetch_assoc($result))
                            
                                echo "
                                    
                                    <tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['name']."</td>
                                        <td>".$row['email']."</td>
                                        <td>".$row['username']."</td>
                                        <td>".$row['password']."</td>
                                     </tr>

                                "
                                    
                            ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container-fluid" style="margin-top:70px">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6">All BOOKED TRIPS</h2>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered">

                            <tr class="table-head">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Address</td>
                                <td>Location</td>
                                <td>Guests</td>
                                <td>Arrival</td>
                                <td>Leaving</td>
                            </tr>

                            <?php

                                $query = "select * from book_form";

                                $result = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_assoc($result))
                            
                                echo "
                                    
                                    <tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['name']."</td>
                                        <td>".$row['email']."</td>
                                        <td>".$row['phone']."</td>
                                        <td>".$row['address']."</td>
                                        <td>".$row['location']."</td>
                                        <td>".$row['guests']."</td>
                                        <td>".$row['arrivals']."</td>
                                        <td>".$row['leaving']."</td>
                                     </tr>

                                "
                                    
                            ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
                                