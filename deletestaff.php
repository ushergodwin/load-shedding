<?php include("delete.php");?>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
         <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title> Staff Details - ugsheds</title>
  <style type="text/css"> form,content{ padding: 10px;} #log{ background-color: blue; width: 70px; padding: 10px; color: white; border-radius: 8px;} #log:hover{ cursor: pointer; background-color: red; } .input-group input{border-radius: 5px; height: 40px;} .input-group{margin: 10px 10px 10px 10px;} </style>
   <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
</head>
<body>
     <nav class="navbar"> 
         <a href="welcome.php">HOME</a>
    </nav>
    <div class="container">
    <div class="row">
         <div class="col-md-4">
        <h4 class="text-primary">Staff Details</h4>
<?php include("config.php");
     $sql = "SELECT id, username, staffName, staffContact, staffAddress FROM staff";

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
     </div>
        <div class="col-md-4">
    	<p class="text-warning">Delete Staff</p>
            <?php include("errors.php"); ?>
		<form method="post" name="form1" action="delete.php" onsubmit=" return confirm('Delete Staff? \n Action can not be undone!!');">
			<div class="form-group">
			<label for="id" class="control-label">Enter ID</label> <br>
			<input id="nice" type="text" name="id" placeholder="enter id" class="form-control" required="required"> <br>
		</div>
<input id="log" type="submit" name="submit" value="Delete">
		</form>
        </div>
        
    <div class="col-md-4">
    <p class="text-info">Update Staff's Address </p>
    <form method="post" name="form1" action="update.php" onsubmit=" return confirm('Update Staff Address?');">
      <div class="form-group">
      <label for="address" class="contol-label">Enter New Address</label> <br>
      <input id="nice" type="text" name="address" placeholder="enter password" class="form-control" required> <br>
    </div>
    <div class="form-group">
      <label for="id" class="control-label">Enter ID</label> <br>
      <input id="nice" type="text" name="id" placeholder="enter password" class="form-control" required> <br>
    </div>
      <input id="log" type="submit" name="submit" value="Update">
    </form>
    </div>
    </div>
     <div class="row">
        <div class="col-md-10">
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
         <div class="col-md-2">
             <h5 class="text-warning">Delete Message</h5>
             <?php include("errors.php"); ?>
             <form action="deletestaff.php" method="post" onsubmit=" return confirm('Delete Message? \n Action can not be undone!!');">
             <label for="id" class="control-label">Enter Message ID</label>
                 <input type="number" name="mess" class="form-control"> <br>
                <button type="submit" class="btn btn-danger" name="del">Delete</button> 
             </form>
             <label for="all">Delete All Messages</label>       <form action="deletestaff.php" method="post" onsubmit=" return confirm('Delete All Messages? \n Action can not be undone!!');">
             <input type="submit" class="btn btn-danger" name="all" value="Delete">
             </form>
         </div>
    </div>   
    <hr>
    <footer>
        <div class="row">
          <div class="col-md-8"> 
   <p class="text-muted"> Copyright &copy BIST Group C LoadShedding 2020</p>
            </div>
            <div class="col-md-4">
    <a href="terms.php">Terms & Conditions</a> |
          <a href="aboutus.php">Abou Us</a>
            </div>
      </div>
  </footer>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>