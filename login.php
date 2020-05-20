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
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">#log:hover{
cursor: pointer;font-weight: bold;font-size:20px;
        } #log{  background-color: aliceblue;} .header{width: 100%} .control-label{color: aliceblue }</style>
</head>
<body>

	<div class="container">
        <div class="header">
  	<h2>Login</h2>
  </div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  		<label for="username" class="control-label">Username</label><br>
  		<input type="text" name="username" class="form-control"><br>
  		<label for="password" class="control-label">Password</label><br>
  		<input type="password" name="password" class="form-control"><br>
<button type="submit" class="btn btn-primary" name="login_user">Login</button>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
    </div>
</body>
</html>
