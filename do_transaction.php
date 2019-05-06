<?php

	session_start();

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "INSERT INTO transactions (customer_id, clothe_id, quantity, total_price ) VALUES ('" . $_POST['customer_id'] . "', '" . $_POST['clothe_id'] . "', '" . $_POST['quantity'] . "', '" . $_POST['total_price'] . "')";

	// echo $query;die;
	if ($mysqli->query($query) === TRUE) 
	{	
		$query1 = "SELECT * FROM clothes WHERE id = '" . $_POST['clothe_id'] . "'"; 

		$result = $mysqli->query($query1, MYSQLI_USE_RESULT);

		$data = $result->fetch_object();
		$remainingstock = $data->stock - $_POST['quantity'];
		$query2 = "UPDATE clothes SET stock = '" . $remainingstock . "' WHERE id = '" . $_POST['clothe_id'] . "'";

		// print_r($query2);die;
		$mysqli = new mysqli("localhost", "root", "", "webkonveksi");
		if ($mysqli->query($query2) === TRUE)
		{
		
			header("Location: index.php");
		} 
		else
		{
			echo 'gagal';
		}
	}
	else {
		echo 'a';
	}
?>