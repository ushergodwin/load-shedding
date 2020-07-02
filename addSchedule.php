<?php
include("config.php");
$ID = "";
$Date = "";
$Period = "";
$District = "";
$Division = "";
$Parish = "";
$errors = array();
if (isset($_POST['reg_loc'])) {

    $ID = mysqli_real_escape_string($conn, $_POST['identification']);
    $District = mysqli_real_escape_string($conn, $_POST['state']);
    $Division = mysqli_real_escape_string($conn, $_POST['countrya']);
    $Parish = mysqli_real_escape_string($conn, $_POST['district']);

    if (empty(trim($_POST['identification']))) {
        array_push($errors, "Please enter ID.");
    }
    if (empty(trim($_POST['state']))) {
        array_push($errors, "Please enter District.");
    }

    if (empty(trim($_POST['countrya']))) {
        array_push($errors, "Please enter Division.");
    }

    if (empty(trim($_POST['district']))) {
        array_push($errors, "Please enter Parish.");
    }

    if (count($errors) == 0) {

        $sql = "INSERT INTO location(ID, District, Division, Parish) VALUES ('$ID', '$District', '$Division', '$Parish')";
        if (mysqli_query($conn, $sql)) {
            echo " <script> alert('Location Added Successfully'); </script>";
            echo "<script> history.reload(); </script>";
        } else {
            array_push($errors, "Oops, Registration Failed");
        }
    }
}


// register schedule
if (isset($_POST['submit'])) {
    $Date = $_POST['day'];
    $Period = $_POST['period'];
    $Period_2 = $_POST['periodto'];
    $ID = $_POST['identification'];

    $Date = mysqli_real_escape_string($conn, $_POST['day']);
    $Period = mysqli_real_escape_string($conn, $_POST['period']);
    $Period_2 = mysqli_real_escape_string($conn, $_POST['periodto']);
    $ID = mysqli_real_escape_string($conn, $_POST['identification']);

    if (empty(trim($_POST["day"]))) {
        array_push($errors, "Please enter the start date.");

    }

   
    if (empty(trim($_POST["period"]))) {
        array_push($errors, "Please enter time.");

    }

      if (empty(trim($_POST["periodto"]))) {
        array_push($errors, "Please enter the end date.");

    }
    if (empty(trim($_POST["identification"]))) {
        array_push($errors, "Please enter ID.");
    }

    if (count($errors) == 0) {


        $sql = "INSERT INTO schedule(schedule, Period, Period_2, ID ) VALUES ('$Date', '$Period', '$Period_2', '$ID')";
        if (mysqli_query($conn, $sql)) {
            echo " <script> alert('Schedule Added Successfully'); </script>";
            echo "<script> history.reload(); </script>";
        } else {
            array_push($errors, "Oops, something went wrong.");
        }
    }
}
mysqli_close($conn);
?>