<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
</head>

<body>
<?php
    require('../config.php');    
    if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $subject = $_POST['subject'];
    $description = $_POST['descriptions'];
    $sqlsched = "INSERT INTO inquiries (username,subject,descriptions)
    VALUES ('$user','$subject','$description')";
    $resultsched = mysqli_query($con, $sqlsched);
    if ($resultsched) {

        echo "
        <script type='text/javascript'>
         $(document).ready(function() {
         swal({
           icon: 'success',
           title: 'Inquiries has been submitted.',
           button: 'Ok',
           timer: 500
       });
       });
       window.setTimeout(function(){ 
           window.location.replace('contact.php');
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
           title: 'Inquiries Error..',
           button: 'Ok',
           timer: 500
       });
       });
       window.setTimeout(function(){ 
           window.location.replace('contact.php');
       } ,1500); 
       </script>
       <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
       ";
    }
    } 
?>


</body>
</html>