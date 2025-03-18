<?php
	date_default_timezone_set("Etc/GMT+8");
	
	require('../config.php');
	
	$query = mysqli_query($con, "SELECT * FROM `schedule` ");
	$date = date("Y-m-d");
	while($fetch = mysqli_fetch_array($query)){
		if(strtotime($fetch['departure']) < strtotime($date)){
			mysqli_query($con, "INSERT INTO `archives` VALUES('', '$fetch[sched_id]', '$fetch[username]',  '$fetch[placeto]', '$fetch[guest]','$fetch[arrivals]', '$fetch[departure]')") or die(mysqli_error($con));
			mysqli_query($con, "DELETE FROM `schedule` WHERE `sched_id` = '$fetch[sched_id]'") or die(mysqli_error($con));
		}
	}
	
?>