<?php
  
	require 'do_index.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Fancy Clothes</title>
	<link rel="stylesheet" href="./library/bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="./library/lightslider-master/src/css/lightslider.css" />                  
	<script src=" http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script> 
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
			height: 600px; 
			width: 250px; 
		}
		.responsivefoto{
		    width: 500px;
		    height: 00%;
		}

		}
		.footer {
		    position: fixed;
		    left: 0;
		    bottom: 0;
		    width: 100%;
		    background-color: blue;
		    color: white;
		    text-align: center;
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

		.upBaju{
			margin-right: 5px; 
			height: 38px; 
			width: 120px; 
			font-size: 16px; 
			cursor: pointer; 
			color: white; 
			border-color: green; 
			background: green;
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
            	<?php if(isset($_SESSION['user']) && $_SESSION['user']->username == 'admin') {?>

	            	<li>
	            		<input type="button" value="Upload Baju"  class="upBaju" onClick="document.location.href='form_baju.php'">
	            	</li>

            	<?php }?>
            	  
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
	<div class="container-fluid">

	  	<div class="row" style="margin-top: 100px">
	  		<div class="col-sm-12">
	  			<ul id="lightSlider" class="slides">
	  			<?php foreach ($_SESSION['list_baju'] as $baju) { ?>
			      	<li>
			      	  <img src="./images/<?php echo $baju->image ?>" class="rounded" alt="Mountain View" style="width:300px;height:350px;">
			          <h2 class="animated bounce"><?php echo $baju->name ?></h2>
			          <p><?php echo $baju->detail ?></p>
			          <h4><?php echo $baju->price ?></h4>
			          <?php if(isset($_SESSION['user']) && $_SESSION['user'] != null) {?>
			          <a href="do_get_baju.php?id=<?php echo $baju->id ?>" class="btn btn-success">Buy Now</a>
			         <?php } else { ?>
			          <a href="login.php" class="btn btn-success">Buy Now</a>
			            <?php } ?>
			      	</li>
			      <?php }?>
		    	</ul>
		    </div>
		    <div class="col-sm">
		    	<img src="./images/D.jpg" style="height: 900px; margin-top:100px;">
		    </div>
			<div class="col-sm-4" style="margin-top: 100px">
				<h4>Contact</h4>
		        <p>Questions? Go ahead.</p>
		        <form action="do_question.php" method="POST" style="width:100%;">
		          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="name" required></p>
		          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="email" required></p>
		          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="subject" required></p>
		          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="message" required></p>
		          <button type="submit" class="w3-button w3-block w3-black">Send</button>
		        </form>
			</div>
			
			<div id="map" class="col-sm-4"  style="margin-top: 100px"></div>
			<div class="col-sm-4" style="margin-top: 100px">
				<div class="card" style="width:400px height:500px">
				  <img class="card-img-top" src="./images/logo.png" alt="Card image" style="height:200px width:200px">
				  <div class="card-body">
				    <h4 class="card-title">Fancy Clothes Indonesia</h4>
				    <p class="card-text">Fancy Clothes Indonesia adalah sebuah perusahaan pakaian asal Indonesia yang berlokasi di kota Bandung. </p>
				  </div>
				</div>
			</div>
		</div>
	</div>

</body>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#lightSlider').lightSlider({
            item:4,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ]
        });  
      });
        function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -6.973205, lng: 107.630541},
          zoom: 14
        });
        var marker = new google.maps.Marker({
          position: {lat: -6.973205, lng: 107.630541},
          map: map
        });

      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=  	AIzaSyAUlG7TDuAjHRa7DpKscA9W7B1vv6LAAl8&callback=initMap"
    async defer></script>

</html>