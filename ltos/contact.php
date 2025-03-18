<?php
require_once('conn.php');
ob_start();
?>
<?php
if ($_SESSION['username']) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liliw Tourism Office Scheduling System</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">


        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/styles.css">

    </head>

    <body style="background:#fff;">

        <!-- header section starts  -->

        <header style="height:70px;">

            <div id="menu-bar" class="fas fa-bars"></div>

            <a href="#" class="logo"><span>L</span>iliw<span> T</span>ourism</a>

            <nav class="navbar" style="margin-top:20px;">
                <a href="index1.php">home</a>
                <a href="schedule1.php">Schedule</a>
                <a href="tourpackages.php">packages</a>
                <a href="gallery1.php">gallery</a>
                <a href="maps.php">Maps</a>
                <a href="contact.php">contact</a>
                <div class="navbar-nav align-items-center " style=" height:50px;">

                    <?php
                    $user = $_SESSION['username'];
                    ?>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex" style="color: #fff;"> <?php echo $user ?> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="userprofile.php" onClick="return confirm('User Personal Information!!!');" class="dropdown-item" style=" width:100px;">Profile</a>
                            <a href="logout.php" onClick="return confirm('Are you sure you want to logout?');" class="dropdown-item" style=" width:100px;">Log Out</a>
                        </div>
                    </div>

                </div>

            </nav>

            <div class="icons">
            </div>

            <form action="" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="search here...">
                <label for="search-bar" class="fas fa-search"></label>
            </form>

        </header>

        <!-- header section ends -->


        <!-- contact section starts  -->

        <section class="contact" id="contact">
            <section class="book" id="book">
                <br>
                <br>
                <br>
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
                    <?php
                    $user = $_SESSION['username'];
                    ?>
                    <form action="addcontact.php" method="POST">
                        <input type="hidden" name="username" value="<?php echo $user ?>">
                        <div class="inputBox">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <textarea placeholder="Description" name="descriptions" id="" cols="30" rows="10"></textarea>
                        <input type="submit" class="btn" name="submit" value="send message">
                    </form>

                </div>

            </section>

            <!-- contact section ends -->

            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- custom js file link  -->
            <script src="js/script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>

    </html>


<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>