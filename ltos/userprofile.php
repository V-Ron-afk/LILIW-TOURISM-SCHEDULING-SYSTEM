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

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/styles.css">
        <!-- Custom Css -->
        <link rel="stylesheet" href="css/profile.css">

        <!-- FontAwesome 5 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="style" href="https://cdn.amazingneo.com/releases/v1.2.0/amazing-neo-1.2.0.css">
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

        <style>
            .navbar a,
            .logo {
                text-decoration: none;
            }

            .btn {
                background-color: #4169e1;
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
        <br><br><br><br>
        <section class="packages" id="packages">

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

    </body>

    </html>

<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>