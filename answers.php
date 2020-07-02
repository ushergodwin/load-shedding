<?php include("config.php");
//get password  recovery questions
        $username = "";
$qn_1 =$qn_2 = $qn_3 ="";
 $status = array();
        if(isset($_POST['submit'])){
           $username = mysqli_real_escape_string($conn, $_POST['username']);
            if(empty(trim($username))){
                echo"Enter your username to get your password recovery questions";
            }else{
                $sql = "SELECT qn_1, qn_2, qn_3 FROM password WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($result) > 0){
                    echo "<table cellpadding='5'>";
                    echo "<tr><th>No </th> <th> Your Questions</th> </tr>";
                    
                    while($row = mysqli_fetch_assoc($result)){
                       echo "<tr>";
                        echo"<td>1</td>";
                        echo "<td>".$row['qn_1']."</td>";echo "</tr>";
                        echo "<tr>";
                        echo"<td>2</td>";
                        echo "<td>".$row['qn_2']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo"<td>3</td>";
                        echo "<td>".$row['qn_3']."</td>";
                    echo "</tr>";
                    }
                 echo"</table>";
                }else{
                    echo "sorry, you never set password Recovery question!";
                }
            }
        }