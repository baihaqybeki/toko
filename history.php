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
                 <a class="nav-link" href="history.php"><button type="button" class="btn btn-primary">History Pembelian</button></a>
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
		<div class="row" style="margin-top: 50px">
			<div class="col-sm-4" >
				<img src="<?php print_r('./images/' . $_SESSION['baju']->image)?>" style="height: 200px; width: 200px ">		
			</div>
			<div class="col-sm-8" > 
				<table style="width:100%">
				  	<tr>
				  		<th>Customer Id</th>
					    <th>Cloths Id</th>
					    <th>Quantity</th> 
					    <th>Harga Total</th>
					    <th>Action</th>
					    
				  	</tr>
				  		<?php
				  			foreach ($_SESSION['history'] as $history) { ?>
				  				
				  			<tr>
						  		<td><?php print_r($history->customer_id)?> </td>
							    <td><h3 style="color : orange"></h3>
							    <?php print_r($history->clothe_id)?></h3></td> 
							    <td><?php print_r($history->quantity)?> </td>
							    <td><?php print_r($history->total_price)?> </td>
							    <form action="do_delete_transaction.php?id=<?php echo $history->id ?>" method="POST">
							    	<td><button type="submit" class="btn btn-danger" name="deleteHist">Delete</button></td>
							    </form>
					  		</tr>
					    <?php } ?>
				</table>
				
				<div id="total"></div>
				<div id="bayar">
					<form action="do_delete_transaction.php" method="POST">
						<input type="hidden" name="customer_id" value="<?php print_r($_SESSION['user']->id) ?>">
						<input type="hidden" name="clothe_id" value="<?php print_r($_SESSION['baju']->id) ?>">
						<input type="hidden" name="quantity" value="" id="quantity">
						<input type="hidden" name="total_price" value="<?php print_r($_SESSION['user']->id) ?>" id="total_price">

						
					</form>
				</div>
			</div>
		</div>
	</div>
</body>


</html>