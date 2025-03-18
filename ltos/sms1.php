<html>
	<head>
		<title>Sending SMS</title>
	</head>

	<body>
			<h3>Sending SMS</h3>
			<form method='GET' action='<?php $url?>'>
				Phone <input type='phone' name = 'phone' autocomplete='off'> <br>
				Message <input type='message' name='message'><br>
				<input type='submit' value='Send'/>
			 </form>
	</body>
</html>

<?php
try{
	$key="2ab9224acec839bc8029e1d018c88cac4eb40c39"; //mag generate ka ng sayo dun sa site tas paste mo na lang dito
	$device = 83; // ito yung device id pag na register mo na yung device mo sa site
	$sim = 2; // anong sim gamit mo pang send
	// $message = isset($_GET['message']) ? $_GET['message'] : null; eme lang to hahaha
	// $phoneNumber = isset($_GET['phone']) ? $_GET['phone'] : null;

	if($message !=null && $phoneNumber !=null){
		$url = "https://sms.teamssprogram.com/api/send/sms/SendSMS?key=".$key."&device=".$device."&sim=".$sim."&phone=".$phoneNumber."&message=".urlencode($message); // yung https://sms.teamssprogram.com/api/send/ eto url pang send tapos yung sms/SendSMS folder ko to saka file name hahaha
		$curl = curl_init($url);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);


		if($curl_response === false){
			$info = curl_getinfo($curl);
			curl_close($curl);
			die('Error occurred'.var_export($info));
		}

		curl_close($curl);

		$response  = json_decode($curl_response);

		if($response->status == 200){
			echo 'Message has been sent';
		}else{
			'Technical Problem';
		}

	}
}catch(Exception $ex){
	echo "Exception: ".$ex;
}
?>


