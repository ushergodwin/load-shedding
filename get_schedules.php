<?php
include 'config.php';

$schedules = array();

$sql = "SELECT * FROM schedule";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_object($result))
    {
        array_push($schedules, $row);
    }
}