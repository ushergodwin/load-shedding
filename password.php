<?php session_start(); include("config.php"); 
      echo"<div class='alert alert-success alert-dismissible fade show'>
    <strong>Success!</strong> Your questions and answers match, continue and reset your password.
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
</div>";
$username = $password = $password_2 ="";
$status = array();
 if(isset($_POST['reset'])){
     $username = mysqli_real_escape_string($conn, $_POST['username']);
     
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
      if(empty(trim($username))){
         array_push($status, "please your usename");
     }
     
     if(empty(trim($password))){
         array_push($status, "please your new password");
     }
       if(strlen($password) <6){
         array_push($status, "password must be at least 6 characters long");
     }    
     if(empty(trim($password_2))){
         array_push($status, "please confirm your password");
     }
     
       if($password_2 !== $password){
         array_push($status, "password do not match");
     }
      
     if(count($status)==0){
         $hash = password_hash($password, PASSWORD_DEFAULT);
         $sql = "update staff set password = '$hash' where username = '$username'";
         
         $query = mysqli_query($conn, $sql);
          if($query){
              unset($_SESSION['username']);
              header("location: login.php");
          }else{
                 array_push($status, "Oops, something went wrong".$sql."".mysqli_error($conn));
             }
     }
 }

?>
<html>
<head>
    <link rel="icon" href="imgs/favicon.ico">
 <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css"> form, content{ background-image: url(img/header.jpg); border-radius: 10px;color: black; font-family: sans-serif; padding: 10px 10px; font-size: 20px} h3{ text-align: center} input[ type=password],input[ type=text]{ border: 3px solid darkgray; border-radius: 5px;}</style>
    </head>
    <body class="bg-secondary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
    <div class="card">   
      <div class="card-header">
          <h3 class="text-success">Filling in the form below to reset your password</h3>
        </div>
        <div class="card-body">
        <form action="password.php" method="post">
            <?php include("resertstatus.php"); ?>
            <div class="form-group">
          <label>Username</label>
            <input type="text" name="username" class="form-control py-4">
            </div>
               <div class="form-group">
          <label>New Password</label>
            <input type="password" name="password" class="form-control py-4">
            </div>
            
               <div class="form-group">
          <label>Confirm Password</label>
            <input type="password" name="password_2" class="form-control py-4">
            </div>
               <div class="form-group">
             <input type="submit" name="reset" class="btn btn-primary" value="Reset Password">
            </div>
          </form>
        </div>
        <div class="card-footer">
        
        </div>
        </div>
        </div>
        </div>
        </div>
        <footer class="py-4 bg-light mt-auto">
        <div class="container=fluid">
            <div class="d-flex align-center justify-content-between">
            <p class="text-muted">Copyright &copy; Acoda Financial Services <?php $d = date("Y"); echo date("Y"); ?></p>
                <div class="d-flex justify-content-right">
            <a href="#">Terms &amp; Conditions</a> &nbsp; &nbsp; <a href="#">Privacy Policy</a>
            </div>
        </div>
            </div>
            </footer>
    </body>
</html>