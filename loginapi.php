
<?php

session_start();

// ;
$servername = "localhost";
$username   = "techyroo_ico_userdashbo";
$password   = "kajal@123";
$dbname     = "techyroo_ico_userdashboard";
//     // Create connection  
$conn  = new mysqli($servername, $username, $password, $dbname);

$email = $_POST['email'];
$userPassword = $_POST['userPassword'];
$sql = " SELECT * FROM `signup` WHERE email='$email' AND paswd='$userPassword';";

$result = mysqli_query($conn, $sql);

$value = mysqli_fetch_field($result);



$count = mysqli_num_rows($result);

if ($count >= 1) {

    echo json_encode(array("statusCode" => 200, "status" => 'success'));
} else {
    echo json_encode(array("statusCode" => 201, "status" => 'fail'));
}


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $_SESSION["id"]  =  $row["id"];
    }
} else {
    // echo "0 results";
}

?>