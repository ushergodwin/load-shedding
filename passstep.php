<?php include("get.php"); ?>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LoadShedding - Reset Password</title>
        <link rel="icon" href="imgs/favicon.ico">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
    <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
    <main>
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery Question</h3></div>
    <div class="card-body">
    <div class="small mb-3 text-muted">Answer the following question to continue to reset your password.</div>
    <form action="passstep.php" method="post">
        <span><?php include("resertstatus.php"); ?></span>
        <div class="row">
            <div class="col-md-6">
    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Question 1</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Your Answer" name="qn_1" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Question 2</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Your Answer" name="qn_2" required /></div> </div> </div>
        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Question 3</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Your Answer" name="qn_3" /></div>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="login.php">Return to login</a><button type="submit" class="btn btn-primary" name="continue">Continue</button></div>
    </form>
    </div>
    <div class="card-footer text-center">
    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
    </div>
    </div>
    </div>
    
    <div class="col-lg-6">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Retreve Your Password Recovery Question</h3></div>
    <div class="card-body">
    <div class="small mb-3 text-muted">Your questions will appear in the section below</div>
    <form class="form-inline" action="passstep.php" method="post">
        <label>username</label> &nbsp;
        <input type="text" name="username" class="form-control"> &nbsp;
        <button type="submit" class="btn btn-outline-success btn-sm" name="submit">Get Questions</button>
        </form>
       <?php require("answers.php"); ?>
    </div>
    <div class="card-footer text-center">
    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
    </div>
    </div>
    </div>
    </div> 
        </div>
    </main>
    </div>
    <div id="layoutAuthentication_footer">
    <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between small">
    <div class="text-muted">Copyright &copy; Your Website 2019</div>
    <div>
    <a href="#">Privacy Policy</a>
    &middot;
    <a href="#">Terms &amp; Conditions</a>
    </div>
    </div>
    </div>
    </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    </body>
    </html>
