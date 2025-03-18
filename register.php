<!DOCTYPE html>
<html lang="en">
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
<body style="background:url('ltos/images/brenas1.jpg');background-repeat: no-repeat; background-size: 1390px;">
<?php
    require('config.php');
      if (isset($_REQUEST['username'])) {
        $fullname = stripslashes($_REQUEST['fullname']);
        $fullname = mysqli_real_escape_string($con, $fullname);
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $contact = stripslashes($_REQUEST['contact']);
        $contact = mysqli_real_escape_string($con, $contact);
        $fileName = $_FILES['valid_id']['name'];
        $fileTmpName = $_FILES['valid_id']['tmp_name'];
        $fileSize = $_FILES['valid_id']['size'];
        $fileError = $_FILES['valid_id']['error'];
        $fileType = $_FILES['valid_id']['type'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');
        if (in_array($fileActualExt, $allowed)) {
          if ($fileError === 0) {
            if ($fileSize < 100000000000) {
              $fileNameNew = uniqid('', true) . "." . $fileActualExt;
              $fileDestination = 'C:/xampp/htdocs/lili tourism municipality/pics/' . $fileNameNew;
              $fileDestination = 'C:/xamp/htdocs/lili tourism municipality/pics/' . $fileNameNew;
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
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $role = "tourist";
        $query    = "INSERT into `users` (fullname, username, email, contact, valid_id, password,role)
                     VALUES ('$fullname', '$username','$email', '$contact', '$fileNameNew', '" . md5($password) . "', '$role')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo" <script>
				alert('Registered Complete.');
				window.location.href='register.php';
				</script>";}
        else {
             echo" <script>
			 	alert('Register Error.');
			 	window.location.href='register.php';
			 	</script>";
          }
    } else {
  ?>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="post" enctype="mutipart/form-data">
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
            <input type="text" placeholder="Contact" name="contact" required>
          </div>
          <div class="input-box">
            <span class="details">Valid Id</span>
            <input style="border: none;" type="file" name="valid_id">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Password" name="password" required>
          </div>
        </div>
        <div class="button">
          <input class="inp" type="submit" name="upload" value="Register"><br>
          <p class="par">I already have an account!</p><a class="aaa" href="login.php"> Click Login!!!</a>
        </div>
      </form>
    </div>
  </div>

  <?php
    }
  ?>

</body>
</html>

</body>
</html>