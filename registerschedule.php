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
<style type="text/css">
.dropbtn { background-color: #4CAF50; color: white; padding: 16px;font-size: 16px; border: none; cursor: pointer;
}/* The container <div> - needed to position the dropdown content */
.dropdown {position: relative;display: inline-block;}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;}
/* Links inside the dropdown */
.dropdown-content a { color: blue;padding: 12px 16px;text-decoration: none;display: block;}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}
/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
 #column1 { background-color: #a1edcc; width: 350px; } 
 #column2 { background-color:#a0e9ed; width: 400px; } 
#column3 {  background-color:#f497f1;width: 320px;} 
body{ background-image: url("imgs/20200426_115231_edited.jpg"); background-repeat: round; }
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
    <a href="#" onclick="logOut()">Sign Out</a>
  </div>
</div>
<a name="Top"></a>
<table cellspacing="30">
  <caption><h1 style="color: white;">Fill the Forms bellow appropriately to add Load Sheddings</h1> </caption>
       <th width="10%"> <div id="column1">
        <h2>Choose the Location</h2>
       <form name="myform" id="myForm" action="registerschedule.php" method="POST">
        <?php include("errors.php"); ?>
  <div class="input-group">
    <h4>Enter ID</h4>
   <input type="text" name="identification" maxlength="5" required>
  </div> <br>
  <h4>Select District: </h4>&nbsp &nbsp &nbsp<select name="state" id="countySel" size="1">
    <option value="" selected="selected">Select District</option>
    </select>
    <h4>Select Division: </h4>&nbsp &nbsp<select name="countrya" id="stateSel" size="1">
    <option value="" selected="selected">Please Division first</option>
    </select> 
    <h4>Select Parish: </h4> &nbsp &nbsp &nbsp <select name="district" id="districtSel" size="1">
    <option value="" selected="selected">Please select Division first</option>
    </select> <br> <br>
    <input type="submit" id="log" name="reg_loc">
  </form>
      </div>
    </th>

     <th width="10%"> <div id="column2">
        <h2>Location not among the options? <br> Enter manually!!</h2>
        <h2 class="error"></h2>
        <form action="registerschedule.php" method="POST"  name="schForm">
            <div class="input-group">
             <h4>Enter ID</h4>
   <input type="text" name="identification" minlength="5" maxlength="5" required>
  </div>
          <div class="input-group">
            <h4>District</h4>
       <input type="text" name="state" required> <br>
     </div>
     <div class="input-group">
      <h4>Division</h4>
       <input type="text" name="countrya" required><br>
     </div>
     <div class="input-group">
      <h4>Pasish</h4>
       <input type="text" name=" district" required>
     </div>
       <input id="log" type="submit" id="log" name="reg_loc" onclick="validateForm();" >
     </form>
      </div>
</th>

   <th width="10%"> <div id="column3">
       <br> <br>
        <h2>Enter When Power Cut Off Will Happen</h2>
  <form method="POST" action="registerschedule.php" name="form_3">
    <div class="input-group">
      <h3> Date</h3>
        <input id="dt" type="date" name="day" required><br>
      </div> 
      <div class="input-group">
      <h3> Time</h3>
       <label>From</label>
        <input id="asp" type="time" name="period" required><br>
      </div>
       <div class="input-group">
       <label>To</label><br> <br>
        <input id="asp" type="time" name="periodto" required><br>
      </div>
      <div class="input-group">
       <h3>Enter ID</h3> <input type="text" name="identification" minlength="5" maxlength="5" required>
      </div>
      <input id="log" type="submit" name="submit" value="Add" onclick="isValid()"> 
    </form> 
  </div>
      </div>
</th>
</table>

	 <br> <hr> <br>
<div align = "center">
    <table>
      <caption> <h4 style="color: white;">&copy BIST Group C LoadShedding 2020</h4></caption>
      <tr style="color: blue;">
     <td ><a href="terms.php">Terms & Conditions</a></td>   <td ><li><a href="aboutus.php">Abou Us</a></li></td> <td><li><a href="#Top">Back To Top</a></li></td>
    <tr>
      <br> <br>
  </table>


  <table>
    <tr style="color: white;">
        
    <td><h4>Load</h4></td> <td><img src="imgs/logo.jpg" width="70" height="50" style="border-radius: 20%"></td> <td><h4>Shedding</h4></td>
      </tr>
  </table>
</div>
</body>
</html>
