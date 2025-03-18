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
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

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
            <?php
            $user = $_SESSION['username'];
            //eto o kinuha ko sa session para makuha ko kung sino naka login
            ?>
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
                            <h6 class="mb-0"><?php echo $user ?></h6>
                            <span style="color: #000;">Admin</span>
                        </div>
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
                                <span class="d-none d-lg-inline-flex " style="color: #fff;"><?php echo $user ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                <a href="#" id="profile" class="dropdown-item" style=" width:100px;">Profile</a>
                                <a href="#" id="logout" class="dropdown-item" style=" width:100px;">Log Out</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->

                <!-- Table Start -->

            <!-- Navbar top -->
            <div class="navbar-top1">
                <div class="title1">
                    <h1>Profile</h1>
                </div>

                <!-- Navbar -->

                <!-- End -->
            </div>
            <!-- End -->
            <?php
            $user = $_SESSION['user_id'];

            $sqlget = "SELECT * FROM users WHERE user_id = $user";
            $sqldata = mysqli_query($con, $sqlget) or die("Unable to display: " . mysqli_connect_error());
            while ($row = mysqli_fetch_assoc($sqldata)) {
            ?>
                <!-- Sidenav -->
                <div class="sidenav1">
                    <div class="profile1">
                        <div class="row">
                            <!-- New, Ito yung bagong nidagdag ko -->
                            <div class="circle-cont">
                                <div class="profile-pic-div ">
                                    <img class="img1" src="../pics/<?php echo $row['images']; ?>" name="prof" id="photo">
                                    <input type="file" id="file">

                                </div>
                                <label for="file" id="uploadBtn" class="p-image">
                                    <i class="fa fa-camera fa-2x upload-button"></i>
                                </label>
                            </div>


                        </div>


                        <div class="name" style="margin-left: -40px;">
                            <?php echo $row['fullname']; ?>
                        </div>
                        <div class="job" style="margin-left: -30px;">
                            <?php echo $row['role']; ?>
                        </div>
                    </div>

                    <div class="sidenav-url">
                        <div class="url">
                            <a href="#profile" class="active">Profile</a>
                            <hr align="center">
                        </div>
                    </div>
                </div>
                <!-- End -->
                <?php
                $user1 = $_SESSION['user_id'];

                $sqlget1 = "SELECT * FROM users WHERE user_id = $user1";
                $sqldata1 = mysqli_query($con, $sqlget1) or die("Unable to display: " . mysqli_connect_error());
                while ($row1 = mysqli_fetch_assoc($sqldata1)) {
                ?>
                    <!-- Main -->
                    <form action="" method="post">
                        <div class="main">
                            <h2>IDENTITY</h2>
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class=" btn-primary" data-bs-toggle="modal" data-bs-target="#lolo" class="btn" style="text-decoration: none;"><i class="fa fa-pen fa-xs edit"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="lolo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="modal-title" id="exampleModalLabel"> Edit Personal Information</h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="dob" class="control-label fs-2">Fullname</label><br>
                                                        <input type="text" name="fname" placeholder="Update Full Name" value='<?php echo $row['fullname']; ?>'>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dob" class="control-label fs-2">Username</label><br>
                                                        <input type="text" name="fname" placeholder="Update Username" value='<?php echo $row['username']; ?>'>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dob" class="control-label fs-2">Email</label><br>
                                                        <input type="text" name="fname" placeholder="Update Email" value='<?php echo $row['email']; ?>'>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dob" class="control-label fs-2">Contact</label><br>
                                                        <input type="text" name="fname" placeholder="Update Contact" value='<?php echo $row['contact']; ?>'>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dob" class="control-label fs-2">Update Profile</label><br>
                                                        <input type="file" name="phototwo" placeholder="Choose  Photo">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="form-group text-center">
                                                        <a type="submit" href="updateprof.php?user_id=<?php echo $user; ?>" class="btn">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </form>
                <?php
                }
                ?>

                <!-- Modal END-->
                <table>
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><?php echo $row['username']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Contact</td>
                            <td>:</td>
                            <td><?php echo $row['contact']; ?></td>
                        <tr>
                    </tbody>
                </table>
                </div>
                </div>
            <?php
            }

            ?>
            </div>
            <!-- End -->

            <!-- <script src="prof1.js"></script> -->

            <!-- JAVASCRIPT -->
            <script>
                //declaring html elements

                const imgDiv = document.querySelector('.profile-pic-div');
                const img = document.querySelector('#photo');
                const file = document.querySelector('#file');
                const uploadBtn = document.querySelector('#uploadBtn');


                //when we choose a photo to upload

                file.addEventListener('change', function() {
                    //this refers to file
                    const choosedFile = this.files[0];

                    if (choosedFile) {

                        const reader = new FileReader(); //FileReader is a predefined function of JS

                        reader.addEventListener('load', function() {
                            img.setAttribute('src', reader.result);
                        });

                        reader.readAsDataURL(choosedFile);
                    }
                });
            </script>
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
    </body>

    </html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>