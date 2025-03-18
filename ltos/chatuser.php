<?php
ob_start();
require('conn.php');
?>

<?php
if ($_SESSION['username']) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="utf-8">
    <title>Liliw Tourism Office Scheduling System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--CDN Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">

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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/styless.css"> -->
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <!--copy-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

    <!-- Bootstrap style Script-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styles.css">


    <style>
        /* navbar nderline */
        .navbar a,
        .logo {
            text-decoration: none !important;
        }
    </style>


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
                <a href="#" class="sidebar-toggler flex-shrink-0"></a>


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
        </header>

        <!-- header section ends -->
        <br><br>
        <!-- packages section starts  -->
        <div class="container-fluid">

            <div class="row">

                <section class="chat col-md-6">
                    <div class="header-chat">
                        <i class="icon fa fa-user-o" aria-hidden="true"></i>
                        <p class="name"><?php

                                        $id = $_GET['id'];

                                        $sqlget = "SELECT * FROM users where user_id =$id ";
                                        $sqldata = mysqli_query($con, $sqlget) or die('Error Displaying Data' . mysqli_connect_error());

                                        while ($row = mysqli_fetch_assoc($sqldata)) {

                                            echo $row['fullname'];
                                        }

                                        ?></p>
                        <i class="icon clickable fa fa-ellipsis-h right" aria-hidden="true"></i>
                    </div>
                    <div class="messages-chat">


                        <?php

                        $id = $_GET['id'];

                        $sqlget = "SELECT * FROM users where user_id = $id ";
                        $sqldata = mysqli_query($con, $sqlget) or die('Error Displaying Data' . mysqli_connect_error());

                        while ($row = mysqli_fetch_assoc($sqldata)) {


                            $send = $_SESSION['user_id'];
                            $sqlget1 = "SELECT * FROM messages";
                            $sqldata1 = mysqli_query($con, $sqlget1) or die('Error Displaying Data' . mysqli_connect_error());

                            while ($row1 = mysqli_fetch_assoc($sqldata1)) {
                                if ($row1['sender'] == $id &&  $row1['receiver'] == $_SESSION['user_id']) {


                        ?>


                                    <!--sender-->

                                    <div class="message">
                                        <div class="photo">
                                            <img src="../pics/<?php echo $row['images']; ?>" class="rounded-circle mr-1" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';" alt="Vanessa Tucker" width="40" height="40">
                                            <div class="online"></div>
                                        </div>
                                        <p class="text"><?php echo $row1['message']; ?></p>
                                    </div>
                                    <p class="time"> 14h58</p>
                                    <!--sender-->



                                <?php } else if ($row1['sender'] == $_SESSION['user_id'] &&  $row1['receiver'] == $id) { ?>



                                    <!--receiver-->
                                    <div class="message text-only">
                                        <div class="response">
                                            <p class="text"> <?php echo $row1['message']; ?></p>
                                        </div>
                                    </div>
                                    <p class="response-time time"> 15h04</p>
                                    <!--receiver-->






                        <?php
                                }
                            }
                        } ?>





                    </div>






                    <div class="footer-chat">
                        <form class="col-md-12" method="POST" action="sentuser.php?id=<?php echo $id; ?>">

                            <div class="flex-grow-0 py-3 px-4 border-top">
                                <div class="input-group">
                                    <input type="text" name="msg" class="form-control" placeholder="Type your message" style="background-color: white; width:83%">
                                    <button type="submit" name="send" style="margin-left: 520px; margin-top:-50px;" class="btn btn-secondary">Send</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>


        <!-- services section ends -->


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
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
    </body>

    </html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>