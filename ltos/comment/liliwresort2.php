<?php
require('../conn.php');
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liliw Tourism Office Scheduling System</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="../images/logo.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap style Script-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />



    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/style123.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
        /* navbar nderline */
        .navbar a,
        .logo {
            text-decoration: none !important;
        }
    </style>


</head>

<body style="background: #fff;">

    <!-- header section starts  -->

    <header style="height:70px;background-color: #4169e1;">

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo" style="margin-top:10px;"><span>L</span>iliw<span> T</span>ourism</a>

        <nav class="navbar" style="text-decoration: none;margin-top:30px;">
            <a href="../index1.php">home</a>
            <a href="../schedule1.php">Schedule</a>
            <a href="../tourpackages.php">packages</a>
            <a href="../gallery1.php">gallery</a>
            <a href="../maps.php">Maps</a>
            <a href="../chatuser.php?id=1">chat</a>
            <div class="navbar-nav align-items-center " style=" height:50px;">

                <?php
                $user = $_SESSION['username'];
                ?>


                <?php
                $user = $_SESSION['user_id'];
                $sqlget1 = "SELECT * FROM users WHERE user_id = $user";
                $sqldata1 = mysqli_query($con, $sqlget1) or die("Unable to display: " . mysqli_connect_error());
                while ($row = mysqli_fetch_assoc($sqldata1)) {
                ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../../pics/<?php echo $row['images']; ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex" style="color: #fff;"> <?php echo $row['username'] ?> </span>
                        </a>
                    <?php
                }
                    ?>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" id="profile" class="dropdown-item" style=" width:100px;">Profile</a>
                        <a href="#" id="logout" class="dropdown-item" style=" width:100px;">Log Out</a>
                    </div>
                    </div>

            </div>

        </nav>

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar">



                <form action="" class="search-bar-container">
                    <input type="search" id="search-bar" placeholder="search here...">
                    <label for="search-bar" class="fas fa-search"></label>
                </form>
    </header>

    <!-- header section ends -->

    <!-- header section ends -->


    <!-- login form container  -->

    <br><br><br><br>
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card" style=" margin-top: 50px;">
                </div> <img src="../images/resort/LILIW RESORT1.jpg" class="img-fluid" style=" width: 750px;">
                <input type="hidden" name="pic" value="2">
                <div class="p-2">
                    <p class="text-justify">Description.</p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row icons d-flex align-items-center"> </div>
                        <div class="d-flex flex-row muted-color"> <span>
                                <?php
                                $sql = "SELECT * FROM gallery where gallery_id = 'liliwresort2'";
                                if ($result = mysqli_query($con, $sql)) {
                                    $rowcount = mysqli_num_rows($result);
                                    echo "<p6 class='mb-0'> " . $rowcount;
                                    "</p6>";
                                }
                                ?> comments</span> <span class="ml-2">Share</span> </div>
                    </div>
                    <hr>
                    <div class="comments">
                        <?php


                        $id2 = $_SESSION['user_id'];
                        $sqlget51 = "SELECT * FROM gallery where gallery_id = 'liliwresort2'";
                        $sqldata51 = mysqli_query($con, $sqlget51) or die('Error Displaying Data' . mysqli_connect_error());
                        while ($row51 = mysqli_fetch_assoc($sqldata51)) {

                            $id2 = $row51['user_id'];
                            $sqlget5 = "SELECT * FROM users where user_id = $id2";
                            $sqldata5 = mysqli_query($con, $sqlget5) or die('Error Displaying Data' . mysqli_connect_error());
                            while ($row5 = mysqli_fetch_assoc($sqldata5)) {
                        ?>

                                <div class="d-flex flex-row mb-2"> <img src="../../pics/<?php echo $row5['valid_id'] ?>" width="40" class="rounded-image">
                                    <div class="d-flex flex-column ml-2"> <span class="name">
                                        <?php echo $row5['fullname'];
                                    }
                                        ?></span> <small class="comment-text"><?php echo $row51['comment']; ?></small>
                                        <div class="d-flex flex-row align-items-center status"> <small>Like</small> <small>Reply</small> <small>Translate</small> <small>8 mins</small> </div>
                                    </div>
                                </div>

                            <?php } ?>
                            <form action="comment.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="pic" value="liliwresort2">
                                <div class="comment-input"> <input type="text" name="comment" class="form-control">
                                    <div class="fonts">
                                        <label for=""><i class="far fa-paper-plane p-2"></i> </a></label>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- footer section  -->

    <section class="footer" style=" margin-top: 50px;">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>LDescription.</p>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">Home</a>
                <a href="#">Schedule</a>
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
    <script src="/js/main.js">
        (function($) {
            "use strict";

            // Spinner
            var spinner = function() {
                setTimeout(function() {
                    if ($('#spinner').length > 0) {
                        $('#spinner').removeClass('show');
                    }
                }, 1);
            };
            spinner();


            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 1500, 'easeInOutExpo');
                return false;
            });


            // Sidebar Toggler
            $('.sidebar-toggler').click(function() {
                $('.sidebar, .content').toggleClass("open");
                return false;
            });


            // Progress Bar
            $('.pg-bar').waypoint(function() {
                $('.progress .progress-bar').each(function() {
                    $(this).css("width", $(this).attr("aria-valuenow") + '%');
                });
            }, {
                offset: '80%'
            });


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
                nav: false
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
        $('#logout').click(function() {
            swal({
                icon: 'success',
                title: 'Are you want to logout!!!.',
                button: 'Ok',
                timer: 2000
            });
            window.setTimeout(function() {
                window.location.replace('../logout.php');
            }, 1500);
        });
    </script>


    <script>
        $('#profile').click(function() {
            swal({
                icon: 'success',
                title: 'Personal Information.',
                button: 'Ok',
                timer: 2000
            });
            window.setTimeout(function() {
                window.location.replace('../userprofile.php');
            }, 1500);
        });
    </script>
    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>

    <!-- bootstrap added -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>