<?php include('servertrial.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log Into The System</title>
    <link rel="icon" href="imgs/favicon.ico">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
     <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>


  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  
  	<div class="input-group">

  		<button type="submit" class="btn" name="login_user">Login</button>

  	</div>

  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <br><br><br> <br> <br>
  </nav>

</body>
</html>