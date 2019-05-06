<?php

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "SELECT * from clothes WHERE id = '" . $_GET['id'] . "'";

	if ($result = $mysqli->query($query, MYSQLI_USE_RESULT)) 
	{
		$data = $result->fetch_object();
		
		print_r($data);
		session_start();

		$_SESSION['baju'] = $data;
		header("Location: detail_baju.php");
    

		
	    /* free result set */
	    $result->close();
	}
?>