<?php
include("config.php");
$errors = array();

// register schedule
if (isset($_POST['submit'])) {
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $work_description = mysqli_real_escape_string($conn, $_POST['work_description']);
    $affected_areas = mysqli_real_escape_string($conn, $_POST['areas']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);

    if (empty(trim($date))) {
        array_push($errors, "Please enter the start date.");

    }

   
    if (empty(trim($time))) {
        array_push($errors, "Please enter time.");

    }

      if (empty(trim($district))) {
        array_push($errors, "Please enter the district.");

    }

    if (empty(trim($work_description))) {
        array_push($errors, "Please enter the work description.");

    }

    if (empty(trim($affected_areas))) {
        array_push($errors, "Please enter the affected areas.");

    }
    if (count($errors) == 0) {

        $sql = "INSERT INTO schedule(schedule_date, schedule_time, district, work_description, affected_areas) VALUES ('$date', '$time', '$district', '$work_description', '$affected_areas')";
        if (mysqli_query($conn, $sql)) {
            echo " <script> alert('Schedule Added Successfully'); </script>";
            echo "<script> history.reload(); </script>";
        } else {
            array_push($errors, "Oops, something went wrong. Please try again.");
        }
    }
}
mysqli_close($conn);
?>