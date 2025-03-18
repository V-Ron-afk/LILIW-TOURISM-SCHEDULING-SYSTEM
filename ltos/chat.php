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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

    </head>

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar ">
                    <a href="index.html" class="navbar-brand mx-4 mb-3">
                        <h3 class="text"><i class="fa fa-user-edit me-2"></i>LTOS</h3>
                    </a>
                    <?php
                            $user = $_SESSION['user_id'];
                            
                            $sqlget1 = "SELECT * FROM users WHERE user_id = $user";
                            $sqldata1 = mysqli_query($con, $sqlget1) or die("Unable to display: " . mysqli_connect_error());
                            while ($row = mysqli_fetch_assoc($sqldata1)) {
                            ?>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="../pics/<?php echo $row['images']; ?>" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0"><?php echo $_SESSION['username'] ?></h6>
                            <span style="color: #000;"> <?php echo $role = $row['role'];?></span>
                        </div>
                        
                        <?php
                            }
                            ?>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                        <div class="nav-item dropdown">

                            <a href="schedule.php" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>Schedule</a>
                            <a href="packages.php" class="nav-item nav-link"><i class="fa fa-box me-2"></i>Packages</a>
                            <a href="gallery.php" class="nav-item nav-link"><i class="fa fa-image me-2"></i>Gallery</a>
                            <a href="contact2.php" class="nav-item nav-link"><i class="fa fa-address-book me-2"></i>Inquiries</a>
                            <a href="archives.php" class="nav-item nav-link"><i class="fa fa-undo me-2"></i>Archives</a>
                            <a href="hos.php" class="nav-item nav-link"><i class="fa fa-history me-2"></i>History schedule</a>
                            <a href="chat.php?id=1" class="nav-item nav-link"><i class="fa fa-comment me-2"></i>Chat</a>

                </nav>
            </div>
            <!-- Sidebar End -->


            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-seagreen sticky-top  py-0">
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text mb-0"><i class="fa fa-user-edit"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <form class="d-none d-md-flex ms-4">
                        <h1 class="header">Liliw Tourism Office Scheduling</h1>
                    </form>
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                                <hr class="dropdown-divider">
                                <hr class="dropdown-divider">
                                <hr class="dropdown-divider">
                            </div>
                        </div>
                        <div class="nav-item dropdown">

                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                                <hr class="dropdown-divider">
                                <hr class="dropdown-divider">
                                <hr class="dropdown-divider">
                            </div>
                        </div>
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
                <!-- Navbar End -->


                <div class="container-fluid">

                    <div class="row">
                        <section class="discussions col-md-6">
                            <div class="discussion search">
                                <div class="searchbar">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input type="text" placeholder="Search..."></input>
                                </div>
                            </div>


                            <?php


                            $sqlget = "SELECT * FROM users";
                            $sqldata = mysqli_query($con, $sqlget) or die('Error Displaying Data' . mysqli_connect_error());
                            while ($row = mysqli_fetch_assoc($sqldata)) {


                            ?>


                                <a href="chat.php?id=<?php echo $row['user_id']; ?>" class="list-group-item list-group-item-action border-0">

                                    <div class="d-flex align-items-start">
                                        <img src="../pics/<?php echo $row['images']; ?>" class="rounded-circle mr-1" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';" alt="Vanessa Tucker" width="40" height="40">
                                        <div class="flex-grow-1 ml-3">

                                            <div class="small"> <?php echo $row['fullname']; ?></div>
                                        </div>
                                    </div>
                                </a>


                            <?php } ?>


                        </section>
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
                                <form class="col-md-12" method="POST" action="sent.php?id=<?php echo $id; ?>">

                                    <div class="flex-grow-0 py-3 px-4 border-top">
                                        <div class="input-group">
                                            <input type="text" name="msg" class="form-control" placeholder="Type your message" style="background-color: white;">
                                            <button type="submit" name="send" class="btn btn-secondary">Send</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </section>
                    </div>
                </div>


                <!-- Content End -->


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

                <!-- Template Javascript -->

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
                <script src="js/main.js"></script>
            </div>
        </div>
    </body>

    </html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>