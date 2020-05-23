<?php include("config.php"); include("location.php"); include("messages.php"); ?>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="keywords" content="load shedding, power cut off , Uganda, BIST2019/2019, cocis news, BIST cocis">
    <meta name="author" content="Tumuhimbise Usher Godwin">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<title>Home - ugsheds</title>
   <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" type="text/css" href="shedding.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    <style type="text/css"> .closebtn{margin-left: 15px; color: white; font-weight: bold; font-size: 22; line-height: 20px; cursor: hand; transition: 0.3s;} .closebtn:hover{color: yellow;} .alert{padding: 20px; background-color: #f44336; color: white; margin-bottom: 15px;} #alert{ display: none; max-width: 100% } a{ font-size: 15px;} #icon-bar{top: 50px; position: fixed; display: inline-block;margin-left: 20px; }
        
/* The popup form - hidden by default */
.form-popup {display: none;position: fixed;bottom: 0;right: 15px;border: 2px solid blue;z-index: 9; border-radius: 5px; border-style: outset}
/* Add styles to the form container */
.form-container { max-width: 500px; padding: 10px; background-color: white;}
/* Full-width input fields */
.form-container input[type=text]{  width: 100%; padding: 15px; margin: 5px 0 22px 0; border: none;
  background: #f1f1f1;
}
 body {font-family: 'Roboto', sans-serif; font-size: 18px;}  .style{ background-color: aliceblue} p{font-size: 18px;} a{  font-size: 18px;}
/* Extra styles for the cancel button */
.cancelbtn {width: auto;padding: 10px 18px;background-color: #f44336;}/* Center the image and position the close button */
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
  .cancelbtn { width: 100%; }}
    #top{ text-align: center}</style>
		<script src="shedding.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand">LOAD SHEDDING</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="aboutus.php" class="nav-item nav-link">About</a>
            <a href="#" class="nav-item nav-link" onclick="document.getElementById('id01').style.display='block'">Contact Us</a> &nbsp; &nbsp;
             <abbr title="COCIS NEWS"> <a href="https://cocis.news/" style="color:red"> <img src="imgs/cocis.png" style="height: 40px; width: 40px; border-radius: 5px;" alt="COCIS NEWS"></a> </abbr> &nbsp; &nbsp;
            <a href="https://twitter.com/usherTgodwin" class="fa fa-twitter" style=" background: #55ACEE;
  color: white; font-size: 30px; width: 40px; height: 40px; border-radius: 5px;"></a>
            <a href="https://www.linkedin.com/in/tumuhimbise-usher-godwin-8947b3189/" class="fa fa-linkedin-square" style="color:blue; font-size: 30px;" ></a> &nbsp; &nbsp;
<a href="https://wa.link/38riyu" class="fa fa-whatsapp" style="color:green; font-size: 30px;"></a>
        </div> &nbsp;&nbsp;
        <form class="form-inline ml-auto" method="post" action="search-specific.php">
                <input type="text" class="form-control mr-sm-2" placeholder="Search..." name="parish" required><button type="submit" class="btn btn-outline-light" name="submit">Search</button>
        </form>    
    </div>
</nav>
    <div class="card">
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
      The Email used when contacting us is not shared with anyone!
    </div>

<div id="id01" class="modal">
  <form class="modal-content animate" action="index.php" name="form1" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
  <a href="tel:+256756809525"> <i class="fa fa-phone"></i> &nbsp; +256-756-809-525</a> 
      <p class="text-primary"> <i class="fa fa-envelope"> </i> &nbsp; +256784664867</p> 
    <div class="container">
        <?php include("errors.php");?>
      <label for="email" class="control-lable"><b>Email</b></label>
 <input type="text" class="form-control" name="EmailAddress" placeholder="someone@example.com" required>

      <label for="text" class="control-label"><b>Simple Concern</b></label> <br>
   <textarea cols="40" rows="3" class="form-control" name="message"></textarea>
    </div>
          <div class="container">
    <button type="submit" class="btn btn-primary" name="send">Send</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-outline-danger">Cancel</button>
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
<h2 id="top" class="card-title">Welcome to the Load Shedding System</h2>
<p class="card-text">You will  be able to know <span style="color: blue">when </span> and at <span style="color: blue"> what time</span>  will <span style="color: blue">Power </span> be <span style="color: blue"> OFF</span> in your area  by <span style="color: blue">searching</span> with  the  <span style="color: blue">name of your location </span> </p> 
<p> All you need to do is type your <span style="color: blue">location </span> in the <span style="color: blue">search box </span> bellow and you will be good to go!</p> 
<h4 style="color: blue;"><script type="text/javascript"> var toDay = new Date(); document.write(toDay);</script></h4>
    </div>
 <div class="card-group">
     <div class="card">
     <div class="card-body">
         <div class="card-text-white bg-light">
  <h4 class="card-title text-primary">Search from here</h4>
  <form method="POST"  action="search-specific.php">
      <div class="form-group">
   <input id="input-group" type="text" name="parish" placeholder="Type your location here" title="Search for your location, only Letters allowed" required class="form-control">
      </div>
   <button type="submit" class="btn btn-primary"> <i class="fa fa-search"></i> &nbsp;Search</button>
   </form>
             <p class="text-info">Infor: A power outage (also called a power cut, a power out, a power blackout, power failure or a blackout) is the loss of the electrical power network supply to an end user.</p>
         </div>
     </div>
   </div>
   
   <div class="card">
       <div class="card-body">
           <div class="card-text-white bg-light">
         <h4 class="card-title">NOTE</h4>
        <p class="text-danger">If your location had a power cut offbut did not appear in your search results, please add it to our system byclicking on the bottom right button</p>
           </div>
    </div>
     </div>
     
        <div class="card">
       <div class="card-body">
         <h4 class="card-header">IMPORTANT!</h4>
           <div class="card-text bg-light">
           <h5 class="card-title">WHY KNOW ABOUT POWER OUTAGE SCHEDULES</h5>
        <p class="text-warning">In most cases, we are disturbed when power goes off! perhaps you are replying to an important email, you are making an order for your favorite product, you are writing the breakthrough of your software..and many other instances. When powers goes off without your knowledge, you surely get stack and frastrated</p>
               <p class="card-footer text-muted">Dont get stack</p>
           </div>
            </div>
     </div>
           
            <div class="card">
       <div class="card-body">
           <div class="card-text-white bg-light">
         <h4 class="card-header">NO MORE WORRIES</h4>
            <p class="text-success">With Our load shedding susytem, you can know when power will be off from your area so that you can prepare in advance for power outges! It's just a single search with the name of your location.</p>
        <p class="card-footer text-muted">Enjoy the service</p>
           </div>
    </div>
     </div>
    </div>
    <div class="container">
<div class="form-popup" id="myForm">
  <form action="index.php" class="form-container" method="POST">
    <?php include("errors.php") ?>
    <h2>Add Location</h2>

    <label for="district"><b>District</b></label>
    <input type="text" placeholder="Enter District" name="district" required pattern="\w+" title="Enter Only Letters, without spaces" value="<?php echo $District; ?>" class="form-control">

    <label for="division"><b>Division/ Sub County</b></label>
    <input type="text" placeholder="Enter Division" name="division" required pattern="\w+" title="Enter Only Letters, without spaces" value="<?php echo $Division; ?>" class="form-control">

    <label for="parish"><b>Parish/ Town</b></label>
    <input type="text" placeholder="Enter parish ot town" name="parish" required pattern="\w+" title="Enter Only Letters, without spaces" value="<?php echo $Parish; ?>" class="form-control">


    <button type="submit" class="btn btn-primary btn-sm" name="reg_loc" onclick="return conf()">Submit</button>
    <button type="button" class="btn btn-danger btn-sm" onclick="closeForm()">Close</button>
  </form>
</div>
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

 <hr> 
<div class="container">
    <footer>
    <div class="row">
        <div class="col-md-6">
  <p class="text-muted"> Copyright &copy BIST Group C LoadShedding 2020</p>
        </div>
        <div class="col-md-6">
<a href="terms.php">Terms & Conditions</a> &nbsp;| &nbsp;<a href="#" onclick="openAlert()"> Privacy Policy</a> &nbsp;| &nbsp;<a href="aboutus.php">About us</a> <a href="#" class="btn btn-outline-info" onclick="openForm()">Add Location</a>
        </div>
  </div>
    </footer>
    </div>
</body>
</html>
