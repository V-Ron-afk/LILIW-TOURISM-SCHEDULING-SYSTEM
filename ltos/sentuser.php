<?php
ob_start();
require('conn.php');
?>
<?php


$a = $_GET['id'];


$id = $_GET['id'];
$msg = $_POST['msg'];
$date = date("m-d-y");
$hey = $_SESSION['user_id'];

$sql = "INSERT INTO `messages` (`msg_id`,`sender`, `receiver`, `message`,`datetime`) VALUES (NULL,'" . $hey . "', '" . $a . "', '" . $msg . "', '" . $date . "');";


if ($con->query($sql) == TRUE) {
}
header("Location: chatuser.php?id=$a");


?>