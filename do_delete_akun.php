<?php

	session_start();

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "DELETE FROM customers WHERE id = '" . $_SESSION['user']->customer_id . "'";
	$query2 = "DELETE FROM detail_customers WHERE id = '" . $_SESSION['user']->detail_customer_id . "'";

	$mysqli->query($query);
	$mysqli->query($query2);
	header("Location: index.php");

	$_SESSION['user'] = null;
?>