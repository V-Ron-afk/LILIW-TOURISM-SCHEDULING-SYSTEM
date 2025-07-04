<?php
require_once('conn.php');
ob_start();
?>
<?php
    if($_SESSION['username']){
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex "style="color: #fff;"><?php echo $user //ganito o?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="userprofile.php" onClick="return confirm('User Personal Information!!!');" class="dropdown-item" style=" width:100px;">Profile</a>
                            <a href="../login.php" onClick="return confirm('Are you sure you want to logout?');" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Table Start -->
            <?php 

                require('../config.php');

                $sqlget ="SELECT * FROM inquiries
                INNER JOIN users ON inquiries.username = users.username";
                $sqldata = mysqli_query($con,$sqlget) or die("Unable to display: " . mysqli_connect_error());


                echo "<table style='width: 90%; margin-top:5%; margin-left: 5%;' class='table table-hover'>";
                echo "<thead><tr><th> Inq ID</th>";
                echo "<th> Full Name</th>
                        <th> Email</th>
                        <th> contact</th>
                        <th> Subject</th>
                        <th> Description</th>
                        <th colspan='2'><center>Action</center></th></tr><thead>";

                while($row=mysqli_fetch_assoc($sqldata)){

                    echo "<tbody id='myTable'><tr><td>";
                    echo $id=$row['inq_id'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['fullname'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['email'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['contact'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['subject'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['descriptions'];
                    echo "</td>";

                ?>

                <td>
                    <a class="btn btn-outline-success"><i class="fas fa-check"></i></a>
                </td>
                </tr></tbody>


                <?php
                    
                }	echo "</table>";
                ?>
<!-- Table End -->


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
<script src="js/main.js"></script>
</body>

</html>
<?php } else {
echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>