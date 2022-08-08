<?php include('addSchedule.php');

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
     <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <a href="#" class="navbar-brand">LOAD SHEDDING</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="welcome.php" class="nav-item nav-link">Home</a>
            <a href="./registerschedule.php" class="nav-item nav-link active">Add Schedules</a>
            <a href="./index.php" class="nav-item nav-link">View Schedules</a>
             <?php if($_SESSION['acc_type'] === 2): ?>
                <a href="./register.php" class="nav-item nav-link">Add Staff</a>
                <a href="./staff.php" class="nav-item nav-link">Staff List</a>
            <?php endif ?>
        </div>
    </div>
    <div class="navbar-nav ml-auto">
      <a href="welcome.php?logout='1'" class="nav-item nav-link text-danger">Logout</a>
    </div>
</nav>
<a name="Top"></a>
<div class="container mt-5">
    <form action="registerschedule.php" method="POST"  name="schForm">
          <div class="row">
            <div class="col-12"><?php include("errors.php");?></div>
          </div>
        	<div class="row">
            <div class="col-md-6 dark bg-light">
                <h4 class="text-primary">Enter where Power Cut Off Will Happen</h4>
                <div class="form-group">
                  <label for="district" class="control-lable">District</label>
                  <input type="text" name="district" class="form-control" required><span id="dist"></span>
                </div>
                <div class="form-group">
                  <label for="work_description" class="w-100">
                    Work Description
                      <textarea name="work_description" class="form-control"></textarea>
                  </label>
                </div>
                <div class="form-group">
                  <label for="areas" class="w-100">
                    Affected Areas 
                    <textarea name="areas" class="form-control"></textarea>
                  </label>
                </div>
            </div>
  
            <div class="col-md-6 dark bg-light">
                <h4 class="text-primary">Enter When Power Cut Off Will Happen</h4>
                <label for="date" class="control-lable"> Date</label>
                  <input id="dt" type="date" name="date" class="form-control" required><span id="day"></span> <br>
                <label for="time" class="control-lable"> Time</label>
                <input type="text" name="time" class="form-control"> <span id="per"></span><br>
                <input class="btn btn-primary w-100" type="submit" name="submit" value="Add Schedult" onclick="return isValid()"> 
            </div>
          </div>
    </form>
</div>
 <div class="container mt-3">
        <footer>
            <div class="row">
                <div class="col-md-6">
                    <em class="text-muted"> Copyright &copy <?= date('Y') ?> BIST LoadShedding</em>
                </div>
            </div>
        </footer>
    </div>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
