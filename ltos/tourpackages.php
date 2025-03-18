<?php
ob_start();
require('conn.php');
?>

<?php
if ($_SESSION['username']) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liliw Tourism Office Scheduling System</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="shortcut icon" href="images/logo.png">

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

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Bootstrap style Script-->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <!-- Bootstrap 5.  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.0/minty/bootstrap.min.css">
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
        <link rel="stylesheet" href="jquery.rating.css" />
        <style>
            body {
                background: #f7f7f7;
            }

            .container {
                margin: 150px auto
            }
        </style>

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/styles.css">

        <style>
            .navbar a,
            .logo {
                text-decoration: none;
            }
        </style>

    </head>

    <body style="background:#fff;">

        <!-- header section starts  -->

        <header style="height:70px;background-color: #4169e1;">

            <div id="menu-bar" class="fas fa-bars"></div>

            <a href="#" class="logo"><span>L</span>iliw<span> T</span>ourism</a>

            <nav class="navbar">
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


        <!-- packages section starts  -->

        <section class="packages" id="packages">
            <section class="book" id="book">
                <br>
                <br>
                <br>
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
                                <br>

                                <?php
                                $query = "SELECT * from rating where package_id = 1";

                                // Execute the query and store the result set
                                $result1 = mysqli_query($con, $query);
                                $result = mysqli_query($con, 'SELECT SUM(rate) AS value_sum FROM rating where package_id= 1');
                                $row = mysqli_fetch_assoc($result);
                                $sum = $row['value_sum'];

                                if ($result1) {
                                    // it return number of rows in the table.
                                    $row = mysqli_num_rows($result1);

                                    if ($row) {
                                        $total = $row;
                                    }
                                    // close the result.
                                    mysqli_free_result($result1);
                                }

                                $rate = $sum / $total;
                                echo $rate;

                                if ($rate == 1) {

                                    echo "
                                <i class='fas fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star-half'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>";
                                } else if ($rate > 1 && $rate <= 2) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate == 2) {

                                    echo "
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='far fa-star'></i>
                                                <i class='far fa-star'></i>
                                                <i class='far fa-star'></i>";
                                } else if ($rate > 2 && $rate <= 3) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='far fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate == 3) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate > 3 && $rate <= 4) {

                                    echo "
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half'></i>
                                            <i class='far fa-star'></i>";
                                } else if ($rate == 4) {

                                    echo "
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='far fa-star'></i>";
                                } else if ($rate > 4 && $rate < 5) {

                                    echo "
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='far fa-star-half'></i>";
                                } else if ($rate == 5) {

                                    echo "
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>";
                                } else if ($row == 0) {


                                    echo "
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>";
                                }



                                ?>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn" style="margin-left:10px; background-color:green;">Rate</button>

                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Rate A4J Brena's Farm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" action="rate.php?id=1" method="POST">
                                                <div class="form-group">
                                                    <input name="star1" value="1" type="radio" class="star" />
                                                    <input name="star1" value="2" type="radio" class="star" />
                                                    <input name="star1" value="3" type="radio" class="star" />
                                                    <input name="star1" value="4" type="radio" class="star" />
                                                    <input name="star1" value="5" type="radio" class="star" />
                                                </div>


                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary">Rate</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                            <a href="" data-bs-toggle="modal" data-bs-target="#myModal8" class="btn">book now</a>
                        </div>
                    </div>
                    <!-- Modal Start-->
                    <?php
                    $user = $_SESSION['username'];
                    ?>
                    <form action="#" method="POST">
                        <input type="hidden" name="pack" value="a4j brenas farm">
                        <input type="hidden" name="username" value="<?php echo $user ?>">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel"> Tour Packages</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="dob" class="control-label fs-2">Arrival</label>
                                            <input type="date" id="dob" name="arrivals" class="form-control form-control-lg rounded-0" required>
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


                                <?php
                                // query to fetch Username and Password from

                                $query = "SELECT * from rating where package_id = 2";

                                // Execute the query and store the result set
                                $result1 = mysqli_query($con, $query);
                                $result = mysqli_query($con, 'SELECT SUM(rate) AS value_sum FROM rating where package_id= 2');
                                $row = mysqli_fetch_assoc($result);
                                $sum = $row['value_sum'];

                                if ($result1) {
                                    // it return number of rows in the table.
                                    $row = mysqli_num_rows($result1);

                                    if ($row) {
                                        $total = $row;
                                    }
                                    // close the result.
                                    mysqli_free_result($result1);
                                }

                                $rate1 = $sum / $total;

                                echo $rate1;

                                if ($rate1 == 1) {

                                    echo "
                                <i class='fas fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star-half'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>";
                                } else if ($rate1 > 1 && $rate1 <= 2) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star-half'></i>
                                    <i class='far fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate1 == 2) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate1 > 2 && $rate1 <= 3) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='far fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate1 == 3) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate1 > 3 && $rate1 <= 4) {

                                    echo "
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half'></i>
                                            <i class='far fa-star'></i>";
                                } else if ($rate1 == 4) {

                                    echo "
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='far fa-star'></i>";
                                } else if ($rate1 > 4 && $rate1 < 5) {

                                    echo "
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star-half'></i>";
                                } else if ($rate1 == 5) {

                                    echo "
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>";
                                } else if ($rate1 == 0) {


                                    echo "
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>";
                                }



                                ?>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#esmeris" class="btn" style="margin-left:10px; background-color:green;">Rate</button>

                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="esmeris" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Rate A4J Brena's Farm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" action="rate.php?id=2" method="POST">
                                                <div class="form-group">
                                                    <input name="star1" value="1" type="radio" class="star" />
                                                    <input name="star1" value="2" type="radio" class="star" />
                                                    <input name="star1" value="3" type="radio" class="star" />
                                                    <input name="star1" value="4" type="radio" class="star" />
                                                    <input name="star1" value="5" type="radio" class="star" />
                                                </div>


                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary">Rate</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal9" class="btn">book now</a>
                        </div>
                    </div>
                    <!-- Modal Start-->
                    <?php
                    $user = $_SESSION['username'];
                    ?>
                    <form action="#" method="POST">
                        <input type="hidden" name="pack" value="esmeris farm">
                        <input type="hidden" name="username" value="<?php echo $user ?>">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel"> Tour Packages</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="dob" class="control-label fs-2">Arrival</label>
                                            <input type="date" id="dob" name="arrivals" class="form-control form-control-lg rounded-0" required>
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
                            <p>Description.</p>
                            <div class="stars">

                                <br>
                                <?php
                                $query = "SELECT * from rating where package_id = 3";

                                // Execute the query and store the result set
                                $result1 = mysqli_query($con, $query);
                                $result = mysqli_query($con, 'SELECT SUM(rate) AS value_sum FROM rating where package_id= 3');
                                $row = mysqli_fetch_assoc($result);
                                $sum = $row['value_sum'];

                                if ($result1) {
                                    // it return number of rows in the table.
                                    $row = mysqli_num_rows($result1);

                                    if ($row) {
                                        $total = $row;
                                    }
                                    // close the result.
                                    mysqli_free_result($result1);
                                }

                                $rate2 = $sum / $total;
                                echo $rate2;

                                if ($rate2 == 1) {

                                    echo "
                                <i class='fas fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>";
                                } else if ($rate2 > 1 && $rate2 <= 2) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate2 == 2) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate2 > 2 && $rate2 <= 3) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='far fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate2 == 3) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate2 > 3 && $rate2 <= 4) {

                                    echo "
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half'></i>
                                            <i class='far fa-star'></i>";
                                } else if ($rate2 == 4) {

                                    echo "
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='far fa-star'></i>";
                                } else if ($rate2 > 4 && $rate2 < 5) {

                                    echo "
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star-half'></i>";
                                } else if ($rate2 == 5) {

                                    echo "
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>";
                                } else if ($row == 0) {


                                    echo "
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>";
                                }



                                ?>


                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kil" class="btn" style="margin-left:10px; background-color:green;">Rate</button>

                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="kil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Kilangin Falls</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" action="rate.php?id=3" method="POST">
                                                <div class="form-group">
                                                    <input name="star1" value="1" type="radio" class="star" />
                                                    <input name="star1" value="2" type="radio" class="star" />
                                                    <input name="star1" value="3" type="radio" class="star" />
                                                    <input name="star1" value="4" type="radio" class="star" />
                                                    <input name="star1" value="5" type="radio" class="star" />
                                                </div>


                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary">Rate</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="price"> ₱90.00 <span>$₱20.00</span> </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal10" class="btn">book now</a>
                        </div>
                    </div>
                    <!-- Modal Start-->
                    <?php
                    $user = $_SESSION['username'];
                    ?>
                    <form action="#" method="POST">
                        <input type="hidden" name="pack" value="kilangin falls">
                        <input type="hidden" name="username" value="<?php echo $user ?>">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel"> Tour Packages</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="dob" class="control-label fs-2">Arrival</label>
                                            <input type="date" id="dob" name="arrivals" class="form-control form-control-lg rounded-0" required>
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
                                <?php
                                // query to fetch Username and Password from
                                // the table geek
                                $query = "SELECT * from rating where package_id = 4";

                                // Execute the query and store the result set
                                $result1 = mysqli_query($con, $query);
                                $result = mysqli_query($con, 'SELECT SUM(rate) AS value_sum FROM rating where package_id= 4');
                                $row = mysqli_fetch_assoc($result);
                                $sum = $row['value_sum'];

                                if ($result1) {
                                    // it return number of rows in the table.
                                    $row = mysqli_num_rows($result1);

                                    if ($row) {
                                        $total = $row;
                                    }
                                    // close the result.
                                    mysqli_free_result($result1);
                                }

                                $rate3 = $sum / $total;
                                echo $rate3;

                                if ($rate3 == 1) {

                                    echo "
                                <i class='fas fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star-half'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>";
                                } else if ($rate3 > 1 && $rate3 <= 2) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star-half'></i>
                                    <i class='far fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate3 == 2) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate3 > 2 && $rate3 <= 3) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='far fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate3 == 3) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate3 > 3 && $rate3 <= 4) {

                                    echo "
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half'></i>
                                            <i class='far fa-star'></i>";
                                } else if ($rate3 == 4) {

                                    echo "
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='far fa-star'></i>";
                                } else if ($rate3 > 4 && $rate3 < 5) {

                                    echo "
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star-half'></i>";
                                } else if ($rate3 == 5) {

                                    echo "
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>";
                                } else if ($row == 0) {


                                    echo "
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>";
                                }



                                ?>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lolo" class="btn" style="margin-left:10px; background-color:green;">Rate</button>

                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="lolo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Lolo Kap's Strawberry Farm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" action="rate.php?id=4" method="POST">
                                                <div class="form-group">
                                                    <input name="star1" value="1" type="radio" class="star" />
                                                    <input name="star1" value="2" type="radio" class="star" />
                                                    <input name="star1" value="3" type="radio" class="star" />
                                                    <input name="star1" value="4" type="radio" class="star" />
                                                    <input name="star1" value="5" type="radio" class="star" />
                                                </div>


                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary">Rate</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="price"> ₱90.00 <span>$₱20.00</span> </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal11" class="btn">book now</a>
                        </div>
                    </div>
                    <!-- Modal Start-->
                    <?php
                    $user = $_SESSION['username'];
                    ?>
                    <form action="#" method="POST">
                        <input type="hidden" name="pack" value="lolo kaps strawberry farm">
                        <input type="hidden" name="username" value="<?php echo $user ?>">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel"> Tour Packages</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="dob" class="control-label fs-2">Arrival</label>
                                            <input type="date" id="dob" name="arrivals" class="form-control form-control-lg rounded-0" required>
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
                            <p>Description.</p>
                            <div class="stars">

                                <?php
                                $query = "SELECT * from rating where package_id = 5";

                                // Execute the query and store the result set
                                $result1 = mysqli_query($con, $query);
                                $result = mysqli_query($con, 'SELECT SUM(rate) AS value_sum FROM rating where package_id= 5');
                                $row = mysqli_fetch_assoc($result);
                                $sum = $row['value_sum'];

                                if ($result1) {
                                    // it return number of rows in the table.
                                    $row = mysqli_num_rows($result1);

                                    if ($row) {
                                        $total = $row;
                                    }
                                    // close the result.
                                    mysqli_free_result($result1);
                                }

                                $rate4 = $sum / $total;
                                echo $rate4;


                                if ($rate4 == 1) {

                                    echo "
                                <i class='fas fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>";
                                } else if ($rate4 > 1 && $rate4 <= 2) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate4 == 2) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate4 > 2 && $rate4 <= 3) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='far fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate4 == 3) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate4 > 3 && $rate4 <= 4) {

                                    echo "
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half'></i>
                                            <i class='far fa-star'></i>";
                                } else if ($rate4 == 4) {

                                    echo "
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='far fa-star'></i>";
                                } else if ($rate4 > 4 && $rate4 < 5) {

                                    echo "
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='far fa-star-half'></i>";
                                } else if ($rate4 == 5) {

                                    echo "
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>";
                                } else if ($row == 0) {


                                    echo "
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>";
                                }



                                ?>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kil2" class="btn" style="margin-left:10px; background-color:green;">Rate</button>

                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="kil2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Kilangin Sunflower Farm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" action="rate.php?id=5" method="POST">
                                                <div class="form-group">
                                                    <input name="star1" value="1" type="radio" class="star" />
                                                    <input name="star1" value="2" type="radio" class="star" />
                                                    <input name="star1" value="3" type="radio" class="star" />
                                                    <input name="star1" value="4" type="radio" class="star" />
                                                    <input name="star1" value="5" type="radio" class="star" />
                                                </div>


                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary">Rate</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal121" class="btn">book now</a>
                        </div>
                    </div>

                    <!-- Modal Start-->
                    <?php
                    $user = $_SESSION['username'];
                    ?>
                    <form action="#" method="POST">
                        <input type="hidden" name="pack" value="kilangin sunflower farm">
                        <input type="hidden" name="username" value="<?php echo $user ?>">


                        <!-- Modal -->
                        <div class="modal fade" id="myModal121" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel"> Tour Packages</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="dob" class="control-label fs-2">Arrival</label>
                                            <input type="date" id="dob" name="arrivals" class="form-control form-control-lg rounded-0" required>
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
                            <p>Description.</p>
                            <div class="stars">
                                <?php
                                // query to fetch Username and Password from
                                // the table geek
                                $query = "SELECT * from rating where package_id = 6";

                                // Execute the query and store the result set
                                $result1 = mysqli_query($con, $query);
                                $result = mysqli_query($con, 'SELECT SUM(rate) AS value_sum FROM rating where package_id= 6');
                                $row = mysqli_fetch_assoc($result);
                                $sum = $row['value_sum'];

                                if ($result1) {
                                    // it return number of rows in the table.
                                    $row = mysqli_num_rows($result1);

                                    if ($row) {
                                        $total = $row;
                                    }
                                    // close the result.
                                    mysqli_free_result($result1);
                                }

                                $rate5 = $sum / $total;
                                echo $rate5;

                                if ($rate5 == 1) {

                                    echo "
                                <i class='fas fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>
                                <i class='far fa-star'></i>";
                                } else if ($rate5 > 1 && $rate5 <= 2) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate5 == 2) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate5 > 2 && $rate5 <= 3) {

                                    echo "
                                    <i class='fas fa-star'></i>
                                    <i class='fas fa-star'></i>
                                    <i class='far fa-star-half'></i>
                                    <i class='far fa-star'></i>
                                    <i class='far fa-star'></i>";
                                } else if ($rate5 == 3) {

                                    echo "
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='far fa-star'></i>
                                        <i class='far fa-star'></i>";
                                } else if ($rate5 > 3 && $rate5 <= 4) {

                                    echo "
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half'></i>
                                            <i class='far fa-star'></i>";
                                } else if ($rate5 == 4) {

                                    echo "
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                                <i class='far fa-star'></i>";
                                } else if ($rate5 > 4 && $rate5 < 5) {

                                    echo "
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                    <i class='far fa-star-half'></i>";
                                } else if ($rate5 == 5) {

                                    echo "
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>
                                                        <i class='fas fa-star'></i>";
                                } else if ($row == 0) {


                                    echo "
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>
                                                        <i class='far fa-star'></i>";
                                }



                                ?>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#estampa" class="btn" style="margin-left:10px; background-color:green;">Rate</button>

                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="estampa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> KEstampa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form" action="rate.php?id=6" method="POST">
                                                <div class="form-group">
                                                    <input name="star1" value="1" type="radio" class="star" />
                                                    <input name="star1" value="2" type="radio" class="star" />
                                                    <input name="star1" value="3" type="radio" class="star" />
                                                    <input name="star1" value="4" type="radio" class="star" />
                                                    <input name="star1" value="5" type="radio" class="star" />
                                                </div>


                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit" class="btn btn-primary">Rate</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <div class="price"> ₱90.00 <span>₱120.00</span> </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal131" class="btn">book now</a>
                        </div>
                    </div>
                    <!-- Modal Start-->
                    <?php
                    $user = $_SESSION['username'];
                    ?>
                    <form action="#" method="POST">
                        <input type="hidden" name="pack" value="estampa">
                        <input type="hidden" name="username" value="<?php echo $user ?>">

                        <!-- Modal -->
                        <div class="modal fade" id="myModal131" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel"> Tour Packages</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="dob" class="control-label fs-2">Arrival</label>
                                            <input type="date" id="dob" name="arrivals" class="form-control form-control-lg rounded-0" required>
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
                <?php
                require('conn.php');
                if (isset($_POST['submit1'])) {
                    $pack = $_POST['pack'];
                    $user = $_POST['username'];
                    $arrivals = $_POST['arrivals'];
                    $sqlpackages = "INSERT INTO packages (username, pack, arrivals)
    VALUES ('$user','" . $pack . "','$arrivals')";
                    $resultpackages = mysqli_query($con, $sqlpackages);
                    if ($resultpackages) {

                        echo "
             <script type='text/javascript'>
              $(document).ready(function() {
              swal({
                icon: 'success',
                title: 'Packages has been submitted.',
                button: 'Ok',
                timer: 500
            });
            });
            window.setTimeout(function(){ 
                window.location.replace('tourpackages.php');
            } ,1500); 
            </script>
            <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
            ";
                    } else {

                        echo "
        <script type='text/javascript'>
         $(document).ready(function() {
         swal({
           icon: 'success',
           title: 'Packages Error.',
           button: 'Ok',
           timer: 500
       });
       });
       window.setTimeout(function(){ 
           window.location.replace('tourpackages.php');
       } ,1500); 
       </script>
       <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
       ";
                    }
                }
                ?>

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




        </section>








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

        <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
        <!-- bootstrap added -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="jquery.rating.js"></script>
        <script>
            $('.auto-submit-star').rating({
                callback: function(value, link) {
                    alert(value);
                }
            });
            $('.hover').rating({
                focus: function(value, link) {
                    var tip = $('#hover-test');
                    tip[0].data = tip[0].data || tip.html();
                    tip.html(link.title || 'value: ' + value);
                },
                blur: function(value, link) {
                    var tip = $('#hover-test');
                    $('#hover-test').html(tip[0].data || '');
                }
            });
        </script>
        <script>
            try {
                fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                    method: 'HEAD',
                    mode: 'no-cors'
                })).then(function(response) {
                    return true;
                }).catch(function(e) {
                    var carbonScript = document.createElement("script");
                    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                    carbonScript.id = "_carbonads_js";
                    document.getElementById("carbon-block").appendChild(carbonScript);
                });
            } catch (error) {
                console.log(error);
            }
        </script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>

        <script>
            var logID = 'log',
                log = $('<div id="' + logID + '"></div>');
            $('body').append(log);
            $('[type*="radio"]').change(function() {
                var me = $(this);
                log.html(me.attr('value'));
            });
        </script>
    </body>

    </html>

<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>