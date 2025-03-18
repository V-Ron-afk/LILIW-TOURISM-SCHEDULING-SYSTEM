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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styles.css">

    <style>
      ul {
        column-count: 2;
        column-gap: 2rem;
        list-style: none;
      }

      /* ADDITIONAL STYLING */

      /* The container */
      .container {
        display: block;
        font-family: arial;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 18px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      /* Hide the browser's default checkbox */
      .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
      }

      /* Create a custom checkbox */
      .checkmark {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
      }


      /* When the checkbox is checked, add a blue background */
      .container input:checked~.checkmark {
        background-color: #fcba03;
      }

      /* Create the checkmark/indicator (hidden when not checked) */
      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      /* Show the checkmark when checked */
      .container input:checked~.checkmark:after {
        display: block;
      }

      /* Style the checkmark/indicator */
      .container .checkmark:after {
        left: 7px;
        top: 2px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 2px 2px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
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

      <div class="icons">
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
      </form>

    </header>

    <!-- header section ends -->


    <!-- book section starts  -->

    <section class="book" id="book">
      <br>
      <br>
      <br>
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
        <?php
        $user = $_SESSION['username'];
        ?>

        <form action="#" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="username" value="<?php echo $user ?>">
          <div class="inputBox">
            <h3>Where to</h3>
          </div>

          <div class="container">
            <div class="row">
            </div>
            <div class="row">
              <div class="col-12">
                <ul>

                  <li>
                    <label class="container">Esmeris Farm
                      <input type="checkbox" name="placeto[]" value="Esmeris Farm">
                      <span class="checkmark"></span>
                    </label>
                  </li>

                  <li>
                    <label class="container">Brenas Farm
                      <input type="checkbox" name="placeto[]" value="Brenas Farm">
                      <span class="checkmark"></span>
                    </label>
                  </li>

                  <li>
                    <label class="container">Lolo Kaps Strawberry Farm
                      <input type="checkbox" name="placeto[]" value="Lolo Kaps Strawberry Farm">
                      <span class="checkmark"></span>
                    </label>
                  </li>

                  <li>
                    <label class="container">Kilangin Falls
                      <input type="checkbox" name="placeto[]" value="Kilangin Falls">
                      <span class="checkmark"></span>
                    </label>
                  </li>

                  <li>
                    <label class="container">Klangin Sunflower Farm
                      <input type="checkbox" name="placeto[]" value="Kilangin Sunflower Farm">
                      <span class="checkmark"></span>
                    </label>
                  </li>

                  <li>
                    <label class="container">Silent Intergraded Farm
                      <input type="checkbox" name="placeto[]" value="Silent Intergraded Farm">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container">St. John The Baptist Church
                      <input type="checkbox" name="placeto[]" value="St. John The Baptist Church">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="inputBox">
            <h3>How many</h3>
            <input type="number" name="guest" placeholder="Number of Guests" required>
          </div>
          <div class="inputBox">
            <h3>Arrivals</h3>
            <input type="date" name="arrivals" required>
          </div>
          <div class="inputBox">
            <h3>Departure</h3>
            <input type="date" name="departure" required>
          </div>
          <input type="submit" id="save" name="save" class="btn" value="Sched Now">
        </form>

        <?php
        require('../config.php');
        if (isset($_POST['save'])) {

          $user = $_POST['username'];
          $guest = $_POST['guest'];
          $gogo = $_POST['placeto'];
          $arrivals = $_POST['arrivals'];
          $departure = $_POST['departure'];
          $chk = "";
          foreach ($gogo as $chk1) {
            $chk .= $chk1 . ",";
          }
          $sched = "INSERT INTO schedule (username, placeto, guest, arrivals, departure)
    VALUES ('$user', '$chk',  '$guest','$arrivals','$departure')";
          $rsched = mysqli_query($con, $sched);

          if ($rsched) {

            echo "
             <script type='text/javascript'>
              $(document).ready(function() {
              swal({
                icon: 'success',
                title: 'Schedule has been submitted just wait for the confirmation.',
                button: 'Ok',
                timer: 500
            });
            });
            window.setTimeout(function(){ 
                window.location.replace('schedule1.php');
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
              title: 'Scheduled Error.',
              button: 'Ok',
              timer: 500
          });
          });
          window.setTimeout(function(){ 
              window.location.replace('schedule1.php');
          } ,1500); 
          </script>
          <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
          ";
          }
        } else {
        }

        ?>

      </div>

    </section>

    <!-- book section ends -->


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
    <script src="ltos/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>

  </html>

<?php } else {
  echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>