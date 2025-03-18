<?php
require('config.php');
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liliw Tourism Office Scheduling System</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="ltos/images/logo.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap style Script-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="ltos/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="ltos/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="ltos/css/bootstrap.min.css" rel="stylesheet">



    <!-- custom css file link  -->
    <link rel="stylesheet" href="ltos/css/styles.css">
    

</head>
<body style="background: #fff;">
    
<!-- header section starts  -->

<header style="height: 50px; background-color: #4169e1;">

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>L</span>iliw<span> T</span>ourism</a>

    <nav class="navbar">
    </nav>

    <div class="icons">
        <a href="login.php"><i class="fas fa-user" id="login-btn"></i></a>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>

<!-- header section ends -->


<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" name="email" class="box" placeholder="Email Address">
        <input type="password" name="password" class="box" placeholder="Password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>
    </div>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="ltos/Esmeris farm Video.mp4"></span>
        <span class="vid-btn" data-src="ltos/images/sunflower.jpg"></span>
        <span class="vid-btn" data-src="ltos/images/strawberryfarm1.jpg"></span>
        <span class="vid-btn" data-src="ltos/images/esmeris1.jpg"></span>
        <span class="vid-btn" data-src="ltos/images/kilanginfalls.jpg"></span>
    </div>

    <div class="video-container">
        <video src="ltos/images/Esmeris farm Video.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->


<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>t</span>
        <span>o</span>
        <span>u</span>
        <span>r</span>
        <span class="space"></span>
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="ltos/images/brenas1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> A4J Brena's Farm </h3>
                <p>Description.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                <a  href="#" id="btn" class="btn">book now</a>
            </div>
        </div>


        <div class="box">
            <img src="ltos/images/esmeris1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Esmeris Farm </h3>
                <p>Description.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
                <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                <a href="#" id="btn1"class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="ltos/images/kilanginfalls.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kilangin Falls </h3>
                <p class="p">Description.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₱90.00 <span>$₱20.00</span> </div>
                <a href="#" id="btn2" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="ltos/images/strawberryfarm1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Lolo Kap's Strawberry Farm </h3>
                <p>Description.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₱90.00 <span>$₱20.00</span> </div>
                <a href="#" id="btn3" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="ltos/images/sunflower.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kilangin Sunflower Farm </h3>
                <p>Description.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                <a href="#" id="btn4" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="ltos/images/estampa.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Estampa </h3>
                <p>Description.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                <a href="#" id="btn5" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="packages">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Description.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Description.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Description.</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Description.</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Description.</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Description.</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <h1 class="heading">
        <span>R</span>
        <span>e</span>
        <span>s</span>
        <span>o</span>
        <span>r</span>
        <span>t</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="ltos/images/resort/BALAY.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p class="p">Description.</p>
                <a href="#" id="btn6" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resort/BNL3.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn7" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resort/LILIW RESORT1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn8" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resort/liliwresort.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn9" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resort/moises.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn10" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resort/riverfront1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn11" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resort/SIESTA.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn12" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resort/treefarm.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn13" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resort/BALAY.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn14" class="btn">see more</a>
            </div>
        </div>

    </div>
    <h1 class="heading">
        <span>R</span>
        <span>e</span>
        <span>s</span>
        <span>t</span>
        <span>a</span>
        <span>u</span>
        <span>r</span>
        <span>a</span>
        <span>n</span>
        <span>t</span>
    </h1>
    <div class="box-container">

        <div class="box">
            <img src="ltos/images/resto/arabella.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p class="p">Description.</p>
                <a href="#" id="btn15" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resto/beths.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn16" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resto/fastfood.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn17" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resto/mangpablings.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn18" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resto/whitehouse.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn19" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resto/mangpablings.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn20" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resto/arabella.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn21" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resto/beths.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn22" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/resto/fastfood.JPG" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn23" class="btn">see more</a>
            </div>
        </div>

    </div>
    <h1 class="heading">
        <span>F</span>
        <span>o</span>
        <span>o</span>
        <span>t</span>
        <span>w</span>
        <span>e</span>
        <span>a</span>
        <span>r</span>
    </h1>
    <div class="box-container">

        <div class="box">
            <img src="ltos/images/footwear/3rd_1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p class="p">Description.</p>
                <a href="#" id="btn23" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/footwear/3rd_2.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn24" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/footwear/3rd_3.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn25" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/footwear/3rd_4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn25" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/footwear/3rd_5.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a hhref="#" id="btn26" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/footwear/3rd_6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn27" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/footwear/3rd_7.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn28" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/footwear/3rd_8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn29" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="ltos/images/footwear/3rd_9.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Description.</p>
                <a href="#" id="btn30" class="btn">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->



<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="ltos/images/contact-img.svg" alt="">
        </div>

        <form action=" login.php">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" href="#" id="btn31" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Description.</p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">Home</a>
            <a href="#">Packages</a>
            <a href="#">Gallery</a>
            <a href="#">Goole API</a>
            <a href="#">Contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>


</section>
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src=""></script>
<script src="ltos/js/main.js">
    (function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false
    });


    // Chart Global Color
    Chart.defaults.color = "#6C7293";
    Chart.defaults.borderColor = "#000000";


    // Worldwide Sales Chart
    var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "bar",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                    label: "USA",
                    data: [15, 30, 55, 65, 60, 80, 95],
                    backgroundColor: "rgba(235, 22, 22, .7)"
                },
                {
                    label: "UK",
                    data: [8, 35, 40, 60, 70, 55, 75],
                    backgroundColor: "rgba(235, 22, 22, .5)"
                },
                {
                    label: "AU",
                    data: [12, 25, 45, 55, 65, 70, 60],
                    backgroundColor: "rgba(235, 22, 22, .3)"
                }
            ]
            },
        options: {
            responsive: true
        }
    });


    // Salse & Revenue Chart
    var ctx2 = $("#salse-revenue").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                    label: "Salse",
                    data: [15, 30, 55, 45, 70, 65, 85],
                    backgroundColor: "rgba(235, 22, 22, .7)",
                    fill: true
                },
                {
                    label: "Revenue",
                    data: [99, 135, 170, 130, 190, 180, 270],
                    backgroundColor: "rgba(235, 22, 22, .5)",
                    fill: true
                }
            ]
            },
        options: {
            responsive: true
        }
    });
    


    // Single Line Chart
    var ctx3 = $("#line-chart").get(0).getContext("2d");
    var myChart3 = new Chart(ctx3, {
        type: "line",
        data: {
            labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
            datasets: [{
                label: "Salse",
                fill: false,
                backgroundColor: "rgba(235, 22, 22, .7)",
                data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Single Bar Chart
    var ctx4 = $("#bar-chart").get(0).getContext("2d");
    var myChart4 = new Chart(ctx4, {
        type: "bar",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Pie Chart
    var ctx5 = $("#pie-chart").get(0).getContext("2d");
    var myChart5 = new Chart(ctx5, {
        type: "pie",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Doughnut Chart
    var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
    var myChart6 = new Chart(ctx6, {
        type: "doughnut",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });

    
})(jQuery);


</script>
<script>
    $('#btn').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn1').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn2').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn3').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn4').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn5').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn6').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn7').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn8').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn9').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn10').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn11').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn12').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn13').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn14').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn15').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn16').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn17').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn18').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn19').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn20').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn21').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn22').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn23').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn25').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn26').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn27').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn28').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn29').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn30').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
<script>
    $('#btn31').click(function(){
        swal({
            icon: 'success',
            title: 'You must login first.',
            button: 'Ok',
            timer: 2000
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
    });
</script>
</body>
</html>