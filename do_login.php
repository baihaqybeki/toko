<?php

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "SELECT customers.*, detail_customers.*, customers.id AS customer_id, detail_customers.id AS detail_customer_id FROM customers JOIN detail_customers ON customers.id = detail_customers.customer_id WHERE customers.username = '" . $_POST['username'] . "'";

	if ($result = $mysqli->query($query, MYSQLI_USE_RESULT)) 
	{
		$data = $result->fetch_object();
		
		if(password_verify($_POST['password'], $data->password))
		{
			session_start();

			$_SESSION['user'] = $data;

			header("Location: index.php");
		}
		else {
			
			header("Location: login.php");
		}
		
	    /* free result set */
	    $result->close();
	}
?>
