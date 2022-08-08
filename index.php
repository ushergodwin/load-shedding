<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="description" content="Free Load Shedding schedules in Uganda">
    <meta name="keywords" content="load shedding, power cut off , Uganda, BIST2019/2019, cocis news, BIST cocis">
    <meta name="author" content="Tumuhimbise Usher Godwin">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home - Loadsheding</title>
   <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <a href="#" class="navbar-brand">LOAD SHEDDING</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active">Home</a> 
            </div> 
            <div class="navbar-nav  ml-auto"> 
             <?php if(isset($_SESSION['username'])): ?>
                <a href="logout.php" class="nav-item nav-link text-danger">Logout</a>  
              <?php else: ?>
                <a href="login.php" class="nav-item nav-link active">Login</a>  
              <?php endif ?>
            </div>
        </div>
    </nav>
        <div class="container mt-5">
            <h5 class="text-center">While UMEME works to ensure that we stay powered up, they regularly embark on maintenance practices e.g. maintenance of our equipment, hardware/software upgrades, troubleshootincidents & unplanned issues. More often than not, these practices will lead to power outages. You can now know when and where the power outage will be and plan your day better.</h5>
            
        </div>
        <hr/>
        <div class="container">
             <?php include 'schedule_datatable.php' ?>
        </div>
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