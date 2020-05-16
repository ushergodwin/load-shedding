<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "@Usher96", "LoadShedding");

if(!$conn){
	die("Connection Failed". mysqli_connect_error());
}

$username = "";
$password = "";
$password2 = "";
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
 
    $sql = "SELECT * FROM Staff WHERE username = '$username' limit 1";   


    $results = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($results);

    if ($user) {
    	if ($user['username'] === $username) {
           array_push($errors, "usename already taken"); 
    	}
    }


    if (count($errors) == 0) {
    	$password = md5($password);

    	$sql = "INSERT INTO Staff(username, password, staffName, staffContact, staffAddress) VALUES ('$username', '$password', '$name', '$contact', '$address')";

    	$query = mysqli_query($conn, $sql);

    	if($query){

    		$_SESSION['username'] = $username;
    		$_SESSION['sussess'] = "you are logged in";
    		header("location: welcome.php");
    	}else{ echo "Oops, something went wrong".$sql."".mysqli_error($conn);}
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

        	$password = md5($password);

        	$sql = "SELECT * FROM Staff where username = '$username' and password = '$password'";

        	$results = mysqli_query($conn, $sql);
        	if (mysqli_num_rows($results) == 1) {
        		$_SESSION['username'] = $username;
        		$_SESSION['sussess'] = "you are logged in";
                header("location: welcome.php");
        	}else{
            array_push($errors, "Oops, Account Not Found!!");
            }
        } 
        }
 



?>