
<?php


	session_start();

	//echo $_GET['id'];die;

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$query = "DELETE FROM transactions WHERE id = '" . $_GET['id'] . "'";
	
	$mysqli->query($query);
	header("Location: do_history.php");
?>
