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
    <script type="text/javascript" src="js/shedding.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
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
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">LOAD SHEDDING</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="welcome.php" class="nav-item nav-link active">Home</a>
            <a href="./registerschedule.php" class="nav-item nav-link">Add Schedules</a>
            <a href="./view-schedules.php" class="nav-item nav-link">View Schedules</a>
            
            <?php if($_SESSION['acc_type'] === 2): ?>
                <a href="./register.php" class="nav-item nav-link">Add Staff</a>
                <a href="./staff.php" class="nav-item nav-link">Staff List</a>
            <?php endif ?>
        </div> &nbsp;&nbsp; 
        <div class="navbar-nav ml-auto">
        <a href="welcome.php?logout='1'"  class="nav-item nav-link text-danger" onclick="return confirm('SignOut of your Account?')">Logout</a>
        </div>
    </div>
</nav>
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
            <script type="text/javascript"> 
                var months =["JAN", "FEB", "MATCH", "APRIL", "MAY", "JUNE", "JULY", "AUG", "SEPT", "OCT", "NOV", "DEC"];   
                var days =["SUN", "MON", "TUE", "WED", "THUR", "FRI", "SAT"];
                var toDay = new Date();
                var day = toDay.getDay();
                var mon = toDay.getMonth();
                var now = toDay.getDate();
                var year = toDay.getFullYear()
                var p = days[day];
                var q = months[mon];
                setInterval(refresh, 1000);
                function refresh(){
                    var toDay = new Date();
                    var hour = toDay.getHours();
                    var min = toDay.getMinutes(); 
                    var sec = toDay.getSeconds()
                    document.getElementById('date').innerHTML = p+'\n'+'\n'+now+'<sup> th</sup>\n'+q+'\n'+year + ', ' + hour+':'+min+':'+sec;
                }
         </script>
     <div class="col-md-5"> DATE:
          <span class="text-muted" id="date">
         </span>
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
        <div class="col-md-4">
            <span> As a Stuff Member You will  be <span style="color: blue"> able to add load shedding schedules  detailed with at what time</span>  will <span style="color: blue">power be OFF</span> in which area and <span style="color: blue">when(day)</span> will the power be off.</span>
            <span> All you need to do is to click on the <span style="color: blue">Menu bars icon</span> on the top navigation bar and select add schedule link to go to the page from where you can add load shedding schedules</span>
            <span>You can as well <span style="color: blue"> search </span> by typing the name of the location  to see whether the <span style="color: blue">updates have been made.</span> </span>

        </div>
        <div class="col-md-8">
            <?php include("get_schedules.php");?>
            <div class="table-responsive mt-3">
                <table class="table table-muted table-striped rounded" style="width:100%" id="schedules">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>District</th>
                            <th>Affected Areas</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 0; foreach($schedules as $schedule): ?>
                            <?php $no++; ?>
                            <tr>
                                <td><?= $schedule->schedule_date . ", " . $schedule->schedule_time ?></td>
                                <td><?= $schedule->district ?></td>
                                <td><?= $schedule->affected_areas ?></td>
                            </tr>
                            <?php if($no >= 5){break;} ?>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Date</th>
                            <th>District</th>
                            <th>Affected Areas</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </div>
    <hr/>
    <div class="container mt-3">
        <footer>
            <div class="row">
                <div class="col-md-6">
                    <em class="text-muted"> Copyright &copy <?= date('Y') ?> BIST LoadShedding</em>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script> 
        $(document).ready(function() {
            $('#schedules').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
</body>
</html>

