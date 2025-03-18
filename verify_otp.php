<?php require('config.php'); 
session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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

<body style="background:url('ltos/images/brenas1.jpg');background-repeat: no-repeat; background-size: 1590px;">


    <div class="container">
        <div class="title">Verify OTP</div>
        <div class="content">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="user-details">
            <div class="input-box">
                <span class="details">Enter your OTP</span>
                <input type="text" placeholder="Check your email for your OTP" name="otp" required>
            </div>
            <p style="font-size: 15px;font-family: 'Times New Roman';color:#eee;"></p>
            </div>
            
            <div class="button">
            <input class="inp" type="submit" name="verify_otp" value="Verify"><br>
            <p class="par"></p><a class="aaa" href="forgotpass.php"> back</a>
            </div>
        </form>
        </div>
    </div>
</div>
      
</body>

</html>
<?php 
    if(isset($_POST["verify_otp"])){
        $otp = $_SESSION['otp']; 
        $email = $_SESSION['to'];
        $otp_code = $_POST['otp'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
           // mysqli_query($connect, "UPDATE user_details SET status = 1 WHERE email = '$email'");
            ?>
             <script>
                 alert("OTP verified, you may now change your password");
                   window.location.replace("reset_pass.php");
             </script>
             <?php
        }

    }

?>