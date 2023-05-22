<?php
session_start(); 
require_once("conn.php");
// get user referal ID							
												@$refer_link = '';
												@$error_message = "";
												$success_message = "";
												$oldemail = "";
												include ('conn.php');
												@$ref_id = @$_GET['ref'];
			                                    $ref = $ref_id;
												//Collect the input veriable
													
											@$query=mysqli_query($conn,"select * from user_tb where uusername = '$ref'");
											@$row=mysqli_fetch_array($query);
											@$id2 = $row['user_id'];
											@$refer_link = $row['uusername'];
												

														if (isset($_POST['signup_btn']))
													{
														$getnumber = rand(10000,99999);
														$sasa = $getnumber + 1;
														$fgh='0'.$sasa;						
														$finalcode = 'nutr'.$fgh;
														$verify_code = sha1($finalcode);
														//$_SESSION['app_id'] = $finalcode;
														
														$firstname = trim($_POST['full_name']);
														@$bonu_amt = trim($_POST['bonu_amt']);
														@$lastname = trim($_POST['lastname']);
														$user_email = trim($_POST['email']);
														$country = trim($_POST['country']);
														//password2 = trim($_POST['password2']);
														@$mynetwork = trim($_POST['mynetwork']);
														$phone = trim($_POST['phone']);
														$password1 = trim(md5($_POST['password']));
														$password2 = trim($_POST['password']);
														$bothname = $firstname.' '.$lastname;
														//$bothphone = $ext.''.$phone;
														
														
													//check if email exist in the system
													$query_user = mysqli_query($conn,"SELECT * FROM user_tb");
							
													while(@$row_user = mysqli_fetch_assoc($query_user))
													{
														$userid = $row_user['user_id'];
														$oldemail = $row_user['uemail'];
													}
													
														if ($oldemail == $user_email) 
														{
																$error_message = "<font color='#FF0000' size='+2'> Email address already exist in the system</font>";
														}
														else													
														{
			
@$query = mysqli_query($conn, "INSERT INTO user_tb(fname, uemail, uusername, upassword, ubit_wallet, uquestion, uquestion_answer, u_refer_code, u_invit_code, u_amount, ucountry, u_datereg, u_update_record, u_last_login, u_status, uphone,  udemo_amt, upassword2) 
VALUES ('$bothname', '$user_email', '$user_email', '$password1', '$wallet_address','$sq', '$sa', '$mynetwork', '$verify_code', '', '$country', NOW(), '', '', 'Activated', '$phone', '$bonu_amt', '$password2')");

// get user id
                                    $query_st = mysqli_query($conn," SELECT * from user_tb where uemail = '$user_email' ");
									$row = mysqli_fetch_array($query_st);
									$num_row = mysqli_num_rows($query_st);
										
									if ($num_row > 0) 
									{
										
										    $id = $row['user_id'];
										    $_SESSION['fullname'] = $row['fname'];
											@$_SESSION['email'] = $row['uemail'];
											@$_SESSION['username'] = $row['uusername'];
											$_SESSION['bitwallet'] = $row['ubit_wallet'];
											$_SESSION['question'] = $row['uquestion'];
											$_SESSION['qanswer'] = $row['uquestion_answer'];
											@$_SESSION['mynetwork'] = $row['u_refer_code'];
											@$_SESSION['reg_code'] = $row['u_invit_code'];
											@$_SESSION['acct_amt'] = $row['u_amount'];
											@$_SESSION['country'] = $row['ucountry'];
											@$_SESSION['reg_date'] = $row['u_datereg'];
											@$_SESSION['update_record'] = $row['u_update_record'];
											@$_SESSION['last_see'] = $row['u_last_login'];
											@$_SESSION['acct_status'] = $row['u_status'];
											$_SESSION['userid'] = $row['user_id'];
											
					$error_message ="<div align='center'><font style='text-align:center' color='#009966' style='font-family:Arial, sans-serif' size='+1'><h3 class='mt-0'>Registration successful!</h3></font>
					<p align ='center'><span class='text-black pt-5'> We have sent you an email about your registration.<br>
					System will redirect you in a moment to your account and start to trade! Enjoy trading with Providus Option thank you.</span></p>
					 
					<p align ='center'><font style='text-align:center'><i class='fas fa-spinner fa-spin'></i></font></p>
					<meta http-equiv='refresh' Content='7; url=dashboard/' /></div><br>";
									}
                                // insert into referral table
                                @$query_referral = mysqli_query($conn, "INSERT INTO referral_tb(ref_id, ref_uid, ref_email, ref_my_username, ref_user_email, ref_status, ref_date, ref_amt) 
                                VALUES (NULL, '$id', '$user_email', '$user_email', '$mynetwork', '', CURDATE(), '')");
                                			
			if (@$query) 
				{			
					                        
					
					//header("Location: dashboard/");
					
			// Send mail to user with verification here
			$to = $user_email;
         	$subject = "Registration successful";
         
         // Create the body message
         @$message .= "<br>
         <div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
	<table align='center' width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
    <tbody>
        <tr>
        	<td bgcolor='#FFFFFF'>
                <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                <tbody>
                	<tr>
                    	<td>
                			<table width='690' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                            <tbody>
                            	<tr>
                                    <td height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF' style='padding:0;margin:0;font-size:0;line-height:0'><img src='http://www.providusoption.com/eu/img/logo-white2.png'>
                                    
                                    </td>
                   			  </tr>
                                <tr>
                                    <td align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                        	<tr>
                                            	<td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                <td align='center'>
                                                  <h6 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:25px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0'>Your new account signup</h6>
                                                </td>
                                                <td width='25'></td>
                                            </tr>
                                            <tr>
                                            	<td colspan='3' height='40'></td></tr><tr>
                                            	  <td colspan='5' align='center'>
                                                    <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
													Hello $bothname, Your account has just been created. Click the link below to activate your account.</p>
                                                    <br>
                                                    <p style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'></p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan='4'>
                                                <div style='width:100%;text-align:center;margin:30px 0'>
                                                    <table align='center' cellpadding='0' cellspacing='0' style='font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0'>
                                                    <tbody>
                                                    	<tr>
                                                            <td align='center' style='margin:0;text-align:center'><a href='http://www.providusoption.com/en/verify?id=$verify_code' style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px' target='_blank'>Click here to activate your account</a></td>
                                                      	</tr>
                                                   	</tbody>
                                                    </table>
                                               	</div>
                                           	</td>
                                       	</tr>
                                        
                                 	</tbody>
                                    </table>
                             	</td>
                   			</tr>
                            
                            <tr bgcolor='#ffffff'>
                                <td bgcolor='#FFFFFF'>
                                  
                                  <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <h2 style='color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0'>&nbsp;</h2>
                                          <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'>You can always contact us for any support or write us an email on support@providusoption.com </div>
                                        </td>
                                      </tr>
                                      <tr><td>&nbsp;</td>
                                </tr></tbody></table></td>
                              </tr>
                          	</tbody>
                            </table>
                  			<table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                            <tbody>
                            	<tr>
                                	<td align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                                        <tbody>
                                        	<tr><td colspan='2' height='30'></td></tr>
                                            <tr>
                                           	  <td width='360' valign='top'>&nbsp;</td>
                                              	<td align='right' valign='top'>
                                                	<span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/BggPYqAh.png' alt='fb'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/j3NsGLak.png' alt='twit'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/wFyxXQyf.png' alt='g'></a>&nbsp;</span>
                                              	</td>
                                            </tr>
                                            <tr><td colspan='2' height='5'></td></tr>
                                      	</tbody>
                                        </table>
                                    <p><span style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>&copy; 2020 Providus Option. All Rights Reserved. </span></p></td>
                  				</tr>
                          	</tbody>
                          </table>
               		  </td>
                	</tr>
              	</tbody>
                </table>
            </td>
	  </tr>
 	</tbody>
    </table>
</div>";
         $header = "From:Prime Option Pro Account-Signup <support@primeoptionpro.online> \r\n";
         $header .= "Cc:support@primeoptionpro \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         @$retval = mail ($to,$subject,$message,$header);
         
					
				}
				else
				{
		
					$error_message = "<font color='#FF0000' size='+1'> Registration failed, try again later</font>";
				}
			}
				
				
		}	
//Add Applicant details to eRegister record

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from oaksideinvestments.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 10:15:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="robots" content="noindex,nofollow">-->
    <meta name="description" content="prime Option pro is world's leading cryptocurrency online investment and trading platform that offers Bitcoin trading options, provides 24/7 customer support, high level of security, and stable deposits and withdrawals.">
    <meta name="keywords" content="prime Option pro, Bitcoin Investment, Bitcoin Trading Platform, Binary Trading Platform, Digital Options Trading, BTC">
    <meta name="author" content="mostynlewis"> 
    <title>prime Option pro | Register</title>
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
                    <a href="mailto:contact@providusoption.com"> <i class="fa fa-envelope email" aria-hidden="true"></i> contact@providusoption.com</a>
                    <a href="#"> <i class="fa fa-phone" aria-hidden="true"></i> (614) 547-3104 </a>
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
                                                    <a href="#"><i class="fab fa-whatsapp"></i></a>
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
                    <a href="index.html"><img src="assets/images/logo/logo.png" style="max-height:60px;"></a>
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
               <h5>Register</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>
    <!--Header section end-->

    <!--login section start-->
    <div class="login-section section-padding login-bg" style="background: #eee;">
        <div class="container">
                                     
                    <div class="login-admin login-admin1">
                         <div class="login-header text-center">
                            <h6>Register Form</h6>
                            <?php echo $error_message;?>
                         </div>
                        <div class="login-form">     
                                                        <form id="login-form" name="login-form" method="post">
							  <div class="form-group">
								<input type="text" class="form-control" name="full_name" id="name" placeholder="Full Name" required>
							  </div>
							  <div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email ID" required>
							  </div>
							  <div class="form-group">
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
							  </div>
							  <div class="form-group">
								<input type="text" class="form-control" name="mynetwork" value="<?php echo $ref;?>" placeholder="Referral ID">
							  </div>
							  <div class="form-group">
								
								<select class="form-control" id="country" name="country" required>
							<option></option>
							
							<option data-tel="93" data-full="Islamic Republic of Afghanistan" data-iso="AF"
							value="Afghanistan">Afghanistan</option>
							<option data-tel="355"
							data-full="Republic of Albania"
							data-iso="AL"
							value="Albania">Albania</option>
							<option data-tel="213"
							data-full="People's Democratic Republic of Algeria"
							data-iso="DZ"
							value="Algeria">Algeria</option>
																	<option data-tel="376"
							data-full="Principality of Andorra"
							data-iso="AD"
							value="Andorra">Andorra</option>
																	<option data-tel="244"
							data-full="Republic of Angola"
							data-iso="AO"
							value="Angola">Angola</option>
																	<option data-tel="1264"
							data-full="Anguilla"
							data-iso="AI"
							value="Anguilla">Anguilla</option>
																	<option data-tel="1268"
							data-full="Antigua and Barbuda"
							data-iso="AG"
							value="Antigua and Barbuda">Antigua and Barbuda</option>
																	<option data-tel="54"
							data-full="Argentine Republic"
							data-iso="AR"
							value="Argentina">Argentina</option>
																	<option data-tel="374"
							data-full="Republic of Armenia"
							data-iso="AM"
							value="Armenia">Armenia</option>
																	<option data-tel="297"
							data-full="Aruba"
							data-iso="AW"
							value="Aruba">Aruba</option>
																	<option data-tel="61"
							data-full="Commonwealth of Australia"
							data-iso="AU"
							value="Australia">Australia</option>
																	<option data-tel="43"
							data-full="Republic of Austria"
							data-iso="AT"
							value="Austria">Austria</option>
																	<option data-tel="994"
							data-full="Republic of Azerbaijan"
							data-iso="AZ"
							value="Azerbaijan">Azerbaijan</option>
																	<option data-tel="1242"
							data-full="Commonwealth of the Bahamas"
							data-iso="BS"
							value="Bahamas">Bahamas</option>
																	<option data-tel="973"
							data-full="Kingdom of Bahrain"
							data-iso="BH"
							value="Bahrain">Bahrain</option>
																	<option data-tel="880"
							data-full="People's Republic of Bangladesh"
							data-iso="BD"
							value="Bangladesh">Bangladesh</option>
																	<option data-tel="1246"
							data-full="Barbados"
							data-iso="BB"
							value="Barbados">Barbados</option>
																	<option data-tel="375"
							data-full="Republic of Belarus"
							data-iso="BY"
							value="Belarus">Belarus</option>
																	<option data-tel="32"
							data-full="Kingdom of Belgium"
							data-iso="BE"
							value="Belgium">Belgium</option>
																	<option data-tel="501"
							data-full="Belize"
							data-iso="BZ"
							value="Belize">Belize</option>
																	<option data-tel="229"
							data-full="Republic of Benin"
							data-iso="BJ"
							value="Benin">Benin</option>
																	<option data-tel="1441"
							data-full="Bermuda"
							data-iso="BM"
							value="Bermuda">Bermuda</option>
																	<option data-tel="975"
							data-full="Kingdom of Bhutan"
							data-iso="BT"
							value="Bhutan">Bhutan</option>
																	<option data-tel="591"
							data-full="Plurinational State of Bolivia"
							data-iso="BO"
							value="Bolivia">Bolivia</option>
																	<option data-tel="387"
							data-full="Bosnia and Herzegovina"
							data-iso="BA"
							value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
																	<option data-tel="267"
							data-full="Republic of Botswana"
							data-iso="BW"
							value="Botswana">Botswana</option>
																	<option data-tel="55"
							data-full="Federative Republic of Brazil"
							data-iso="BR"
							value="Brazil">Brazil</option>
																	<option data-tel="246"
							data-full="British Indian Ocean Territory"
							data-iso="IO"
							value="British Indian Ocean Territory">British Indian Ocean Territory</option>
																	<option data-tel="673"
							data-full="State of Brunei Darussalam"
							data-iso="BN"
							value="Brunei">Brunei</option>
																	<option data-tel="359"
							data-full="Republic of Bulgaria"
							data-iso="BG"
							value="Bulgaria">Bulgaria</option>
																	<option data-tel="226"
							data-full="Burkina Faso"
							data-iso="BF"
							value="Burkina Faso">Burkina Faso</option>
																	<option data-tel="257"
							data-full="Republic of Burundi"
							data-iso="BI"
							value="Burundi">Burundi</option>
																	<option data-tel="855"
							data-full="Kingdom of Cambodia"
							data-iso="KH"
							value="Cambodia">Cambodia</option>
							<option data-tel="855"
							data-full="Kingdom of Canada"
							data-iso="CA"
							value="Canada">Canada</option>
							
																	<option data-tel="237"
							data-full="Republic of Cameroon"
							data-iso="CM"
							value="Cameroon">Cameroon</option>
																	<option data-tel="238"
							data-full="Republic of Cape Verde"
							data-iso="CV"
							value="Cape Verde">Cape Verde</option>
																	<option data-tel="1345"
							data-full="Cayman Islands"
							data-iso="KY"
							value="Cayman Islands">Cayman Islands</option>
																	<option data-tel="236"
							data-full="Central African Republic"
							data-iso="CF"
							value="Central African Republic">Central African Republic</option>
																	<option data-tel="235"
							data-full="Republic of Chad"
							data-iso="TD"
							value="Chad">Chad</option>
																	<option data-tel="56"
							data-full="Republic of Chile"
							data-iso="CL"
							value="Chile">Chile</option>
																	<option data-tel="86"
							data-full="People's Republic of China"
							data-iso="CN"
							value="China">China</option>
																	<option data-tel="61"
							data-full="Christmas Island"
							data-iso="CX"
							value="Christmas Island">Christmas Island</option>
																	<option data-tel="61"
							data-full="Cocos (Keeling) Islands"
							data-iso="CC"
							value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
																	<option data-tel="57"
							data-full="Republic of Colombia"
							data-iso="CO"
							value="Colombia">Colombia</option>
																	<option data-tel="269"
							data-full="Union of the Comoros"
							data-iso="KM"
							value="Comoros">Comoros</option>
																	<option data-tel="242"
							data-full="Republic of the Congo"
							data-iso="CG"
							value="Congo (Brazzaville)">Congo (Brazzaville)</option>
																	<option data-tel="243"
							data-full="Democratic Republic of the Congo"
							data-iso="CD"
							value="Congo (Kinshasa)">Congo (Kinshasa)</option>
																	<option data-tel="682"
							data-full="Cook Islands"
							data-iso="CK"
							value="Cook Islands">Cook Islands</option>
																	<option data-tel="506"
							data-full="Republic of Costa Rica"
							data-iso="CR"
							value="Costa Rica">Costa Rica</option>
																	<option data-tel="225"
							data-full="Republic of Côte d'Ivoire"
							data-iso="CI"
							value="Ivory Coast">Ivory Coast</option>
																	<option data-tel="385"
							data-full="Republic of Croatia"
							data-iso="HR"
							value="Croatia">Croatia</option>
																	<option data-tel="53"
							data-full="Republic of Cuba"
							data-iso="CU"
							value="Cuba">Cuba</option>
																	<option data-tel="357"
							data-full="Republic of Cyprus"
							data-iso="CY"
							value="Cyprus">Cyprus</option>
																	<option data-tel="420"
							data-full="Czech Republic"
							data-iso="CZ"
							value="Czech Republic">Czech Republic</option>
																	<option data-tel="45"
							data-full="Kingdom of Denmark"
							data-iso="DK"
							value="Denmark">Denmark</option>
																	<option data-tel="253"
							data-full="Republic of Djibouti"
							data-iso="DJ"
							value="Djibouti">Djibouti</option>
																	<option data-tel="1767"
							data-full="Commonwealth of Dominica"
							data-iso="DM"
							value="Dominica">Dominica</option>
																	<option data-tel="1809"
							data-full="Dominican Republic"
							data-iso="DO"
							value="Dominican Republic">Dominican Republic</option>
																	<option data-tel="593"
							data-full="Republic of Ecuador"
							data-iso="EC"
							value="Ecuador">Ecuador</option>
																	<option data-tel="20"
							data-full="Arab Republic of Egypt"
							data-iso="EG"
							value="Egypt">Egypt</option>
																	<option data-tel="503"
							data-full="Republic of El Salvador"
							data-iso="SV"
							value="El Salvador">El Salvador</option>
																	<option data-tel="240"
							data-full="Republic of Equatorial Guinea"
							data-iso="GQ"
							value="Equatorial Guinea">Equatorial Guinea</option>
																	<option data-tel="291"
							data-full="State of Eritrea"
							data-iso="ER"
							value="Eritrea">Eritrea</option>
																	<option data-tel="372"
							data-full="Republic of Estonia"
							data-iso="EE"
							value="Estonia">Estonia</option>
																	<option data-tel="251"
							data-full="Federal Democratic Republic of Ethiopia"
							data-iso="ET"
							value="Ethiopia">Ethiopia</option>
																	<option data-tel="500"
							data-full="Falkland Islands (Malvinas)"
							data-iso="FK"
							value="Falkland Islands">Falkland Islands</option>
																	<option data-tel="298"
							data-full="Faroe Islands"
							data-iso="FO"
							value="Faroe Islands">Faroe Islands</option>
																	<option data-tel="679"
							data-full="Republic of Fiji"
							data-iso="FJ"
							value="Fiji">Fiji</option>
																	<option data-tel="358"
							data-full="Republic of Finland"
							data-iso="FI"
							value="Finland">Finland</option>
																	<option data-tel="33"
							data-full="French Republic"
							data-iso="FR"
							value="France">France</option>
																	<option data-tel="594"
							data-full="French Guiana"
							data-iso="GF"
							value="French Guiana">French Guiana</option>
																	<option data-tel="689"
							data-full="French Polynesia"
							data-iso="PF"
							value="French Polynesia">French Polynesia</option>
																	<option data-tel="260"
							data-full="French Southern Territories"
							data-iso="TF"
							value="French Southern Territories">French Southern Territories</option>
																	<option data-tel="241"
							data-full="Gabonese Republic"
							data-iso="GA"
							value="Gabon">Gabon</option>
																	<option data-tel="220"
							data-full="Republic of The Gambia"
							data-iso="GM"
							value="Gambia">Gambia</option>
																	<option data-tel="995"
							data-full="Georgia"
							data-iso="GE"
							value="Georgia">Georgia</option>
																	<option data-tel="49"
							data-full="Federal Republic of Germany"
							data-iso="DE"
							value="Germany">Germany</option>
																	<option data-tel="233"
							data-full="Republic of Ghana"
							data-iso="GH"
							value="Ghana">Ghana</option>
																	<option data-tel="350"
							data-full="Gibraltar"
							data-iso="GI"
							value="Gibraltar">Gibraltar</option>
																	<option data-tel="30"
							data-full="Hellenic Republic"
							data-iso="GR"
							value="Greece">Greece</option>
																	<option data-tel="299"
							data-full="Greenland"
							data-iso="GL"
							value="Greenland">Greenland</option>
																	<option data-tel="1473"
							data-full="Grenada"
							data-iso="GD"
							value="Grenada">Grenada</option>
																	<option data-tel="590"
							data-full="Guadeloupe"
							data-iso="GP"
							value="Guadeloupe">Guadeloupe</option>
																	<option data-tel="502"
							data-full="Republic of Guatemala"
							data-iso="GT"
							value="Guatemala">Guatemala</option>
																	<option data-tel="224"
							data-full="Republic of Guinea"
							data-iso="GN"
							value="Guinea">Guinea</option>
																	<option data-tel="245"
							data-full="Republic of Guinea-Bissau"
							data-iso="GW"
							value="Guinea-Bissau">Guinea-Bissau</option>
																	<option data-tel="592"
							data-full="Co-operative Republic of Guyana"
							data-iso="GY"
							value="Guyana">Guyana</option>
																	<option data-tel="509"
							data-full="Republic of Haiti"
							data-iso="HT"
							value="Haiti">Haiti</option>
																	<option data-tel="379"
							data-full="Holy See (Vatican City State)"
							data-iso="VA"
							value="Vatican">Vatican</option>
																	<option data-tel="504"
							data-full="Republic of Honduras"
							data-iso="HN"
							value="Honduras">Honduras</option>
																	<option data-tel="852"
							data-full="Hong Kong S.A.R., China"
							data-iso="HK"
							value="Hong Kong S.A.R., China">Hong Kong S.A.R., China</option>
																	<option data-tel="36"
							data-full="Hungary"
							data-iso="HU"
							value="Hungary">Hungary</option>
																	<option data-tel="354"
							data-full="Republic of Iceland"
							data-iso="IS"
							value="Iceland">Iceland</option>
																	<option data-tel="91"
							data-full="Republic of India"
							data-iso="IN"
							value="India">India</option>
																	<option data-tel="62"
							data-full="Republic of Indonesia"
							data-iso="ID"
							value="Indonesia">Indonesia</option>
																	<option data-tel="98"
							data-full="Islamic Republic of Iran"
							data-iso="IR"
							value="Iran">Iran</option>
																	<option data-tel="964"
							data-full="Republic of Iraq"
							data-iso="IQ"
							value="Iraq">Iraq</option>
																	<option data-tel="353"
							data-full="Ireland"
							data-iso="IE"
							value="Ireland">Ireland</option>
																	<option data-tel="972"
							data-full="State of Israel"
							data-iso="IL"
							value="Israel">Israel</option>
																	<option data-tel="39"
							data-full="Italian Republic"
							data-iso="IT"
							value="Italy">Italy</option>
																	<option data-tel="1876"
							data-full="Jamaica"
							data-iso="JM"
							value="Jamaica">Jamaica</option>
																	<option data-tel="962"
							data-full="Hashemite Kingdom of Jordan"
							data-iso="JO"
							value="Jordan">Jordan</option>
																	<option data-tel="7"
							data-full="Republic of Kazakhstan"
							data-iso="KZ"
							value="Kazakhstan">Kazakhstan</option>
																	<option data-tel="254"
							data-full="Republic of Kenya"
							data-iso="KE"
							value="Kenya">Kenya</option>
																	<option data-tel="686"
							data-full="Republic of Kiribati"
							data-iso="KI"
							value="Kiribati">Kiribati</option>
																	<option data-tel="82"
							data-full="Republic of Korea"
							data-iso="KR"
							value="Republic of Korea">Republic of Korea</option>
																	<option data-tel="965"
							data-full="State of Kuwait"
							data-iso="KW"
							value="Kuwait">Kuwait</option>
																	<option data-tel="996"
							data-full="Kyrgyz Republic"
							data-iso="KG"
							value="Kyrgyzstan">Kyrgyzstan</option>
																	<option data-tel="856"
							data-full="Lao People's Democratic Republic"
							data-iso="LA"
							value="Laos">Laos</option>
																	<option data-tel="371"
							data-full="Republic of Latvia"
							data-iso="LV"
							value="Latvia">Latvia</option>
																	<option data-tel="961"
							data-full="Lebanese Republic"
							data-iso="LB"
							value="Lebanon">Lebanon</option>
																	<option data-tel="266"
							data-full="Kingdom of Lesotho"
							data-iso="LS"
							value="Lesotho">Lesotho</option>
																	<option data-tel="231"
							data-full="Republic of Liberia"
							data-iso="LR"
							value="Liberia">Liberia</option>
																	<option data-tel="218"
							data-full="Libya"
							data-iso="LY"
							value="Libya">Libya</option>
																	<option data-tel="423"
							data-full="Principality of Liechtenstein"
							data-iso="LI"
							value="Liechtenstein">Liechtenstein</option>
																	<option data-tel="370"
							data-full="Republic of Lithuania"
							data-iso="LT"
							value="Lithuania">Lithuania</option>
																	<option data-tel="352"
							data-full="Grand Duchy of Luxembourg"
							data-iso="LU"
							value="Luxembourg">Luxembourg</option>
																	<option data-tel="853"
							data-full="Macao S.A.R., China"
							data-iso="MO"
							value="Macao S.A.R., China">Macao S.A.R., China</option>
																	<option data-tel="389"
							data-full="The Former Yugoslav Republic of Macedonia"
							data-iso="MK"
							value="Macedonia">Macedonia</option>
																	<option data-tel="261"
							data-full="Republic of Madagascar"
							data-iso="MG"
							value="Madagascar">Madagascar</option>
																	<option data-tel="265"
							data-full="Republic of Malawi"
							data-iso="MW"
							value="Malawi">Malawi</option>
																	<option data-tel="60"
							data-full="Federation of Malaysia"
							data-iso="MY"
							value="Malaysia">Malaysia</option>
																	<option data-tel="960"
							data-full="Republic of Maldives"
							data-iso="MV"
							value="Maldives">Maldives</option>
																	<option data-tel="223"
							data-full="Republic of Mali"
							data-iso="ML"
							value="Mali">Mali</option>
																	<option data-tel="356"
							data-full="Republic of Malta"
							data-iso="MT"
							value="Malta">Malta</option>
																	<option data-tel="596"
							data-full="Martinique"
							data-iso="MQ"
							value="Martinique">Martinique</option>
																	<option data-tel="222"
							data-full="Islamic Republic of Mauritania"
							data-iso="MR"
							value="Mauritania">Mauritania</option>
																	<option data-tel="262"
							data-full="Mayotte"
							data-iso="YT"
							value="Mayotte">Mayotte</option>
																	<option data-tel="52"
							data-full="United Mexican States"
							data-iso="MX"
							value="Mexico">Mexico</option>
																	<option data-tel="691"
							data-full="Federated States of Micronesia"
							data-iso="FM"
							value="Micronesia">Micronesia</option>
																	<option data-tel="373"
							data-full="Republic of Moldova"
							data-iso="MD"
							value="Moldova">Moldova</option>
																	<option data-tel="377"
							data-full="Principality of Monaco"
							data-iso="MC"
							value="Monaco">Monaco</option>
																	<option data-tel="976"
							data-full="Mongolia"
							data-iso="MN"
							value="Mongolia">Mongolia</option>
																	<option data-tel="382"
							data-full="Montenegro"
							data-iso="ME"
							value="Montenegro">Montenegro</option>
																	<option data-tel="1664"
							data-full="Montserrat"
							data-iso="MS"
							value="Montserrat">Montserrat</option>
																	<option data-tel="212"
							data-full="Kingdom of Morocco"
							data-iso="MA"
							value="Morocco">Morocco</option>
																	<option data-tel="258"
							data-full="Republic of Mozambique"
							data-iso="MZ"
							value="Mozambique">Mozambique</option>
																	<option data-tel="95"
							data-full="Republic of the Union of Myanmar"
							data-iso="MM"
							value="Myanmar">Myanmar</option>
																	<option data-tel="264"
							data-full="Republic of Namibia"
							data-iso="NA"
							value="Namibia">Namibia</option>
																	<option data-tel="674"
							data-full="Republic of Nauru"
							data-iso="NR"
							value="Nauru">Nauru</option>
																	<option data-tel="977"
							data-full="Federal Democratic Republic of Nepal"
							data-iso="NP"
							value="Nepal">Nepal</option>
																	<option data-tel="31"
							data-full="Kingdom of the Netherlands"
							data-iso="NL"
							value="Netherlands">Netherlands</option>
																	<option data-tel="599"
							data-full="Netherlands Antilles"
							data-iso="AN"
							value="Netherlands Antilles">Netherlands Antilles</option>
																	<option data-tel="687"
							data-full="New Caledonia"
							data-iso="NC"
							value="New Caledonia">New Caledonia</option>
																	<option data-tel="505"
							data-full="Republic of Nicaragua"
							data-iso="NI"
							value="Nicaragua">Nicaragua</option>
																	<option data-tel="227"
							data-full="Republic of Niger"
							data-iso="NE"
							value="Niger">Niger</option>
																	<option data-tel="234"
							data-full="Federal Republic of Nigeria"
							data-iso="NG"
							value="Nigeria">Nigeria</option>
																	<option data-tel="683"
							data-full="Niue"
							data-iso="NU"
							value="Niue">Niue</option>
																	<option data-tel="672"
							data-full="Norfolk Island"
							data-iso="NF"
							value="Norfolk Island">Norfolk Island</option>
																	<option data-tel="47"
							data-full="Kingdom of Norway"
							data-iso="NO"
							value="Norway">Norway</option>
																	<option data-tel="968"
							data-full="Sultanate of Oman"
							data-iso="OM"
							value="Oman">Oman</option>
																	<option data-tel="92"
							data-full="Islamic Republic of Pakistan"
							data-iso="PK"
							value="Pakistan">Pakistan</option>
																	<option data-tel="680"
							data-full="Republic of Palau"
							data-iso="PW"
							value="Palau">Palau</option>
																	<option data-tel="970"
							data-full="Occupied Palestinian Territory"
							data-iso="PS"
							value="Palestinian Territory">Palestinian Territory</option>
																	<option data-tel="507"
							data-full="Republic of Panama"
							data-iso="PA"
							value="Panama">Panama</option>
																	<option data-tel="675"
							data-full="Independent State of Papua New Guinea"
							data-iso="PG"
							value="Papua New Guinea">Papua New Guinea</option>
																	<option data-tel="595"
							data-full="Republic of Paraguay"
							data-iso="PY"
							value="Paraguay">Paraguay</option>
																	<option data-tel="51"
							data-full="Republic of Peru"
							data-iso="PE"
							value="Peru">Peru</option>
																	<option data-tel="63"
							data-full="Republic of the Philippines"
							data-iso="PH"
							value="Philippines">Philippines</option>
																	<option data-tel="64"
							data-full="Pitcairn"
							data-iso="PN"
							value="Pitcairn">Pitcairn</option>
																	<option data-tel="48"
							data-full="Republic of Poland"
							data-iso="PL"
							value="Poland">Poland</option>
																	<option data-tel="351"
							data-full="Portuguese Republic"
							data-iso="PT"
							value="Portugal">Portugal</option>
																	<option data-tel="974"
							data-full="State of Qatar"
							data-iso="QA"
							value="Qatar">Qatar</option>
																	<option data-tel="262"
							data-full="Réunion"
							data-iso="RE"
							value="Reunion">Reunion</option>
																	<option data-tel="40"
							data-full="Romania"
							data-iso="RO"
							value="Romania">Romania</option>
																	<option data-tel="7"
							data-full="Russian Federation"
							data-iso="RU"
							value="Russia">Russia</option>
																	<option data-tel="250"
							data-full="Republic of Rwanda"
							data-iso="RW"
							value="Rwanda">Rwanda</option>
																	<option data-tel="290"
							data-full="Saint Helena, Ascension and Tristan da Cunha"
							data-iso="SH"
							value="Saint Helena">Saint Helena</option>
																	<option data-tel="1869"
							data-full="Federation of Saint Christopher and Nevis"
							data-iso="KN"
							value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																	<option data-tel="1758"
							data-full="Saint Lucia"
							data-iso="LC"
							value="Saint Lucia">Saint Lucia</option>
																	<option data-tel="590"
							data-full="Saint Martin (French part)"
							data-iso="MF"
							value="Saint Martin">Saint Martin</option>
																	<option data-tel="508"
							data-full="Saint Pierre and Miquelon"
							data-iso="PM"
							value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																	<option data-tel="1784"
							data-full="Saint Vincent and the Grenadines"
							data-iso="VC"
							value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																	<option data-tel="685"
							data-full="Independent State of Samoa"
							data-iso="WS"
							value="Samoa">Samoa</option>
																	<option data-tel="378"
							data-full="Republic of San Marino"
							data-iso="SM"
							value="San Marino">San Marino</option>
																	<option data-tel="239"
							data-full="Democratic Republic of São Tomé and Príncipe"
							data-iso="ST"
							value="Sao Tome and Principe">Sao Tome and Principe</option>
																	<option data-tel="966"
							data-full="Kingdom of Saudi Arabia"
							data-iso="SA"
							value="Saudi Arabia">Saudi Arabia</option>
																	<option data-tel="221"
							data-full="Republic of Senegal"
							data-iso="SN"
							value="Senegal">Senegal</option>
																	<option data-tel="381"
							data-full="Republic of Serbia"
							data-iso="RS"
							value="Serbia">Serbia</option>
																	<option data-tel="248"
							data-full="Republic of Seychelles"
							data-iso="SC"
							value="Seychelles">Seychelles</option>
																	<option data-tel="232"
							data-full="Republic of Sierra Leone"
							data-iso="SL"
							value="Sierra Leone">Sierra Leone</option>
																	<option data-tel="65"
							data-full="Republic of Singapore"
							data-iso="SG"
							value="Singapore">Singapore</option>
																	<option data-tel="421"
							data-full="Slovak Republic"
							data-iso="SK"
							value="Slovakia">Slovakia</option>
																	<option data-tel="386"
							data-full="Republic of Slovenia"
							data-iso="SI"
							value="Slovenia">Slovenia</option>
																	<option data-tel="677"
							data-full="Solomon Islands"
							data-iso="SB"
							value="Solomon Islands">Solomon Islands</option>
																	<option data-tel="252"
							data-full="Federal Republic of Somalia"
							data-iso="SO"
							value="Somalia">Somalia</option>
																	<option data-tel="27"
							data-full="Republic of South Africa"
							data-iso="ZA"
							value="South Africa">South Africa</option>
																	<option data-tel="500"
							data-full="South Georgia and the South Sandwich Islands"
							data-iso="GS"
							value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
																	<option data-tel="34"
							data-full="Kingdom of Spain"
							data-iso="ES"
							value="Spain">Spain</option>
																	<option data-tel="94"
							data-full="Democratic Socialist Republic of Sri Lanka"
							data-iso="LK"
							value="Sri Lanka">Sri Lanka</option>
																	<option data-tel="249"
							data-full="Republic of the Sudan"
							data-iso="SD"
							value="Sudan">Sudan</option>
																	<option data-tel="597"
							data-full="Republic of Suriname"
							data-iso="SR"
							value="Suriname">Suriname</option>
																	<option data-tel="268"
							data-full="Kingdom of Swaziland"
							data-iso="SZ"
							value="Swaziland">Swaziland</option>
																	<option data-tel="46"
							data-full="Kingdom of Sweden"
							data-iso="SE"
							value="Sweden">Sweden</option>
																	<option data-tel="41"
							data-full="Switzerland"
							data-iso="CH"
							value="Switzerland">Switzerland</option>
																	<option data-tel="963"
							data-full="Syrian Arab Republic"
							data-iso="SY"
							value="Syria">Syria</option>
																	<option data-tel="886"
							data-full="Taiwan, Province of China"
							data-iso="TW"
							value="Taiwan">Taiwan</option>
																	<option data-tel="992"
							data-full="Republic of Tajikistan"
							data-iso="TJ"
							value="Tajikistan">Tajikistan</option>
																	<option data-tel="255"
							data-full="United Republic of Tanzania"
							data-iso="TZ"
							value="Tanzania">Tanzania</option>
																	<option data-tel="66"
							data-full="Kingdom of Thailand"
							data-iso="TH"
							value="Thailand">Thailand</option>
																	<option data-tel="670"
							data-full="Democratic Republic of Timor-Leste"
							data-iso="TL"
							value="Timor-Leste">Timor-Leste</option>
																	<option data-tel="228"
							data-full="Togolese Republic"
							data-iso="TG"
							value="Togo">Togo</option>
																	<option data-tel="690"
							data-full="Tokelau"
							data-iso="TK"
							value="Tokelau">Tokelau</option>
																	<option data-tel="676"
							data-full="Kingdom of Tonga"
							data-iso="TO"
							value="Tonga">Tonga</option>
																	<option data-tel="1868"
							data-full="Republic of Trinidad and Tobago"
							data-iso="TT"
							value="Trinidad and Tobago">Trinidad and Tobago</option>
																	<option data-tel="216"
							data-full="Republic of Tunisia"
							data-iso="TN"
							value="Tunisia">Tunisia</option>
																	<option data-tel="90"
							data-full="Republic of Turkey"
							data-iso="TR"
							value="Turkey">Turkey</option>
																	<option data-tel="993"
							data-full="Turkmenistan"
							data-iso="TM"
							value="Turkmenistan">Turkmenistan</option>
																	<option data-tel="1649"
							data-full="Turks and Caicos Islands"
							data-iso="TC"
							value="Turks and Caicos Islands">Turks and Caicos Islands</option>
																	<option data-tel="688"
							data-full="Tuvalu"
							data-iso="TV"
							value="Tuvalu">Tuvalu</option>
																	<option data-tel="256"
							data-full="Republic of Uganda"
							data-iso="UG"
							value="Uganda">Uganda</option>
																	<option data-tel="380"
							data-full="Ukraine"
							data-iso="UA"
							value="Ukraine">Ukraine</option>
																	<option data-tel="971"
							data-full="United Arab Emirates"
							data-iso="AE"
							value="United Arab Emirates">United Arab Emirates</option>
																	<option data-tel="44"
							data-full="United Kingdom of Great Britain and Northern Ireland"
							data-iso="GB"
							value="United Kingdom">United Kingdom</option>
							
							<option data-tel="1"
							data-full="United State"
							data-iso="US"
							value="United State">United State</option>
																	<option data-tel="598"
							data-full="Eastern Republic of Uruguay"
							data-iso="UY"
							value="Uruguay">Uruguay</option>
																	<option data-tel="998"
							data-full="Republic of Uzbekistan"
							data-iso="UZ"
							value="Uzbekistan">Uzbekistan</option>
																	<option data-tel="678"
							data-full="Republic of Vanuatu"
							data-iso="VU"
							value="Vanuatu">Vanuatu</option>
																	<option data-tel="58"
							data-full="Bolivarian Republic of Venezuela"
							data-iso="VE"
							value="Venezuela">Venezuela</option>
																	<option data-tel="84"
							data-full="Socialist Republic of Viet Nam"
							data-iso="VN"
							value="Vietnam">Vietnam</option>
																	<option data-tel="1284"
							data-full="Virgin Islands, British"
							data-iso="VG"
							value="British Virgin Islands">British Virgin Islands</option>
																	<option data-tel="681"
							data-full="Wallis and Futuna Islands"
							data-iso="WF"
							value="Wallis and Futuna">Wallis and Futuna</option>
																	<option data-tel="212"
							data-full="Western Sahara"
							data-iso="EH"
							value="Western Sahara">Western Sahara</option>
																	<option data-tel="967"
							data-full="Republic of Yemen"
							data-iso="YE"
							value="Yemen">Yemen</option>
																	<option data-tel="260"
							data-full="Republic of Zambia"
							data-iso="ZM"
							value="Zambia">Zambia</option>
																	<option data-tel="263"
							data-full="Republic of Zimbabwe"
							data-iso="ZW"
							value="Zimbabwe">Zimbabwe</option>
								</select>
							  </div>
							  
							  <div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
							  </div>
							  <br>
							  <input value="Sign-Up" name="signup_btn" type="submit" id="signup_btn">
							  Have account? <a href="login">Login here</a>
							</form>
                        </div>     
                                <div class="text-center" style="text-transform: uppercase;">
                                    <br><br>
                                      <a href="#reset.php">Forgot Password</a> | <a href="login.php">Login</a>
                                    <br><br>
                                </div>
                        </div>
                    </div>
        </div>
    </div>
    <!--login section end-->


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
                            <p><a href="contact.html">contact@providusoption.com</a></p>
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
                            <p>(614) 547-3104</p>
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
                        Copyright © Providus Option. 2011 - 2020 All Right Reserved.
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

<!-- Mirrored from oaksideinvestments.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 10:15:24 GMT -->
</html>