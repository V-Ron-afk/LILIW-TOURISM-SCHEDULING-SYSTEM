<?php
  require('../conn.php');
  ob_start();    
if($_POST['pic']=='balay'){
  $pic = $_POST['pic'];
  $comment = $_POST['comment'];
  $date = date('Y-m-d');
 
$sql = "INSERT INTO `gallery` (`gal_id`,`gallery_id` ,`user_id`, `comment`, `images`, `date`) 
VALUES (NULL,'".$pic."', '".$_SESSION['user_id']."', '".$comment."', '', '".$date."');";

if ($con->query($sql) === TRUE) {
  header('Location:kilanginfalls.php');
  
}
}

if($_POST['pic']=='bnl3'){
  $pic = $_POST['pic'];
  $comment = $_POST['comment'];
  $date = date('Y-m-d');
 
$sql1 = "INSERT INTO `gallery` (`gal_id`,`gallery_id` ,`user_id`, `comment`, `images`, `date`) 
VALUES (NULL,'".$pic."', '".$_SESSION['user_id']."', '".$comment."', '', '".$date."');";

if ($con->query($sql1) === TRUE) {
  header('Location:esmeris.php');
}
}

if($_POST['pic']=='resort'){
  $pic = $_POST['pic'];
  $comment = $_POST['comment'];
  $date = date('Y-m-d');
 
$sql2 = "INSERT INTO `gallery` (`gal_id`,`gallery_id` ,`user_id`, `comment`, `images`, `date`) 
VALUES (NULL,'".$pic."', '".$_SESSION['user_id']."', '".$comment."', '', '".$date."');";

if ($con->query($sql2) === TRUE) {
  header('Location:liliwresort.php');
  
}
}

if($_POST['pic']=='liliwresort1'){
  $pic = $_POST['pic'];
  $comment = $_POST['comment'];
  $date = date('Y-m-d');
 
$sql2 = "INSERT INTO `gallery` (`gal_id`,`gallery_id` ,`user_id`, `comment`, `images`, `date`) 
VALUES (NULL,'".$pic."', '".$_SESSION['user_id']."', '".$comment."', '', '".$date."');";

if ($con->query($sql2) === TRUE) {
  header('Location:liliwresort1.php');
  
}
}

if($_POST['pic']=='liliwresort2'){
  $pic = $_POST['pic'];
  $comment = $_POST['comment'];
  $date = date('Y-m-d');
 
$sql2 = "INSERT INTO `gallery` (`gal_id`,`gallery_id` ,`user_id`, `comment`, `images`, `date`) 
VALUES (NULL,'".$pic."', '".$_SESSION['user_id']."', '".$comment."', '', '".$date."');";

if ($con->query($sql2) === TRUE) {
  header('Location:liliwresort2.php');
  
}
}

if($_POST['pic']=='moises'){
  $pic = $_POST['pic'];
  $comment = $_POST['comment'];
  $date = date('Y-m-d');
 
$sql2 = "INSERT INTO `gallery` (`gal_id`,`gallery_id` ,`user_id`, `comment`, `images`, `date`) 
VALUES (NULL,'".$pic."', '".$_SESSION['user_id']."', '".$comment."', '', '".$date."');";

if ($con->query($sql2) === TRUE) {
  header('Location:moises.php');
  
}
}

if($_POST['pic']=='riverfront1'){
  $pic = $_POST['pic'];
  $comment = $_POST['comment'];
  $date = date('Y-m-d');
 
$sql2 = "INSERT INTO `gallery` (`gal_id`,`gallery_id` ,`user_id`, `comment`, `images`, `date`) 
VALUES (NULL,'".$pic."', '".$_SESSION['user_id']."', '".$comment."', '', '".$date."');";

if ($con->query($sql2) === TRUE) {
  header('Location:riverfront1.php');
  
}
}

if($_POST['pic']=='siesta'){
  $pic = $_POST['pic'];
  $comment = $_POST['comment'];
  $date = date('Y-m-d');
 
$sql2 = "INSERT INTO `gallery` (`gal_id`,`gallery_id` ,`user_id`, `comment`, `images`, `date`) 
VALUES (NULL,'".$pic."', '".$_SESSION['user_id']."', '".$comment."', '', '".$date."');";

if ($con->query($sql2) === TRUE) {
  header('Location:siesta.php');
  
}
}

?>