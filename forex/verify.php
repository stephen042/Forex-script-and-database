<?php 
include('conn.php');
										$verif = '';
										$message = '';
										$display = '';
										@$error_message = "";
									    @$success_message = "";
										if(isset($_GET['id']))
															
										{
										$id = $_GET['id'];
													
										//Collect the input veriable
										
										$query_st = mysqli_query($conn," SELECT * FROM user_tb where '$id' = sha1(u_invit_code)");
								
									while($row = mysqli_fetch_array($query_st))
									    {
										
										$uid = $row['user_id'];
										$state = $row['u_invit_code'];
									    }
									
									  
										$query_staff = mysqli_query($conn, " UPDATE user_tb SET u_status ='Activated' WHERE u_invit_code = '$id'");
										
										if($query_staff)
										{
									$error_message ="<div align='center'><font color='#00CC66' size='+2'><b> Account activated! You may login to your trading account.</b></font></div><br>";
					
									//echo "<script>alert(' Congratulation! Account is activated, you may now login. We hope you enjoy using our site')</script>";
                            		//echo "<script>window.open('login.php','_self')</script>";	
                            		//die();
										}else
										$error_message = "<font color='#FF0000' size='+1'> Activation failed, or broken link clicked! try again.</font>";
										//echo "<script>alert(' Sorry! Account not activated, something went wrong or a broken link')</script>";
                                		//echo "<script>window.open('signup','_self')</script>";	
                                		//die();
                                      }

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from oaksideinvestments.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 10:15:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="robots" content="noindex,nofollow">-->
    <meta name="description" content="Providus Option is world's leading cryptocurrency online investment and trading platform that offers Bitcoin trading options, provides 24/7 customer support, high level of security, and stable deposits and withdrawals.">
    <meta name="keywords" content="Providus Option, Bitcoin Investment, Bitcoin Trading Platform, Binary Trading Platform, Digital Options Trading, BTC">
    <meta name="author" content="mostynlewis"> 
    <title>Providus Option | Home Page| Log In</title>
    <!--Favicon add-->
    <link rel="shortcut icon" type="image/png" href="assets/images/logo/icon.png">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <script src="../kit.fontawesome.com/917d27217e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    
    <link href="assets/front/css/material-kit.min3f713f71.css?v=1.1.1" rel="stylesheet">
    <link href="assets/front/css/material-kit.html" rel="stylesheet">
    <!--bootstrap Css-->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome Css-->
    <link href="assets/front/css/font-awesome.min.css" rel="stylesheet">
    <!-- Lightcase  Css-->
    <link href="assets/front/css/lightcase.css" rel="stylesheet">
    <!--WOW Css-->
     <link href="assets/front/css/animate.min.css" rel="stylesheet">
    <!--Slick Slider Css-->
    <link href="assets/front/css/slick.css" rel="stylesheet">
    <!--Slick Nav Css-->
    <link href="assets/front/css/slicknav.min.css" rel="stylesheet">
    <!--Swiper  Css-->
    <link href="assets/front/css/swiper.min.css" rel="stylesheet">
    <!--Style Css-->
    <link href="assets/front/css/style.css" rel="stylesheet">
    <!-- Theam Color Css-->
    <link href="assets/css/color7298.css?color=bea36b" rel="stylesheet">
    <!--Responsive Css-->
    <link href="assets/front/css/responsive.css" rel="stylesheet">
        <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<script src="https://use.fontawesome.com/4b789087e7.js"></script>
    <link rel="stylesheet" href="assets/front/2/css/style.css">
    
    <script src="assets/front/2/js/modernizr.js"></script>

    <link rel="stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script src="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <style>
    /*	@media  only screen and (min-width: 768px) {
    		.logo {
                padding-top: 23px !important;
            }
    	}
    
    	@media  only screen and (max-width: 767px) {
    		.logo {
                padding-top: 3px !important;
            }
    	}
    
    	@media  only screen and (max-width: 767px) and (orientation: portrait) {
    		.logo {
                padding-top: 3px !important;
            }
    	}*/
        
        a {
            outline: none !important;
        }
        
        button {
            outline: none !important;
        }
        
        footer ul li a{
            color: inherit;
            padding: 0px;
            font-size: none;
            border-radius: 0px;
            position: absolute;
            font-weight: 400;
            font-size: 18px;
            text-transform: capitalize;
            display: contents;
        }
        
        .section-header p img {
            width: 36px;
        }
        
        .nav>li>a:focus, .nav>li>a:hover {
            text-decoration: none;
            background-color: #eeeeee40;
            border-radius: 3px;
        }
        
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            background-color: rgba(255,255,255,.2);
            transition: background-color .1s .2s;
            border-radius: 3px;
        }
        
        .panel .panel-heading a:active, .panel .panel-heading a:hover, .panel .panel-heading a[aria-expanded=true] {
            color: #e4dcca;
        }
        
        .panel-body {
            /* padding: 38px; */
            margin: 0px 15px 15px 15px;
        }
        
        /* GOOGLE TRANSLATOR */

		  .goog-te-combo, .goog-te-banner *, .goog-te-ftab *, .goog-te-menu *, .goog-te-menu2 *, .goog-te-balloon *{
		  text-decoration: none !important;
		  font-size: 14pt !important;
		  color: #424256;
		  display: none !important;
		}
		.goog-te-banner-frame{
		  display: none !important;
		}
		.header nav.top-navigation>a.langUrlTrans{
			border-left: 1px solid #007a40;
			margin-top: -2px;
			padding: 2px 0 1px 20px;
		}
		.goog-te-gadget-simple {
			display: -webkit-box !important;
			margin: -40px 0px 0px 0px;
			font-family: 'Montserrat', sans-serif !important;
			font-size: 14pt !important; 
			background-color: transparent !important;
			color: #fff !important;
			-webkit-box-shadow: none !important;
			box-shadow: none !important;
			padding-top: 0px !important;
			padding-bottom: 0px !important;
			border-bottom: 0px !important;
			border-top: 0px !important;
			border-left: 0px !important;
			border-right: 0px !important;
			position: relative;
            top: 6px;
		}
		@media  only screen and (max-width: 769px) {
		    .goog-te-gadget-simple{ 
		        top: 5px;
		    }
		}
		@media  only screen and (max-width: 1440px) {
		    .goog-te-gadget-simple{ 
		        top: 5px;
		    }
		}
		@media  only screen and (max-width: 425px) {
		    .goog-te-gadget-simple{ 
		        top: 0px;
		        margin: -36px 0px 0px 0px;
		    }
		}
		i.fa.fa-language {
            position: relative;
            top: -14px;
        }
		.goog-te-gadget img{
		   background-image: none !important;
		   background-position: 0px 0px !important;
		   background-size: 0px !important;
		   background-repeat: no-repeat !important;
		}
		.goog-te-gadget-icon{
		   display: none !important;
		}
		.goog-te-gadget-simple .goog-te-menu-value{
		   color: #424256 !important;
		   font-size: 14px !important;
		   font-weight: 400;
		   text-transform: uppercase;
		   display: none !important;
		}
		.goog-te-gadget-simple:after{
		   display: -webkit-box !important;
		   content: 'Languages';
		   color: #fff !important;
		   font-size: 14px !important;
		   font-weight: 400;
		   text-transform: Capitalize;
		}
		.goog-te-combo, .goog-te-banner *, .goog-te-ftab *, .goog-te-menu *, .goog-te-menu2 *, .goog-te-balloon *{
		  font-family: 'Montserrat', sans-serif !important ;
		  font-size: 14pt !important;
		  text-decoration: none !important;
		}
		.goog-te-menu2{
		  font-family: 'Montserrat', sans-serif !important ;
		  font-size: 14pt !important;
		  border: 1px solid #007a40fff !important;
		  background-color: #b70000 !important;
		  color: #fff !important;
		}
		.goog-te-menu-frame{
		  -webkit-box-shadow: none !important;
		  box-shadow: -1px 2px 20px 0px #4444447a !important;
		}
		.goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div {
		  font-family: 'Montserrat', sans-serif !important ;
		  border: 1px solid #007a40fff !important;
		  background-color: #b70000 !important;
		  color: #fff !important;
		}
		
		body[style] {
		   top: 0px !important;
		}
    </style>
</head>

<body  data-spy="scroll">
<!-- Start Pre-Loader-->

<div id="preloader">
    <div data-loader="circle-side"></div>

</div>
<!-- End Preload -->
<div class="animation-element">
<!-- End Pre-Loader -->


<!--support bar  top start-->
<div class="support-bar-top wow slideInLeft" data-wow-duration="2s" id="raindrops-green">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <a href="mailto:contact@f1globalforex.com"> <i class="fa fa-envelope email" aria-hidden="true"></i> contact@providusoption.com</a>
                    <a href="#"> <i class="fa fa-phone" aria-hidden="true"></i> +1 519-123-4567 </a>
                    <a href="#"> <i class="fa fa-language" aria-hidden="true" style="margin-left: 2px;"></i> <div id="google_translate_element"></div><script type="text/javascript"> function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');}</script><script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script> </a>
                </div>
            </div>
            <div class="col-md-6 text-right bounceIn">
                <div class="contact-admin">
                    <a href="login.php"><i class="fa fa-user"></i> LOGIN </a>
                    <a href="register.php"><i class="fa fa-user-plus"></i> REGISTER</a>
                    <div class="support-bar-social-links">
                                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                                    <a href="https://t.me/joinchat/"><i class="fab fa-telegram-plane"></i></a>
                                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                                    <a href="https://wa.me/message/3QX4AQPXZTP4A1"><i class="fab fa-whatsapp"></i></a>
                                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--support bar  top end-->
<!--main menu section start-->
<nav class="main-menu wow slideInRight" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/logo/logo.png" style="max-height:60px;"></a>
                </div>
            </div>
            <div class="col-md-9 text-right">
                <ul id="header-menu" class="header-navigation">
                    <li><a href="index.php">Home</a></li>
                                                                                 
                        <!--<li><a href="https://oaksideinvestments.com/about">About Us</a></li>
                        <li><a href="https://oaksideinvestments.com/contact">Contact</a></li>-->
                        <li><a class="page-scroll" href="#">Who We Are <i class="fa fa-angle-down""></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-2">
                                <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="about.html">About Us</a>
                                    <a class="page-scroll" href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        
                        <li><a class="page-scroll" href="#">Account <i class="fa fa-angle-down""></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4">
                                <li class="mega-list mega-list1">
                                    <a class="page-scroll" href="login.php">Login</a>
                                    <a class="page-scroll" href="register.php">Register</a></li>
                            </ul>
                        </li>
                                    </ul>
            </div>
        </div>
    </div>
</nav>
<!--main menu section end-->


    <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('assets/images/logo/bb.png')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>Activate account</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>
    <!--Header section end-->


    <!--login section start-->
<section  class="circle-section section-padding section-background">
    <div class="container">
        <div class="row">
  
            <div class="col-md-6 col-md-offset-3">
                <div class="login-admin login-admin1">
                    <div class="login-header text-center">
                      <h6>User account verification</h6>
                      <?php echo @$display_message;?>
                    </div>
                                                
                                                
                    <div class="login-form"> 
                        <h2 class="section_header">Verify Account</h2>
							<hr class="divider_60_2 main_bg_color">
							<?php echo $error_message;?>
							<center>
							<br><br>
							<p>Verified successfully? <a href="login.php" class="theme_button color1">Login Now</a></p>
							</center>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>


<form role="form" action="#" method="post" name="formit" class="formit">
    <input type="hidden" value=""/> 
    <button type="button" name="submit" id="mtccheck-button" style="display:none;" ></button>
</form>
<!-- CHECK IF USER HAS SEEN POPUP MODAL ENDS HERE-->

<!-- MODAL DIV/ BUTTON -->
<!-- Modal Button -->
<button style="display:none;" id="mtc-button" data-toggle="modal" data-target="#maintenanceModal"></button>

<!-- Modal -->
<div class="modal fade" id="maintenanceModal" tabindex="-1" role="dialog" style="transition: top 0.5s ease 0s; background: #0a586573;">
<div class="modal-dialog  modal-lg" style="margin-top: 70px;">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="card card-signup card-plain" style="padding: 19px 13px 0px; margin-bottom: 4px;">
      <div class="modal-header" style="display: flex; align-items: flex-start;justify-content: space-between;padding: 0px 24px 17px 24px;">
        <h2 class="modal-title card-title" style="text-align: center;width: 100%;margin-top: .625rem;font-size: 2em;">UPDATE!</h2>
        <button type="button" class="close" data-dismiss="modal" id="closepop" aria-label="Close" style="margin-top: 15px;cursor: pointer;">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <div class="modal-body" style="padding: 0px 24px 0px;">
         <div class="features-2" style="padding: 0px 0;">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto text-center" style="margin-right: auto!important;margin-left: auto!important;float: initial;">
              <img class="card-img-top" src="assets/images/maintenance.svg" alt="Card image cap" style="margin: -8px 0px;width: 40%;margin-bottom: 10px;">
              <h4 class="title" style="margin: 15px 0px 15px;">We Are Upgrading!</h4>
              <p class="description" style="font-family: Roboto,Helvetica,Arial,sans-serif; font-weight: 300; line-height: 1.5em;font-size: 15px;">Whilst our preference is to achieve the upgrade without causing any disruption to your usual investment arrangements, we would like to inform you that unfortunately, during this upgrade period, all of our investments services will be suspended for 24 hours for the purpose of implementing the system upgrade.
            <br><br>
            After the conversion period, we will be able to provide our normal investment services as usual. Please be assured that we have taken and will continue to take steps to make sure the transition will be fully completed with minimum disruption. 
            <br><br>
            Thank You!
              </p>
            </div>
          </div>
          <div class="modal-footer" style="padding: 8px 24px;">
              <hr style="margin-bottom: 10px;">
              <a href="mailto:contact@f1globalforex.com" class="btn btn-info btn-sm btn-link">Email Support</a>
              <button type="button" class="btn btn-danger btn-link btn-sm" data-dismiss="modal" style="margin-top: 10px;">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript" src="../code.jquery.com/jquery-1.10.1.js"></script>
    <script type='text/javascript'>//<![CDATA[
		$(window).load(function(e){
		    e.preventDefault();
			postForm();
             	
			function postForm(){
    			form = $('.formit');
    			$.ajax({
    				url: "../../../aks/checkmaintenance.php",
    				type: "POST",
    				data: form.serialize(), // serializes the form's elements.
    				success : function(data){						
    					if(data=="yes"){			
    						clickit();
    					} 
    				},
    			});
		    }
		    
		    function clickit(){
               document.getElementById("mtc-button").click();
               $('#btnSubmit').attr('disabled', true);
            }
	  });
	</script>

<!-- Online Section End -->

<div class="clearfix"></div>


<div class="clearfix"></div>

<!--payment method section start-->
<section class="client-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header wow zoomInDown" data-wow-duration="2s">
                    <h2><span>PAYMENT METHOD </span> WE ACCEPT</h2>
                    <p><img src="assets/images/logo/icon.png" alt="icon"></p>
                </div><!-- section-heading -->
                <div class="section-wrapper">
                    <div class="client-list">
                        <!-- Swiper -->
                        <div class="swiper-container client-container">
                            <div class="swiper-wrapper">
                                                                   <div class="swiper-slide"><div class="our-client wow rotateIn" data-wow-duration="2s"><a href="#"><img class="img-responsive" src="assets/images/5e192b003b4e6.jpg" alt="client"></a></div></div>
                                                                   <div class="swiper-slide"><div class="our-client wow rotateIn" data-wow-duration="2s"><a href="#"><img class="img-responsive" src="assets/images/5e192b1eeaf5f.jpg" alt="client"></a></div></div>
                                                                   <div class="swiper-slide"><div class="our-client wow rotateIn" data-wow-duration="2s"><a href="#"><img class="img-responsive" src="assets/images/5e192b6c865f4.jpg" alt="client"></a></div></div>
                                                                   <div class="swiper-slide"><div class="our-client wow rotateIn" data-wow-duration="2s"><a href="#"><img class="img-responsive" src="assets/images/5e192b965a362.jpg" alt="client"></a></div></div>
                                                                   <div class="swiper-slide"><div class="our-client wow rotateIn" data-wow-duration="2s"><a href="#"><img class="img-responsive" src="assets/images/5e192c0ed797d.jpg" alt="client"></a></div></div>
                                                                   <div class="swiper-slide"><div class="our-client wow rotateIn" data-wow-duration="2s"><a href="#"><img class="img-responsive" src="assets/images/magento_skrill_1.jpg" alt="client"></a></div></div>
                                                                   <div class="swiper-slide"><div class="our-client wow rotateIn" data-wow-duration="2s"><a href="#"><img class="img-responsive" src="assets/images/1508740692h7.png" alt="client"></a></div></div>
                                                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                            </div>
                        </div><!-- client container -->
                    </div><!-- client list-->
                </div><!-- swiper wrapper -->
            </div>

        </div><!-- row -->
    </div><!-- container -->
</section>
<!--end payment method section start-->
<!--footer area start-->
<footer id="contact" class="footer-area">
    <!--footer area start-->
    <div class="footer-bottom">
        <div class="footer-support-bar">
            <!-- Footer Support List Start -->
            <div class="footer-support-list">
                <ul>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="footer-thumb"><i class="fa fa-headphones"></i></div>
                        <div class="footer-content">
                            <p>24/7 Customer Support</p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="2s">
                        <div class="footer-thumb"><i class="fa fa-envelope"></i></div>
                        <div class="footer-content">
                            <p><a href="contact.html">contact@f1globalforex.com</a></p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="3s">
                        <div class="footer-thumb"><i class="fa fa-comments-o"></i></div>
                        <div class="footer-content">
                            <p>Friendly Support Ticket</p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="4s">
                        <div class="footer-thumb"><i class="fa fa-phone"></i></div>
                        <div class="footer-content">
                            <p>+1 519-489-2315</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Footer Support End -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="3s">
                    <p class="copyright-text">
                       
                    </p>
                </div>
                <div class="col-md-4 col-sm-9 wow bounceInDown" data-wow-duration="3s" style="margin-top: 18px;margin-bottom: -8px;">
                    <p class="copyright-text">
                        Copyright © Providus Option. 2011 - 2020 All Right Reserved.
                    </p>
                </div>
                <div class="col-md-4 col-sm-3 wow fadeInRight" data-wow-duration="3s">
                    
                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top" class="scroll-top back-to-top" data-original-title="" title="" >
        <i class="fa fa-angle-up"></i>
    </div>
</footer>
<style type="text/css">
    li.export-main {
        visibility: hidden;
    }
</style>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--jquery script load-->
<script src="assets/front/js/jquery.js"></script> 

<script src="assets/front/js/bootstrap.min.js"></script>
<!-- Gmap Load Here -->
<script src="assets/front/js/gmaps.js"></script>
<!-- Map Js File Load -->
<script src="assets/front/js/map-script7298.php?color=bea36b"></script>
<!-- Highlight script load-->
<script src="assets/front/js/highlight.min.js"></script>
<!--Jquery Ui Slider script load-->
<script src="assets/front/js/jquery-ui-slider.min.js"></script>
<!--Circleful Js File Load-->
<script src="assets/front/js/jquery.circliful.js"></script>
<!--CounterUp script load-->
<script src="assets/front/js/jquery.counterup.min.js"></script>
<!-- Ripples  script load-->
<script src="assets/front/js/jquery.ripples-min.js"></script>
<!--Slick Nav Js File Load-->
<script src="assets/front/js/jquery.slicknav.min.js"></script>
<!--Lightcase Js File Load-->
<script src="assets/front/js/lightcase.js"></script>
<!--particle Js File Load-->
<script src="assets/front/js/particles.min.js"></script>
<!--particle custom Js File Load-->
<script src="assets/front/js/particles-custom.js"></script>
<!--RainDrops script load-->
<script src="assets/front/js/raindrops.js"></script>
<!--Easing script load-->
<script src="assets/front/js/easing-min.js"></script>
<!--Slick Slider Js File Load-->
<script src="assets/front/js/slick.min.js"></script>
<!--Swiper script load-->
<script src="assets/front/js/swiper.min.js"></script>
<!--WOW script load-->
<script src="assets/front/js/wow.min.js"></script>
<!--WayPoints script load-->
<script src="assets/front/js/waypoints.min.js"></script>
    <!--Main js file load-->
<script src="assets/front/js/main.js"></script>

<script src="assets/front/2/js/main.js"></script>
<!-- <script src="https://oaksideinvestments.com/assets/js/main.js"></script> -->
<!--swal alert message-->

<!--end swal alert message-->
<script>
var mobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));

hljs.initHighlightingOnLoad();
hljs.configure({useBR: true});
jQuery('#raindrops').raindrops({color:'#fff',canvasHeight:5});
jQuery('#raindrops-green').raindrops({color:'#bea36b ',canvasHeight:5});

</script>


<!-- Live Chat 3 widget -->
<script type="text/javascript">
	(function(w, d, s, u) {
		w.id = 1; w.lang = ''; w.cName = ''; w.cEmail = ''; w.cMessage = ''; w.lcjUrl = u;
		var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
		j.async = true; j.src = '../livechat.oaksideinvestments.com/js/jaklcpchat.js';
		h.parentNode.insertBefore(j, h);
	})(window, document, 'script', 'https://livechat.oaksideinvestments.com/');
</script>
<div id="jaklcp-chat-container"></div>
<!-- end Live Chat 3 widget -->
</body>

<!-- Mirrored from oaksideinvestments.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 10:15:23 GMT -->
</html>
