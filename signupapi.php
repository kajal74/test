 <?php
 session_start();

// ;
    $servername = "localhost";  
    $username   = "techyroo_ico_userdashbo";  
    $password   = "kajal@123";  
    $dbname     = "techyroo_ico_userdashboard";  
//     // Create connection  
    $conn  = new mysqli($servername, $username, $password, $dbname);  
    
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 


$userEmail =   $_POST['email'];
$userOTP = $_POST['OTP'];
 $user = $_POST['uname'];
 $name = $_POST['fname'];
 $last = $_POST['lname'];
 $contact = $_POST['number'];
 $pwd = $_POST['password'];



$sql_u = "SELECT * FROM signup WHERE email='$userEmail'";
$sql_e = " SELECT `otp` FROM `Otp` WHERE email='$userEmail'";

$result1 = mysqli_query($conn, $sql_u); 

$value1 = mysqli_fetch_field($result1);

$result2 = mysqli_query($conn, $sql_e); 

$value2 = mysqli_fetch_field($result2);

// echo $result1->num_rows;

// echo $result2->num_rows;

// echo $userEmail;



 


// if ($result1->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//          if('kajalmali902@gmail.com' == $row["email"]){
//              echo json_encode(array("statusCode"=>200 , "status" => 'success'));
//              echo "Already exist";
//          }else{
            
//          }
//     }
// }else if(717110 == $row["otp"]){
//     echo "not exist";
//                 // $sql =   "INSERT INTO `signup`(`uname`, `fname`, `lname`,`email`,`pnumber`,`paswd`) VALUES ('$user','$name','$last','$userEmail','$contact','$pwd')";
//                 $sql =   "INSERT INTO `signup`(`uname`, `fname`, `lname`,`email`,`pnumber`,`paswd`) VALUES ('kajal','mali','hjhjhj','kajalmali902@gmail.com','545454545','kajal@123')";
//                 print_r($sql);
//                 if ($conn->query($sql) === TRUE) {  
//                     echo json_encode(array("statusCode"=>200 , "status" => 'success')); 
//                 } else {  
//                     echo json_encode(array("statusCode"=>201 ,"status" => 'fail'));
//                  }  
                 
//             }
// else{
//                 // echo "false";
//             }

if ($result1->num_rows > 0) {
    // output data of each row
         if('$userEmail' == $row["email"]){
             echo json_encode(array("statusCode"=>203 , "status" => 'fail',"message" => 'mail already exist'));
             echo "Already exist";
         }else{
            
         }
    
}else if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        // echo $row["otp"] ;
            if($userOTP == $row["otp"]){
                $sql =   "INSERT INTO `signup`(`uname`, `fname`, `lname`,`email`,`pnumber`,`paswd`) VALUES ('$user','$name','$last','$userEmail','$contact','$pwd')";
                //   $sql =   "INSERT INTO `signup`(`uname`, `fname`, `lname`,`email`,`pnumber`,`paswd`) VALUES ('kajal','mali','hjhjhj','kajalmali902@gmail.com','545454545','kajal@123')";
                
                if ($conn->query($sql) === TRUE) {  
                    echo json_encode(array("statusCode"=>200 , "status" => 'success')); 
                } else {  
                    echo json_encode(array("statusCode"=>201 ,"status" => 'fail'));
                 }  
                 
            }else{
                // echo "false";
            }
    }
    
} else {
    // echo "0 results";
}
    

?>