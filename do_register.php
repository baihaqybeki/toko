<?php

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "INSERT INTO customers (username, password) VALUES ('" . $_POST['username'] . "', '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "')";

	if ($mysqli->query($query) === TRUE) 
	{	
		$query2 = "INSERT INTO detail_customers (customer_id, name, address, noHp, email) VALUES ('" . $mysqli->insert_id . "', '" . $_POST['name'] . "', '" . $_POST['address'] . "', '" . $_POST['noHp'] . "', '" . $_POST['email'] . "')";
		
		$hasil = $mysqli->query($query2);

		header("Location: login.php");
		
	    /* free result set */
	    $result->close();
	}
?>