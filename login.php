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
              <?php if(isset($_SESSION['user'])) {?>
              <li class="nav-item">
                  <a class="nav-link" href="profile"><button type="button" class="btn btn-primary">Profile</button></a>
            </li>
              <li class="nav-item">
                <form action="do_logout.php" method="POST"> 
                 <button type="submit" class="btn btn-danger ">Logout</button>
                </form>       

              </li>

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
    <form action="do_login.php" method="POST">
      <div class="imgcontainer">
        <img src="./images/avatar.png" alt="Avatar" class="avatar" style="height:250px; width:300px">
      </div>

      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container"">
        <span class="psw">Forgot <a href="register">password?</a></span>
      </div>
    </form>

</body>
</html>
