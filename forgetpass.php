<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="images/favicon.png">
<!-- Site Title  -->
<title>Page Reset | ICO Crypto - ICO Landing Page &amp; Multi-Purpose Cryptocurrency HTML Template</title>
<!-- Bundle and Base CSS -->
<link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=1930">
<link rel="stylesheet" href="assets/css/style.css?ver=1930" id="changeTheme">
<!-- Extra CSS -->
<link rel="stylesheet" href="assets/css/theme.css?ver=1930">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>    

<style>
   .bg-theme {
    background-color: #fe4350ba !important;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #fe4350;
  border: none;
  color: white;
  border-radius:5px;
  padding: 10px 30px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  margin-left:100px;
}
..input-bordered{
    margin:2px 2px;
}
</style>

</head>
  


    <body class="nk-body body-wider bg-light-alt">

	<div class="nk-wrap">
    
        <main class="nk-pages nk-pages-centered bg-theme">
            <div class="ath-container">
                <div class="ath-header text-center">
                    <a href="./" class="ath-logo"><img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo"></a>
                </div>
                <div class="ath-body">
                    <h5 class="ath-heading title">Reset <small class="tc-default">with your Email</small></h5>
                    <form action="">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email" id="userEmail">
                                <span id="useremailError"></span>
                            </div>
                        </div>
                        <div id="box" class="field-item" style="display:none">
                            <div class="field-wrap">
                                <input type="number" class="input-bordered" placeholder="Your OTP" id="otp" class="userinput">
                                <span id="userotp"></span>
                            </div>
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="New Password" id="pass" class="userinput">
                                <span id="match"></span>
                            </div>
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Repeat Password" id="pass1" class="userinput">
                                <span id="confirm"></span>
                            </div>
                            <div>
                            <input type="button" value="Reset" onclick="resetdata()">
                            </div>
                        </div>
                       
                     <div>
                            <input type="button" value="GET OTP" onclick="submitdata()" id="getotp">
                            </div>
                    </form>
                </div>
                <div class="ath-note text-center tc-light">
                    Remembered? <a href="page-login.html"> <strong>Sign in here</strong></a>
                </div>
            </div>
        </main>
    
	</div>
	<div class="preloader"><span class="spinner spinner-round"></span></div>
	
	<!-- JavaScript -->
	<script src="assets/js/jquery.bundle.js?ver=1930"></script>
	<script src="assets/js/scripts.js?ver=1930"></script>
	<script src="assets/js/charts.js"></script>
</body>
</html>

<script>
var Email;
var EnterOTP;
var userPassword;
var ConfrimPass;
console.log(1 === 1);
    function submitdata(){
    let Email = document.getElementById('userEmail').value;
    let re = /\S+@\S+\.\S+/;
    let mail=  re.test(Email);
     let EnterOTP = document.getElementById('otp').value;
    
    if(Email.length > 0){
        if(mail){
        document.getElementById("useremailError").innerHTML = "";
    }else{
        document.getElementById("useremailError").innerHTML = "Email is not in Proper Format";
        return 0;
    }
    }
    else{
        document.getElementById("useremailError").innerHTML = "Please Enter This field";
         return 0;
    }
    
     $.ajax({
        url: "https://techyroots.com/ICO-admin-dashboard/forgetpassapi.php",
        type: "POST",
        data: {
            email: Email,
        },
        success: function(dataResult) {
            console.log(dataResult);
            //  let dataValue = JSON.parse(dataResult);
            swal({
            text: "Your OTP is sent on your Email",
            button:false,
           
        })
        document.getElementById("box").style.display = "block";
         document.getElementById("getotp").style.display = "none";
        //  setTimeout(function(){ window.location.href = 'https://techyroots.com/ICO-admin-dashboard/reset.php?userEmail='+Email; }, 5000);
        
        }
    });
    }
    
    function resetdata(){
         EnterOTP = document.getElementById('otp').value;
     userPassword = document.getElementById('pass').value;
     ConfrimPass = document.getElementById('pass1').value;
    
    if (userPassword.length>0) {
        if(userPassword.length>8) {
            document.getElementById('match').innerHTML = "";
        }else{
            document.getElementById('match').innerHTML = "Please Enter Atleat 8 Characters";  
            return 0;
        }
    }else{
         document.getElementById('match').innerHTML =  "Fill This Field ";
         return 0;
    }

    if (ConfrimPass.length > 0){
        if (ConfrimPass != userPassword ) {
        document.getElementById("confirm").innerHTML = "password does not match";
        console.log(123)
        return 0;
        }else {
        document.getElementById("confirm").innerHTML = "";
        
        
     
        }
    }
    else{
         document.getElementById('confirm').innerHTML =  "Fill This Field ";
         console.log(123)
         return 0;
    }
    
     $.ajax({
        url: "https://techyroots.com/ICO-admin-dashboard/resetapi.php",
        type: "POST",
        data: {
            email: Email,
            OTP :EnterOTP,
            password: userPassword,
        },
        success: function(dataResult) {
            console.log(dataResult);
            //  let dataValue = JSON.parse(dataResult);
            swal({
            text: "password is reset",
            button:false,
           
        })
        //  setTimeout(function(){ window.location.href = 'https://techyroots.com/ICO-admin-dashboard/reset.php?userEmail='+Email; }, 5000);
        }
    });
    }
</script>
