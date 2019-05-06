<?php

	session_start();

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "UPDATE customers SET username = '" . $_POST['username'] . "' WHERE id='".$_SESSION['user']->customer_id."'";
	$query2 = "UPDATE detail_customers SET name = '" . $_POST['name'] . "', address = '" . $_POST['address'] . "',noHp = '" . $_POST['noHp'] . "',email = '" . $_POST['email'] . "' where customer_id='".$_SESSION['user']->customer_id."'";

	$mysqli->query($query);
	$mysqli->query($query2);
	$query3 = "SELECT customers.*, detail_customers.*, customers.id AS customer_id, detail_customers.id AS detail_customer_id FROM customers JOIN detail_customers ON customers.id = detail_customers.customer_id WHERE customers.username = '" . $_POST['username'] . "'";

	$result = $mysqli->query($query3, MYSQLI_USE_RESULT);
	$data = $result->fetch_object();
	$_SESSION['user'] = $data;
	header("Location: profile.php");

?>