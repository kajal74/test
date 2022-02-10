<?php

session_start();

// ;
$servername = "localhost";
$username = "techyroo_ico_userdashbo";
$password = "kajal@123";
$dbname = "techyroo_ico_userdashboard";
//     // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$userEmail = $_POST['email'];
$userOTP = $_POST['OTP'];
$pwd = $_POST['password'];

$sql = "SELECT  `otp` FROM `Otp` WHERE email='$userEmail'";

$result = mysqli_query($conn, $sql);

$value = mysqli_fetch_field($result);

$count = mysqli_num_rows($result);

echo $count;
if ($count >= 1)
{

    echo json_encode(array("statusCode" => 200,"status" => 'success'));
}
else
{
    echo json_encode(array("statusCode" => 201,"status" => 'fail'));

}

if ($result->num_rows > 0)
{
    // output data of each row
    while ($row = $result->fetch_assoc())
    {
        // echo $row["otp"] ;
        if ($userOTP == $row["otp"])
        {
            // echo "true";
            $sql = "UPDATE `signup` SET `paswd`='$pwd' WHERE email = '$userEmail'";
            // print_r($sql);
            if ($conn->query($sql) === true)
            {
                echo json_encode(array("statusCode" => 200, "status" => 'success'));
            }
            else
            {
                echo json_encode(array( "statusCode" => 201,"status" => 'fail'));
            }
        }
        else
        {
            // echo "false";
        }

    }

}
else
{
    // echo "0 results";
    
}

?>
