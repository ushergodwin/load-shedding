<?php 
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
error_reporting(E_ALL)
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <title>Welcome- ugsheds</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="shedding.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <script type="text/javascript" src="shedding.js"></script>
    <style type="text/css"> body{ font-family: 'Roboto', sans-serif; font-size: 18px;}  /* Style The Dropdown Button */
.dropbtn { background-color: #4CAF50; color: white; padding: 16px; font-size: 16px; border: none; cursor: pointer;}
/* The container <div> - needed to position the dropdown content */
.dropdown { position: relative; display: inline-block;}
/* Dropdown Content (Hidden by Default) */
.dropdown-content { display: none; position: absolute; background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;}
/* Links inside the dropdown */
.dropdown-content a {color: blue;padding: 12px 16px;
  text-decoration: none;display: block;}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}
/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn { background-color: #3e8e41;
 } li{list-style: none} .closebtn{margin-left: 15px; color: white; font-weight: bold; font-size: 22; line-height: 20px; cursor: pointer; transition: 0.3s;} .closebtn:hover{color: red;} .alert{padding: 20px; background-color: #f44336; color: white; margin-bottom: 15px;} #alert{ display: none} a{ font-size: 15px;} @media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {
/* Styles */
}/* Smartphones (landscape) ----------- */
@media only screen
and (min-width : 321px) {
}/* Smartphones (portrait) ----------- */
@media only screen
and (max-width : 320px) {
/* Styles */
}   #sub{
  background-color: #4CAF50; color: white;border: none;
cursor: pointer; width: 15%;}
    </style>
</head>
<body>
    <nav>

    <div class="dropdown" align="right">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="registerschedule.php"> Add Schedule </a>
    <a href="Results.php">View Schedules</a>
  <button type="button" style="background-color: black; border-radius: 50px" onclick="return confirm('SignOut of your Account?')"> <a href="welcome.php?logout='1'" style="color: red;">Logout</a> </button>
  </div>
</div>
         <div class="alert" id="alert">
            <script>  function openAlert() {
    document.getElementById("alert").style.display = "inline-block";
}</script>
        <a name="privacy"></a>
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      The Email used when contacting us is not is not shared with anyone!
    </div>
 <a name="Top"></a>
    <div class="page-header" >
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<p>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</p>
  
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h2 style="color: blue; font-size: 30px">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h2> 
    <?php endif ?>
	<script type="text/javascript"> var toDay = new Date(); document.write(toDay);</script>
    </div>
    <iframe src="contactadmin.php"  width="450" height="180" style="border: none;"></iframe>
<p> As a Stuff Member You will  be <span style="color: blue"> able to add load shedding schedules <br> detailed with at what time</span>  will <span style="color: blue">power be OFF</span> in which area <br> and <span style="color: blue">when(day)</span> will the power be off.</p> </div>
<div><p> All you need to do is to click on the <span style="color: blue"> <br>Menu Button</span> on the top left conner and select add schedule link to go to the page from where you can add load shedding schedules</p>
<p>You can as well <span style="color: blue"> search </span> by typing the name of the location  to see whether the <span style="color: blue">updates have been made.</span> </p>
</div>
</nav>
 <div class="style" id="style">
    <h4 style="color: blue;">Search from here</h4>
  <form class="look" method="POST"  action="search-specific.php">
   <input id="input-group" type="text" name=" parish" placeholder="Type your location here" title="Search for your location to know when power will be off" required="required"> &nbsp
   <button type="submit" id="sub"><img src="imgs/search.jpg" id="pic"></button>
   </form>
   </div>

   <div class="admin">
    <button class="open-button" onclick="openForm()">Login As Admin</button>

<div class="form-popup" id="myForm">
  <div class="form-container" onsubmit=" return admin()">
    <h1>Login</h1>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" style="max-width: 100%" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" style="max-width: 100%" required>

    <button type="submit" class="btn" onclick="admin()">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
 </div>
</div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
    document.getElementById("altert").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";

}

function admin() {
  var usn = document.getElementById("username").value;
  var pss = document.getElementById("psw").value;
    if (usn == "Admin" && pss == "godwin96") {

        location.href = "deletestaff.php";
    }  
         else  if (usn == "Jonathan" && pss == "jonathan2020") {

        location.href = "deletestaff.php";
    } 

        else  if (usn == "Ishak" && pss == "ishak2020") {

        location.href = "deletestaff.php";
    }  else if( usn == "SK" && pss == "sklynn"){
        location.href = "deletestaff.php";
    } else if(usn == "godwine" && pss == "godwine2020" ){
        location.href = "deletestaff.php";
    } else if(usn == "flo" && pss == "flo2020"){
        location.href = "deletestaff.php";
    } else if(usn == "milton" && pss == "kawesa"){
        location.href = "deletestaff.php";
    }
    else {
        alert("Invalid Login Details");
        history.back();
    }
}
 
</script> 


 <br> <hr> <br>
<div class="footer" align="center">
    <table cellspacing='5'>
      <tr><th colspan="4"><p style="color: whitesmoke; font-soze: 15px"> Copyright &copy BIST Group C LoadShedding 2020</p></th></tr>
      <tr style="color: blue;">   
          <td ><li><a href="terms.php">Terms & Conditions</a></li></td>  <td><li><a href="#" onclick="openAlert()" >Privacy Policy</a></li></td>
          <td ><li><a href="aboutus.php">Abou Us</a></li></td>
          <td><li><a href="#Top"> Back To Top </a></li></td>
    <tr>
      <br> <br>
  </table>
  <table>
     <tr style="color: whitesmoke;">
        <td><p>Load</p></td> <td><img src="imgs/logo.jpg" width="70" height="50" style="border-radius: 20%"></td> <td><p>Shedding</p></td>
      </tr>
  </table>
  </div> 
</body>
</html>

