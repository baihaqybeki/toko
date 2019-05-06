<?php

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	 
		
		session_start();
		$query = "SELECT * FROM transactions WHERE customer_id = '" . $_SESSION['user']->customer_id . "'";
		// echo $query;die;
		$result = $mysqli->query($query, MYSQLI_USE_RESULT);

		
		$history_data = [];
		while($data = $result->fetch_object())
		{
			array_push($history_data, $data);
		}
		
		$_SESSION['history'] = $history_data;


		header("Location: history.php");


		
		// print_r($query2);die;
		
	
?>