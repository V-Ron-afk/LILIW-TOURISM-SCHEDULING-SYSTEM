<?php require('config.php'); 
session_start();  ?>

<?php
require('includes/PHPMailer.php');
require('includes/SMTP.php');
require('includes/Exception.php');
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_REQUEST['send']))
{
    $email = $_POST['to'];
    $sql = "SELECT email FROM users WHERE email = '$email' ";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if ($row) {
        $_SESSION['user'] = $row['email']; // kailangan nakasession ang email para yung record nya lang ang maupdate ang password
        ?>
        <script>
        alert("<?php echo 'OTP has been sent to your email'?>");
        </script>
         echo '<script>window.location="verify_otp.php"</script>';
        
    </script>
    <?php
    extract($_REQUEST);
    // extract($_FILES);
    // extract($file);
    $otp = rand(100000,999999);
    $_SESSION['otp'] = $otp;
    $email = $_SESSION['to'];
    
    //create a instance phpmailer
    $mail = new PHPMailer();
    //set mailer to use smtp
    $mail->isSMTP();
    //define smtp host
    $mail->Host = "smtp.gmail.com";
    //enable smtp authentication
    $mail->SMTPAuth = "true";
    //set type of encryption (ssl/tls)
    $mail->SMTPSecure = "tls";
    //set port to connect smtp
    $mail->Port = "587";
    //set gmail user
    $mail->Username = "forcapstone312"; //before use see full video
    //set gmail password
    $mail->Password = "towfglvgxvohaxqa"; // see setting in youtube video working perfect
    //set gmail subject
    $mail->Subject = "Your verification code";
    //set sender email
    $mail->setFrom('forcapstone312@gmail.com', 'OTP Verification'); //setting good OTP verification as subject
    //email body
    $mail->Body="Dear user, we have receive a password reset request. Here is your OTP $otp";

    //add recipient
    $mail->addAddress($to);
    // $mail->addCC($CC);
    // $mail->addCC();
    // $mail->addBCC($BCC);
    // $mail->addAttachment($name);

    //closing smtp connection
    if($mail->Send())
    {
    $msg= "Email Sent";
    }
    else
    {
        $msg = "Email does not exist";
    }
    $mail->smtpClose();   
        }else {
            ?>
            <script>
            alert("<?php echo 'Email not found or your account has not been approved yet'?>");
            header('Location: forgotPass.php');
        </script>
        <?php
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

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
        <div class="title">Forgot Password</div>
        <div class="content">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="user-details">
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Email Address" name="to" required>
            </div>
            
            <p style="margin-top:3px;font-size: 15px;font-family: 'Times New Roman';color:#eee;">OTP will be send to the email you provided.</p>
            </div>
            <div class="button">
            <input class="inp" type="submit" name="send" value="Send OTP"><br>
            <p class="par"></p><a class="aaa" href="login.php"> Login</a>
            </div>
        </form>
        </div>
    </div>
</div>
      
</body>

</html>