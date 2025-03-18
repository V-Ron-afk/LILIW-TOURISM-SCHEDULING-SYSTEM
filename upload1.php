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

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="ltos/css/styles.css">
    <link rel="stylesheet" href="ltos/css/reg.css">


    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background:url('ltos/images/newbrenas.png');background-repeat: no-repeat; background-size: 1590px;">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['fullname'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $pword = md5($password);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        $cpword = md5($cpassword);
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
                    $fileDestination = 'C:/xampp/htdocs/lili tourism municipality2/pics/' . $fileNameNew;
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
        $fileName1 = $_FILES['photo1']['name'];
        $fileTmpName1 = $_FILES['photo1']['tmp_name'];
        $fileSize1 = $_FILES['photo1']['size'];
        $fileError1 = $_FILES['photo1']['error'];
        $fileType1 = $_FILES['photo1']['type'];

        $fileExt1 = explode('.', $fileName1);
        $fileActualExt1 = strtolower(end($fileExt1));

        $allowed1 = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt1, $allowed1)) {
            if ($fileError1 === 0) {
                if ($fileSize1 < 100000000000) {
                    $fileNameNew1 = uniqid('', true) . "." . $fileActualExt1;
                    $fileDestination1 = 'C:/xampp/htdocs/lili tourism municipality2/pics/' . $fileNameNew1;
                    move_uploaded_file($fileTmpName1, $fileDestination1);
                } else {
                    echo "File is too big";
                }
            } else {
                echo "Error uploading the file";
            }
        } else {
            echo "File type not accepted";
        }
        $con->query("INSERT INTO users ( fullname, username, email, contact, valid_id, password, cpassword, role, images) VALUES( '$fname','$uname','$email','$contact','$fileNameNew','$pword','$cpword','$role','$fileNameNew1' )");
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
                        <input type="text" placeholder="Username" name="username" required>
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
                        <span class="details">Profile</span>
                        <input type="file" name="photo1" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" id="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" id="cpassword" placeholder="Confirm Password" name="cpassword" required>
                    </div>

                    <div class="input-box">
                        <span id="confirm_password_msg"></span>
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
    <script>
        $(document).ready(function () {

            $("#cpassword").bind('keyup change', function () {

                check_Password($("#password").val(), $("#cpassword").val())


            })

            $("#sign_in_btn").click(function () {

                check_Password($("#password").val(), $("#cpassword").val())

            })
        })

        function check_Password(Pass, Con_Pass) {

            if (Pass === "") {



            } else if (Pass === Con_Pass) {

                $("#sign_in_btn").removeAttr("onclick")
                $('#confirm_password_msg').show()
                $("#confirm_password_msg").html('<div class="alert alert-success">Password matched</div>')

                setTimeout(function () {
                    $('#confirm_password_msg').fadeOut('slow');
                }, 3000);

            } else {
                $("#cpassword").focus()
                $('#confirm_password_msg').show()
                $("#confirm_password_msg").html('<div class="alert alert-danger">Password did not matched</div>')

                setTimeout(function () {
                    $('#confirm_password_msg').fadeOut('slow');
                }, 3000);

            }

        }
    </script>
</body>

</html>