<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = $staffname = $staffcontact = $staffaddress = "";
$username_err = $password_err = $confirm_password_err = $staffname_err = $staffcontact_err = $staffaddress_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM Staff WHERE username = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    if (empty(trim($_POST["name"]))) {
        $staffname_err = "Please enter Name.";
    } else {
        $staffname = trim($_POST["name"]);
    }

    if (empty(trim($_POST["contact"]))) {
        $staffcontact_err = "Please enter Contact.";
    } else {
        $staffcontact = trim($_POST["contact"]);
    }

    if (empty(trim($_POST["address"]))) {
        $staffaddress_err = "Please enter Adress.";
    } else {
        $staffaddress = trim($_POST["address"]);
    }
    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($staffname_err) && empty($staffcontact_err) && empty($staffaddress_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO Staff (username, password, staffName, staffContact, staffAddress) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password, $param_staffname, $param_staffcontact, $param_staffaddress);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_staffname = $staffname;
            $param_staffcontact = $staffcontact;
            $param_staffaddress = $staffaddress;
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Acount For Staff</title>
    <meta name="description" content="create account for a staff. load shedding Uganda">
    <meta name="author" content="Tumuhimbise Usher Godwin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="shedding.css">
    <link rel="shortcut icon" type="image/x-icon" href="imgs/favicon.ico">
    <script src="shedding.js"></script>
    <style type="text/css">.dropbtn { background-color: #4CAF50; color: white; padding: 16px; font-size: 16px; border: none; cursor: pointer;}
/* The container <div> - needed to position the dropdown content */
        .dropdown { position: relative; display: inline-block;}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);z-index: 1;}/* Links inside the dropdown */
.dropdown-content a { color: blue; padding: 12px 16px;text-decoration: none;display: block;} /* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1 }
 /* Show the dropdown menu on hover */
 .dropdown:hover .dropdown-content {    display: block;}
/* Change the background color of the dropdown button when the dropdown content is shown */.dropdown:hover .dropbtn{  background-color: #3e8e41;}
 .header { max-width: 100%;margin: 30px auto 0px;color: white;background: #5F9EA0;text-align: center;border: 1px solid #B0C4DE;border-bottom: none;border-radius: 10px 10px 10px 10px;padding: 20px;
        } body{font-family: 'Roboto', serif; font-size: 22px;} a{font-size: 15px;} .input-group input{max-width: 100%} a{font-size: 18px;}
    </style>
</head>
<body>
<div align="center" style="background-color: white;">
    <script type="text/javascript"> var toDay = new Date();
        document.write(toDay);</script>
    </div>
<br>
<div class="dropdown" align="right">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
        <a href="welcome.php">Home</a>
        <a href="registerschedule.php"> Add Schedule </a>
        <a href="deletestaff.php">View Staff</a>
        <a href="#" onclick="logOut()" ;>Sign Out</a>
    </div>
</div>
<div class="header">
    <h2>Create Account For Staff.</h2>
</div>
<div class="wrapper" id="style">
    <h2>Fill in the form bellow</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name ="account">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required="required" style="max-with: 100%">
            <span class="help-block"><?php echo $username_err; ?></span>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" minlength="6" maxlength="8" required="required">
            <span class="help-block"><?php echo $password_err; ?></span>
        </div>

        <div class="input-group">

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>" minlength="6" maxlength="8"
                   required="required">
            <span class="help-block"><?php echo $confirm_password_err; ?></span>
        </div>

        <div class="input-group">

            <label>Staff Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $staffname; ?>" required="required">
            <span class="help-block"><?php echo $staffname_err; ?></span>
        </div>

        <div class="input-group">

            <label>Staff Contact</label>
            <input type="number" name="contact" class="form-control" value="<?php echo $staffcontact; ?>"  min-length ="10" max-length = "10"
                   required="required">
            <span class="help-block"><?php echo $staffcontact_err; ?></span>
        </div>

        <div class="input-group">

            <label>Staff Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $staffaddress; ?>"
                   required="required">
            <span class="help-block"><?php echo $staffaddress_err; ?></span>
        </div>

        <div class="form-group">
            <input type="submit" value="Create" id="log" onclick=" return validateAccount()">
            <input type="reset" value="Reset" id="log">
        </div>
    </form>
</div>


<br>
<hr>
<br>
<div class="footer" align="center">
    <table>
        <caption><h5 style="color: whitesmoke;">&copyGroup C LoadSheding 2020</h5></caption>
        <tr style="color: blue;">

         <td ><a href="terms.php">Terms & Conditions</a></td>   <td ><li><a href="aboutus.php">Abou Us</a></li></td>
        <tr>
            <br> <br>
    </table>


    <table>

        <tr style="color: whitesmoke;">

            <td><h2>Load</h2></td>
            <td><img src="imgs/logo.jpg" width="70" height="50" style="border-radius: 20%"></td>
            <td><h2>Shedding</h2></td>
        </tr>
    </table>
</div>
</body>
</html>