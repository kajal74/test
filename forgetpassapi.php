<?php
$servername = "localhost";
$username = "techyroo_ico_userdashbo";
$password = "kajal@123";
$dbname = "techyroo_ico_userdashboard";

$conn = new mysqli($servername, $username, $password, $dbname);

$to = $_POST['email']; // this is your Email address
$from = 'kajalmali902@gmail.com'; // this is the sender's Email address
$subject = "Form submission";
$headers = "From:" . $from;
$headers2 = "From:" . $to;
$message = $message = rand(100000, 999999);
// $_SESSION['session_otp'] = $message;
mail($to, $subject, $message, $headers);
mail($from, $headers2);

 $sql = "INSERT INTO `Otp`( `email`, `otp`) VALUES ('$to','$message')";
// $sql =  "SELECT  `OTP` FROM `signup` WHERE email=$from";
//   print_r($sql);
if ($conn->query($sql) === TRUE) {
  echo json_encode(array("statusCode"=>200 , "status" => 'success'));
} else {
    echo json_encode(array("statusCode"=>201 ,"status" => 'fail'));
}


//     echo "Your sign up otp is sent";
//     $_SESSION["otp"]=$message;
//     // echo "<script>location.href='signup.php'</script>";
// echo $message;
// echo $to;

?>
