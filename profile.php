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
		input[type=text], select {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
}
button[type=submit] {
    width: 95%;
    height: 35px;
    color: white;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}

input[type=submit]:hover {
    background-color: #45a049;
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
                  <a class="nav-link" href="profile.php"><button type="button" class="btn btn-primary">Profile</button></a>
            </li>   
              <li class="nav-item">
              	<form action="do_logout.php" method="POST"> 
                 <button type="submit" class="btn btn-danger ">Logout</button>
                </form>				

              </li>
              <li class="nav-item">
                 <a class="nav-link" href="do_history.php"><button type="button" class="btn btn-primary">History Pembelian</button></a>
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
		<form action="do_update_profile.php" method="POST"> 
		<center>
			<div class="form-group col-sm-12" style="margin-top: 50px">
				<div class="col-sm-3">
					<label for="email"><b>Email</b></label>
				</div>
				<div class="col-sm-3 col-sm-offset-3">
		        	<input type="text" placeholder="Enter Email" name="email" required value=<?php print_r($_SESSION['user']->email) ?>><br>
		        	<!-- <input type="text" placeholder="Enter Email" name="email" required value="$user->email"><br> -->
		        </div>
		     </div>
		     <div class="form-group col-sm-12">
				<div class="col-sm-3">
	       			<label for="username"><b>Username</b></label>
	       		</div>
	       		<div class="col-sm-3 col-sm-offset-3">
	        		<input type="text" placeholder="Enter Username" name="username" required value=<?php print_r($_SESSION['user']->username) ?>><br>
	        	</div>
	        </div>

	        <div class="form-group col-sm-12">
				<div class="col-sm-3">
	        		<label for="name"><b>Name</b></label>
	        	</div>
	        	<div class="col-sm-3 col-sm-offset-3">
	      			<input type="text" placeholder="Enter name" name="name" required value=<?php print_r($_SESSION['user']->name) ?>><br>
	      		</div>
	      	</div>

	      	<div class="form-group col-sm-12">
				<div class="col-sm-3">
	      			<label for="address"><b>Address</b></label>
	      		</div>
	      		<div class="col-sm-3 col-sm-offset-3">
	      			<input type="text" placeholder="Enter address" name="address" required value=<?php echo($_SESSION['user']->address) ?>><br>
	  			</div>
	  		</div>
	  		<div class="form-group col-sm-12">
				<div class="col-sm-3">
			      <label for="noHp"><b>No Hp</b></label>
			  </div>
			  <div class="col-sm-3 col-sm-offset-3">
			      <input type="text" placeholder="Enter noHp" name="noHp" required value=<?php print_r($_SESSION['user']->noHp) ?>><br>
			  </div>
			</div>
		<div class="col-sm-3">
			<button type="submit" class="btn btn-info">Edit Profile</button>
		</form>
		<form action="do_delete_akun.php" method="DELETE"> 
			<button type="submit" class="btn btn-danger">Delete Akun</button>
		</form>
		</div>
	</center>
</body>
</html>