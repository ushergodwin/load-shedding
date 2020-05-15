<?php  include("config.php");

if(isset($_POST['submit'])){

          $ID = $_POST['id'];
    
        if (empty(trim($_POST['id']))) {
         echo "<script> alert('Plase Enter ID and try again'); </script>";
          echo "<script> history.go(-1); </script>";
          return false;
        } else{
          $ID = trim($_POST['id']);
        }

        $sql = "DELETE FROM Staff WHERE ID = $ID";
        if (mysqli_query($conn, $sql)) {
          echo "<script> alert('Staff Deleted Succesfully'); </script>";
          echo "<script> history.go(-1); </script>";
        } else{
          echo "<script> alert('Opps, something went wrong!!'); </script>";
          echo "<script> history.go(-1); </script>";
        }
      }
      mysqli_close($conn);
      ?>