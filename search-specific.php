<?php include("config.php"); ?>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="keywords" content="load shedding, power cut off , Uganda, BIST2019/2019, cocis news, BIST cocis">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Results - ugsheds</title>
  <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
    <link rel="stylesheet" type="text/css" href="register.css">
<script src="shedding.js"> </script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css"> body{background-color: aliceblue;}  tr:nth-child(even){
 	background-color: #f2f2f2;
 } th{color: blue; text-decoration: underline;}
 td{ font-family: sans-serif; font-size: 22px;} </style>
</head>
<body>
  <?php
 if(isset($_POST['submit'])){
    $Parish =$_POST['parish'];
     }
   
if(empty(trim($_POST["parish"]))){
         echo"Please Enter your Location and try again!";
         return false;
    } else{
        $Parish= trim($_POST["parish"]);
    }

 $sql ="SELECT District, Division, Parish, schedule, Period, Period_2 from
 location left join schedule on location.ID = schedule.ID WHERE location.Parish
 LIKE '%".$Parish."%'";


  //-run  the query against the mysql query function

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) 
{
echo"<div class='table-responsive'>";
echo "<table cellspacing='20' cellpadding='10'>";
echo"<caption style = 'font-size: 20px; font-weight: bold; color: blue;'> Load Shedding Schedules</caption>";
echo ("<tr> ");
echo("<th>District</th>");
echo("<th>Division</th>");
echo("<th>Affected Areas</th>");
echo("<th>Date</th>");
echo("<th>Start Time</th>");
echo("<th>End Time</th>");
echo("</tr>");

//output data for each row

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo ("<td>".$row["District"]."</td>");
  echo ("<td>".$row["Division"]."</td>");
  echo ("<td>".$row["Parish"]."</td>");
  echo ("<td>".$row["schedule"]."</td>");
  echo ("<td>".$row["Period"]."</td>");
  echo ("<td>".$row["Period_2"]."</td>");
  echo ("</tr>");
  
    
}

echo("</table>");
    echo"</div>";
} else {
  echo "<script> alert('No Results Match Your Searched Location Please Try Seaching again!!!');</script>";
  echo "<script> history.back(); </script>";
     }
mysqli_close($conn);
?>


 <br> <hr>
    <footer>
<div class="container">
    <div class="row">
        <div class="col-8">
      <p class="text-muted"> Copyright &copy BIST Group C LoadShedding 2020</p>
        </div>
        <div class="col-md-4">
   <a href="terms.php">Terms & Conditions</a> | <a href="aboutus.php">Abou Us</a>
        </div>
        </div>
    </footer>
    </div>
</body>
</html>
