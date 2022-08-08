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
    <title>View Schedules- LoadShedding</title>
    
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
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">LOAD SHEDDING</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="welcome.php" class="nav-item nav-link">Home</a>
            <a href="./registerschedule.php" class="nav-item nav-link">Add Schedules</a>
            <a href="./index.php" class="nav-item nav-link active">View Schedules</a>
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
            <?php include 'schedule_datatable.php' ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

