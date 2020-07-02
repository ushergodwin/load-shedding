      <?php  include("config.php");

if(isset($_POST['submit'])){
         $Address = $_POST['address'];
          $ID= $_POST['id'];
    
        if (empty(trim($_POST['address']))) {

          echo"Plase Enter Address and try again";
          return false;
        } else{
          $Address = trim($_POST['address']);
        }

        if (empty(trim($_POST['id']))) {

          echo"Plase Enter ID and try again";
          return false;
        } else{
          $ID = trim($_POST['id']);
        }

         
        $sql = "UPDATE staff SET staffAddress = '".$Address."' WHERE ID = '".$ID."'";
        if (mysqli_query($conn, $sql)) {
          echo "<script> alert('Address Updated Succesfully'); </script>";
          echo "<script> history.back()</script>";
        } else{
          echo "Opps, something went wrong!!";

        }
      }
      mysqli_close($conn);
      ?>