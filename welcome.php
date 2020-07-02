<?php 
  session_start(); require_once("reset.php"); include("profile.php");

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Welcome- ugsheds</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="css/shedding.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script type="text/javascript" src="js/shedding.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style type="text/css"> body{ font-family: 'Roboto', sans-serif;}p{font-size: 18pt;} #edit,#save,#pclose{border-radius: 500px} #profile_2,#profile_3,#profile_4{border-left: none; border-right: none; border-top: none;} #profile_2,#profile_3,#profile_4:focus{
        outline: none;
        }#profile{display: none;}
    </style>
    <script>$(document).ready(function(){$("[data-toggle='tooltip']").tooltip();}); $(function(){
    $("#id01").hide();
});

$(function(){$("#password").click(function(){
    $("#id01").show();
})}); 
    $(function(){
        $("#save").hide();
        $("#pclose").hide();
        $("#edit").click(function(){
            $("#profile_2").removeAttr("readonly");
            $("#profile_3").removeAttr("readonly");
            $("#profile_4").removeAttr("readonly");
            $("#save").show();
        });
        $("#save").click(function(){
            $("#pclose").show();
        })
    });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <a href="#" class="navbar-brand">LOAD SHEDDING</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="welcome.php" class="nav-item nav-link active">Home</a>
            <a href="aboutus.php" class="nav-item nav-link">About</a>
               <div class="dropdown">
  <a class="dropbtn"><i class="fa fa-bars"></i> </a>
  <div class="dropdown-content">
    <a href="registerschedule.php"> Add Schedule </a>
    <a href="Results.php">View Schedules</a>
    <a href="#" class="text-info" onclick="openForm()">Login As Admin</a>  
  </div>
</div>
                         <div class="dropdown">
  <a class="dropbtn"><i class="fa fa-user"></i> </a>
  <div class="dropdown-content">
            <a href="#profile" onclick="openProfile();">Profile</a>
    <a data-toggle="tooltip" title="set password recovery questions" href="#" id="password">Password Recovery</a>
      <a href="#">Reset Password</a>
  </div>
</div>
        </div> &nbsp;&nbsp; 
        <form class="form-inline ml-auto" method="post" action="search-specific.php">
                <input type="search" class="form-control mr-sm-2" placeholder="Search..." name="parish" required><button type="submit" class="btn btn-outline-light" name="submit">Search</button>
        </form> 
        <div class="navbar nav">
        <a href="welcome.php?logout='1'"  class="text-danger" onclick="return confirm('SignOut of your Account?')"><button type="button" class="btn btn-outline-danger">Logout</button></a>
        </div>
    </div>
</nav>
<div class="alert bg-info" id="alert">
            <script>  function openAlert() {
    document.getElementById("alert").style.display = "inline-block";
}function openProfile() {
    document.getElementById("profile").style.display = "inline-block";
}</script>
        <a name="privacy"></a>
 <em>Your personal details are not shared with anyone!</em> &nbsp; &nbsp;
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
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
          <div class="container-fluid">
 <div class="row">
     <div class="col-md-3">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h2 class="text-success">Welcome</h2> 
     </div>
     <div class="col-md-5"> DATE &nbsp;
                   <span class="text-muted"><script type="text/javascript"> 
                       var months =["JAN", "FEB", "MATCH", "APRIL", "MAY", "JUNE", "JULY", "AUG", "SEPT", "OCT", "NOV", "DEC"];   
                       var days =["SUN", "MON", "TUE", "WED", "THUR", "FRI", "SAT"];
                var toDay = new Date();
                       var day = toDay.getDay();
                       var mon = toDay.getMonth();
                       var now = toDay.getDate();
                       var year = toDay.getFullYear()
                 var p = days[day];
                       var q = months[mon];
                     document.write(p+'\n'+'\n'+now+'\n'+q+'\n'+year);</script> </span> TIME <span> <script>
             var hour = toDay.getHours();
          var min = toDay.getMinutes(); 
         var s = setInterval(refresh, 1000);
            function refresh(){
                
            }
         document.write(hour+':'+min);
         </script></span>
     </div>
     <div class="col-md-4">
               	<h5 class="text-success">Loggedin as: <strong><?php echo $_SESSION['username']; ?></strong></h5> 
     </div>
    <?php endif ?>
          </div>
          </div>
    </div>
        </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-8">
<p> As a Stuff Member You will  be <span style="color: blue"> able to add load shedding schedules  detailed with at what time</span>  will <span style="color: blue">power be OFF</span> in which area and <span style="color: blue">when(day)</span> will the power be off.</p>
<p> All you need to do is to click on the <span style="color: blue">Menu bars icon</span> on the top navigation bar and select add schedule link to go to the page from where you can add load shedding schedules</p>
<p>You can as well <span style="color: blue"> search </span> by typing the name of the location  to see whether the <span style="color: blue">updates have been made.</span> </p>
</div>
<div class="col-md-4">
 <div class="form-group">
    <h4 class="text-primary">Search from here</h4>
     <span id="search"></span>
  <form class="look form-inline" method="POST" name="searchForm"  action="search-specific.php">
   <input type="search" name="parish" placeholder="type your location here" title="Search for your location to know when power will be off" class="form-control" data-toggle="tooltip" required> &nbsp;
      <input type="submit" class="btn btn-outline-primary btn-md" name="submit" value="Search" onclick="return search();">
   </form>
   </div>
        </div>
    </div>
    </div>
   <div class="admin">
<div class="form-popup" id="myForm">
  <div class="form-container" onsubmit=" return admin()">
    <h1>Login</h1>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" style="max-width: 100%" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" style="max-width: 100%" required>

    <button type="submit" class="btn" onclick="return admin()">Login</button>
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
    function search(){
        var se = document.searchForm.parish;
        var reg = /^[a-zA-Z]+$/;
        if(!se.value.match(reg)){
            var err = document.getElementById("search").innerHTML = "Enter a location";
            se.focus();
            return false;
        }else{
            return true;
        }
    }
</script> 
            <div class="card mb-4" id="id01">
    <div class="card-header"><i class="fa fa-key"></i> Password Recovery Questions</div>
    <div class="card-body">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery Question</h3></div>
    <div class="card-body">
    <div class="small mb-3 text-muted">set question to render you recover or reset your password in case you forget it.</div>
    <form action="welcome.php" method="post">
        <?php include("resertstatus.php"); ?>
        <div class="form-group">
        <label class="control-label">Choose your first Question</label>
        <select class="custom-select" name="question" value="<?php echo $question; ?>"><option>Where were you born?</option> <option>What was your first phone number?</option> <option>Where did you attend your kindargaten from?</option><option>What is your favorite TV show?</option><option>What is your favorite Quote?</option></select>
      <input class="form-control py-4" type="text"  value="<?php echo $ans_1; ?>"placeholder="Your Answer" name="ans_1"/></div>
       <div class="form-group">
        <label class="control-label">Choose your second Question</label>
        <select class="custom-select" name="qn_2" value="<?php echo $qn_2; ?>"><option>Where were you born?</option> <option>What was your first phone number?</option> <option>Where did you attend your kindargaten from?</option><option>What is your favorite TV show?</option><option>What is your favorite Quote?</option></select>
  <input class="form-control py-4" id="inputEmailAddress" type="text" value="<?php echo $ans_2; ?>" placeholder="Your Answer" name="ans_2" /></div>
        <div class="form-group">
        <label class="control-label">Set Your own question</label>
        <input type="text" name="qn_3" placeholder="enter your question (optional)" class="form-control" value="<?php echo $qn_3; ?>">
            <input type="text" name="ans_3" placeholder="your answer" class="form-control" value="<?php echo $ans_3; ?>">
        </div>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small">Click save</a><button type="submit" class="btn btn-primary" name="submit">SAVE</button></div>
    </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container" id="profile">
<a name="profile"></a>
        <div class="row">
        <div class="col-md-8"><h4 class="border-bottom">Your Profile</h4></div>
            <div class="col-md-4">
            <button class="btn btn-primary btn-sm" id="edit"> <em>edit profile</em></button>
            </div>
        </div>
    <form class="needs-validation" action="welcome.php" method="post">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="firstName">User Name:</label>
            <div class="col-sm-9">
                <input type="text" value="<?php echo $user;?>" name="pusername" class="form-control" data-toggle="tooltip" title="username can not be changed" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="lastName">Name:</label>
            <div class="col-sm-9">
                <input type="text" id="profile_2" value="<?php echo $staffName;?>" name="pname" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="inputEmail">Pysical Address:</label>
            <div class="col-sm-9">
                <input type="text" id="profile_3" value="<?php echo $staffAddress;?>" name="paddress" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="phoneNumber">Mobile Number:</label>
            <div class="col-sm-9">
                <input type="number" id="profile_4" value="<?php echo $staffContact;?>" name="pcontact" readonly>
            </div>
        </div>
          <div class="row">
        <div class="col-md-8"><button class="btn btn-primary btn-sm" id="pclose">Close Profile</button></div>
            <div class="col-md-4">
            <button class="btn btn-primary btn-sm" id="save" type="submit" name="save"> <em>save changes</em></button>
            </div>
        </div>
    </form>
    </div>
<hr> 
<div class="container">
    <footer>
    <div class="row">
        <div class="col-md-6">
  <em class="text-muted"> Copyright &copy BIST Group C LoadShedding 2020</em>
        </div>
        <div class="col-md-6">
<a href="terms.php">Terms & Conditions</a> &nbsp;| &nbsp;<a href="#" onclick="openAlert()"> Privacy Policy</a> &nbsp;| &nbsp;<a href="aboutus.php">About us</a>
        </div>
  </div>
    </footer>
    </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

