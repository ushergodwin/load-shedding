<?php
include("config.php");
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;


$sql ="TRUNCATE table schedule";

$action = mysqli_query($conn, $sql);
if ($action) {
	echo "All schedules Deleted Successfully";
} else{
	echo "Something Went Wrong";

}

mysqli_close($conn);


?>