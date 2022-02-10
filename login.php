<!DOCTYPE html>
<html lang="zxx" class="js">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Softnio">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<!-- Fav Icon -->
		<link rel="shortcut icon" href="images/favicon.png">
		<!-- Site Title -->
		<title>Login</title>
		<!-- Bundle and Base CSS -->
		<link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=1930">
		<link rel="stylesheet" href="assets/css/style.css?ver=1930" id="changeTheme">
		<!-- Extra CSS -->
		<link rel="stylesheet" href="assets/css/theme.css?ver=1930">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>    
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<style>
        .body-background {
            padding: 100px 0;
        }
        .header-main {
          padding: 20px 0;
          background-color: #fe4350;
        }
      .has-fixed:not(.is-dark) .header-main {
        background: #fe4350;
       }
      
      input:not([type="button"]):not([type="submit"]):not([type="reset"]):hover, input:not([type="button"]):not([type="submit"]):not([type="reset"]):focus, textarea:hover, textarea:focus, select:hover, select:focus 
     {    
      border:2px solid #fe4350;    
      outline:none;
     }
     .form-control{
       padding:5px;
       border:1px solid red;
    }
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  border-radius:10px;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
    .button3 {
        background-color: white; 
        color: black; 
        border: 2px solid #f44336;
    }

    .button3:hover {
         background-color: #f44336;
        color: white;
    }
    </style>
	</head>
	<body class="nk-body body-wider bg-light">
		<div class="nk-wrap">
			<header class="nk-header page-header is-transparent is-sticky is-shrink" id="header">
				<!-- Header @s --> 
				<div class="header-main">
					<div class="header-container container">
						<div class="header-wrap">
							<!-- Logo @s --> 
							<div class="header-logo logo"> <a href="./" class="logo-link"> <img class="logo-dark" src="images/logo.png" srcset="images/logo2x.png 2x" alt="logo"> <img class="logo-light" src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo"> </a> </div>
							<!-- Menu Toogle @s --> 
							<div class="header-nav-toggle">
								<a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
									<div class="toggle-line"> <span></span> </div>
								</a>
							</div>
							<!-- Menu @s --> 
							<div class="header-navbar">
								<nav class="header-menu" id="header-menu">
									<ul class="menu">
										<li class="menu-item">
											<a class="menu-link nav-link " href="#">Home</a> 
										</li>
										<li class="menu-item">
											<a class="menu-link nav-link " href="#">About Us</a> 
										</li>
										<li class="menu-item">
											<a class="menu-link nav-link " href="#">Services</a> 
										</li>
										<li class="menu-item">
											<a class="menu-link nav-link " href="https://techyroots.com/ICO-admin-dashboard/email.php">Sign UP</a> 
										</li>
									</ul>
								</nav>
							</div>
							<!-- .header-navbar @e --> 
						</div>
					</div>
				</div>
				<!-- .header-main @e -->
				<!-- Banner @s --> 
				<div class="header-banner bg-theme-grad">
					<div class="nk-banner">
						<div class="banner banner-page">

						</div>
					</div>
					<!-- .nk-banner --> 
					<div class="nk-ovm shape-a-sm"></div>
				</div>
				<!-- .header-banner @e --> 
			</header>
			<main class="nk-pages">
			    <div class="body-background">
        			<div class=" d-flex justify-content-center align-items-center h-200" id="background-image" >
        				<div class="card p-3 text-center py-4"  class="loginBox" style="border: 2px solid #FE4350">
        					<div>
        						<h4>Login</h4>
        					</div>
        					<div class="mt-3 px-3"> 
        						<label for="email" class="emailBox" style="    color: #fe4350;    text-align: left;    width: 100%;    margin: 0;">Email</label><br>
        						<input class="form-control" placeholder="Username" name="email"  id="email" > 
        					</div>
        					<div class="mt-3 px-3"> 
        						<label for="password" class="emailBox" style="    color: #fe4350;    text-align: left;    width: 100%;    margin: 0;">Passsword</label><br>
        						<input class="form-control" placeholder="Password"  name="password" id="userPassword" type ='password'> 
        					</div>
        					<div class="mt-3 d-grid px-3"> 
        						 
        						<button onclick = "data()" class="button button3">LOGIN</button>
        					</div>
        					<div class="px-3">
        						<div class="mt-2 form-check d-flex flex-row">
        							<a class="link" href="https://techyroots.com/ICO-admin-dashboard/" style="color:#fe4350">  Don't Have an account?login Here  </a> 
        						</div>
        						
        					</div>
        					<div>
        						    <a class="link" href="https://techyroots.com/ICO-admin-dashboard/forgetpass.php" style="color:#fe4350">  Forget Password  </a> 
        						</div>
        				</div>
        			</div>
        		</div>
			</main>
			<footer class="nk-footer bg-theme-red" style="background-color:#fe4350">
				<!-- // --> 
				<section class="section section-footer tc-light bg-transparent">
					<div class="container">
						<!-- Block @s --> 
						<div class="nk-block block-footer">
							<div class="row">
								
								<!-- .col --> 
								<div class="col-lg-6 mb-4 mb-lg-0 order-lg-first">
									<div class="wgs wgs-text">
										<div class="wgs-body">
											<a href="./" class="wgs-logo"> <img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo"> </a> 
											<p>Copyright © 2018 ICO Crypto. <br>ABN: 2018AD947. All rights reserved. </p>
											<p class="copyright-text">Template by <a href="https://softnio.com/">Softnio</a>. Handcrafted by iO.</p>
										</div>
									</div>
								</div>
								<!-- .col --> 
							</div>
							<!-- .row --> 
						</div>
						<!-- .block @e --> 
					</div>
				</section>
				<div class="nk-ovm shape-b"></div>
			</footer>
		</div>
		<div class="preloader"><span class="spinner spinner-round"></span></div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<!-- JavaScript -->	<script src="assets/js/jquery.bundle.js?ver=1930"></script>	<script src="assets/js/scripts.js?ver=1930"></script>	<script src="assets/js/charts.js"></script>
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