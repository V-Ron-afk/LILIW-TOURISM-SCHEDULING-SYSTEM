<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ltos2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user1 = $_GET['user_id'];


$sql = "UPDATE users SET fullname='Jayvee Salabsabin' WHERE `users`.`user_id` = $user1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  
  header('location:userprofile.php');

} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>