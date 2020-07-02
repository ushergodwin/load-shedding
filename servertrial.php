<?php 
session_start();
include("config.php");

$username = "";
$password = "";
$password_2 = "";
$name = "";
$contact = "";
$address = "";

$errors = array();

//login user

if (isset($_POST['submit'])) {

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
	


	if (empty(trim($username))) {
       array_push($errors, "please enter username");
	}

	if (empty(trim($password))) {

		array_push($errors, "please enter password");
	}

	if (empty(trim($password_2))) {
		array_push($errors, "please confirm your password");
	}
     
     if ($password !== $password_2) {
             array_push($errors, "password does not match!!");
     }
             if (empty(trim($_POST["name"]))) {
        array_push($errors, "please entername");
    }
    if (empty(trim($_POST["contact"]))) {
       array_push($errors, "Please enter Contact.");
    }
    if (empty(trim($_POST["address"]))) {
       array_push($errors, "Please enter Adress.");
    }
 
    $sql = "SELECT * FROM staff WHERE username = '$username' limit 1";   


    $results = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($results);

    if ($user) {
    	if ($user['username'] === $username) {
           array_push($errors, "usename already taken"); 
    	}
    }


    if (count($errors) == 0) {
    	$hash = password_hash($password, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO staff(username, password, staffName, staffContact, staffAddress) VALUES ('$username', '$hash', '$name', '$contact', '$address')";

    	$query = mysqli_query($conn, $sql);

    	if($query){
    		header("location: login.php");
    	}else{
            array_push($errors, "Oops, something went wrong");
        }
    }

}

  // login user


    if (isset($_POST['login_user'])) {

       $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        if (empty(trim($username))) {
        	array_push($errors, "please enter username");
        }
      
        if (empty(trim($password))) {
        	array_push($errors, "please enter pasword");
        }


        if(count($errors) == 0){
        	$sql = "SELECT username, password FROM staff where username = '$username'";

        	$results = mysqli_query($conn, $sql);
            $verify = mysqli_fetch_assoc($results);
            $true = password_verify($password, $verify['password']);
        	if (mysqli_num_rows($results) == 1 && $true) {
        		$_SESSION['username'] = $username;
        		$_SESSION['sussess'] = "you are logged in";
                header("location: welcome.php");
        	}else { 
                array_push($errors, "wrong username or password!");
        }
        } 
    	
    }


?>
