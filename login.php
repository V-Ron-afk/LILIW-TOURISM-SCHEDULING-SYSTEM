<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liliw Tourism Office Scheduling System</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="ltos/images/logo.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap style Script-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="ltos/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="ltos/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="ltos/css/bootstrap.min.css" rel="stylesheet">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="ltos/css/styles.css">
    <link rel="stylesheet" href="ltos/css/login.css">

</head>
<body>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body style="background:url('ltos/images/brenas1.jpg');background-repeat: no-repeat; background-size: 1590px;">
<!-- header section starts  -->

<header style="height: 50px; background-color: #4169e1;">

    <a href="#" class="logo"><span>L</span>iliw<span> T</span>ourism</a>

    <nav class="navbar" >
    </nav>

    <div class="icons">
        <a href="index.php"><i class="fas fa-home" id="login-btn"></i></a>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>

<!-- header section ends -->

  <?php   
  session_start();  
  $con=mysqli_connect("localhost","root","","ltos2");  
  $msg="";  
  if (isset($_POST['login'])) {  
    //echo "<pre>";  
    //print_r($_POST);  
    $email=mysqli_real_escape_string($con,$_POST['username']);  
    $password=mysqli_real_escape_string($con,$_POST['password']);  
    $sql=mysqli_query($con,"select * from users where username='$email' && password='".md5($password)."'");  
    $user = $_POST['username'];

    $num=mysqli_num_rows($sql); 
        if ($num>0) {  
            //echo "found";  
            $row=mysqli_fetch_assoc($sql);  
            $_SESSION['username'] = $user;

            if($row['role']=="tourist"){
            // $name = $_SESSION['user_id']=$row['user_id'];  //id ang nakaset na session
            // $_SESSION['username']=$row['username'];
          

            
          
            $sqlget51 = "SELECT * FROM users where username = '$user'";
            $sqldata51 = mysqli_query($con, $sqlget51) or die('Error Displaying Data'. mysqli_connect_error());
            while ($row51 = mysqli_fetch_assoc($sqldata51)) {

              $_SESSION['user_id']=$row51['user_id'];

            }

             
            echo "
            <script type='text/javascript'>
             $(document).ready(function() {
             swal({
               icon: 'success',
               title: 'Successfully Login!!!',
               button: 'Ok',
               timer: 500
           });
           });
           window.setTimeout(function(){ 
               window.location.replace('ltos/index1.php');
           } ,1500); 
           </script>
   
            <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
           ";
            
            }else if($row['role'] == "admin"){
                  
            $sqlget51 = "SELECT * FROM users where username = '$user'";
            $sqldata51 = mysqli_query($con, $sqlget51) or die('Error Displaying Data'. mysqli_connect_error());
            while ($row51 = mysqli_fetch_assoc($sqldata51)) {

              $_SESSION['user_id']=$row51['user_id'];

            }

              echo "
              <script type='text/javascript'>
               $(document).ready(function() {
               swal({
                 icon: 'success',
                 title: 'Successfully Login!!!',
                 button: 'Ok',
                 timer: 500
             });
             });
             window.setTimeout(function(){ 
                 window.location.replace('ltos/index.php');
             } ,1500); 
             </script>
     
              <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
             ";
            }else if($row['role'] == "Staff"){
                  
            $sqlget51 = "SELECT * FROM users where username = '$user'";
            $sqldata51 = mysqli_query($con, $sqlget51) or die('Error Displaying Data'. mysqli_connect_error());
            while ($row51 = mysqli_fetch_assoc($sqldata51)) {

              $_SESSION['user_id']=$row51['user_id'];

            }

              echo "
              <script type='text/javascript'>
               $(document).ready(function() {
               swal({
                 icon: 'success',
                 title: 'Successfully Login!!!',
                 button: 'Ok',
                 timer: 500
             });
             });
             window.setTimeout(function(){ 
                 window.location.replace('ltos/staffpage.php');
             } ,1500); 
             </script>
     
              <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
             ";
            }
        } else{  
          echo "
         <script type='text/javascript'>
          $(document).ready(function() {
          swal({
            icon: 'error',
            title: 'Error!',
            text: 'Wrong Password or Username',
            button: 'Ok',
            timer: 500
        });
        });
        window.setTimeout(function(){ 
            window.location.replace('login.php');
        } ,1500); 
        </script>

         <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
        ";
        }  
  } 
  ?>  
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" style="width:540%;" name="username" placeholder="Username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password"style="width:540%;" name="password" placeholder="Password" required>
          </div>
        <div class="button">
          <input class="inp" type="submit" name="login" value="Login">
          <a class="aaa" style=" margin-left: 70px;" href="forgotpass.php"> Forgot Password?</a>
          <br>
          <p class="par">I don't have an account!<a class="aaa" href="upload1.php"> Register Here!!!</a></p>
        </div>
      </form>
    </div>
  </div>

</body>
</html>

</body>
</html>