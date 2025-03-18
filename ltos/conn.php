<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "ltos2";

$con = mysqli_connect($servername, $username, $password,$db);

//Check the connection

if(!$con){

    die("Connection Error: " . mysqli_connect_error());

} else {

    //echo "You are now connected to the database";

}
?>