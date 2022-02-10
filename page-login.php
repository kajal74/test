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
<title>Login | ICO Crypto - ICO Landing Page &amp; Multi-Purpose Cryptocurrency HTML Template</title>
<!-- Bundle and Base CSS -->
<link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=1930">
<link rel="stylesheet" href="assets/css/style.css?ver=1930" id="changeTheme">
<!-- Extra CSS -->
<link rel="stylesheet" href="assets/css/theme.css?ver=1930">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


<style>
    input[type=button], input[type=submit], input[type=reset] {
  background-color: #fe4350;
  border: none;
  border-radius:5px;
  color: white;
  padding: 10px 10px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 120px;
}

.bg-theme {
    background-color: #fe4350ba !important;
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
                    <h5 class="ath-heading title">Sign in <small class="tc-default">with your ICO Account</small></h5>
                    <form action="./">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email" id="email">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Password" id="userPassword">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pdb-r">
                            <div class="field-item pb-0">
                                <input class="input-checkbox" id="remember-me-2" type="checkbox">
                                <label for="remember-me-2">Remember Me</label>
                            </div>
                            <div class="forget-link fz-6">
                                <a href="https://techyroots.com/ICO-admin-dashboard/page-reset.php">Forgot password?</a>
                            </div>
                        </div>
                         <input type="button" value="LOGIN UP" onclick="data()">
                    </form>
                    <div class="sap-text"><span>Or Sign In With</span></div>

                    <ul class="row gutter-20px gutter-vr-20px">
                        <li class="col"><a href="#" class="btn btn-md btn-facebook btn-block"><em class="icon fab fa-facebook-f"></em><span>Facebook</span></a></li>
                        <li class="col"><a href="#" class="btn btn-md btn-google btn-block"><em class="icon fab fa-google"></em><span>Google</span></a></li>
                    </ul>
                </div>
                <div class="ath-note text-center tc-light">
                    Don’t have an account? <a href="page-register.html"> <strong>Sign up here</strong></a>
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
<script>
	function data() {
	  var email = document.getElementById("email").value;
	  var userPassword = document.getElementById("userPassword").value;
	  
	  $.ajax({
	      url: "https://techyroots.com/ICO-admin-dashboard/loginapi.php",
	      type: "POST",
	      data: {
	          email:email,
	          userPassword:userPassword
	      },
	      
	      success: function(dataResult) {
	          let test = dataResult;
	          console.log(dataResult);
	          let dataValue = JSON.parse(dataResult);
	          dataValue.statusCode;
	          if (dataValue.statusCode == 200) {
	               sessionStorage.setItem("email", email);
	               sessionStorage.setItem("userPassword", userPassword);
	              swal({
	                  text: "Login Successful",
	                  button: false,
	              });
	             setTimeout(function(){ window.location.href = 'https://techyroots.com/ICO-admin-dashboard/'; }, 5000);
	              
	              } 
	              else {
	              swal({
	                  text: "Login failed",
	                  button: false,
	              });
	
	          }console.log("hello");
	         
	
	      }
	
	  })
	
	}
	
</script>
</html>
