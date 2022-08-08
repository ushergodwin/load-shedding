<?php include("config.php");
 if(isset($_POST['allsch'])){
      $sql = "TRUNCATE table schedule";
      if(mysqli_query($conn, $sql)){
        "<script> alert('All Schedules Deleted Succesfully'); </script>";  
      }else{
         echo "<script> alert('Opps, something went wrong!!'); </script>"; 
      }
  }

mysqli_close($conn);
?>