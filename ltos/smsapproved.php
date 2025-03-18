
<?php
try {
	$key = "31ec14e9badac22e76268489595f719c0443c36d";
	$device = 192; 
	$sim = 1;
	$message = "Hello, " . $_GET['name'] . " your Schedule has been approved! See you on the day that you have been schedule. Thank you for Scheduling";
	$number = $_GET['phone'];
	$phoneNumber = "+63" . $number[1] . $number[2] . $number[3] . $number[4] . $number[5] . $number[6] . $number[7] . $number[8] . $number[9] . $number[10];
	if ($message != null && $phoneNumber != null) {
		$url = "https://sms.teamssprogram.com/api/send/sms/SendSMS?key=" . $key . "&device=" . $device . "&sim=" . $sim . "&phone=" . $phoneNumber . "&message=" . urlencode($message); // yung https://sms.teamssprogram.com/api/send/ eto url pang send tapos yung sms/SendSMS folder ko to saka file name hahaha
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);




		if ($curl_response === false) {
			$info = curl_getinfo($curl);
			curl_close($curl);
			die('Error occurred' . var_export($info));
		}

		curl_close($curl);

		$response  = json_decode($curl_response);

		if ($response->status == 200) {
			echo 'Message has been sent';
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

			$conn->close();;
		} else {
			'Technical Problem';
		}
	}
} catch (Exception $ex) {
	echo "Exception: " . $ex;
}
?>