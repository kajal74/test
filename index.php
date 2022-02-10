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
<title>ICO Crypto Admin DashBoard</title>
<!-- Bundle and Base CSS -->
<link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=1930">
<link rel="stylesheet" href="assets/css/style-zinnia.css?ver=1930" id="changeTheme">
<!-- Extra CSS -->
<link rel="stylesheet" href="assets/css/theme.css?ver=1930">

<script src="https://cdn.jsdelivr.net/npm/web3@1.3.5/dist/web3.min.js"></script>
<script src="vendor/web3/dist/web3.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
 #clockdiv{
	font-family: sans-serif;
	color: #fe4350;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 30px;
	    padding-bottom: 50px;
}

#clockdiv > div{
	padding: 10px;
	border-radius: 3px;
	background: #fe4350;
	display: inline-block;
}

#clockdiv div > span{
	padding: 15px;
	border-radius: 3px;
	background: #fff;
	display: inline-block;
	width: 80px;
}

.smalltext{
    color: #fff;
}

 .timer{
    text-align: center;
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

.swal-button {
  padding: 7px 19px;
  border-radius: 2px;
  background-color: #fe4350;
  font-size: 12px;
  border: 1px solid #fe4350;
 
}
.swal2-icon.swal2-error {
  border-color: #fe4350 !important;
}
</style>
</head>
    


    <body class="nk-body body-wider mode-onepage">

	<div class="nk-wrap">
		<header class="nk-header page-header is-transparent is-sticky is-shrink" id="header">
		    <!-- Header @s -->
            <div class="header-main">
                <div class="header-container header-container-s1">
                    <div class="header-wrap">
                        <!-- Logo @s -->
                        <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                            <a href="./" class="logo-link">
                                <img class="logo-dark" src="images/logo.png" srcset="images/logo2x.png 2x" alt="logo">
                                <img class="logo-light" src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo">
                            </a>
                        </div>

                        <!-- Menu Toogle @s -->
                        <div class="header-nav-toggle">
                            <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                                <div class="toggle-line">
                                    <span></span>
                                </div>
                            </a>
                        </div>

                        <!-- Menu @s -->
                        <div class="header-navbar header-navbar-s1">
                            <nav class="header-menu justify-content-between" id="header-menu">
                                <ul class="menu animated remove-animation" data-animate="fadeInDown" data-delay=".75">
                                </ul>
                                <ul class="menu-btns align-items-center animated remove-animation" data-animate="fadeInDown" data-delay=".85">
                                    <li class="language-switcher language-switcher-s1 toggle-wrap">
                                        <a class="toggle-tigger" href="#">English</a>
                                        <ul class="toggle-class toggle-drop toggle-drop-left drop-list drop-list-sm">
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Chinese</a></li>
                                            <li><a href="#">Hindi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="email.php" class="btn btn-md btn-round btn-outline btn-auto btn-primary"><span></span>Sign Up</span></a></li>
                                    <li><a href="page-login.php" class="btn btn-md btn-round btn-outline btn-auto btn-primary"><span></span>Login</span></a></li>
                                    <li><a href="#" class="btn btn-md btn-round btn-outline btn-auto btn-primary" id="owner" data-toggle="modal" data-target="#myModal"><span></span>Admin</span></a></li>
                                    <li><a href="#" class="btn btn-md btn-round btn-outline btn-auto btn-primary" onclick="unlock()" id="changetext"><span>Connect Wallet</span></a></li>
                                    <li><a  href="logout.php" class="btn btn-md btn-round btn-outline btn-auto btn-primary" id="logout"><span></span>Logout</span></a></li>
                                </ul>
                            </nav>
                        </div><!-- .header-navbar @e -->
                    </div>                                                
                </div>
            </div><!-- .header-main @e -->

			<!-- Banner @s -->
            <div class="header-banner bg-theme-grad-alt">
                <div class="nk-banner">
                    <div class="banner banner-fs banner-single banner-with-token-box-s1">
                        <div class="ui-shape ui-shape-header ui-shape-light"></div>
                        <div class="banner-wrap">
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-sm-10 col-md-10 col-xl-9">
                                        <div class="banner-caption tc-light text-center">
                                            <div class="cpn-title animated" data-animate="fadeInUp" data-delay="1.25">
                                                <h1 class="title title-xl-s2 title-semibold">The World’s 1<sup>st</sup> ICO Platform That Offers Rewards Contributors</h1>
                                            </div>
                                            <div class="cpn-text cpn-text-center">
                                                <p class="lead animated" data-animate="fadeInUp" data-delay="1.35">ICO aims to become the leading digital ICO <br class="d-none d-md-block">base template in worldwide</p>
                                            </div>
                                            <div class="cpn-btns">
                                                <ul class="btn-grp justify-content-center animated" data-animate="fadeInUp" data-delay="1.45">
                                                    <li data-toggle="modal" data-target="#Modal"><a href="#" class="btn btn-md btn-round btn-with-icon btn-light">
                                                        <span>Buy Token</span> 
                                                        <em class="icon fas fa-angle-double-right"></em>
                                                    </a></li>
                                                    <li><a href="#" class="btn btn-md btn-round btn-with-icon btn-light">
                                                        <span>White Paper</span> 
                                                        <em class="icon fas fa-angle-double-right"></em>
                                                    </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                            <div class="banner-social-wrap text-center animated" data-animate="fadeIn" data-delay="1.55">
                                <ul class="banner-social banner-social-vertical">
                                    <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                                    <li><a href="#"><em class="fab fa-youtube"></em></a></li>
                                    <li><a href="#"><em class="fab fa-github"></em></a></li>
                                    <li><a href="#"><em class="fab fa-bitcoin"></em></a></li>
                                    <li><a href="#"><em class="fab fa-medium-m"></em></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-ovm mask-b mask-contain-bottom"></div>
                </div><!-- .nk-banner -->
                <div class="token-box token-box-s1 animated" data-animate="fadeInUp" data-delay="1.65">
                    <div class="container">
                        <div class="row no-gutters justify-content-center">
                            <div class="col-xl-4 col-md-5">
                                <div class="token-countdown-wrapper split split-left split-md-left">
                                    <h5 class="title-sm">Pre-sale is Live Now</h5>
                                    <h6>Pre-Sale ends in</h6>
                                    <div class="countdown-small countdown-s3 countdown" data-date="2021/08/10" data-day-text="D" data-hour-text="H" data-min-text="M" data-sec-text="S"></div>
                                </div>
                            </div><!-- .col  -->
                            <div class="col-xl-6 col-md-7">
                                <div class="token-status token-status-s1 bg-theme tc-light text-left split split-right split-md-right">
                                    <h5 class="title-sm">Pre Sale</h5>
                                    <div class="progress-bar progress-bar-s1">
                                        <div class="progress-percent progress-percent-s1 bg-theme-grad-alt" data-percent="30"></div>
                                    </div>
                                    <div class="progress-points"><span>15k Sold</span> <span>75k Sold</span></div>
                                </div>
                            </div><!-- .col  -->
                        </div><!-- .row  -->
                    </div><!-- .container  -->
                </div>
                
                <!-- Place Particle Js -->
				<div id="particles-bg" class="particles-container particles-bg"></div>
            </div>
            <div class="gap-5x"></div>
            <div class="gap-10x d-md-none"></div>
            <div class="gap-5x d-sm-none"></div>
			<!-- .header-banner @e -->            
		</header>
        <main class="nk-pages">
            <section class="section bg-white pb-0 ov-h" id="about">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block nk-block-about text-center">
                        <div class="row justify-content-center gutter-vr-30px">
                            <div class="col-lg-10">
                                <div class="section-head section-head-about">
                                    <h2 class="title fw-6 animated" data-animate="fadeInUp" data-delay=".1">About ICO</h2>
                                    <p class="fw-4 tc-dark animated" data-animate="fadeInUp" data-delay=".2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-8">
                                <!--<div class="nk-block-video tc-light animated" data-animate="fadeInUp" data-delay=".3">-->
                                <!--    <img src="images/video/c.png" alt="">-->
                                <!--    <a href="https://www.youtube.com/watch?v=SSo_EIwHSd4" class="nk-block-video-play video-popup btn-play btn-play-s3">-->
                                <!--    <svg class="btn-play-icon-s2" viewBox="0 0 24 34"><path fill-rule="evenodd" d="M0.212,32.552 C0.427,32.851 0.769,33.010 1.117,33.010 C1.337,33.010 1.559,32.947 1.752,32.814 L23.521,17.879 C23.816,17.678 23.991,17.350 23.991,16.998 C23.991,16.646 23.816,16.319 23.521,16.115 L1.752,1.181 C1.415,0.950 0.972,0.922 0.606,1.107 C0.240,1.292 0.010,1.661 0.010,2.064 L0.010,22.480 C0.010,23.076 0.506,23.558 1.116,23.558 C1.727,23.558 2.222,23.076 2.222,22.480 L2.222,4.142 L20.963,16.998 L0.479,31.049 C-0.020,31.393 -0.140,32.066 0.212,32.552 Z"/></svg>-->
                                <!--    </a>-->
                                <!--</div>-->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
            <section class="timer">
                         <div id="clockdiv">
                                          <div style="width:130px;height:170px">
                                            <span class="days" id="days">00</span>
                                            <div class="smalltext">Days</div>
                                          </div>
                                          <div style="width:130px;height:170px">
                                            <span class="hours" id="hours">00</span>
                                            <div class="smalltext">Hours</div>
                                          </div>
                                          <div style="width:130px;height:170px">
                                            <span class="minutes" id="minutes">00</span>
                                            <div class="smalltext">Minutes</div>
                                          </div>
                                          <div style="width:130px;height:170px">
                                            <span class="seconds" id="seconds">00</span>
                                            <div class="smalltext">Seconds</div>
                                          </div>
                                          <p id="demo"></p>
                                        </div>     
            </section>
            <!-- // -->
            <!--<section class="section bg-white" id="why">-->
            <!--    <div class="ui-shape ui-shape-s1"></div>-->
            <!--    <div class="container">-->
            <!--        <div class="nk-block nk-block-about">-->
            <!--            <div class="row align-items-center gutter-vr-30px">-->
            <!--                <div class="col-lg-5 text-center text-lg-left">-->
            <!--                    <div class="nk-block-text">-->
            <!--                        <h2 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".1">Direct-To-Consumer Decentralize Platform</h2>-->
            <!--                        <p class="tc-dark animated" data-animate="fadeInUp" data-delay=".2"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</strong></p>-->
            <!--                        <p class="animated" data-animate="fadeInUp" data-delay=".3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia</p>-->
            <!--                        <p class="animated" data-animate="fadeInUp" data-delay=".4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-7">-->
            <!--                    <div class="nk-block-img nk-block-img-s2 text-center text-lg-left animated" data-animate="fadeInUp" data-delay=".5">-->
            <!--                        <img src="images/zinnia/gfx-f.png" alt="">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div><-->
            <!--        </div><-->
            <!--    </div>-->
            <!--</section>-->
            <!-- // -->
            <!--<section class="section bg-light-alt" id="benifits">-->
            <!--    <div class="ui-shape ui-shape-s2"></div>-->
            <!--    <div class="container">-->
            <!--        <div class="section-head section-head-s8 wide-auto-sm text-center">-->
            <!--            <h2 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".1">ICO Problem &amp; Solution</h2>-->
            <!--            <p class="animated" data-animate="fadeInUp" data-delay=".2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praes entium volup tatum deleniti.</p>-->
            <!--        </div>-->
                    
            <!--        <div class="nk-block mgt-m30">-->
            <!--            <div class="feature-carousel-s1 has-carousel has-carousel-overlap carousel-nav-center carousel-nav-s1 owl-carousel" data-items="1" data-navs="true" data-loop="true" data-animate-out="fadeOut">-->
            <!--                <div class="feature">-->
            <!--                    <div class="row no-gutters">-->
            <!--                        <div class="col-md-6 col-sm-12 animate-left delay-5ms">-->
            <!--                            <div class="feature-s10 feature-s10-left round bg-white">-->
            <!--                                <h2 class="title title-bold title-s4">Problem</h2>-->
            <!--                                <h5 class="title-sm">Crypto Investors</h5>-->
            <!--                                <ul class="list list-dot list-dot-s2">-->
            <!--                                    <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>-->
            <!--                                    <li>Natural Language Understanding</li>-->
            <!--                                    <li>How to network with other investors / like-minded people?</li>-->
            <!--                                </ul>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-6 col-sm-12 animate-right delay-7ms">-->
            <!--                            <div class="feature-s10 feature-s10-right round bg-theme tc-light">-->
            <!--                                <h2 class="title title-bold title-s4">Solution</h2>-->
            <!--                                <h5 class="title-sm">Centralize Network</h5>-->
            <!--                                <ul class="list list-dot list-dot-s2">-->
            <!--                                    <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>-->
            <!--                                    <li>Natural Language Understanding</li>-->
            <!--                                    <li>How to network with other investors / like-minded people?</li>-->
            <!--                                </ul>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="feature">-->
            <!--                    <div class="row no-gutters">-->
            <!--                        <div class="col-md-6 col-sm-12 animate-left delay-5ms">-->
            <!--                            <div class="feature-s10 feature-s10-left round bg-white">-->
            <!--                                <h2 class="title title-bold title-s4">Problem</h2>-->
            <!--                                <h5 class="title-sm">Crypto Investors</h5>-->
            <!--                                <ul class="list list-dot list-dot-s2">-->
            <!--                                    <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>-->
            <!--                                    <li>Natural Language Understanding</li>-->
            <!--                                    <li>How to network with other investors / like-minded people?</li>-->
            <!--                                </ul>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-6 col-sm-12 animate-right delay-7ms">-->
            <!--                            <div class="feature-s10 feature-s10-right round bg-theme tc-light">-->
            <!--                                <h2 class="title title-bold title-s4">Solution</h2>-->
            <!--                                <h5 class="title-sm">Centralize Network</h5>-->
            <!--                                <ul class="list list-dot list-dot-s2">-->
            <!--                                    <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>-->
            <!--                                    <li>Natural Language Understanding</li>-->
            <!--                                    <li>How to network with other investors / like-minded people?</li>-->
            <!--                                </ul>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <!-- // -->
            <section class="bg-theme section tc-light ov-h" id="tokensale">
                <!-- Block @s -->
                <div class="nk-block nk-block-token mgb-m30">
                    <div class="section-head text-center wide-auto">
                        <h4 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".1">ICO Tokens Details</h4>
                    </div>
                    <div class="tokdis-list">
                        <div class="container">
                            <div class="row text-center text-lg-left">
                                <div class="col-md">
                                    <div class="tokdis-item animated" data-animate="fadeInUp" data-delay=".2">
                                        <span>Tokens Offered</span>
                                        <h5>20M</h5>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md">
                                    <div class="tokdis-item animated" data-animate="fadeInUp" data-delay=".3">
                                        <span>Soft Cap (Public ICO)</span>
                                        <h5>$4M</h5>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md">
                                    <div class="tokdis-item animated" data-animate="fadeInUp" data-delay=".4">
                                        <span>Hard Cap</span>
                                        <h5>20 million</h5>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-4">
                                    <div class="tokdis-item animated" data-animate="fadeInUp" data-delay=".5">
                                        <span>Tokens Distributed</span>
                                        <h5>30 days after token sale ends</h5>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>
                    </div>
                    <div class="toktmln-list">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".6">
                                        <div>
                                            <span>Token Sale I</span>
                                            <span>January 15- February 15</span>
                                        </div>
                                        <div>
                                            <span>67% Bonus</span>
                                            <span>$0.354344/token</span>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg">
                                    <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".7">
                                        <div>
                                            <span>Token Sale II</span>
                                            <span>March 01 - March 15</span>
                                        </div>
                                        <div>
                                            <span>40% Bonus</span>
                                            <span>$0.354344/token</span>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg">
                                    <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".8">
                                        <div>
                                            <span>Token Sale III</span>
                                            <span>March 25- April 15</span>
                                        </div>
                                        <div>
                                            <span>20% Bonus</span>
                                            <span>$0.354344/token</span>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg">
                                    <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".9">
                                        <div>
                                            <span>Token Sale VI</span>
                                            <span>April 20- May 20</span>
                                        </div>
                                        <div>
                                            <span>50% Bonus</span>
                                            <span>$0.304344/token</span>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg">
                                    <div class="toktmln-item animated" data-animate="fadeInUp" data-delay="1">
                                        <div>
                                            <span>Token Sale V</span>
                                            <span>June 01 - July 30</span>
                                        </div>
                                        <div>
                                            <span>30% Bonus</span>
                                            <span>$0.354344/token</span>
                                        </div>
                                        </div>
                                        <div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>
                    </div>
                </div><!-- .block @e -->
                <!-- .section-tokensale -->
                <div class="nk-ovm shape-n"></div>
            </section>
            <!-- // -->
            <section class="bg-white ov-h section">
                    <div class="ui-shape ui-shape-s1"></div>
                    <!-- Section Head @s -->
                    <div class="section-head text-center wide-auto">
                        <h4 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".1">Token Allocation Forecast</h4>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block nk-block-token">
                        <div class="container">
                            <div class="tab-s1 text-center">
                                <ul class="nav tab-nav-s4 text-center bg-theme-grad animated" data-animate="fadeInUp" data-delay=".2">
                                    <li><a data-toggle="tab" href="#tab-dist-1">Distribution </a></li>
                                    <li><a class="active show" data-toggle="tab" href="#tab-fund-1">Funding Allocation</a></li>
                                </ul>
                                <div class="gap-3x d-none d-lg-block"></div>
                                <div class="gap-10x d-none d-lg-block"></div>
                                <div class="tab-content">
                                    <div class="tab-pane fade animate" id="tab-dist-1">
                                        <div class="token-alocate-item token-alocate-item-s1 shadow-none mb-0">
                                            <div class="token-alocate-graph token-alocate-graph-s1 animated" data-animate="fadeInUp" data-delay="0.4">
                                                <canvas class="chart-canvas chart-canvas-s1" id="token-alocate-4"></canvas>
                                            </div>
                                            <ul class="chart-data-s1" data-canvas="token-alocate-4" data-canvas-type="doughnut" data-border-color="#F5F6F9">
                                                <li data-color="#fe4350" data-title="Token Sale Program" data-amount="60"></li>
                                                <li data-color="#fb6b5d" data-title="Reserve Fund" data-amount="8"></li>
                                                <li data-color="#ff5676" data-title="Team and Founders" data-amount="15"></li>
                                                <li data-color="#ff774e" data-title="Board Advisors" data-amount="4"></li>
                                                <li data-color="#ff6993" data-title="Ecosystem Development" data-amount="7"></li>
                                                <li data-color="#ff6993" data-title="Marketing and Bounty" data-amount="6"></li>
                                            </ul>
                                        </div>
                                    </div><!-- End tab-pane -->
                                    <div class="tab-pane fade show animate active" id="tab-fund-1">
                                        <div class="token-alocate-item token-alocate-item-s1 shadow-none mb-0">
                                            <div class="token-alocate-graph token-alocate-graph-s1 animated" data-animate="fadeInUp" data-delay="0.4">
                                                <canvas class="chart-canvas chart-canvas-s1" id="token-alocate-5"></canvas>
                                            </div>
                                            <ul class="chart-data-s1" data-canvas="token-alocate-5" data-canvas-type="doughnut" data-border-color="#F5F6F9">
                                                <li data-color="#fe4350" data-title="Product Develoment" data-amount="40"></li>
                                                <li data-color="#fb6b5d" data-title="Business Development" data-amount="12"></li>
                                                <li data-color="#ff5676" data-title="Marketing" data-amount="20"></li>
                                                <li data-color="#ff774e" data-title="Legal & Regulation" data-amount="10"></li>
                                                <li data-color="#ff6993" data-title="Partner/Investor" data-amount="6"></li>
                                                <li data-color="#ff9465" data-title="Operational" data-amount="8"></li>
                                                <li data-color="#fb7fc8" data-title="Contingency" data-amount="4"></li>
                                            </ul>
                                        </div>
                                    </div><!-- End tab-pane -->
                                </div>
                            </div>
                        </div>
                    </div><!-- .block @e -->
                    <!-- .section-tokensale -->
            </section>
            <!-- // -->
            <section class="section bg-theme tc-light ov-h" id="documents">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block nk-block-text-wrap">
                        <div class="row align-items-center gutter-vr-30px">
                            <div class="col-lg-5">
                                <div class="nk-block-img nk-block-img-s2 text-center text-lg-left animated" data-animate="fadeInUp" data-delay=".1">
                                    <img src="images/zinnia/cover-a-white.png" alt="">
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-7 text-center text-lg-left">
                                <div class="nk-block-text">
                                    <div class="section-head">
                                        <h2 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".2">Read Our Documents</h2>
                                        <p class="animated" data-animate="fadeInUp" data-delay=".3">Here is our full documents that help you to understand about us. And lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <ul class="list list-btn-dropdown">
                                        <li class="drop-wrap animated" data-animate="fadeInUp" data-delay=".4">
                                            <a class="btn btn-md btn-round btn-with-icon btn-alt btn-outline btn-light toggle-tigger" href="#">
                                                <span>White Paper</span>
                                                <em class="icon fas fa-caret-down"></em>
                                            </a>
                                            <ul class="drop-list drop-list-full drop-list-center toggle-class toggle-drop">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Dutch</a></li>
                                                <li><a href="#">France</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop-wrap animated" data-animate="fadeInUp" data-delay=".5">
                                            <a class="btn btn-round btn-md btn-with-icon btn-alt btn-outline btn-light toggle-tigger" href="#">
                                                <span>One Pager</span>
                                                <em class="icon fas fa-caret-down"></em>
                                            </a>
                                            <ul class="drop-list drop-list-full drop-list-center toggle-class toggle-drop">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Dutch</a></li>
                                                <li><a href="#">France</a></li>
                                            </ul>
                                        </li>
                                        <li class="animated" data-animate="fadeInUp" data-delay=".6">
                                            <a class="btn btn-round btn-md btn-outline btn-light" href="#">
                                                Privacy &amp; Policy
                                            </a>
                                        </li>
                                        <li class="animated" data-animate="fadeInUp" data-delay=".7">
                                            <a class="btn btn-round btn-md btn-outline btn-light" href="#">
                                                Terms of coin sale
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
                <div class="nk-ovm shape-n"></div>
            </section>
            <!-- // -->
            <!--<section class="section bg-white" id="services">-->
            <!--    <div class="ui-shape ui-shape-s4"></div>-->
            <!--    <div class="container">-->
                    
            <!--        <div class="section-head text-center wide-auto-sm">-->
            <!--            <h4 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".1">Our Technology Services</h4>-->
            <!--            <p class=" animated" data-animate="fadeInUp" data-delay=".2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praes entium volup tatum deleniti.</p>-->
            <!--        </div><-->
                    
            <!--        <div class="nk-block nk-block-features">-->
            <!--            <div class="row align-items-center gutter-vr-30px">-->
            <!--                <div class="col-lg-7">-->
            <!--                    <div class="row justify-content-between text-center text-lg-left">-->
            <!--                        <div class="col-xl-5 col-md-6">-->
            <!--                            <div class="feature feature-s7 animated" data-animate="fadeInUp" data-delay=".4">-->
            <!--                                <div class="feature-icon feature-icon-s1">-->
            <!--                                    <em class="icon icon-md ikon ikon-cash-1"></em>-->
            <!--                                </div>-->
            <!--                                <div class="feature-text">-->
            <!--                                    <h5 class="title-sm tc-alternet">Easy to Buy &amp; Sale Token</h5>-->
            <!--                                    <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eiusm od tempor incididunt.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-xl-5 col-md-6">-->
            <!--                            <div class="feature feature-s7 animated" data-animate="fadeInUp" data-delay=".5">-->
            <!--                                <div class="feature-icon feature-icon-s1">-->
            <!--                                    <em class="icon icon-md ikon ikon-icon"></em>-->
            <!--                                </div>-->
            <!--                                <div class="feature-text">-->
            <!--                                    <h5 class="title-sm tc-alternet">Responsive Design</h5>-->
            <!--                                    <p>Placeat facere possimus, omnis voluptas assum enda est, omnis dolor repellendus. </p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-xl-5 col-md-6">-->
            <!--                            <div class="feature feature-s7 animated" data-animate="fadeInUp" data-delay=".6">-->
            <!--                                <div class="feature-icon feature-icon-s1">-->
            <!--                                    <em class="icon icon-md ikon ikon-user-chat"></em>-->
            <!--                                </div>-->
            <!--                                <div class="feature-text">-->
            <!--                                    <h5 class="title-sm tc-alternet">Easy to Communicate</h5>-->
            <!--                                    <p>Nam libero tempore, cum soluta nobis est optio cumque nihil impedit quo minus id quod.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-xl-5 col-md-6">-->
            <!--                            <div class="feature feature-s7 animated" data-animate="fadeInUp" data-delay=".7">-->
            <!--                                <div class="feature-icon feature-icon-s1">-->
            <!--                                    <em class="icon icon-md ikon ikon-shiled-3"></em>-->
            <!--                                </div>-->
            <!--                                <div class="feature-text">-->
            <!--                                    <h5 class="title-sm tc-alternet">Safe &amp; Secure</h5>-->
            <!--                                    <p>Nam libero tempore, cum soluta nobis est optio cumque nihil impedit quo minus id quod.</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="d-flex justify-content-center justify-content-lg-start">-->
            <!--                        <ul class="btn-grp animated" data-animate="fadeInUp" data-delay=".8">-->
            <!--                            <li><a href="#" class="btn btn-grad btn-round btn-md">Download Now</a></li>-->
            <!--                            <li>-->
            <!--                                <ul class="btn-grp gutter-15px">-->
            <!--                                    <li><a href="#"><em class="fab fa-apple"></em></a></li>-->
            <!--                                    <li><a href="#"><em class="fab fa-android"></em></a></li>-->
            <!--                                    <li><a href="#"><em class="fab fa-windows"></em></a></li>-->
            <!--                                </ul>-->
            <!--                            </li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-5 order-first order-lg-last">-->
            <!--                    <div class="nk-block-img nk-block-img-s2 text-center text-lg-left animated" data-animate="fadeInUp" data-delay=".3">-->
            <!--                        <img src="images/zinnia/sc-large-j.png" alt="">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div><-->
            <!--    </div>-->
            <!--</section>-->
            <!-- // -->
            <section class="section-head text-center wide-auto" id="roadmap">
                <canvas class="chart-canvas chart-canvas-s1" id="token-alocate-5"></canvas> 
                 <!--<div class="ui-shape ui-shape-s3"></div>-->
                 <!--<div class="ui-shape ui-shape-header ui-shape-light"></div>-->
                <div class="container">
                    <!-- Section Head @s -->
                    <div class="section-head text-center wide-auto-sm">
                        <h4 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".1">Roadmap</h4>
                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Our team working hardly to make archive lorem ipsum dolor sit amet, consectetur  amet, consectetur adipiscing elit. </p>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->

                     <div class="section-head text-center wide-auto-sm"></div>
                    <div class="nk-block">
                     

                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                
                                <div class="roadmap-all mgb-m50 animated" data-animate="fadeInUp" data-delay=".3">
                                    <div class="roadmap-wrap roadmap-wrap-done roadmap-wrap-s1 mb-0">
                                        <div class="row no-gutters">
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 roadmap-done text-lg-center">
                                                    
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2017 Q1</span>
                                                            <span class="roadmap-title roadmap-title-s1">Concept</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Concept Generation</li>
                                                            <li>Team Assemble</li>
                                                        </ul>
                                                    </div>
                                                 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 roadmap-done text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2017 Q2</span>
                                                            <span class="roadmap-title roadmap-title-s1">Research</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Proving the concept can work</li>
                                                            <li>Strategic Plan</li>
                                                            <li>White paper conpletion</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="ui-shape ui-shape-s3"></div>
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 roadmap-done text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2018 Q1</span>
                                                            <span class="roadmap-title roadmap-title-s1">Design</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Platform design and technical demonstration</li>
                                                            <li>Building the MVP</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                             
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 roadmap-done text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2018 Q2</span>
                                                            <span class="roadmap-title roadmap-title-s1">Pre-Sale</span>
                                                             <div class="ui-shape ui-shape-header ui-shape-light"></div>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Public financing &amp; Seed funding raised</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div>
                                   
                                    <div class="ui-shape ui-shape-header ui-shape-light"></div>
                                    <div class="roadmap-wrap roadmap-wrap-s1 mb-0">
                                        <div class="row flex-row-reverse no-gutters">
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-current roadmap-s1 text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2018 Q3</span>
                                                            <span class="roadmap-title roadmap-title-s1">App Beta Test</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Private closed beta</li>
                                                            <li>Open beta launched to public and improvement the app</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2018 Q4</span>
                                                            <span class="roadmap-title roadmap-title-s1">Token Sale</span>
                                                        </div>
                                                        
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>ICO Press Tour</li>
                                                            <li>Open global sales of ICOblock token</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2018 Q1</span>
                                                            <span class="roadmap-title roadmap-title-s1">Alpha Test</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>In-house testing of functional</li>
                                                            <li>Prototype published and linked to Ethereum blockchain with real-time scanning</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div>
                                    <div class="ui-shape ui-shape-header ui-shape-light"></div>
                                    <div class="roadmap-wrap roadmap-wrap-s1 mb-lg-0">
                                        <div class="row no-gutters">
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 text-lg-center">
                                                    
                                                    <div class="roadmap-step roadmap-step-s1">
                                                       
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2019 Q2</span>
                                                            <span class="roadmap-title roadmap-title-s1">Crowdfunding Integration</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Smart contracts support creators</li>
                                                            <li>Ethereum tokens support</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="ui-shape ui-shape-s3"></div><!-- .col -->
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2019 Q3</span>
                                                            <span class="roadmap-title roadmap-title-s1">Community Benefits</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Establishing global user base</li>
                                                            <li>US start retailer selection</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2019 Q3</span>
                                                            <span class="roadmap-title roadmap-title-s1">Hardware things</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Integration of third party controllers</li>
                                                            <li>Marketplace cooperative module</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-lg">
                                                <div class="roadmap roadmap-s1 text-lg-center">
                                                    <div class="roadmap-step roadmap-step-s1">
                                                        <div class="roadmap-head roadmap-head-s1">
                                                            <span class="roadmap-time roadmap-time-s1">2020 Q1</span>
                                                            <span class="roadmap-title roadmap-title-s1">More Operational</span>
                                                        </div>
                                                        <ul class="roadmap-step-list roadmap-step-list-s1">
                                                            <li>Integration with Private Chains, More Coin in Wallet</li>
                                                            <li>New services offered by members or business</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
                <div class="nk-ovm shape-n"></div>
            </section>
            <!-- // -->
            
          
            <!-- // -->
            <section class="section bg-theme tc-light" id="partners">
                <div class="container">
                    <!-- Section Head @s -->
                    <div class="section-head text-center wide-auto-sm">
                        <h4 class="title-lg title-semibold animated" data-animate="fadeInUp" data-delay=".1">Our Partners</h4>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block block-partners">
                        <ul class="partner-list partner-list-s2 flex-wrap">
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".15"><img src="images/partners/a-xs-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".2"><img src="images/partners/b-xs-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".25"><img src="images/partners/c-xs-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".3"><img src="images/partners/d-xs-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".35"><img src="images/partners/e-xs-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".4"><img src="images/partners/f-xs-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".45"><img src="images/partners/a-sm-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".5"><img src="images/partners/b-sm-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".55"><img src="images/partners/c-sm-light.png" alt="partner"></li>
                            <li class="partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".6"><img src="images/partners/d-sm-light.png" alt="partner"></li>
                        </ul>
                    </div>
                    <!-- Block @e -->
                </div>
            </section>
           
            <!-- // -->
            <section class="section section-contact bg-light-alt" id="contact">
                <div class="ui-shape ui-shape-s7"></div>
                <div class="container">
                    <!-- Section Head @s -->
                    <div class="section-head text-center wide-auto">
                        <h4 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".1">Contact ICO CRYPTO</h4>
                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Any question? Reach out to us and we’ll get back to you shortly.</p>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block block-contact">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-10 col-xl-8">
                                <ul class="contact-list contact-list-s1 flex-wrap flex-md-nowrap pdb-l">
                                    <li class="animated" data-animate="fadeInUp" data-delay=".3">
                                        <em class="contact-icon fas fa-phone"></em>
                                        <div class="contact-text">
                                            <span>+44 0123 4567</span>
                                        </div>
                                    </li>
                                    <li class="animated" data-animate="fadeInUp" data-delay=".4">
                                        <em class="contact-icon fas fa-envelope"></em>
                                        <div class="contact-text">
                                            <span>info@company.com</span>
                                        </div>
                                    </li>
                                    <li class="animated" data-animate="fadeInUp" data-delay=".5">
                                        <em class="contact-icon fas fa-paper-plane"></em>
                                        <div class="contact-text">
                                            <span>Join us on Telegram</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                            <div class="col-lg-8">
                                <div class="contact-wrap-2">
                                    <form id="contact-form" class="nk-form-submit" action="form/contact.php" method="post">
                                        <div class="field-item field-item-center animated" data-animate="fadeInUp" data-delay=".6">
                                            <input name="contact-name" type="text" class="input-line required">
                                            <label class="field-label field-label-line">Your Name</label>
                                        </div>
                                        <div class="field-item field-item-center animated" data-animate="fadeInUp" data-delay=".7">
                                            <input name="contact-email" type="email" class="input-line required email">
                                            <label class="field-label field-label-line">Your Email</label>
                                        </div>
                                        <div class="field-item field-item-center animated" data-animate="fadeInUp" data-delay=".8">
                                            <textarea name="contact-message" class="input-line input-textarea required"></textarea>
                                            <label class="field-label field-label-line">Your Message</label>
                                        </div>
                                        <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                        <div class="row animated" data-animate="fadeInUp" data-delay=".9">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-md btn-grad btn-grad-theme btn-round">Submit</button>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-results"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
        </main>
        <footer class="nk-footer bg-theme-grad-alt">
        <!--    <section class="section section-l section-footer pb-0 tc-light tc-light-alt bg-transparent ov-h">-->
        <!--        <div class="ui-shape ui-shape-footer ui-shape-light"></div>-->
        <!--        <div class="container">-->
                    <!-- Block @s -->
        <!--            <div class="nk-block block-footer">-->
        <!--                <div class="row my-md-0 mb-n4">-->
        <!--                    <div class="col-lg-3 col-sm-4">-->
        <!--                        <div class="wgs wgs-menu">-->
        <!--                            <h6 class="wgs-title wgs-title-s2 text-white animated" data-animate="fadeInUp" data-delay=".1">FEATURES</h6>-->
        <!--                            <div class="wgs-body">-->
        <!--                                <ul class="wgs-links wgs-links-uline wgs-links-s2 animated" data-animate="fadeInUp" data-delay=".2">-->
        <!--                                    <li><a href="#">Live Chat</a></li>-->
        <!--                                    <li><a href="#">Email Marketing</a></li>-->
        <!--                                    <li><a href="#">User Analytics</a></li>-->
        <!--                                    <li><a href="#">User Analytics</a></li>-->
        <!--                                    <li><a href="#">Crypto Exchange</a></li>-->
        <!--                                </ul>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div><!-- .col -->
        <!--                    <div class="col-lg-3 col-sm-4">-->
        <!--                        <div class="wgs wgs-menu">-->
        <!--                            <h6 class="wgs-title wgs-title-s2 text-white animated" data-animate="fadeInUp" data-delay=".3">RESOURCES</h6>-->
        <!--                            <div class="wgs-body">-->
        <!--                                <ul class="wgs-links wgs-links-uline wgs-links-s2 animated" data-animate="fadeInUp" data-delay=".4">-->
        <!--                                    <li><a href="#">Watch Demo</a></li>-->
        <!--                                    <li><a href="#">Whitepaper</a></li>-->
        <!--                                    <li><a href="#">Intigration &amp; API</a></li>-->
        <!--                                    <li><a href="#">iOS &amp; Android Apps</a></li>-->
        <!--                                    <li><a href="#">Privacy &amp; policy</a></li>-->
        <!--                                </ul>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div><!-- .col -->
        <!--                    <div class="col-lg-3 col-sm-4">-->
        <!--                        <div class="wgs wgs-menu">-->
        <!--                            <h6 class="wgs-title wgs-title-s2 text-white animated" data-animate="fadeInUp" data-delay=".5">COMPANY</h6>-->
        <!--                            <div class="wgs-body">-->
        <!--                                <ul class="wgs-links wgs-links-uline wgs-links-s2 animated" data-animate="fadeInUp" data-delay=".6">-->
        <!--                                    <li><a href="#">Home</a></li>-->
        <!--                                    <li><a href="#">About</a></li>-->
        <!--                                    <li><a href="#">Blog</a></li>-->
        <!--                                    <li><a href="#">FAQ</a></li>-->
        <!--                                    <li><a href="#">Contact Us</a></li>-->
        <!--                                </ul>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div><!-- .col -->
        <!--                    <div class="col-lg-3 col-md">-->
        <!--                        <div class="wgs wgs-subscribe-form">-->
        <!--                            <h6 class="wgs-title wgs-title-s2 text-white animated" data-animate="fadeInUp" data-delay=".7">NewsLetter</h6>-->
        <!--                            <div class="wgs-body">-->
        <!--                                <div class="wgs-subscribe">-->
        <!--                                    <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed</p>-->
        <!--                                    <form action="form/subscribe.php" class="nk-form-submit" method="post">-->
        <!--                                        <div class="field-inline field-inline-s3 field-split animated" data-animate="fadeInUp" data-delay=".8">-->
        <!--                                            <div class="field-wrap">-->
        <!--                                                <input class="input-bordered required" type="text" placeholder="Enter your email">-->
        <!--                                                <input type="text" class="d-none" name="form-anti-honeypot" value="">-->
        <!--                                            </div>-->
        <!--                                            <div class="submit-wrap">-->
        <!--                                                <button class="btn btn-icon btn-light btn-auto"><i class="fas fa-paper-plane"></i></button>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="form-results"></div>-->
        <!--                                    </form>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div><!-- .col -->
        <!--                </div><!-- .row -->
                        <div class="footer-bottom section-sm">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-6">
                                    <a href="./" class="wgs-logo-s2">
                                        <img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo">
                                    </a>
                                </div><!-- .col -->
                                <div class="col-6">
                                    <div class="copyright-text text-right">
                                        <p>© ICO Crypto, 2019</p>
                                    </div>
                                </div><!-- .col -->
                            </div>
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
        </footer>
        <div class="modal fade" id="myModal" role="dialog" class="modalbox">
             <div class="modal-dialog">
    
      <!-- Modal content-->
                <div class="modal-content"  style="background-color:#fff">
                        <div class="text-center"><span class="close" data-dismiss="modal" style="padding:4px">&times;</span></div>
                        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;padding:10px;margin-left:30px" >Admin Panel</h5>
                        <p style="font-weight: bold;padding:10px;margin-left:30px;color:#fe4350" >Users: <span id="user" style="font-weight: bold;padding:10px;color:#fe4350"></span></p>
                        
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4"   style="font-weight: bold;margin-left:30px;color:#fe4350">Sell Start Date</label>
                              <input type="date" id="startdate" name="Sell start" class="form-control"  style="margin-left:30px;width:210px">
                              <a class="btn btn-md btn-auto btn-secondary no-change focus" onclick="startDate()"  style="color:black;font-size:15px;margin-bottom:5px;margin-left:30px;margin-top:5px;width:100px">Submit</a>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4" style="font-weight: bold;margin-left:30px;color:#fe4350">Sell End Date</label>
                              <input type="date" id="enddate" class="form-control"  style="margin-right:10px;width:210px;margin-left:10px">
                              <a  class="btn btn-md btn-auto btn-secondary no-change focus" onclick="endDate()"  style="color:black;font-size:15px;margin-bottom:5px;margin-left:30px;margin-top:5px;width:100px">Submit</a>
                            </div>
                            
                          </div>
                        </from>
                </div>
      
                </div>
        </div>
       
        <div class="modal fade" id="Modal" role="dialog">
             <div class="modal-dialog">
                   
      <!-- Modal content-->
                <div class="modal-content" style="background-color:#fff">
                         <div class="text-center"><span id="close" class="close" data-dismiss="modal" style="padding:4px" >&times;</span></div>
                        <label for="stratdate" style="font-weight: bold;font-size:20px;margin-left:20px;color:#fe4350" class="title title-regular" >Balance: <span id="balance" style="color:blue;font-size:15px">0</span></label>
                        <label for="stratdate" style="font-weight: bold;font-size:20px;margin-left:20px;color:#fe4350" class="title title-regular"  >Token: <span id="token" style="color:blue;font-size:15px">0</span></label>
                        <div id="printtoken"></div>
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4"   style="font-size:20px;margin-left:20px;font-weight: bold;color:#fe4350" class="title title-regular">Amount in Ether</label>
                              <input type="number" class="form-control" id="amount" style="margin-left:20px;width:210px" >
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4" style="font-size:20px;margin-left:20px;font-weight: bold;color:#fe4350" class="title title-regular">Number Of Token</label>
                              <input type="number" class="form-control" id="amount_usd" style="margin-right:10px;width:210px" >
                            </div>
                            <li><a  class="btn btn-md btn-auto btn-secondary no-change focus" onclick="buyToken()"  style="color:black;font-size:20px;margin-left:180px;margin-bottom:5px">Buy</a></li>
                          </div>
                        </from>
                     </div>
      
            </div>
        </div>
	</div>
	
	<div class="preloader"><span class="spinner spinner-round"></span></div>
	
	<!-- JavaScript -->
	<script src="assets/js/jquery.bundle.js?ver=1930"></script>
	<script src="assets/js/scripts.js?ver=1930"></script>
	<script src="assets/js/charts.js?ver=1930"></script>
</body>

</html>
<script>
  const node = "rinkeby";
    var web3 = new Web3(Web3.givenProvider || "ws://localhost:8545");
// var current_address = window.ethereum.selectedAddress;

    function unlock() {
        if (typeof web3 !== 'undefined') {
            web3.givenProvider.enable().then(async function(address) {
                if (await web3.eth.net.getNetworkType() == node) {} else {
                    swal("Please select rinkeby", {
                        button: false,
                        icon: "warning",
                    });
                }
            }).catch(function(err) {
                    swal(err.message, {
                        button: false,
                        icon: "warning"
                    })
                });
            } else {
                swal("Please install Metamask wallet", {
                    buttons: {
                    confirm: true,
                 }
            });
        }
    }  
    
  const contract_address = '0x20a55D9E321acBEBaDc31ac60F179C89CBA11102';
const contract_abi = [{
    "inputs": [{
        "internalType": "address",
        "name": "_token",
        "type": "address"
    }],
    "stateMutability": "nonpayable",
    "type": "constructor"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": false,
        "internalType": "uint256",
        "name": "endsAt",
        "type": "uint256"
    }],
    "name": "EndsAtChanged",
    "type": "event"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": false,
        "internalType": "address",
        "name": "investor",
        "type": "address"
    }, {
        "indexed": false,
        "internalType": "uint256",
        "name": "weiAmount",
        "type": "uint256"
    }, {
        "indexed": false,
        "internalType": "uint256",
        "name": "tokenAmount",
        "type": "uint256"
    }],
    "name": "Invested",
    "type": "event"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": true,
        "internalType": "address",
        "name": "previousOwner",
        "type": "address"
    }, {
        "indexed": true,
        "internalType": "address",
        "name": "newOwner",
        "type": "address"
    }],
    "name": "OwnershipTransferred",
    "type": "event"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": false,
        "internalType": "uint256",
        "name": "oldValue",
        "type": "uint256"
    }, {
        "indexed": false,
        "internalType": "uint256",
        "name": "newValue",
        "type": "uint256"
    }],
    "name": "RateChanged",
    "type": "event"
}, {
    "anonymous": false,
    "inputs": [{
        "indexed": false,
        "internalType": "uint256",
        "name": "startsAt",
        "type": "uint256"
    }],
    "name": "StartsAtChanged",
    "type": "event"
}, {
    "inputs": [],
    "name": "TokenPerBNB",
    "outputs": [{
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [],
    "name": "endsAt",
    "outputs": [{
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [],
    "name": "finalize",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}, {
    "inputs": [],
    "name": "finalized",
    "outputs": [{
        "internalType": "bool",
        "name": "",
        "type": "bool"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [],
    "name": "invest",
    "outputs": [],
    "stateMutability": "payable",
    "type": "function"
}, {
    "inputs": [{
        "internalType": "address",
        "name": "",
        "type": "address"
    }],
    "name": "investedAmountOf",
    "outputs": [{
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [],
    "name": "investorCount",
    "outputs": [{
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [],
    "name": "owner",
    "outputs": [{
        "internalType": "address",
        "name": "",
        "type": "address"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [],
    "name": "renounceOwnership",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}, {
    "inputs": [{
        "internalType": "address",
        "name": "owner",
        "type": "address"
    }],
    "name": "setBeneficiary",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}, {
    "inputs": [{
        "internalType": "uint256",
        "name": "time",
        "type": "uint256"
    }],
    "name": "setEndsAt",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}, {
    "inputs": [{
        "internalType": "uint256",
        "name": "value",
        "type": "uint256"
    }],
    "name": "setRate",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}, {
    "inputs": [{
        "internalType": "uint256",
        "name": "time",
        "type": "uint256"
    }],
    "name": "setStartsAt",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}, {
    "inputs": [],
    "name": "startsAt",
    "outputs": [{
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [],
    "name": "token",
    "outputs": [{
        "internalType": "contract IBEP20",
        "name": "",
        "type": "address"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [],
    "name": "tokensSold",
    "outputs": [{
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
    }],
    "stateMutability": "view",
    "type": "function"
}, {
    "inputs": [{
        "internalType": "address",
        "name": "newOwner",
        "type": "address"
    }],
    "name": "transferOwnership",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
}, {
    "inputs": [],
    "name": "weiRaised",
    "outputs": [{
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
    }],
    "stateMutability": "view",
    "type": "function"
}];  

var contract = new web3.eth.Contract(contract_abi, contract_address);

  async function read(){
      let result = await contract.methods.token().call();
      document.getElementById("printtoken").innerHTML = result;
      console.log(result);
  }
  read();

  
   
    async function reload() {
        let owner;
         TokenSaleTimer();
            if (await web3.eth.net.getNetworkType() == node && window.ethereum.selectedAddress) {
                document.getElementById("changetext").innerHTML = window.ethereum.selectedAddress.substring(0, 5) + "*********" + window.ethereum.selectedAddress.substring(window.ethereum.selectedAddress.length - 5);
                let result = parseFloat(web3.utils.fromWei(await web3.eth.getBalance(window.ethereum.selectedAddress), "ether")).toFixed(5);
                owner = await contract.methods.owner().call();
            } else {
                document.getElementById("changetext").innerHTML = "Connect Wallet";
            }
                if (parseInt(window.ethereum.selectedAddress) == owner) {
                    document.getElementById('owner').style.display = 'block';
                } else {
                    document.getElementById('owner').style.display = 'none';
                }
    // console.log(window.ethereum.selectedAddress.owner)
   
    }
    setInterval('reload()', 0000);


async function TokenSaleTimer() {
    let startTimeStamp = await contract.methods.startsAt().call();
    let endTimeStamp = await contract.methods.endsAt().call();
    let now = Math.floor((new Date()).getTime() / 1000);
    let date;
    if (now <= startTimeStamp) {
        date = startTimeStamp - now;
        let days = Math.floor(date / (60 * 60 * 24));
        let hours = Math.floor((date % (60 * 60 * 24)) / (60 * 60));
        let minutes = Math.floor((date % (60 * 60)) / 60);
        let seconds = Math.floor(date % 60);
        document.getElementById("demo").innerHTML = '<p style="font-weight: Bold;letter-spacing: .125rem;text-transform: uppercase;font-size:20px;margin-top:5px;color:#fe4350">The sell will start in </p>';
        // Output the result in an element with id="demo"
       
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;
    } else if (now >= startTimeStamp && now <= endTimeStamp) {
        date = endTimeStamp - now;
        let days = Math.floor(date / (60 * 60 * 24));
        let hours = Math.floor((date % (60 * 60 * 24)) / (60 * 60));
        let minutes = Math.floor((date % (60 * 60)) / 60);
        let seconds = Math.floor(date % 60);
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = '<p style="font-weight: Bold;letter-spacing: .125rem;text-transform: uppercase;font-size:20px;margin-top:5px;color:#fe4350">The sell will End in </p>';
       
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;
    } else {
        document.getElementById("demo").innerHTML = '<p style="font-weight: Bold;letter-spacing: .125rem;text-transform: uppercase;font-size:20px;color:#fe4350">The sell is Ended </p>';
        document.getElementById("days").innerHTML = "00";
        document.getElementById("hours").innerHTML = "00";
        document.getElementById("minutes").innerHTML = "00";
        document.getElementById("seconds").innerHTML = "00";
        document.getElementById("purchase").style.display = 'none';
    }

}

setInterval('TokenSaleTimer()', 1000);

document.getElementById("amount").addEventListener("keyup", changefunction);
document.getElementById("amount_usd").addEventListener("keyup", changefunction1);

async function changefunction() {
    let Amount1 = parseFloat(document.getElementById("amount").value);
    console.log(Amount1);
    let tokenprice = await contract.methods.TokenPerBNB().call();
    console.log(tokenprice);
    let weiamount = web3.utils.fromWei(tokenprice, "ether");
    console.log(weiamount);
    let tokens = Math.trunc(Amount1 / weiamount);
    console.log(tokens);
    document.getElementById("amount_usd").value = (tokens) / 10 ** 8;
}




async function changefunction1() {
    let Amount2 = parseFloat(document.getElementById("amount_usd").value);
    console.log(Amount2);
    let tokenprice = await contract.methods.TokenPerBNB().call();
    console.log(tokenprice);
    let weiamount = web3.utils.fromWei(tokenprice, "ether");
    console.log(weiamount);
    let amount = (Amount2 * weiamount) * 10 ** 8;
    console.log(amount);
    document.getElementById("amount").value = (amount).toFixed(9);
}

async function buyToken() {
    let amount = document.getElementById("amount").value;
    if (amount != "") {
        if (amount > 0) {
            let weiamount = web3.utils.toWei(amount, "ether");
            if (window.ethereum.selectedAddress) {
                let walletbalance = await web3.eth.getBalance(window.ethereum.selectedAddress);
                if (walletbalance >= weiamount) {
                    invested(window.ethereum.selectedAddress, weiamount);
                } else {
                    document.getElementById("amount").value = "";
                    document.getElementById("amount_usd").value = "";
                    swal("Insufficient Funds", {
                        button: false,
                        icon: "warning",
                        timer: 1000,
                    });
                }

            } else {
                swal("Please Enter Valid Amount", {
                    button: false,
                    icon: "warning",
                    timer: 1000,
                });
            }
        } else {
            swal("Please Enter Amount", {
                button: false,
                icon: "warning",
                timer: 1000,
            });
        }
    }

    if (amount == 0) {
        swal("Please Enter Valid Amount", {
            button: false,
            icon: "warning",
            timer: 1000,
        });
    }
}

async function invested(address, weiamount) {
    await contract.methods.invest().send({
        from: window.ethereum.selectedAddress,
        value: weiamount
    }, async function(err, result) {
        if (err) {
            swal("Transaction Error", {
                buttons: false,
                icon: "error",
                timer: 1000
            });
        }
        if (result) {
            swal("Your transaction is sent, Please wait for confirmation.", {
                button: false,
                timer: 4000,
                icon: "success"
            });
        }
    }).then(function(receipt) {
        console.log(receipt);
        swal("Transaction Confirm", {
            button: false,
            icon: "success",
            timer: 1000
        });
            document.getElementById('close').click();
            reload();
    });
}

async function startDate() {
    let startdate = document.getElementById("startdate").value;
    let timestamp = parseInt((new Date(startdate).getTime() / 1000).toFixed(0));
    if (startdate == "") {
        swal({
            text: "Please Enter the sale start date",
            icon: "warning",
            buttons: true,
        })
    } else {
        let result = await contract.methods.setStartsAt(timestamp).send({
            from: '0xd6292533EDD860Ba6242daD06E6FAF195004c206'
        }, async function(err, result) {
            if (err) {
                swal("Transaction Error", {
                    buttons: false,
                    icon: "error",
                    timer: 1000
                });
            }
            if (result) {
                swal("Your transaction is sent, Please wait for confirmation.", {
                    button: false,
                    timer: 4000,
                    icon: "success"
                });
            }
        }).then(function(receipt) {
            console.log(receipt);
            swal("Transaction Confirm", {
                button: false,
                icon: "success",
                timer: 1000
            });
            TokenSaleTimer();
        });
    }
}

async function endDate() {
    let endDate = document.getElementById("enddate").value;
    let timestamp = parseInt((new Date(endDate).getTime() / 1000).toFixed(0));
    if (endDate == "") {
        swal({
            text: "Please Enter the sale End date",
            icon: "warning",
            buttons: false,
        })
    } else {
        let result = await contract.methods.setEndsAt(timestamp).send({
            from: '0xd6292533EDD860Ba6242daD06E6FAF195004c206'
        }, async function(err, result) {
            if (err) {
                swal("Transaction Error", {
                    buttons: false,
                    icon: "error",
                    timer: 1000
                });
            }
            if (result) {
                swal("Your transaction is sent, Please wait for confirmation.", {
                    button: false,
                    timer: 4000,
                    icon: "success"
                });
            }
        }).then(function(receipt) {
            console.log(receipt);
            swal("Transaction Confirm", {
                button: false,
                icon: "success",
                timer: 1000
            });
            TokenSaleTimer();
        });
    }
}

var test ;
     $.ajax({
        url: "https://techyroots.com/ICO-admin-dashboard/indexapi.php",
        type: "POST",
        success: function(dataResult) {
            test = dataResult;
            console.log(dataResult);
             let dataValue = JSON.parse(dataResult);
             console.log(dataValue);
             document.getElementById("user").innerHTML= dataValue;
             
        }
     })

</script>
<?php
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['uname']);
    header('location:index.php');
}
?>