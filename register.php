<?php include('servertrial.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <link rel="icon" href="imgs/favicon.ico">
     <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <script src="shedding.js"></script>
    <style title="text/css"> #log:hover{
	color: white;
	cursor: pointer;
  font-weight: bold;
  font-size: 20px

}</style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
<main class="reg">
  <form method="post" action="register.php" name="account">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
        	<div class="input-group">
  	  <label>Staff Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
              	<div class="input-group">
  	  <label>Staff Contact</label>
  	  <input type="text" name="contact" value="<?php echo $contact; ?>">
  	</div>
              	<div class="input-group">
  	  <label>Staff Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="submit" id="log" onclick="return validateAccount()">Register</button>
  	</div>
  	<p>
  		Already a Staff Member? <a href="login.php">Sign in</a>
  	</p>
  </form>
    </main>
</body>
</html>