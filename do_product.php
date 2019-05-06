<?php

	$mysqli = new mysqli("localhost", "root", "", "webkonveksi");

	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	// echo $target_file;die;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";


			$query = "INSERT INTO clothes (name,image,size,color,price,stock,detail) VALUES ('" . $_POST['name'] . "', '" . basename( $_FILES["fileToUpload"]["name"]) . "', '" . $_POST['size'] . "', '" . $_POST['color'] . "', '" . $_POST['price'] . "',  '" . $_POST['stock'] . "', '" . $_POST['detail'] . "')";

			if ($mysqli->query($query) === TRUE) 
			{	
				
				header("Location: index.php");
			}
			else {
				echo 'a';
			}
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
?>