<?php

	session_start();
	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "SELECT * from clothes";

	if ($result = $mysqli->query($query, MYSQLI_USE_RESULT)) 
	{
		$baju_data = [];
		while($data = $result->fetch_object())
		{
			array_push($baju_data, $data);
		}
// 		die;
// 		// print_r($data);die;
// 
		$_SESSION['list_baju'] = $baju_data;
// 		// header("Location: index.php");


		
// 	    /* free result set */
// 	    // $result->close();
	}
?>