<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Static Navbar with Dropdown and Search Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
                    <div class="dropdown-menu">
                         <a href="registerschedule.php"> Add Schedule </a><br>
    <a href="Results.php">View Schedules</a><br>
    <a href="#" class="text-info" onclick="openForm()">Login As Admin</a>  
   <a href="welcome.php?logout='1'"  class="text-danger" onclick="return confirm('SignOut of your Account?')">Logout</a>
                    </div>
                </div>
            </div>
            <form class="form-inline">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
</div>
</body>
</html>