<?php

session_start();
 $servername = "localhost";  
    $username   = "techyroo_ico_userdashbo";  
    $password   = "kajal@123";  
    $dbname     = "techyroo_ico_userdashboard";  
$conn  = new mysqli($servername, $username, $password, $dbname);  
// echo $_SESSION["id"];
 $sql = "SELECT * FROM signup WHERE id ='{$_SESSION['id']}'";

// print_r ($sql);
 $result = mysqli_query($conn, $sql); 



//  $value = mysqli_fetch_field($result);



 $count = mysqli_num_rows($result);  


 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo $row["id"] ;
          $_SESSION["id"]  =  $row["id"];
        // echo $row["fname"];
        // echo $row["lname"];
        echo json_encode(array("statusCode"=>200 , "status" => 'success' , "userName" => $row["uname"] , "firstName" => $row["fname"] , "email" => $row["email"] , "contact" => $row["pnumber"], "lastName" => $row["lname"]  ));

          
    }
} else {
    // echo "0 results";
}
 
?>