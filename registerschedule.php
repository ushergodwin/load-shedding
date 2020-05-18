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
<script src="shedding.js"> </script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.dropbtn {background-color: blue; color: white;padding: 16px;font-size: 12px; border: none;cursor: pointer; border-radius: 5px;
}/* The container <div> - needed to position the dropdown content */
.dropdown {position: relative;display: inline-block;}
/* Dropdown Content (Hidden by Default) */
.dropdown-content { display: none; position: absolute; background-color: #f9f9f9;min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;}
/* Links inside the dropdown */
.dropdown-content a { color: blue; padding: 12px 16px; text-decoration: none;display: block;}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content { display: block;}
/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
body{ background-color: aliceblue;}
 </style>
<script>
var locationObject = {
"Kampala": { "Nakawa Division": ["Banda" ,"Bogolobi" ,"Bukoto I" ,"Bukoto Ii" ,"Butabika" ,"I.t.e.k" ,"Kiswa" ,"Kiwatule" ,"Kyambogo" ,"Kyanja" ,"Luzira" ,"Luzira Prisons" ,"Mbuya I" ,"Mbuya Ii" ,"Mutungo", "Nabisunsa", "Naguru I", "Naguru Ii", "Nakawa", "Nakawa Institutions", "Ntinda", "UPK", "Upper Estate"],
"Kawempe Division": ["Bwaise I", "Bwaise II", "Bwaise III", "Kanyanya", "Kawempe I", "Kawempe II", "Kazo Ward", "Kikaya", "Komamboga", "Kyebando", "Makerere I", "Makerere Ii", "Makerere Iii", "Mpererwe", "Mulago I", "Mulago Ii", "Mulago Iii", "Makerere", "Wandegeya"
],

"Makindye Division": ["Bukasa", "Buziga", "Ggaba", "Kabalagala", "Kansanga-muyenga", "Katwe I", "Katwe II", "Kibuli", "Kibuye I", "Kibuye II", "Kisugu", "Lukuli", "Luwafu", "Makindye I", "Makindye II", "Nsambya Central", "Nsambya Housing Estate", "Nsambya Police Barracks", "Nsambya Railway", "Salaama", "Wabigalo"
],

"Rubaga Division": ["Busega", "Kabowa", "Kasubi", "Lubia", "Lungujja", "Mutundwe", "Najjanankumbi I", "Najjanankumbi II", "Nakulabye", "Namirembe", "Nateete", "Ndeeba", "Rubaga"


],
},
"Wakio District": {
 "Central Division": ["Bukesa", "Central East Ward", "Central West Ward", "Civic Centre", "Industrial Area"
, "Kagugube"
, "Kamwokya I", "Kamwokya II", "Kisenyi I", "Kisenyi II","Kisenyi III", "Kololo I", "Kololo II", "Kololo III", "Kololo IV", "Magwa Ward", "Mengo", "Nakasero I", "Nakasero II", "Nakasero III", "Nakasero IV", "Nakivubo Shauliyako", "Old Boma Ward", "Old Kampala", "Kamwokya"],

"Kira": ["Bweyogerere", "Kimwanyi", "Kira", "Kireka", "Kirinya"],

}, 
}
window.onload = function () {
var districtSel = document.getElementById("countySel"),
divisionSel = document.getElementById("stateSel"),
parishSel = document.getElementById("districtSel");
for (var district in locationObject) {
districtSel.options[districtSel.options.length] = new Option(district, district);
}
countySel.onchange = function () {
divisionSel.length = 1; // remove all options bar first
parishSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var division in locationObject[this.value]) {
divisionSel.options[divisionSel.options.length] = new Option(division, division);
}
}
districtSel.onchange(); // reset in case page is reloaded
divisionSel.onchange = function () {
parishSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
var parish = locationObject[districtSel.value][this.value];
for (var i = 0; i < parish.length; i++) {
parishSel.options[parishSel.options.length] = new Option(parish[i], parish[i]);
}
}
}
</script>
</head>
<body>
  <div class="dropdown" align="left">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="welcome.php">Home</a>
 <a href="welcome.php?logout='1'"  class="btn btn-danger" onclick="return confirm('SignOut of your Account?')">Logout</a>
  </div>
</div>
<a name="Top"></a>
<div class="container">
	<div class="jumbotron dark bg-secondary">
 <h1 style="color: white;">Fill the Forms bellow appropriately to add Load Sheddings</h1>
	</div>
	<div class="row">
		<div class="col-md-4 dark bg-light">
        <h4 class="text-primary">Choose the Location</h4>
       <form name="myform" id="myForm" action="registerschedule.php" method="POST">
        <?php include("errors.php"); ?>
    <label for="id" class="control-label">Enter ID</label>
   <input type="text" name="identification" maxlength="5" class="form-control" required> <br>
  <label for="district">Select District: </label><select name="state" id="countySel" size="1" class="custom-select">
    <option value="" selected="selected">Select District</option>
    </select>
    <label for="division">Select Division: </label><select name="countrya" id="stateSel" size="1" class="custom-select">
    <option value="" selected="selected">Please Division first</option>
    </select> 
    <label for="parish" class="control-label">Select Parish: </label> <select name="district" id="districtSel" size="1" class="custom-select">
    <option value="" selected="selected">Please select Division first</option>
    </select> <br> <br>
    <input type="submit" id="log" name="reg_loc">
  </form>
      </div>
  
    
	    <div class="col-md-4 dark bg-light">
        <h4 class="text-primary">Location not among the options? Enter manually!!</h4>
        <h2 class="error"></h2>
        <form action="registerschedule.php" method="POST"  name="schForm">
             <label for="id" class="control-lable">Enter ID</label>
   <input type="text" name="identification" minlength="2" maxlength="5" class="form-control" required>
    
    <label for="district" class="control-lable">District</label>
       <input type="text" name="state" class="form-control" required> <br>

      <label for="division" class="control-lable">Division</label>
          <input type="text" name="countrya" class="form-control" required><br>
      <label for="parish" class="control-lable">Pasish</label>
         <input type="text" name=" district" class="form-control" required> <br>
         <input id="log" type="submit" id="log" name="reg_loc" onclick="validateForm();" >
     </form>
      </div>
    
       <div class="col-md-4 dark bg-light">
        <h4 class="text-primary">Enter When Power Cut Off Will Happen</h4>
  <form method="POST" action="registerschedule.php" name="form_3">
    <label for="date" class="control-lable"> Date</label>
        <input id="dt" type="date" name="day" class="form-control" required><br>
     <label for="time" class="control-lable"> Time</label>
       <label for="from" class="control-lable">From</label>
        <input id="asp" type="time" name="period" class="form-control" required><br>
       <label for="to" class="control-lable">To</label><br>
        <input id="asp" type="time" name="periodto" class="form-control" required><br>
       <label for="id" class="control-lable">Enter ID</label> <br>
      <input type="text" name="identification" minlength="5" maxlength="5" class="form-control" required> <br> <br>
      <input id="log" type="submit" name="submit" value="Add" onclick="isValid()"> 
    </form> 
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
</body>
</html>
