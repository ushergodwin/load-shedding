<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
         <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  <title> Staff Details - ugsheds</title>
  <style type="text/css"> form,content{ border: 10px solid grey; width: 40%; padding: 10px; border-radius: 5px; } #log{ background-color: blue; width: 70px; padding: 10px; color: white; border-radius: 8px;} #log:hover{ cursor: pointer; background-color: red; } .input-group input{border-radius: 5px; height: 40px;} .input-group{margin: 10px 10px 10px 10px;} </style>
   <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
</head>


<?php include("config.php");
     $sql = "SELECT id, username, staffName, staffContact, staffAddress FROM Staff";

          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result)> 0) {
            
               echo "<table border='1'> <tr> <th>ID </th>  <th>Username </th>  <th>Staff Name </th> <th>Staff Contact </th> <th>Adress </th></tr>";

               while ($row = mysqli_fetch_assoc($result)) {

                 echo "<tr>";
                 echo "<td>".$row['id']."</td>";
                  echo "<td>".$row['username']."</td>";
                  echo "<td>".$row['staffName']."</td>";
                  echo "<td>".$row['staffContact']."</td>";
                  echo "<td>".$row['staffAddress']."</td>";
                
                 echo "</tr>";
               }
              echo "</table>";
          } else{
            echo "No records found";
      }
  mysqli_close($conn)
     ?>

<body>
    <nav> <a href="welcome.php">HOME</a></nav>
<div id="short">
		<p style="font-size: 18px; font-weight: bold;">Delete Staff</p>
		<form method="post" name="form1" action="delete.php" onsubmit=" return confirm('Delete Staff? \n Action can not be undone!!');">
			<div class="input-group">
			<label style="font-size: 20px; font-weight: bold;">Enter ID</label> <br> <br>
			<input id="nice" type="text" name="id" placeholder="enter id" required="required"> <br> <br>
  
		</div>
			<input id="log" type="submit" name="submit" value="Delete">
		</form>

  
</div>

<div id="short">
    <p style="font-size: 18px; font-weight: bold;">Update Staff's Address </p>
    <form method="post" name="form1" action="update.php" onsubmit=" return confirm('Update Staff Address?');">
      <div class="input-group">
      <label style="font-size: 20px; font-weight: bold;">Enter New Address</label> <br> <br>
      <input id="nice" type="text" name="address" placeholder="enter password" required> <br> <br>
    </div>
    <div class="input-group">
      <label style="font-size: 20px; font-weight: bold;">Enter ID</label> <br> <br>
      <input id="nice" type="text" name="id" placeholder="enter password" required> <br> <br>
    </div>
  
    </div>
      <input id="log" type="submit" name="submit" value="Update">
    </form>
  
   <br> <hr> <br>
<div class="footer" align="center">
    <table>
      <caption> <h5 style="color: blue;">&copy BIST Group C LoadShedding 2020</h5></caption>
      <tr style="color: blue;">
    
     <td ><a href="terms.php">Terms & Conditions</a></td>   <td ><li><a href="aboutus.php">Abou Us</a></li></td>
    <tr>
      <br> <br>
  </table>


  <table>
    
    <tr style="color: blue;">
        
        <td><h2>Load</h2></td> <td><img src="imgs/logo.jpg" width="70" height="50" style="border-radius: 20%"></td> <td><h2>Shedding</h2></td>
      </tr>
  </table>
  </div>
  
</div>

</body>
</html>