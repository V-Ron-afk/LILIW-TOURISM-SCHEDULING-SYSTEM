<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ltos2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM messages WHERE `messages`.`msg_id` = $id;";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('location:contact2.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>