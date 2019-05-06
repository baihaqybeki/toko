<?php

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "INSERT INTO questions (name, email, subject, message ) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['subject'] . "', '" . $_POST['message'] . "')";

	if ($mysqli->query($query) === TRUE) 
	{	
		
		header("Location: index.php");
	}
	else {
		echo 'a';
	}
?>