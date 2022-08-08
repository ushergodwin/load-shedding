<?php
include 'config.php';

$staff_m = array();

$result = mysqli_query($conn, "SELECT * FROM staff");
while($row = mysqli_fetch_object($result))
{
    $staff_m[] = $row;
}

$staff_m_up = array();

if(isset($_GET['action']) && $_GET['action'] === 'update')
{
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM staff WHERE id='$id'");
    while($row = mysqli_fetch_object($result))
    {
        $staff_m_up[] = $row;
    }
}

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $phone = $_POST['name'];
    $address = $_POST['address'];
    $acc_type = $_POST['acc_type'];
    $id = $_POST['id'];

    $sql = "UPDATE staff SET staffName = '$name', staffAddress = '$address', staffContact = '$phone', account_type = '$acc_type' WHERE id = '$id'";
    mysqli_query($conn, $sql);

    if(!mysqli_affected_rows($conn))
    {
       echo " <script> alert('Oops, staff details not updated. Please try again.'); </script>";
        echo "<script> history.reload(); </script>";  

    }else {
        echo " <script> alert('Staff details updated Successfully'); </script>";
        echo "<script> history.back(); </script>";
    }

}

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $sql = "DELETE FROM staff  WHERE id = '$id'";
    mysqli_query($conn, $sql);

    if(!mysqli_affected_rows($conn))
    {
       echo " <script> alert('Oops, staff account not dleted. Please try again.'); </script>";
        echo "<script> history.reload(); </script>";  

    }else {
        echo " <script> alert('Staff account deleted Successfully'); </script>";
        echo "<script> history.back(); </script>";
    }
}