<?php include("config.php"); ?>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Current Schedules - ugsheds</title>
    <link rel="stylesheet" type="text/css" href="results.css">
    <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
    <style type="text/css"> body{background-image: url("imgs/20200426_115448_edited.jpg");} th{color: blue; text-decoration: underline;}
    td{ font-family: sans-serif; font-size: 22px;} </style>
</head>
<body>
<a href='javascript:history.back();'> Go Back </a>
<?php 
$sql ="SELECT District, Division, Parish, schedule, Period, Period_2 from location LEFT JOIN schedule ON location.ID=schedule.ID";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) 
{

echo "<table cellspacing='20'>";
echo "<tr> ";
echo"<th>District</th>";
echo"<th>Division</th>";
echo"<th>Parish</th>";
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
	echo "O results ";
}
mysqli_close($conn);
?>



 <br> <hr> <br>
<div class="footer" align="center">
    <table>
      <caption> <h5 style="color: blue;">&copy BIST Group C LoadShedding 2020</h5></caption>
      <tr style="color: blue;">
    
    <td ><li>Terms & Conditions</li></td>  <td><li>Privacy Policy</li></td><td ><li><a href="aboutus.php">Abou Us</a></li></td>
    <tr>
      <br> <br>
  </table>

   <br> <br>
  <table>
    <tr style="color: blue;">
        <td><h2>Load</h2></td> <td><img src="imgs/logo.jpg" width="70" height="50" style="border-radius: 20%"></td> <td><h2>Shedding</h2></td>
      </tr>
  </table>
  </div>
</body>
</html>

