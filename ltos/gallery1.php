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
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

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

        <header style="height:70px;background-color: #4169e1;">

            <div id="menu-bar" class="fas fa-bars"></div>

            <a href="#" class="logo"><span>L</span>iliw<span> T</span>ourism</a>

            <nav class="navbar" style="margin-top:20px;">
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

            <div class="icons">
            </div>

            <form action="" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="search here...">
                <label for="search-bar" class="fas fa-search"></label>
            </form>

        </header>

        <!-- header section ends -->

        <!-- gallery section starts  -->

        <section class="gallery" id="gallery">
            <br>
            <br><br><br><br><br>
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
                        <a href="comment/liliwresort.php" class="btn">see more</a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/resort/liliwresort.JPG" alt="">
                    <div class="content">
                        <h3>amazing places</h3>
                        <p>Description.</p>
                        <a href="comment/liliwresort2.php" class="btn">see more</a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/resort/moises.jpg" alt="">
                    <div class="content">
                        <h3>amazing places</h3>
                        <p>Description.</p>
                        <a href="comment/moises.php" class="btn">see more</a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/resort/riverfront1.jpg" alt="">
                    <div class="content">
                        <h3>amazing places</h3>
                        <p>Description.</p>
                        <a href="comment/riverfront1.php" class="btn">see more</a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/resort/SIESTA.jpg" alt="">
                    <div class="content">
                        <h3>amazing places</h3>
                        <p>Description.</p>
                        <a href="comment/siesta.php" class="btn">see more</a>
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

        <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
    </body>

    </html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>