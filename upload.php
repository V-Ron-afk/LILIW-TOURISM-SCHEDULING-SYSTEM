<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liliw Tourism Office Scheduling System</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="ltos/images/logo.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="ltos/css/styles.css">
    <link rel="stylesheet" href="ltos/css/reg.css">

      <!---<title> Responsive Registration Form | CodingLab </title>--->
      <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background:url('ltos/images/newbrenas.png');background-repeat: no-repeat;">


    <?php  
        if(isset($_POST['submit'])){
            $fname = $_POST['fullname'];
            $uname = $_POST['username'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $pword = md5($password);
            $role = "tourist";
            $fileName = $_FILES['photo']['name'];
            $fileTmpName = $_FILES['photo']['tmp_name'];
            $fileSize = $_FILES['photo']['size'];
            $fileError = $_FILES['photo']['error'];
            $fileType = $_FILES['photo']['type'];
    
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
    
            $allowed = array('jpg', 'jpeg', 'png');
    
            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 100000000000) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'C:/xampp/htdocs/lili tourism municipality1/pics/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                    } else {
                        echo "File is too big";
                    }
                } else {
                    echo "Error uploading the file";
                }
            } else {
                echo "File type not accepted";
            }
            $con->query( "INSERT INTO users ( fullname, username, email, contact, valid_id, password, role ) VALUES( '$fname','$uname','$email','$contact','$fileNameNew','$pword','$role' )" );
              
    }

    ?>

    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Full Name" name="fullname" required>
            </div>
            <div class="input-box">
                <span class="details">Username</span>
                <input type="text" placeholder="Username"name="username" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Email Address" name="email" required>
            </div>
            <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="number" placeholder="Contact" name="contact" required>
            </div>
            <div class="input-box">
                <span class="details">Valid Id</span>
                <input type="file" name="photo" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            
            </div>
            <div class="button">
            <input class="inp" type="submit" name="submit" value="Register"><br>
            <p class="par">I already have an account!</p><a class="aaa" href="login.php"> Click Login!!!</a>
            </div>
        </form>
        </div>
    </div>
</div>
      
</body>

</html>