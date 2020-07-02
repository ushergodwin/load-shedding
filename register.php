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
  <title>Register Staff - ugsheds</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/shedding.js"></script>
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css"> .control-label, label{color: aliceblue }.card-body{
            background-image: url(imgs/header.jpg); border-radius: 5px; border-top-left-radius: 2px; border-top-right-radius: 2px;
        } .card-footer{color: aliceblue}.card-header{text-align: center} span{color: crimson; font-family: monospace; background-color: aliceblue; border-radius: 3px}</style>
</head>
<body>
	<div class="container">
 <div class="row justify-content-center">
         <div class="col-md-6 col-sm-12 col-lg-8">
             <div class="card">
                 <div class="card-header">
  	<h2>REGISTER</h2>
                 </div>
                 <div class="card-body">
  <form class="needs-validation" method="post" action="register.php" name="account" novalidate>
  	<?php include("errors.php");?>
      <div class="form-group">
  		<label for="username" class="control-label">Username</label><br>
  		<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required><br>
          <span id="name"></span>
      </div>
      <div class="form-group">
  		<label for="password" class="control-label">Password</label><br>
  		<input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required><br>
          <span id="pass"></span>
      </div>
      <div class="form-group">
      <label for="password" class="control-label">Confirm Password</label><br>
          <input type="password" name="password_2" class="form-control" value="<?php echo $password_2; ?>" required><br>
          <span id="conf"></span>
      </div>
      <div class="form-group">
    	<label for="username" class="control-label">Staff Name</label><br>
          <input type="text" name="name" class="form-control" required> <br>
      <span id="sname"></span>
      </div>
      <div class="form-group">
      <label for="contact" class="control-label">Staff Contact</label><br>
  		<input type="number" name="contact" class="form-control" value="<?php echo $contact; ?>" required><br>
          <span id="cont"></span>
      </div>
      <div class="form-group">
      	<label for="address" class="control-label">Staff Address</label><br>
          <input type="text" name="address" class="form-control" value="<?php echo $address; ?>" required><br>
      <span id="add"></span>
      </div>
      <div class="form-group">
<button type="submit" class="btn btn-primary" name="submit" onclick="return validateAccount();">Register</button>
      </div>
      <div class="card-footer">
Already a Staff Member? &nbsp; &nbsp;<a href="login.php" class="btn btn-outline-light btn-sm">Login</a>
      </div>
     </form>
    </div>
         </div>
    </div>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>