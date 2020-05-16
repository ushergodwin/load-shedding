    <?php
   include("config.php");
    $District = $Division = $Parish = "";
    $errors = array();

       if (isset($_POST['reg_loc'])) {
        $District = mysqli_real_escape_string($conn, $_POST['district']);
        $Division = mysqli_real_escape_string($conn, $_POST['division']);
        $Parish = mysqli_real_escape_string($conn, $_POST['parish']);

        if (empty(trim($_POST['district']))) {
            array_push($errors, "Please enter District.");
        }

        if (empty(trim($_POST['division']))) {
            array_push($errors, "Please enter Division.");
        }

        if (empty(trim($_POST['parish']))) {
            array_push($errors, "Please enter Parish.");
        }

        if (count($errors) == 0) {

            $sql = "INSERT INTO userloc(District, Division, Parish) VALUES ('$District', '$Division', '$Parish')";
            if (mysqli_query($conn, $sql)) {
                echo " <script> alert('Location Added Successfully'); </script>";
                echo "<script> history.reload(); </script>";
            } else {
                array_push($errors, "Registration Failed");
            }
        }
    }
    ?>