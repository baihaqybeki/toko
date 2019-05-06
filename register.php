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
  <link rel="stylesheet" type="text/css" href="./design/design.css"> 
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
      <form action="do_register.php" method="POST"> 
        <div class="container">
          <h1>REGISTER</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>

          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter name" name="name" required>

          <label for="address"><b>address</b></label>
          <input type="text" placeholder="Enter address" name="address" required>

          <label for="noHp"><b>No Hp</b></label>
          <input type="text" placeholder="Enter noHp" name="noHp" required>

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="submit" class="signupbtn">Register</button>
          </div>
        </div>
      </form>
  </body>
</html>