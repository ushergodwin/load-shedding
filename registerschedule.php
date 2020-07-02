<?php include("config.php"); include('addSchedule.php');

  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register Schedules - ugsheds</title>
 <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
<link rel="stylesheet" type="text/css" href="register.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/shedding.js"></script>
<style type="text/css">
.dropbtn {color: white;padding: 16px;font-size: 12pt;cursor: pointer;
}/* The container <div> - needed to position the dropdown content */
.dropdown {position: relative;display: inline-block;}
/* Dropdown Content (Hidden by Default) */
.dropdown-content { display: none; position: absolute; background-color: #f9f9f9;min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1; border-radius: 3px;}
/* Links inside the dropdown */
.dropdown-content a { color: blue; padding: 12px 16px; text-decoration: none;display: block;}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content { display: block;}
/* Change the background color of the dropdown button when the dropdown content is shown */
    body{ background-color: aliceblue;} span{color: crimson; font-family: monospace} .nav-link{font-size: 15pt;}
 </style>

</head>
<body>
     <nav class="navbar navbar-expand-md navbar-dark bg-secondary sticky-top">
    <a href="#" class="navbar-brand">LOAD SHEDDING</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="welcome.php" class="nav-item nav-link active">Home</a>
            <a href="aboutus.php" class="nav-item nav-link">About</a>
               <div class="dropdown">
  <a class="dropbtn"><i class="fa fa-bars"></i> </a>
  <div class="dropdown-content">
    <a href="Results.php">View Schedules</a>  
  </div>
</div>
                         <div class="nav-item dropdown">
  <a class="dropbtn"><i class="fa fa-user"></i> </a>
  <div class="dropdown-content">
     <a href="welcome.php?logout='1'"  class="text-danger" onclick="return confirm('SignOut of your Account?')"> Logout</a>
  </div>
</div>
</div>
 <form class="form-inline ml-auto" method="post" action="search-specific.php">
                <input type="search" class="form-control mr-sm-2" placeholder="Search..." name="parish" required><button type="submit" class="btn btn-outline-light" name="submit">Search</button>
        </form> 
    </div>
</nav><br>
<a name="Top"></a>
<div class="container">
           	<div class="jumbotron-md dark bg-secondary">
 <h2 style="color: white;">Fill the Forms bellow appropriately to add Load Sheddings</h2>
	</div>
	<div class="row">
		<div class="col-md-6 dark bg-light">
    <h4 class="text-primary">Location not among the options? Enter manually!!</h4>
            <?php include("errors.php");?>
        <form action="registerschedule.php" method="POST"  name="schForm">
             <label for="id" class="control-lable">Enter ID</label>
   <input type="text" name="identification" minlength="2" maxlength="5" class="form-control" required>
    <span id="id"></span><br>
    <label for="district" class="control-lable">District</label>
       <input type="text" name="state" class="form-control" required><span id="dist"></span> <br>
      <label for="division" class="control-lable">Division</label>
          <input type="text" name="countrya" class="form-control" required><span id="div"></span><br>
      <label for="parish" class="control-lable">Pasish</label>
         <input type="text" name="district" class="form-control" required> <span id="parish"></span><br>
         <input id="log" type="submit" id="log" name="reg_loc" onclick="return validateForm();">
     </form>
  </div>
  
    <div class="col-md-6 dark bg-light">
        <h4 class="text-primary">Enter When Power Cut Off Will Happen</h4>
  <form method="POST" action="registerschedule.php" name="form_3">
    <label for="date" class="control-lable"> Date</label>
        <input id="dt" type="date" name="day" class="form-control" required><span id="day"></span> <br>
     <label for="time" class="control-lable"> Time</label>
       <label for="from" class="control-lable">From</label>
        <input id="asp" type="time" name="period" class="form-control" required> <span id="per"></span><br>
       <label for="to" class="control-lable">To</label><br>
        <input id="asp" type="time" name="periodto" class="form-control" required><span id="end"></span><br>
       <label for="id" class="control-lable">Enter ID</label> <br>
      <input type="text" name="identification" minlength="5" maxlength="5" class="form-control" required> <br><span id="ident"></span> <br>
      <input id="log" type="submit" name="submit" value="Add" onclick="return isValid()"> 
    </form> 
      </div>
    </div>
     <div class="row">
           <div class="col-md-12">
      <h3 class="text-primary">Messages</h3>
           <?php
           include("config.php");
            $sql = "SELECT id, email, message, sent_at from messages";
             
           $result = mysqli_query($conn, $sql);
           
           if(mysqli_num_rows($result) > 0){
               echo"<table class='table table-dark'>";
               echo"<tr> <th>ID</th> <th>Sent From</th>";
               echo"<th>Message</th> <th>Sent On</th>";
               echo"</tr>";
               
               while($row = mysqli_fetch_assoc($result)){
                   echo"<tr>";
                   echo"<td>".$row['id']."</td>";
                   echo"<td>".$row['email']."</td>";
                   echo"<td>".$row['message']."</td>";
                   echo"<td>".$row['sent_at']."</td>";
                   echo"</tr>";
               }
              echo"</table>"; 
           } else{
                   echo"No New Messages";
               }
            mysqli_close($conn);
           ?>
  </div>
    </div>
<hr>
<footer>
    <div class="row dark bg-light">
        <div class="col-md-6">
<h5 class="text-primary text-muted">&copy BIST Group C LoadShedding 2020</h5>
        </div>
            <div class="col-md-6">
<a href="terms.php">Terms & Conditions</a> &nbsp; &nbsp; <a href="aboutus.php">Abou Us</a> &nbsp;| &nbsp;<a href="#Top">Back To Top</a>
        </div>
    </div>
    </footer>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
