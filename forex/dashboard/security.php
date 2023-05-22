																<?php require_once('conn.php');
																include('session.php');
																include('functions.php');
																
																
																$amt_message = "";
																$success_message = "";
																$error_message = "";
												
												if (isset($_POST['update_pass_btn']))
									{
												
										//$_SESSION['app_id'] = $finalcode;
										$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
										@$password1 = mysqli_real_escape_string($conn, $_POST['password']);
										$password = trim(md5($_POST['password']));
										
														if($password1 != $password2)
														{
														$success_message = "<font color='#FF0000' size='+2'> Password do not match </font>";
															
														}
													else{
											
															$query_update = mysqli_query($conn, "UPDATE user_tb SET upassword ='$password' WHERE user_id = '$session_id'");
															if ($query_update) 
															{	
															$success_message = "<font color='#009966' size='+2'>Information updated successfully.</font>
																<p align ='center'><font style='text-align:center'><img src='img/btn-ajax-loader.gif' /></font></p>
																<meta http-equiv='refresh' Content='5; url=dashboard.php' />";
															}
															else{
																$success_message ="<font color='#FF0000'>Sorry, error occurred trying to update your profile, try again</font>";
																}
														}	
													
													
									}
																?>
																<!DOCTYPE html>
																<html style=""><head>
																<meta http-equiv="content-type" content="text/html; charset=UTF-8">
																<meta charset="utf-8">
																	<meta http-equiv="X-UA-Compatible" content="IE=edge">
																	<title>Providus Option security Settings    </title>
																<meta name="description" content="            
																	">

																	 <?php include('css.php');?>
																<style>
																.divider{
																border-bottom: 1px dotted;
																}
																.blinking{
																	animation:blinkingText 2s infinite;
																}
																@keyframes blinkingText{
																	0%{		color: #f00;	}
																	49%{	color: #600;	}
																	50%{	color: #c00;	}
																	99%{	color:#e00;	}
																	100%{	color: #f00;	}
																}
																.blinkgreen{
																	animation:blinkgreenText 2s infinite;
																}
																@keyframes blinkgreenText{
																	0%{		color: #0f0;	}
																	49%{	color: #060;	}
																	50%{	color: #0c0;	}
																	99%{	color:#0e0;	}
																	100%{	color: #0f0;	}
																}
																</style>
																<SCRIPT type="text/javascript">
																var tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
																var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

																function GetClock(){
																 tzOffset = 0;//set this to the number of hours offset from UTC

																 d=new Date();
																 dx=d.toGMTString();
																dx=dx.substr(0,dx.length -3);
																d.setTime(Date.parse(dx))
																d.setHours(d.getHours()+tzOffset);
																var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
																var nhour=d.getHours(),nmin=d.getMinutes(),ap,nsec=d.getSeconds();
																
																if(nhour<=9) nhour="0"+nhour;
																if(nmin<=9) nmin="0"+nmin;
																if(nsec<=9) nsec="0"+nsec;

																document.getElementById('clockbox').innerHTML="<i class='fa fa-clock-o'></i>&nbsp;"+nhour+":"+nmin+":"+nsec;
																var nminutes = Number(nmin) + 01;
																if(nminutes<=9) nminutes="0"+nminutes;
																time = "<i class='fa fa-clock-o'></i>&nbsp;"+nhour+":"+nminutes;
																
																}

																window.onload=function(){
																GetClock();
																setInterval(GetClock,1000);
																document.getElementById('time').innerHTML=time;
																}
																</SCRIPT>
												</head>
<body class="pushable  dimmable scrolling" style="">
<?php include('sider-bar.php');?>

    <div class="pusher" aria-hidden="false">
<?php 
include('navigation.php');
?>
<div class="root-content">
                                                                    <div class="pusher push-trading">
	<!-- uiView:  --><div style=""><div class="pusher pusher-min-400">
 <section class="img-bg-section">
     <div class="row">
         <ul class="tabs">
             <li><a href="personal-data.php">Personal Data</a></li>
             <li><a href="#" class="active">Security Settings</a></li>
         </ul>
         <div class="mob-tab-nav mob-main-tabs">
             <div class="ui not_select dropdown mob-tabular" tabindex="0">
                 <div class="text default">Security Settings</div>
                 <i class="dropdown icon"></i>
                 <div class="menu" tabindex="-1">
                     <a href="personal-data.php" class="item">Personal Data</a>
                    
                 </div>
             </div>
         </div>
											<h2 class="title">Security Settings</h2>
												 </div>
												 <span class="blue-arrow"></span>
											 </section>
												<div style="">
													<section class="content-box">
													<div class="row">
													<div class="form-row account-data form-hailight clearfix">
													<div align="center"><p class="p"><?php echo $success_message; ?></p></div>
														<form method="post" action="">
													<div class="line"></div>
														<div class="line">
															<label>Current password:</label>
															<input type="password"  required="" name="current">
														</div>
														<div class="line">
															<label>New password:</label>
															<input type="password" required="" name="password">
														</div>

														<div class="line">
															<label>Confirm new password:</label>
															<input type="password" required="" name="password2" >
															<span id="passcheck"></span>
														</div>

														<button class="ui button primal float-right" type"submit" name="update_pass_btn" id="pass_btn2">Save</button>
														</form>
														</div>
														</div>
													</section>
											</div>
												
											</div>


<script class="ng-scope">
    $(function(){
        $('.ui.dropdown').dropdown();
    });
</script></div>
</div>
</div>
											
<?php
include('footer.php');
?>
	</div>
<?php

include("javascript.php");
?>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76636433-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">

    if(bowser.safari || bowser.mac){
        // disable for this
    }else{
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter38379630 = new Ya.Metrika({
                        id:38379630,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }

            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    }
</script>
<noscript aria-hidden="false"><div><img src="https://mc.yandex.ru/watch/38379630" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1057644682;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="https://gbtraderoptions.com/assets/js/conversion.js">
</script>
<noscript aria-hidden="false">
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1057644682/?guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- Global site tag (gtag.js) - Google AdWords: 824992907 -->
<script async="" src="https://gbtraderoptions.com/assets/js/js.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-824992907');
</script>

	<?php include('livechat-script.php');?>
	</body></html>			