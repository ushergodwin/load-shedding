<?php include("config.php"); include("location.php") ?>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="keywords" content="load shedding, power cut off , Uganda, BIST2019/2019, cocis news, BIST cocis">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<title>Home - ugsheds</title>
   <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" type="text/css" href="shedding.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css"> .closebtn{margin-left: 15px; color: white; font-weight: bold; font-size: 22; line-height: 20px; cursor: pointer; transition: 0.3s;} .closebtn:hover{color: yellow;} .alert{padding: 20px; background-color: #f44336; color: white; margin-bottom: 15px;} #alert{ display: none; max-width: 100% } a{ font-size: 15px;} .icon-bar{top: 50px; -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%); position: fixed; display: inline-block;margin-left: 20px; }
        
        /* Button used to open the contact form - fixed at the bottom of the page */
.open-button { background-color: #555; color: white; padding: 16px 20px; border: none; cursor: pointer; opacity: 0.8; position: fixed;bottom: 23px;right: 28px;width: 280px;}
/* The popup form - hidden by default */
.form-popup {display: none;position: fixed;bottom: 0;right: 15px;border: 3px solid #f1f1f1;z-index: 9;}
/* Add styles to the form container */
.form-container { max-width: 300px; padding: 10px; background-color: white;}
/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {  width: 100%; padding: 15px; margin: 5px 0 22px 0; border: none;
  background: #f1f1f1;
}
/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus { background-color: #ddd; outline: none;}
/* Set a style for the submit/login button */
.form-container .btn { background-color: #4CAF50;color: white; padding: 16px 20px;border: none; cursor: pointer; width: 100%; margin-bottom:10px; opacity: 0.8;}
/* Add a red background color to the cancel button */
        .form-container .cancel { background-color: red;}
/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
    opacity: 1;} body {font-family: 'Roboto', sans-serif; font-size: 18px;}  .style{ background-color: aliceblue} p{font-size: 18px;} a{  font-size: 18px;} td{ width: auto} /* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;}
/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {opacity: 1;}
/* Full-width input fields */
input[type=text], input[type=password] {
width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;
}/* Set a style for all buttons */
button { background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 100%;
}button:hover {opacity: 0.8;}
/* Extra styles for the cancel button */
.cancelbtn {width: auto;padding: 10px 18px;background-color: #f44336;}/* Center the image and position the close button */
.imgcontainer {text-align: center;margin: 24px 0 12px 0;
position: relative;}
img.avatar { width: 40%;border-radius: 50%;}
.container { padding: 16px;}
span.psw {float: right;padding-top: 16px;}
/* The Modal (background) */
.modal {display: none; /* Hidden by default */position: fixed; /* Stay in place */z-index: 1; /* Sit on top */left: 0;top: 0;width: 100%; /* Full width */height: 100%; /* Full height */overflow: auto; /* Enable scroll if needed */background-color: rgb(0,0,0); /* Fallback color */background-color: rgba(0,0,0,0.4); /* Black w/ opacity */padding-top: 60px;}
/* Modal Content/Box */
.modal-content {background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}/* The Close Button (x) */
.close {position: absolute;right: 25px;top: 0;color: #000;font-size: 35px;font-weight: bold;}
        .close:hover,.close:focus {color: red;cursor: pointer;}
/* Add Zoom Animation */
.animate {-webkit-animation: animatezoom 0.6s;animation: animatezoom 0.6s}
@-webkit-keyframes animatezoom {from {-webkit-transform: scale(0)} o {-webkit-transform: scale(1)}} 
@keyframes animatezoom {from {transform: scale(0)} to {transform: scale(1)}}
/* Change styles for span and cancel button on extra small screens */@media screen and (max-width: 300px) {span.text {
display: block;float: none;}
  .cancelbtn { width: 100%; }}  #sub{background-color: #4CAF50;color: white;border: none;cursor: pointer;width: 15%;
} table tr td, table tr th {padding:0.625rem;}
table tfoot, table thead,table tr:nth-of-type(2n) {background:none repeat scroll 0 0 #f0f0f0;}
th,table tr:nth-of-type(2n) td {border-right:1px solid #fff;}
td {border-right:1px solid #f0f0f0;}
.footer{  background-color: grey; width: auto; max-width: 100%; padding: 0 15px;} #top{ text-align: center} .header{text-align: center}</style>
		<script src="shedding.js"></script>
</head>
<body>
<nav>
  <br>
  <div class="icon-bar"> 
      <abbr title="COCIS NEWS"> <a href="https://cocis.news/" style="color:red"> <img src="imgs/cocis.png" style="height: 40px; width: 40px; border-radius: 5px;" alt="COCIS NEWS"></a> </abbr>  &nbsp  <!-- Add font awesome icons -->
<a href="https://twitter.com/usherTgodwin" class="fa fa-twitter" style=" background: #55ACEE;
  color: white; font-size: 30px; width: 40px; height: 40px; border-radius: 5px;"></a>
<a href="https://www.linkedin.com/in/tumuhimbise-usher-godwin-8947b3189/" class="fa fa-linkedin-square" style="font-size:50px;color:blue; width: 40px; height: 40px;" ></a> &nbsp
<a href="https://api.whatsapp.com/send?phone=+256756809525" class="fa fa-whatsapp" style="font-size:45px;color:green; height: 40px;"></a>
</div>
    
     <div class="alert" id="alert">
            <script>  function openAlert() {
    document.getElementById("alert").style.display = "inline-block";
window.onclick = function(event) {
    if (event.target == closebtn) {
        closebtn.style.display = "none";
    }
}                    
}  </script>
        <a name="privacy"></a>
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      The Email used when contacting us is not shared with anyone! Refresh to close the pop up
    </div>
    
    
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right; ">Contact Us</button>

<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" name="form1" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
  <a href="tel:+256756809525">Call us at +256-756-809-525</a> 
      <p>or send an email</p>
    <div class="container">
      <label for="email"><b>Email</b></label>
 <input type="text" name="EmailAddress" placeholder="someone@example.com" onclick="ValidateEmail(document.form1.EmailAddress)" required>

      <label for="text"><b>Simple Concern</b></label> <br>
   <textarea cols="40" rows="3"></textarea>
        <button type="submit">Send</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<br> <br>
<main class="header">
<h2 id="top">Welcome to the Load Shedding System</h2>
<p>You will  be able to know <span style="color: blue">when </span> and at <span style="color: blue"> what time</span>  will <span style="color: blue">Power </span> be <span style="color: blue"> OFF</span> in your area  by <span style="color: blue">searching</span> with  the  <span style="color: blue">name of your location </span> </p> 
<p> All you need to do is type your <span style="color: blue">location </span> in the <span style="color: blue">search box </span> bellow and you will be good to go!</p> 
<h4 style="color: blue;"><script type="text/javascript"> var toDay = new Date(); document.write(toDay);</script></h4>
    </main>
    </div>
    </nav>
 <div class="style">
  <h3>Search from here</h3>
  <form class="look" method="POST"  action="search-specific.php">
   <input id="input-group" type="text" name="parish" placeholder="Type your location here" title="Search for your location, only Letters allowed" required> &nbsp
   <button type="submit" id="sub"><img src="imgs/search.jpg" id="pic"></button>
   </form>
   </div>
 
<br> <br>
   <div style=" background-color: darkred; border-radius: 8px; padding: 1px; text-align: left; margin-right: 100px;"><p style="color: white; font-size: 18px; font-weight: bold; font-style: inherit; "> If your location had a power cut off <br>but did not appear in your search results, please add it to our system by<br> clicking on the bottom right button</p></div>

 <button class="open-button" onclick="openForm()">Add Location</button>
<div class="form-popup" id="myForm">
  <form action="index.php" class="form-container" method="POST">
    <?php include("errors.php") ?>
    <h2>Add Location</h2>

    <label for="district"><b>District</b></label>
    <input type="text" placeholder="Enter District" name="district" required pattern="\w+" title="Enter Only Letters, without spaces" value="<?php echo $District; ?>">

    <label for="division"><b>Division/ Sub County</b></label>
    <input type="text" placeholder="Enter Division" name="division" required pattern="\w+" title="Enter Only Letters, without spaces" value="<?php echo $Division; ?>">

    <label for="parish"><b>Parish/ Town</b></label>
    <input type="text" placeholder="Enter parish ot town" name="parish" required pattern="\w+" title="Enter Only Letters, without spaces" value="<?php echo $Parish; ?>">


    <button type="submit" class="btn" name="reg_loc" onclick="return conf()">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function conf() {
  var con = confirm("Submit Location?");
  if (con) {
    return true;
  } else{
    return false;
  }
}
</script>

 <br> <hr> <br>
<div class="footer" align="center">
    <table>
        <tr>
            <th colspan="2"> <p style="color: whitesmoke;"> Copyright &copy BIST Group C LoadShedding 2020</p></th> </tr>
      <tr style="color: blue;">
    
    <td ><a href="terms.php">Terms & Conditions</a></td>  <td><a href="#" onclick="openAlert()"> Privacy Policy</a></td> <td ><a href="aboutus.php">About us</a></td>
    <tr>
      <br> <br>
  </table>


  <table>
    
    <tr style="color: blue;">
        
        <td><h4>Load</h4></td> <td><img src="imgs/logo.jpg" width="70" height="50" style="border-radius: 20%"></td> <td><h4>Shedding</h4></td>
      </tr>
  </table>
  </div>

</body>
</html>