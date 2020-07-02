<?php include("deleteschedule.php");?>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Current Schedules - ugsheds</title>
    <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
    <link rel="stylesheet" href="css/shedding.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <a href="#" class="navbar-brand">LOAD SHEDDING</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="welcome.php" class="nav-item nav-link active">Home</a>
            <a href="aboutus.php" class="nav-item nav-link">About</a>
               <div class="nav-item dropdown">
  <a class="dropbtn"><i class="fa fa-bars"></i> </a>
  <div class="dropdown-content">
    <a href="registerschedule.php"> Add Schedule </a>
  </div>
</div>
             <div class="nav-item dropdown">
  <a class="dropbtn"><i class="fa fa-user"></i> </a>
  <div class="dropdown-content">
     <a href="welcome.php?logout='1'"  class="text-danger" onclick="return confirm('SignOut of your Account?')"> Logout</a>
  </div>
</div>
        </div> &nbsp;&nbsp; 
        <form class="form-inline ml-auto" method="post" action="search-specific.php">
                <input type="search" class="form-control mr-sm-2" placeholder="Search..." name="parish" required><button type="submit" class="btn btn-outline-light" name="submit">Search</button>
        </form> 
    </div>
</nav>
<?php include("config.php"); 
$sql ="SELECT District, Division, Parish, schedule, Period, Period_2 from location LEFT JOIN schedule ON location.ID=schedule.ID";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) 
{
echo"<div class='table-responsive'>";
echo "<table cellspacing='20' cellpadding='10' class='table table-dark'>";
echo "<tr> ";
echo"<th>District</th>";
echo"<th>Division</th>";
echo"<th>Affected Areas</th>";
echo"<th>Date</th>";
echo"<th>Start Time</th>";
echo"<th>End Time</th>";
echo"</tr>";

//output data for each row

while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>".$row["District"]."</td>";
	echo "<td>".$row["Division"]."</td>";
	echo "<td>".$row["Parish"]."</td>";
	echo "<td>".$row["schedule"]."</td>";
	echo "<td>".$row["Period"]."</td>";
  echo "<td>".$row["Period_2"]."</td>";
	echo "</tr>";
	
    
}

echo"</table>";
echo"</div>";
} else {
	echo "No Schedules Found! ";
}
mysqli_close($conn);
?>

        <br> <hr>
                <div class="container">
        <div class="row">
            <div class="col-md-6">
            <p class="text-danger">Please Delete all the schedules before adding new ones</p>
                <p class="text-danger">Make sure that all schedules have expired, then delete and add news.</p>
            </div>
        <div class="col-md-6">
            <label for="location">Delete All Locations</label>
            <form action="Results.php" method="post" onsubmit=" return confirm('Delete All Location? \n Action can not be undone!!');">
             <input type="submit" class="btn btn-danger" name="allloc" value="Delete">
             </form>
            <label for="schedule">Delete All Schedules</label>
            <form action="Results.php" method="post" onsubmit=" return confirm('Delete All Schedules? \n Action can not be undone!!');">
             <input type="submit" class="btn btn-danger" name="allsch" value="Delete">
             </form>
            </div>
        </div>
    </div>
 <hr>
<div class="container">
    <footer>
        <div class="row">
            <div class="col-8">
    <p class="text-muted">Copyright &copy BIST Group C LoadShedding 2020</p>
            </div>
    <div class="col-md-4">
          <a href="terms.php">Terms & Conditions</a> | <a href="aboutus.php">Abou Us</a>
            </div>
        </div>
  </footer>
  </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

