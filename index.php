<?php

ob_start(); // turns on output buffering
session_start();
$timezone = date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect("localhost","root","","demo" ); // conection variable

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Empower Illiterate</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="page-wraper">
        <!-- Sidebar Menu -->
        <div class="responsive-nav">
            <i class="fa fa-bars" id="menu-toggle"></i>
            <div id="menu" class="menu">
                <i class="fa fa-times" id="menu-close"></i>
                <div class="container">
                    <div class="image">
                        <a href="#"><img src="images/logo-image.jpg" alt="Logo" /></a>
                    </div>
                    <div class="author-content">
                        <h4>Empower Illiterate</h4>
                        <span>Anybody can work</span>
                    </div>
                    <nav class="main-nav" role="navigation">
                        <ul class="main-menu">
                            <li><a href="Login.php">Login</a></li>
                            <li><a href="List.php">Employees</a></li>
                            <li><a href="Help.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        <section class="section about-me" data-section="section1">
            <div class="container">
                <div class="section-heading">
                    <h2>Empower Illiterate</h2>
                </div>
                <div class="right-image-post">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="left-text">
                                <h4>About Us</h4>
                                <p>Our idea is to provide a framework for medium connecting people who are looking for work and those who are looking to hire workers. There are many illiterates who have good skill in carpentry, farming, driving, etc. But
                                    unable to find work. Skilled people who are searching for work need to specify their skill and phone number on our platform. Those who want to hire can contact workers through the phone number.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

</body>

</html>