<?php

  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Fancy Clothes</title>
	<link rel="stylesheet" href="./library/bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./library/bootstrap-4.0.0/dist/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="./library/lightslider-master/src/css/lightslider.css" />                  
	<script src=" http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script> 
	<script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script src="./library/lightslider-master/src/js/lightslider.js"></script> 
	<!-- CSS W3 ScHOOLS -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css7/4/w3.css"> 
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php">Fancy Clothes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <?php if(isset($_SESSION['user']) && $_SESSION['user'] != null) {?>
              	<li class="nav-item">
                  <input type="button" value="Profile"  class="profile" onClick="document.location.href='profile.php'" />
            	</li> 
            \
            	  
              	<li class="nav-item">
              	<form action="do_logout.php" method="POST"> 
                 	<button type="submit" class="btn btn-danger ">Logout</button>
                </form>				

              </li>
              <?php } else { ?>
              <li class="nav-item">
                 <a class="nav-link" href="login.php"><button type="button" class="btn btn-dark">Login</button></a>
              </li>
              <li class="nav-item">
              <a class="nav-link " href="register.php"><button type="button" class="btn btn-dark">Register</button></a>
              </li>
              <?php } ?>
            </ul>
        </div>  
    </nav>

   


    <form action="do_product.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		  <label for="nama_baju"> Nama Baju</label>
		  <input type="text" class="form-control" id="nama_baju" name="name"  >
		</div>

    	<input type="file" name="fileToUpload" id="fileToUpload">

		 <div class="form-group">
		  <label for="ukuran">Ukuran</label>
		  <input type="text" class="form-control" name="size" id="Book_Title" >
		</div>

		 <div class="form-group">
		  <label for="warna">Warna</label>
		  <input type="text" class="form-control" name="color" id="Book_Description" >
		</div>

		 <div class="form-group">
		  <label for="harga">Harga</label>
		  <input type="text" class="form-control" name="price" id="Author" >
		</div>

		 <div class="form-group">
		  <label for="stock">Stock</label>
		  <input type="text" class="form-control" name="stock" >
		 </div>

		 <div class="form-group">
		  <label for="detail">Detail</label>
		  <input type="text" class="form-control" name="detail" >
		 </div>
 		<div class="clearfix">
            <button type="submit" class="btn btn-info">Add Product</button>
         </div>



		 
	</form>
</body>
</html>