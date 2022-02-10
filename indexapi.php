
<?php
 $servername = "localhost";  
    $username   = "techyroo_ico_userdashbo";  
    $password   = "kajal@123";  
    $dbname     = "techyroo_ico_userdashboard";
    
    $conn       = new mysqli($servername, $username, $password, $dbname); 
    
$sql = "SELECT * FROM `signup`";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
     echo json_encode($rowcount);
}

?>