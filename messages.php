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
              echo"<script> history.back(); </script>";
          } else{
             echo" <div class='alert alert-danger alert-dismissible fade show'>
    <strong>Error!</strong>Oops, Message Not Sent
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
</div>";
              echo"<script> history.back(); </script>";
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>