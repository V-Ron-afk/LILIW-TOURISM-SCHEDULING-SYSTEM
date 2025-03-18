<?php
    require('../config.php');    
    if(isset($_POST['save'])){

    $user = $_POST['username'];
    $guest = $_POST['guest'];
    $gogo = $_POST['placeto'];
    $arrivals = $_POST['arrivals'];
    $departure = $_POST['departure'];
    $chk="";  
foreach($gogo as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
    $sched = "INSERT INTO schedule (username, placeto, guest, arrivals, departure)
    VALUES ('$user', '$chk',  '$guest','$arrivals','$departure')";
    $rsched = mysqli_query($con, $sched);
    
    if ($rsched) {
        echo" <script>
            alert('Schedule has been submitted just wait for the confirmation.');
            window.location.href='schedule1.php';
             </script>";
        
    } else {
        echo" <script>
         alert('Scheduled Error.');
          window.location.href='schedule1.php';
           </script>";
    }
    } else {
    }
