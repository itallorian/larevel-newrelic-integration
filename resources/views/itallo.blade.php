<?php
	newrelic_name_transaction("WebTransaction/Itallo");
	echo 'Starting...<br>';
	echo 'OK! Lets go.<br>';

	echo 'Creating vars...<br>';
	$url = 'https://node-jwt.herokuapp.com/authorization';
	$headers = array('id: 12345');

	echo 'Starting curl<br>';

	$ch = curl_init();

	echo 'Set curl option<br>';

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	echo 'Executing curl<br>';

	$response = curl_exec($ch);

	echo 'Closing curl<br>';

	curl_close($ch);

	echo "This is the response: <br>";
	echo $response;

	newrelic_end_of_transaction();
?>



