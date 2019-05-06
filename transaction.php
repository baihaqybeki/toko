<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="./library/bootstrap-4.0.0/dist/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>
  <link rel="stylesheet" href="./library/bootstrap-4.0.0/dist/js/bootstrap.min.js">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
	table, th, td {
	    border: 1px solid black;
	    border-collapse: collapse;
	}

	.profile{
			margin-right: 5px; 
			height: 38px; 
			width: 170px; 
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
                 <a class="nav-link" href="login.php"><button type="button" class="btn btn-dark">Login</button></a>
              </li>
              <li class="nav-item">
              <a class="nav-link " href="register.php"><button type="button" class="btn btn-dark">Register</button></a>
              </li>
              <?php } ?>
            </ul>
        </div>  
    </nav>
    <h1 style="margin-top: 50px"> Review Order </h1>
	<div class="container-fluid">
		<div class="row" style="margin-top: 50px">
			<div class="col-sm-4" >
				<img src="<?php print_r('./images/' . $_SESSION['baju']->image)?>" style="height: 200px; width: 200px ">		
			</div>
			<div class="col-sm-8" > 
				<table style="width:100%">
				  	<tr>
					    <th>Nama Barang</th>
					    <th>Ukuran</th> 
					    <th>Warna</th>
					    <th>Harga</th>
					    <th>Stock</th>
					    <th>Detail</th>
					    <th>Jumlah</th>
				  	</tr>
				  	<tr>
					    <td><h3 style="color : orange"></h3><?php print_r($_SESSION['baju']->name)?></h3></td>
					  
					    <td><?php print_r($_SESSION['baju']->size)?> </td>
					    <td><?php print_r($_SESSION['baju']->color)?> </td>
					    <td><?php print_r($_SESSION['baju']->price)?></td>
					    <td><?php print_r($_SESSION['baju']->stock)?> </td>
					    <td><?php print_r($_SESSION['baju']->detail)?> </td>
					    <td>
					    		<select name="jumlah" id="jumlah">
					    			<option value="0"> 0 </option>
					    			<option value="1"> 1 </option>
					    			<option value="2"> 2 </option>
					    			<option value="3"> 3 </option>
					    			<option value="4"> 4 </option>
					    			<option value="5"> 5 </option>
					    			<option value="6"> 6 </option>
					    			<option value="7"> 7 </option>
					    			<option value="8"> 8 </option>
					    			<option value="9"> 9 </option>
					    			<option value="10"> 10 </option>
					    		</select> 
					    </td>
				  	</tr>

				</table>
				<p> Total Harga : </p> 
				<div id="total"></div>
				<div id="bayar">
					<form action="do_transaction.php" method="POST">
						<input type="hidden" name="customer_id" value="<?php print_r($_SESSION['user']->customer_id) ?>">
						<input type="hidden" name="clothe_id" value="<?php print_r($_SESSION['baju']->id) ?>">
						<input type="hidden" name="quantity" id="quantity">
						<input type="hidden" name="total_price" id="total_price">

						<button type="submit" class="btn btn-success" style="width: 90px; height: 40px; text-align: center;">Confirm</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
<script type="text/javascript">
	$(document).ready(function() {
		$('#jumlah').on('change', function() {
  			$('#total').html($('#jumlah').val() * <?php print_r($_SESSION['baju']->price) ?>);
  			$('#quantity').val($('#jumlah').val());
  			console.log($('#quantity').val());
  			$('#total_price').val($('#jumlah').val() * <?php print_r($_SESSION['baju']->price) ?>);
  			console.log($('#total_price').val());
		})
	});
</script>
</html>