<?php  include("config.php");
 $ID = $mess="";
$errors = array();
//detele staff
if(isset($_POST['submit'])){

 $ID = mysqli_real_escape_string($conn, $_POST['id']);
    
        if (empty(trim($_POST['id']))) {
          array_push($errors, "Plase Enter ID and try again");
        }
     if(count($errors)==0){
        $sql = "DELETE FROM Staff WHERE ID = $ID";
        if (mysqli_query($conn, $sql)) {
          echo "<script> alert('Staff Deleted Succesfully'); </script>";
          echo "<script> history.go(-1); </script>";
        } else{
          echo "<script> alert('Opps, something went wrong!!'); </script>";
          echo "<script> history.go(-1); </script>";
        }
     }
      }

    // delete messages
 if(isset($_POST['del'])){
     $mess = mysqli_real_escape_string($conn, $_POST['mess']);
     
     if(empty(trim($mess))){
         array_push($errors, "Enter the message id");
     }
     
     if(count($errors)==0){
         $sql = "DELETE FROM messages WHERE ID = '$mess'";
         
         if(mysqli_query($conn, $sql)){
             echo "<script> alert('Message Deleted Succesfully'); </script>";
         }else{
             echo "<script> alert('Opps, something went wrong!!'); </script>";
         }
     }
     
 }

  if(isset($_POST['all'])){
      $sql = "TRUNCATE table messages";
      if(mysqli_query($conn, $sql)){
        "<script> alert('All Messages Deleted Succesfully'); </script>";  
      }else{
         echo "<script> alert('Opps, something went wrong!!'); </script>"; 
      }
  }
      mysqli_close($conn);
      ?>
