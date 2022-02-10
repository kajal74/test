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
echo "Connected successfully";

//  $sql = " SELECT `otp` FROM `Otp` WHERE email='cjain0147@gmail.com'";

$userEmail =   $_POST['email'];

$sql = "SELECT * FROM signup WHERE email='kajalmali902@gmail.com'";
$result = mysqli_query($conn, $sql); 

$value = mysqli_fetch_field($result);

// echo $userEmail;


$count = mysqli_num_rows($result);  
 
if($count >= 1){  
    
    echo json_encode(array("statusCode"=>200 , "status" => 'success'));


}  
else{  
    echo json_encode(array("statusCode"=>201 ,"status" => 'fail'));


} 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo $row["email"] ;
         if('kajalmali902@gmail.com' == $row["email"]){
             echo "already exist ";
         }else{
             echo  "not exist";
         }
    }
}
?>