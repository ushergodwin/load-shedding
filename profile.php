<?php 
require_once("config.php");
$username = $_SESSION['username'];
$user = $staffName = $staffAddress = $staffContact ="";
$sql = "select username, staffName, staffAddress, staffContact from staff where username = '$username'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$user = $result['username'];
$staffName = $result['staffName'];
$staffAddress = $result['staffAddress'];
$staffContact = $result['staffContact'];
$pusername = $pname = $paddress = $pcontact = "";
if(isset($_POST['save'])){
        $pname = mysqli_real_escape_string($conn, $_POST['pname']);
        $paddress = mysqli_real_escape_string($conn, $_POST['paddress']);
        $pcontact = mysqli_real_escape_string($conn, $_POST['pcontact']);
    if(empty(trim($pname && $paddress && $pcontact))){
        array_push($errors, "all fields are required");
    }else{
        $update = mysqli_query($conn, "update staff set staffName = '$pname', staffAddress ='$paddress', staffContact='$pcontact' where username ='$username'");
        if($update){
         echo"<script>alert('Changes Saved Successfully');</script>";
       echo"<script>history.back(); </script>";  
        }else{
          echo"<script>alert('OOPs Something went wrong!!');</script>";
       echo"<script>history.back(); </script>";   
        }
    }
 
    
    
}

?>