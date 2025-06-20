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
</head>

<body >
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text" style="width: 3rem; height: 3rem;" role="status">
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
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                    <?php
            $user = $_SESSION['username'];
            //eto o kinuha ko sa session para makuha ko kung sino naka login
                    ?>
                        <h6 class="mb-0"><?php echo $user //ganito o?></h6>
                        <span style="color: #000;">Staff</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="staffpage.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        
                    <a href="schedule2.php" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>Schedule</a>
                    <a href="packages1.php" class="nav-item nav-link"><i class="fa fa-box me-2"></i>Packages</a>
                    <a href="contact3.php" class="nav-item nav-link"><i class="fa fa-address-book me-2"></i>Inquiries</a>
                    <a href="archives1.php" class="nav-item nav-link"><i class="fa fa-address-book me-2"></i>Archives</a>
                    <a href="hos.php" class="nav-item nav-link"><i class="fa fa-address-book me-2"></i>History schedule</a>
                    <a href="chatstaff.php?id=1" class="nav-item nav-link"><i class="fa fa-address-book me-2"></i>Chat</a>
                    
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-seagreen sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="bg-white sidebar-toggler flex-shrink-0">
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
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex "style="color: #fff;"><?php echo $user //ganito o?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="../login.php" onClick="return confirm('Are you sure you want to logout?');" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <?php
            require('../config.php');
            ?>

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                        <div class="bg-success rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-user fa-3x text"></i>
                            <div class="ms-3">
                            <?php
                            $sql = "SELECT * FROM users";
                            if ($result=mysqli_query($con,$sql)) {
                                $rowcount=mysqli_num_rows($result);
                                echo "<p class='mb-2'style='color:black;font-weight:bold;'> Users</p>";
                                echo "<h6 class='mb-0'> ".$rowcount;"</h6>";
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-success rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-calendar fa-3x text"></i>
                            <div class="ms-3">
                            <?php
                            $sql = "SELECT * FROM schedule";
                            if ($result=mysqli_query($con,$sql)) {
                                $rowcount=mysqli_num_rows($result);
                                echo "<p class='mb-2'style='color:black;font-weight:bold;'> Schedule</p>";
                                echo "<h6 class='mb-0'> ".$rowcount;"</h6>";
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-success rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-box fa-3x text"></i>
                            <div class="ms-3">
                            <?php
                            $sql = "SELECT * FROM packages";
                            if ($result=mysqli_query($con,$sql)) {
                                $rowcount=mysqli_num_rows($result);
                                echo "<p class='mb-2'style='color:black;font-weight:bold;'> Packages</p>";
                                echo "<h6 class='mb-0'> ".$rowcount;"</h6>";
                            }
                            ?>
                            </div>
                        </div>
                    </div>
            <div class="col-sm-6 col-xl-3">
                        <div class="bg-success rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-light fa-audio-description fa-3x text"></i>
                            <div class="ms-3">
                            <?php
                            $sql = "SELECT * FROM inquiries";
                            if ($result=mysqli_query($con,$sql)) {
                                $rowcount=mysqli_num_rows($result);
                                echo "<p class='mb-2' style='color:black;font-weight:bold;'> Inquiries</p>";
                                echo "<h6 class='mb-0'> ".$rowcount;"</h6>";
                            }
                            ?>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


           
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
    </div>

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
    <script src="js/main.js"></script>
</body>

</html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>