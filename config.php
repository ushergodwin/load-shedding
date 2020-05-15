<?php

$servername = "localhost";
$username = "root";
$password = "@Usher96";


$conn = mysqli_connect($servername, $username, $password);
$dbname = mysqli_select_db($conn, "LoadShedding");

if (!$conn) {
    die("Connection Failed".mysqli_connect_error());	
}