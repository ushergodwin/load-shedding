<?php include("config.php");
//get password  recovery questions
        $username = "";
$qn_1 =$qn_2 = $qn_3 ="";
 $status = array();
 //check the answwers
if(isset($_POST['continue'])){
   $qn_1 = mysqli_real_escape_string($conn, $_POST['qn_1']); 
    $qn_2 = mysqli_real_escape_string($conn, $_POST['qn_2']); 
    $qn_3 = mysqli_real_escape_string($conn, $_POST['qn_3']); 
    
    if(empty(trim($qn_1))){
        array_push($status, "Please enter the answer to your first question");
    }
     if(empty(trim($qn_2))){
        array_push($status, "Please enter the answer to your second question");
    }
   if(count($status) == 0){
       $sql = "select * from password where ans_1='$qn_1' && ans_2 = '$qn_2' && ans_3 = '$qn_3'";
       
       $result = mysqli_query($conn, $sql);
       $answer = mysqli_fetch_assoc($result);
       if($answer['ans_1']== $qn_1 && $answer['ans_2']== $qn_2 && $answer['ans_3']== $qn_3){
          header("location: password.php"); 
       }else{
           echo "wrong answers, please make user your answers are correct";
       }
   } 
    
}


?>
<html>
<head>
    <link rel="icon" href="imgs/favicon.ico">
    <style type="text/css">
        table{color: green;} body{background-color: green}
    </style>
    </head>
    <body></body>
</html>