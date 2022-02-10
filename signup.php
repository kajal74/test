<<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="images/favicon.png">
<!-- Site Title  -->
<title>Page Register | ICO Crypto - ICO Landing Page &amp; Multi-Purpose Cryptocurrency HTML Template</title>
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
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
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
                    <h5 class="ath-heading title">Sign Up <small class="tc-default">Create New TokenWiz Account</small></h5>
                    <form >
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Name" id="userName">
                                <span id="name"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Enter Your OTP" id="otp">
                                <span id="otp"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email" id="Email">
                                <!--<span  id="email" style=" display: inline-block;width: 460px;border: 1px solid #ccc;padding: 5px 9px;overflow: hidden;white-space: nowrap;margin-left:9px;margin-top: 5px;height: 34px;border-radius: 4px"></span>-->
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Phone Number" id="contact">
                                 <span id="usercontact"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Password" id="userPassword">
                                 <span id="userpass"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Repeat Password" id="repeatpass">
                                 <span id="confirm"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <input class="input-checkbox" id="agree-term-2" type="checkbox">
                            <label for="agree-term-2">I agree to Icos <a href="#">Privacy Policy</a> &amp; <a href="#">Terms</a>.</label>
                        </div>
                        <div>
                            <input type="button" value="SIGN UP" onclick="savedata()">
                            </div>
                        
                    </form>
                    <div ><span>Or Sign Up With</span></div>

                    <ul class="btn-grp gutter-20px gutter-vr-20px">
                        <li class="col"><a href="#" class="btn btn-md btn-facebook btn-block"><em class="icon fab fa-facebook-f"></em><span>Facebook</span></a></li>
                        <li class="col"><a href="#" class="btn btn-md btn-google btn-block"><em class="icon fab fa-google"></em><span>Google</span></a></li>
                    </ul>
                </div>
                <div class="ath-note text-center tc-light">
                    Already have an account? <a href="#"> <strong>Sign in here</strong></a>
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

var userid;
function reload(){
    let  params = new URLSearchParams(window.location.search);
     userid = params.get('userEmail');
    document.getElementById('Email').value =  userid;
}
reload();
    
   function savedata() {
  

    var userName = document.getElementById('userName').value;
    var EnterOTP = document.getElementById('otp').value;
    var contact = document.getElementById('contact').value; 
    var userPassword = document.getElementById('userPassword').value;
    var ConfrimPass = document.getElementById('repeatpass').value;
//     var re = /\S+@\S+\.\S+/;
//   var mail=  re.test(userEmail);
   // console.log(userName.length );
    var pswd = /^[a-zA-Z]$/;
    //return re.test(userpass);
    var pass   = pswd.test(userPassword);

    if (userName.length > 0) {
        document.getElementById("name").innerHTML = "";
    }else {
        document.getElementById("name").innerHTML = "Fill This Field";
        return 0;
    }
    
    if (contact.length > 0) {
        if(contact.length==10) {
            document.getElementById('usercontact').innerHTML = "";
        }else{
            document.getElementById('usercontact').innerHTML = "Phone number is invalid";  
            return 0;
        }
        }else {
        document.getElementById("usercontact").innerHTML = "Fill This Field";
        return 0;
    }

    if (userPassword.length>0) {
        if(userPassword.length>7) {
            document.getElementById('userpass').innerHTML = "";
        }else{
            document.getElementById('userpass').innerHTML = "Password Should Be In Proper Format";  
            return 0;
        }
    }else{
         document.getElementById('userpass').innerHTML =  "Fill This Field ";
         return 0;
    }

    
    if (ConfrimPass.length > 0){
        if (ConfrimPass != userPassword ) {
        document.getElementById("confirm").innerHTML = "password does not match";
        return 0;
        }else {
        document.getElementById("confirm").innerHTML = "";
       
        
     
        }
    }
    else{
         document.getElementById('confirm').innerHTML =  "Fill This Field ";
         return 0;
    }
    
    
                

    $.ajax({
        url: "https://techyroots.com/ICO-admin-dashboard/signupapi.php",
        type: "POST",
        data: {
            uname: userName,
            number: contact,
            OTP:EnterOTP,
            email:userid,
            password: userPassword
        },
        success: function(dataResult) {
            let test = dataResult;
	          console.log(dataResult);
	       //   let dataValue = JSON.parse(dataResult);
	       //   dataValue.statusCode;
	          if (dataResult.statusCode == 203) {
            swal({
            text: "Okay",
            button:false,
           
            
        })
        setTimeout(function(){ window.location.href = 'https://techyroots.com/ICO-admin-dashboard/page-login.php'; }, 5000);
        
        }else {
            swal({
            text: "Sign Up",
            button:false,
           
            
        })
        
    }
    }
    
   })
   }
    
</script>
!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="images/favicon.png">
<!-- Site Title  -->
<title>Page Register | ICO Crypto - ICO Landing Page &amp; Multi-Purpose Cryptocurrency HTML Template</title>
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
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
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
                    <h5 class="ath-heading title">Sign Up <small class="tc-default">Create New TokenWiz Account</small></h5>
                    <form >
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Name" id="userName">
                                <span id="name"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Enter Your OTP" id="otp">
                                <span id="otp"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email" id="Email">
                                <!--<span  id="email" style=" display: inline-block;width: 460px;border: 1px solid #ccc;padding: 5px 9px;overflow: hidden;white-space: nowrap;margin-left:9px;margin-top: 5px;height: 34px;border-radius: 4px"></span>-->
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Phone Number" id="contact">
                                 <span id="usercontact"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Password" id="userPassword">
                                 <span id="userpass"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Repeat Password" id="repeatpass">
                                 <span id="confirm"></span>
                            </div>
                        </div>
                        <div class="field-item">
                            <input class="input-checkbox" id="agree-term-2" type="checkbox">
                            <label for="agree-term-2">I agree to Icos <a href="#">Privacy Policy</a> &amp; <a href="#">Terms</a>.</label>
                        </div>
                        <div>
                            <input type="button" value="SIGN UP" onclick="savedata()">
                            </div>
                        
                    </form>
                    <div ><span>Or Sign Up With</span></div>

                    <ul class="btn-grp gutter-20px gutter-vr-20px">
                        <li class="col"><a href="#" class="btn btn-md btn-facebook btn-block"><em class="icon fab fa-facebook-f"></em><span>Facebook</span></a></li>
                        <li class="col"><a href="#" class="btn btn-md btn-google btn-block"><em class="icon fab fa-google"></em><span>Google</span></a></li>
                    </ul>
                </div>
                <div class="ath-note text-center tc-light">
                    Already have an account? <a href="#"> <strong>Sign in here</strong></a>
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

var userid;
function reload(){
    let  params = new URLSearchParams(window.location.search);
     userid = params.get('userEmail');
    document.getElementById('Email').value =  userid;
}
reload();
    
   function savedata() {
  

    var userName = document.getElementById('userName').value;
    var EnterOTP = document.getElementById('otp').value;
    var contact = document.getElementById('contact').value; 
    var userPassword = document.getElementById('userPassword').value;
    var ConfrimPass = document.getElementById('repeatpass').value;
//     var re = /\S+@\S+\.\S+/;
//   var mail=  re.test(userEmail);
   // console.log(userName.length );
    var pswd = /^[a-zA-Z]$/;
    //return re.test(userpass);
    var pass   = pswd.test(userPassword);

    if (userName.length > 0) {
        document.getElementById("name").innerHTML = "";
    }else {
        document.getElementById("name").innerHTML = "Fill This Field";
        return 0;
    }
    
    if (contact.length > 0) {
        if(contact.length==10) {
            document.getElementById('usercontact').innerHTML = "";
        }else{
            document.getElementById('usercontact').innerHTML = "Phone number is invalid";  
            return 0;
        }
        }else {
        document.getElementById("usercontact").innerHTML = "Fill This Field";
        return 0;
    }

    if (userPassword.length>0) {
        if(userPassword.length>7) {
            document.getElementById('userpass').innerHTML = "";
        }else{
            document.getElementById('userpass').innerHTML = "Password Should Be In Proper Format";  
            return 0;
        }
    }else{
         document.getElementById('userpass').innerHTML =  "Fill This Field ";
         return 0;
    }

    
    if (ConfrimPass.length > 0){
        if (ConfrimPass != userPassword ) {
        document.getElementById("confirm").innerHTML = "password does not match";
        return 0;
        }else {
        document.getElementById("confirm").innerHTML = "";
       
        
     
        }
    }
    else{
         document.getElementById('confirm').innerHTML =  "Fill This Field ";
         return 0;
    }
    
    
                

    $.ajax({
        url: "https://techyroots.com/ICO-admin-dashboard/signupapi.php",
        type: "POST",
        data: {
            uname: userName,
            number: contact,
            OTP:EnterOTP,
            email:userid,
            password: userPassword
        },
        success: function(dataResult) {
            let test = dataResult;
	          console.log(dataResult);
	       //   let dataValue = JSON.parse(dataResult);
	       //   dataValue.statusCode;
	          if (dataResult.statusCode == 203) {
            swal({
            text: "Okay",
            button:false,
           
            
        })
        setTimeout(function(){ window.location.href = 'https://techyroots.com/ICO-admin-dashboard/page-login.php'; }, 5000);
        
        }else {
            swal({
            text: "Sign Up",
            button:false,
           
            
        })
        
    }
    }
    
   })
   }
    
</script>
