<?php include('servertrial.php');
if(isset($_SESSION['username']) && $_SESSION['sussess'] = 'you are logged in'){
    header("location: welcome.php");
}
?>
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
    <style type="text/css">#log:hover{
cursor: pointer;font-weight: bold;font-size:20px;
        } #log{  background-color: aliceblue;} .header{width: 100%} .control-label, label{color: aliceblue }.card-body{
            background-image: url(imgs/header.jpg); border-radius: 5px; border-top-left-radius: 2px; border-top-right-radius: 2px;
        } .card-footer{color: aliceblue} </style>
    <script> $(document).ready(function(){
            $('input[type="checkbox"]').click(function(){
                if($(this).is(":checked")){
                    $("#password").attr({"type": 'text'});
                }else{
                    $("#password").attr({"type": 'password'});
                }
            });
        });
    
    </script>
</head>
<body>

	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
  	<h2 style="text-align: center">Login</h2>
                    </div>
     <div class="card-body">                  
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  		<label for="username" class="control-label">Username</label><br>
  		<input type="text" name="username" class="form-control" required><br>
  		<label for="password" class="control-label">Password</label><br>
  		<input type="password" name="password" class="form-control" id="password" required><br><div class="custom-control custom-switch"> <input type="checkbox" class="custom-control-input" id="customSwitch1">
      <label class="custom-control-label" for="customSwitch1">show password</label> 
      </div>
<button type="submit" class="btn btn-primary" name="login_user">Login</button> 
        <div class="card-footer">
  		Not yet a member? <a href="register.php">Sign up</a>
        Forgot Password? <a href="passstep.php">Reset</a>    
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