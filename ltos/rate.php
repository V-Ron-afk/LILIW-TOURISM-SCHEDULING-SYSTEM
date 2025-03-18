<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ltos2";

$date = date('Y-m-d');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `rating` (`rating_id`, `package_id`, `rate`, `date`) VALUES (NULL, '".$_GET['id']."', '".$_POST['star1']."', '".$date."');";

if ($conn->query($sql) === TRUE) {
  header('location:tourpackages.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
