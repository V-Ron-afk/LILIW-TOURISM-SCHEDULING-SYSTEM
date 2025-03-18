<?php
require('conn.php');
if (isset($_POST['submit1'])) {
    $pack = $_POST['pack'];
    $user = $_POST['username'];
    $arrivals = $_POST['arrivals'];
    $sqlpackages = "INSERT INTO packages (username, pack, arrivals)
    VALUES ('$user','".$pack."','$arrivals')";
    $resultpackages = mysqli_query($con, $sqlpackages);
    if ($resultpackages) {
        echo " <script>
        alert('Packages has been submitted.');
        window.location.href='tourpackages.php';
        </script>";
    } else {
        echo " <script>
        alert('Packages Error.');
        window.location.href='tourpackages.php';
        </script>";
    }
}
?>
