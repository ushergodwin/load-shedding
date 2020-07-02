 <?php include("config.php"); 
$qn_1 = $qn_2 = $qn_3 = $ans_1 = $ans_3 = $ans_2 ="";
 $username = $_SESSION['username'];
$status = array();
 if(isset($_POST['submit'])){
     
     $qn_1 = mysqli_real_escape_string($conn, $_POST['question']);
     $ans_1 = mysqli_real_escape_string($conn, $_POST['ans_1']);
     $qn_2 = mysqli_real_escape_string($conn, $_POST['qn_2']);
     $ans_2 = mysqli_real_escape_string($conn, $_POST['ans_2']);
     $qn_3 = mysqli_real_escape_string($conn, $_POST['qn_3']);
     $ans_3 = mysqli_real_escape_string($conn, $_POST['ans_3']);
     
     if(empty(trim($qn_1))){
         array_push($status, "please enter your first password question");
     }
        if(empty(trim($ans_1))){
         array_push($status, "please enter the answer to your first password question");
     }
     
      if(empty(trim($qn_2))){
         array_push($status, "please enter your second password question");
     }
      if(empty(trim($ans_2))){
         array_push($status, "please enter the answer to your second password question");
     }
     
     
     if(count($status)==0){
         
         $sql = "INSERT INTO password(username, qn_1, ans_1, qn_2, ans_2, qn_3, ans_3) VALUES('$username', '$qn_1', '$ans_1', '$qn_2', '$ans_2', '$qn_3', '$ans_3')";
         
         $query = mysqli_query($conn, $sql);
           if($query){
                  echo"<script> alert('Password Recovery Questions Saved Successfully!'); </script>";
               echo"<script> history.back(); </script>";
           }else{
             echo "Oops, Something went wrong!!";
         }
     }
 }

?>
