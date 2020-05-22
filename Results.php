<?php include("deleteschedule.php");?>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Current Schedules - ugsheds</title>
    <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css"> body{background-color: aliceblue}  tr:nth-child(even){
 	background-color: #f2f2f2;
 }th{color: blue; text-decoration: underline;}
    td{ font-family: sans-serif; font-size: 22px;} </style>
</head>
<body>
<a href='javascript:history.back();'> Go Back </a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<?php include("config.php"); 
$sql ="SELECT District, Division, Parish, schedule, Period, Period_2 from location LEFT JOIN schedule ON location.ID=schedule.ID";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) 
{

echo "<table cellspacing='20'>";
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
} else {
	echo "No Schedules Found! ";
}
mysqli_close($conn);
?>
</div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
            <p class="text-secondary">Please Delete all the schedules before adding new ones</p>
                <p class="info">Make sure that all schedules have expired, then delete and add news.</p>
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
</body>
</html>

