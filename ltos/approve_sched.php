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

$id = $_GET['id'];

$sql = "UPDATE `schedule` SET `status` = 'approve' WHERE `schedule`.`sched_id` = $id;";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('location:hos.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>