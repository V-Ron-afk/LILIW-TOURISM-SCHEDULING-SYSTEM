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
        <div class="title">Reset Password</div>
        <div class="content">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="user-details">
            <div class="input-box">
                <span class="details">Enter New Password</span>
                <input type="password" placeholder="Enter New Password" name="pword1" required>
            </div>
            <div class="input-box">
                <br><br><br><br><br>
                <br><span class="details" style="margin-left:-218px;">Confirm Password</span>
                <input type="password" style="margin-left:-218px;" placeholder="Confirm Password" name="pword2" required>
            </div>
            <p style="font-size: 15px;font-family: 'Times New Roman';color:#eee;"></p>
            </div>
            
            <div class="button">
            <p class="par"></p><a class="aaa" href="forgotpass.php"> Forgot Password</a>
            <input class="inp" type="submit" name="submit" value="Reset"><br>
            </div>
        </form>
        </div>
    </div>
</div>

<?php
    if(isset($_POST["submit"])&& $_SESSION['user']){

		
        $psw = $_POST["pword1"];
		$psw2 = $_POST["pword2"];
        $email = $_SESSION['user'];

		if($psw == $psw2){

			$sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
			$query = mysqli_num_rows($sql);
			  $fetch = mysqli_fetch_assoc($sql);
	
			if($email){
				$hash = md5($psw);
				$new_pass = $hash;
				mysqli_query($con, "UPDATE users SET password='$new_pass' WHERE email='$email'");
				?>
				<script>
					alert("<?php echo "Your password reset is succesful"?>");
					window.location.replace("login.php");
					
				</script>
				<?php
			}else{
				?>
				<script>
					alert("<?php echo "Please try again"?>");
				</script>
				<?php
			}
		}
		else{
			?>
				<script>
					alert("<?php echo "Passwords did not match!"?>");
				</script>
				<?php
		}

    }

?>
      
</body>

</html>
