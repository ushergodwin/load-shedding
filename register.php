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
    <script src="shedding.js"></script>
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css"> .control-label{color: aliceblue } .header{ width: 100%}</style>
    <script>
// Self-executing function
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
</head>
<body>
	<div class="container">
         <div class="header">
  	<h2>REGISTER</h2>
  </div>
  <form class="needs-validation" method="post" action="register.php" novalidate>
  	<?php include("errors.php");?>
      <div class="form-group">
  		<label for="username" class="control-label">Username</label><br>
  		<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
      </div>
      <div class="form-group">
  		<label for="password" class="control-label">Password</label><br>
  		<input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>
      </div>
      <div class="form-group">
      <label for="password" class="control-label">Confirm Password</label><br>
          <input type="password" name="password_2" class="form-control" value="<?php echo $password_2; ?>" required></div>
      <div class="form-group">
    	<label for="username" class="control-label">Staff Name</label><br>
          <input type="text" name="name" class="form-control" required> </div>
      <div class="form-group">
      <label for="contact" class="control-label">Staff Contact</label><br>
  		<input type="number" name="contact" class="form-control" value="<?php echo $contact; ?>" required>
      </div>
      <div class="form-group">
      	<label for="address" class="control-label">Staff Address</label><br>
          <input type="text" name="address" class="form-control" value="<?php echo $address; ?>" required></div>
      <div class="form-group">
<button type="submit" class="btn btn-primary" name="submit">Register</button>
  	<p>
Already a Staff Member? <a href="login.php" class="btn btn-outline-light">Login</a>
  	</p>
      </div>
  </form>
    </div>
</body>
</html>
