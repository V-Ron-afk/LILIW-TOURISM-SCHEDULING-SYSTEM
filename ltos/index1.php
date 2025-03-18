<?php
require('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liliw Tourism Office Scheduling System</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="images/logo.png">

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
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styles.css">



</head>

<body style="background: #fff;">

    <!-- header section starts  -->
    <header style="height:70px; background-color: #4169e1;">

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo" style="margin-top:10px;"><span>L</span>iliw<span> T</span>ourism</a>

        <nav class="navbar" style="text-decoration: none;margin-top:30px;">
            <a href="index1.php">home</a>
            <a href="schedule1.php">Schedule</a>
            <a href="tourpackages.php">packages</a>
            <a href="gallery1.php">gallery</a>
            <a href="maps.php">Maps</a>
            <a href="chatuser.php?id=1">chat</a>

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
                            <img class="rounded-circle me-lg-2" src="../pics/<?php echo $row['images']; ?>" alt="" style="width: 40px; height: 40px;">
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


    <!-- login form container  -->




    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>dicover new places with us, adventure awaits</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/Esmeris farm Video.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/Esmeris farm Video.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>s</span>
            <span>c</span>
            <span>h</span>
            <span>e</span>
            <span>d</span>
            <span>u</span>
            <span>l</span>
            <span>e</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/d.png" alt="">
            </div>

            <form action="addsched.php" method="POST">
                <div class="inputBox">
                    <h3>Name</h3>
                    <input type="text" name="full_name" placeholder="Full Name">
                </div>
                <div class="inputBox">
                    <h3>Email</h3>
                    <input type="text" name="email" placeholder="Email Address">
                </div>
                <div class="inputBox">
                    <h3>Contact</h3>
                    <input type="text" name="contact" placeholder="Contact Number">
                </div>
                <div class="inputBox">
                    <h3>Where to</h3>
                    <input type="text" name="where_to" placeholder="Place Name">
                </div>
                <div class="inputBox">
                    <h3>How many</h3>
                    <input type="number" name="guest" placeholder="Number of Guests">
                </div>
                <div class="inputBox">
                    <h3>Arrivals</h3>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <h3>Departure</h3>
                    <input type="date" name="departure">
                </div>
                <input type="submit" id="save" name="save" class="btn" value="Sched Now">
            </form>

        </div>

    </section>

    <!-- book section ends -->

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
                <img src="images/brenas1.jpg" alt="">
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
                    <a href="" data-toggle="modal" data-target="#myModal" class="btn">book now</a>
                </div>
            </div>

            <!-- Modal Start-->
            <form action="addpackages.php" method="POST">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 class="modal-title text-center"> Tour Packages</h2>
                            </div>

                            <!-- Modal BODY-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="p_address" class="control-label">full name</label>
                                    <input type="p_address" id="p_address" name="fname" class="form-control form-control-sm rounded-0" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Email</label>
                                    <input type="p_address" id="p_address" name="email" class="form-control form-control-sm rounded-0" placeholder="" requiredEmail Address>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Contact</label>
                                    <input type="p_address" id="p_address" name="contact" class="form-control form-control-sm rounded-0" placeholder="" required>contact
                                </div>
                                <div class="form-group">
                                    <label for="dob" class="control-label">Arrival</label>
                                    <input type="date" id="dob" name="arrivals" class="form-control form-control-sm rounded-0" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit1" value="Book Now" class="btn">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Modal END-->

            <div class="box">
                <img src="images/esmeris1.jpg" alt="">
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
                    <a href="#" data-toggle="modal" data-target="#myModal1" class="btn">book now</a>
                </div>
            </div>
            <!-- Modal Start-->
            <form action="addpackages.php" method="POST">
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 class="modal-title text-center"> Tour Packages</h2>
                            </div>

                            <!-- Modal BODY-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="p_address" class="control-label">full name</label>
                                    <input type="p_address" id="p_address" name="fname" class="form-control form-control-sm rounded-0" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Email</label>
                                    <input type="p_address" id="p_address" name="email" class="form-control form-control-sm rounded-0" placeholder="" requiredEmail Address>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Contact</label>
                                    <input type="p_address" id="p_address" name="contact" class="form-control form-control-sm rounded-0" placeholder="" required>contact
                                </div>
                                <div class="form-group">
                                    <label for="dob" class="control-label">Arrival</label>
                                    <input type="date" id="dob" name="arrivals" class="form-control form-control-sm rounded-0" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit1" value="Book Now" class="btn">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Modal END-->

            <div class="box">
                <img src="images/kilanginfalls.jpg" alt="">
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
                    <a href="#" data-toggle="modal" data-target="#myModal3" class="btn">book now</a>
                </div>
            </div>
            <!-- Modal Start-->
            <form action="addpackages.php" method="POST">
                <div class="modal fade" id="myModal3" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 class="modal-title text-center"> Tour Packages</h2>
                            </div>

                            <!-- Modal BODY-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="p_address" class="control-label">full name</label>
                                    <input type="p_address" id="p_address" name="fname" class="form-control form-control-sm rounded-0" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Email</label>
                                    <input type="p_address" id="p_address" name="email" class="form-control form-control-sm rounded-0" placeholder="" requiredEmail Address>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Contact</label>
                                    <input type="p_address" id="p_address" name="contact" class="form-control form-control-sm rounded-0" placeholder="" required>contact
                                </div>
                                <div class="form-group">
                                    <label for="dob" class="control-label">Arrival</label>
                                    <input type="date" id="dob" name="arrivals" class="form-control form-control-sm rounded-0" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit1" value="Book Now" class="btn">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Modal END-->

            <div class="box">
                <img src="images/strawberryfarm1.jpg" alt="">
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
                    <a href="#" data-toggle="modal" data-target="#myModal2" class="btn">book now</a>
                </div>
            </div>
            <!-- Modal Start-->
            <form action="addpackages.php" method="POST">
                <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 class="modal-title text-center"> Tour Packages</h2>
                            </div>

                            <!-- Modal BODY-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="p_address" class="control-label">full name</label>
                                    <input type="p_address" id="p_address" name="fname" class="form-control form-control-sm rounded-0" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Email</label>
                                    <input type="p_address" id="p_address" name="email" class="form-control form-control-sm rounded-0" placeholder="" requiredEmail Address>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Contact</label>
                                    <input type="p_address" id="p_address" name="contact" class="form-control form-control-sm rounded-0" placeholder="" required>contact
                                </div>
                                <div class="form-group">
                                    <label for="dob" class="control-label">Arrival</label>
                                    <input type="date" id="dob" name="arrivals" class="form-control form-control-sm rounded-0" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit1" value="Book Now" class="btn">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Modal END-->

            <div class="box">
                <img src="images/sunflower.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Kilangin Sunflower Farm </h3>
                    <p>LDescription.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                    <a href="#" data-toggle="modal" data-target="#myModal6" class="btn">book now</a>
                </div>
            </div>
            <!-- Modal Start-->
            <form action="addpackages.php" method="POST">
                <div class="modal fade" id="myModal6" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 class="modal-title text-center"> Tour Packages</h2>
                            </div>

                            <!-- Modal BODY-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="p_address" class="control-label">full name</label>
                                    <input type="p_address" id="p_address" name="fname" class="form-control form-control-sm rounded-0" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Email</label>
                                    <input type="p_address" id="p_address" name="email" class="form-control form-control-sm rounded-0" placeholder="" requiredEmail Address>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Contact</label>
                                    <input type="p_address" id="p_address" name="contact" class="form-control form-control-sm rounded-0" placeholder="" required>contact
                                </div>
                                <div class="form-group">
                                    <label for="dob" class="control-label">Arrival</label>
                                    <input type="date" id="dob" name="arrivals" class="form-control form-control-sm rounded-0" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit1" value="Book Now" class="btn">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Modal END-->

            <div class="box">
                <img src="images/estampa.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Estampa </h3>
                    <p>Description.p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                    <a href="#" data-toggle="modal" data-target="#myModal4" class="btn">book now</a>
                </div>
            </div>
            <!-- Modal Start-->
            <form action="addpackages.php" method="POST">
                <div class="modal fade" id="myModal4" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 class="modal-title text-center"> Tour Packages</h2>
                            </div>

                            <!-- Modal BODY-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="p_address" class="control-label">full name</label>
                                    <input type="p_address" id="p_address" name="fname" class="form-control form-control-sm rounded-0" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Email</label>
                                    <input type="p_address" id="p_address" name="email" class="form-control form-control-sm rounded-0" placeholder="" requiredEmail Address>
                                </div>
                                <div class="form-group">
                                    <label for="p_address" class="control-label">Contact</label>
                                    <input type="p_address" id="p_address" name="contact" class="form-control form-control-sm rounded-0" placeholder="" required>contact
                                </div>
                                <div class="form-group">
                                    <label for="dob" class="control-label">Arrival</label>
                                    <input type="date" id="dob" name="arrivals" class="form-control form-control-sm rounded-0" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit1" value="Book Now" class="btn">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Modal END-->

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
                <img src="images/resort/BALAY.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p class="p">Description.</p>
                    <a href="comment/kilanginfalls.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resort/BNL3.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="comment/esmeris.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resort/LILIW RESORT1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resort/liliwresort.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resort/moises.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resort/riverfront1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resort/SIESTA.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resort/treefarm.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resort/BALAY.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
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
                <img src="images/resto/arabella.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p class="p">Description.</p>
                    <a href="../kilangin.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resto/beths.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resto/fastfood.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resto/mangpablings.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resto/whitehouse.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resto/mangpablings.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resto/arabella.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resto/beths.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/resto/fastfood.JPG" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
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
                <img src="images/footwear/3rd_1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p class="p">Description.</p>
                    <a href="../kilangin.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/footwear/3rd_2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/footwear/3rd_3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/footwear/3rd_4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/footwear/3rd_5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/footwear/3rd_6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/footwear/3rd_7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/footwear/3rd_8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/footwear/3rd_9.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Description.</p>
                    <a href="#" class="btn">see more</a>
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
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="addcontact.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="fname" placeholder="Full Name">
                    <input type="email" name="email" email placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="number" name="contact" placeholder="Contact Number">
                    <input type="text" name="subjects" placeholder="Subject">
                </div>
                <textarea placeholder="Description" name="descriptions" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" name="submit" value="send message">
            </form>

        </div>

    </section>

    <!-- contact section ends -->


    <!-- footer section  -->

    <section class="footer">

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











    <script>
        $('#logout').click(function() {
            swal({
                icon: 'success',
                title: 'Are you want to logout!!!.',
                button: 'Ok',
                timer: 2000
            });
            window.setTimeout(function() {
                window.location.replace('logout.php');
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
                window.location.replace('userprofile.php');
            }, 1500);
        });
    </script>

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


    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>

    <!-- custom js file link  -->
    <script src="ltos/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>