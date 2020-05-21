<?php
include("config.php");
$email = $message ="";
$errors = array();
  if(isset($_POST["send"])){
   $email = mysqli_real_escape_string($conn, $_POST['EmailAddress']);
$message =  mysqli_real_escape_string($conn, $_POST['message']);  
      
      if(empty(trim($email))){
          array_push($errors, "Please Enter Your Email");
      }
      
      if(empty(trim($message))){
          array_push($errors, "Please Enter Your Concern");
      }
      
      if(count($errors)==0){
          $sql = "INSERT INTO messages(email, message) VALUES('$email', '$message')";
          $query = mysqli_query($conn, $sql);
          
          if($query){
              echo"<div class='alert alert-success alert-dismissible fade show'>
    <strong>Success!</strong> Your message has been sent successfully.
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
</div>";
          } else{
             echo" <div class='alert alert-danger alert-dismissible fade show'>
    <strong>Error!</strong>Oops, Message Not Sent
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
</div>";
          }
      }
  }
                  
mysqli_close($conn);
?>
<html>
<head>
   <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico"> 
    </head>
    <body>
    
    </body>
</html>