
<?php

  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fancy Clothes</title>
	<link rel="stylesheet" href="./library/bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="./library/lightslider-master/src/css/lightslider.css" />                  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script src="./library/lightslider-master/src/js/lightslider.js"></script>
	<!-- CSS W3 ScHOOLS -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<!-- <script src="{{asset('jquery.min.js')}}"></script> -->
	<style>
		.slides{
			text-align: center;
		}
		#map{
			height: 300px;
			width: 250px;
		}
		#footer {
		   position:absolute;
		   bottom:0;
		   width:100%;
		   height:60px;   /* Height of the footer */
		   background:#6cf;
		}

		.profile{
			margin-right: 5px; 
			height: 38px; 
			width: 70px; 
			font-size: 16px; 
			cursor: pointer; 
			color: white; 
			border-color: blue; 
			background: blue;
		}
		
	</style>
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
	              <li class="nav-item">
	              	<form action="do_logout.php" method="POST"> 
	                 <button type="submit" class="btn btn-danger ">Logout</button>
	                </form>				

	              </li>
              <?php } else { ?>
              <li class="nav-item">
                 <a class="nav-link" href="login"><button type="button" class="btn btn-dark">Login</button></a>
              </li>
              <li class="nav-item">
              <a class="nav-link " href="register"><button type="button" class="btn btn-dark">Register</button></a>
              </li>
              <?php } ?>
            </ul>
        </div>  
    </nav>
		<div class="container-fluid">
			<div class="row" style="margin-top: 100px">

					<div class="col-sm-4 col-sm-offset-2">
						<img src="<?php print_r('./images/' . $_SESSION['baju']->image)?>" style="height: 500px; width: 400px">		
					</div>
					<div class="col-sm-5">
						<h3 style="color : orange"><?php print_r($_SESSION['baju']->name)?></h3>
						<p>Ukuran : <?php print_r($_SESSION['baju']->size)?> </p>
						<p>Warna : <?php print_r($_SESSION['baju']->color)?> </p>
						<p>Harga  : <?php print_r($_SESSION['baju']->price)?></p>
						<p>Stock  : <?php print_r($_SESSION['baju']->stock)?></p>
						<p>Detail : <?php print_r($_SESSION['baju']->detail)?></p>
						<a href="transaction.php"><button type="button" class="btn btn-success" style="margin-top: 60px; width: 90px; height: 40px; text-align: center;">Buy Now</button></a>

					</div>
					
						
			</div>

		</div>
</body>
</html>