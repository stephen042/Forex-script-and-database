																<?php require_once('conn.php');
include('session.php');	
												include('functions.php');
												$amt_message = "";
												$success_message = "";
												$error_message = "";
												
												
												if (isset($_POST['support_btn']))
											{
												
										//$_SESSION['app_id'] = $finalcode;
										$ticket_type = mysqli_real_escape_string($conn, $_POST['ticket_type']);
										$email = mysqli_real_escape_string($conn, $_POST['email']);
										$message = mysqli_real_escape_string($conn, $_POST['message']);
												
										$query = mysqli_query($conn, "SELECT * FROM user_tb WHERE user_id ='$session_id'");
										$row = mysqli_fetch_array($query);
										$num_row = mysqli_num_rows($query);
										
										if ($num_row > 0) 
											{
											$success_message = "Your support ticket has be created successfully! It will be resolved sohrtly thank you.";	
			// Send mail to user with verification here
			
			$to = 'info@providusoption.com';
         	$subject = "Support Request From Providus Option";
         
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
                                    <td height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF' style='padding:0;margin:0;font-size:0;line-height:0'><img src='http://www.zictech-ng.com/img/logo-white2.png' width='190' height='94'>
                                    
                                    </td>
                   			  </tr>
                                <tr>
                                    <td align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                        	<tr>
                                            	<td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                <td align='center'>
                                                  <h6 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:25px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0'>Support Ticket</h6>
                                                </td>
                                                <td width='25'></td>
                                            </tr>
                                            <tr>
                                            	<td colspan='3' height='40'></td></tr><tr>
                                            	  <td colspan='5' align='center'>
                                                    <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
													Hello, $fname has send a support ticket about the following issues! Please review and resolved it as urgent thank you</p>
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
                                                            <td align='center' style='margin:0;text-align:center'><a href='http://www.zictech-ng/eu/contact' style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px' target='_blank'>Click Here to Replay</a></td>
                                                      	</tr>
                                                   	</tbody>
                                                    </table>
                                               	</div>
                                           	</td>
                                       	</tr>
                                        <tr>
                                          <td colspan='3' height='30'><br>
											<p>Find the details below.<br>
                                            <br>
                                            Ticket Type:&nbsp;&nbsp; $ticket_type</p>
											</p>User email: ID&nbsp;&nbsp; $email <br/>
                                            <p>Message:&nbsp;&nbsp; $message </p></td></tr>
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
         $header = "From: Providus Option <info@providusoption.com> \r\n";
         $header .= "Cc:noreply@providusoption.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         @$retval = mail ($to,$subject,$message,$header);
		
											}else
											{
											echo "<script>alert(' Sorry, error occured try again.')</script>";
											echo "<script>window.open('account.php','_self')</script>";	
											die();
											}
										}
?>
																<!DOCTYPE html>
																<html style=""><head>
																<meta http-equiv="content-type" content="text/html; charset=UTF-8">
																<meta charset="utf-8">
																	<meta http-equiv="X-UA-Compatible" content="IE=edge">
																	<title>Providus Option Support System    </title>
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
             <li><a href="index.php">Home</a></li>
             <li><a href="#" class="active">System Support</a></li>
         </ul>
         <div class="mob-tab-nav mob-main-tabs">
             <div class="ui not_select dropdown mob-tabular" tabindex="0">
                 <div class="text-default">System Support</div>
                 <i class="dropdown icon"></i>
                 <div class="menu" tabindex="-1">
                     <a href="index.php" class="item">Home</a>
                    
                 </div>
             </div>
         </div>
											<h2 class="title">System Support</h2>
												 </div>
												 <span class="blue-arrow"></span>
											 </section>
												<div style="">
													<section class="content-box">
													<div class="row">
													<div class="form-row account-data form-hailight clearfix">
													<div align="center"><p class="p"><?php echo $success_message; ?></p></div>
														<form method="post" name="mainform">
                                        <input type="hidden" name="a" value="support"/>
                                        <input type=hidden name=action value=send>
                                         
                                        <div class="col-sm-6">
                                        <div class="formbox">
                                        
                                	 <select class="ui dropdown" name="ticket_type" id="ticket_type" required="">
                    				 <option value="" selected="selected" disabled="disabled">-- Please select plan --</option>
                                       
                                    <option value="Withdraw Issues" >Withdraw Issues</option>
                                    <option value="Deposit Issues">"Deposit Issues</option>
                                    <option value="Investment Issues" >Investment Issues</option>
                                    <option value="Support Ticket Issues" >Support Ticket Issues</option>
                                    <option value="Account Funding Issues" >Account Funding Issues</option>
                                    <option value="Account Balance" >Account Balance</option>
                                    <option value="Earning Issues" >Earning Issues</option>
                                     <option value="Other Issues" >Other Issues</option>
                                        
                    			</select>
                    			
                                        &nbsp;
									
                            </div>
                        </div>
                        
 							<div class="col-sm-6">
                            <div class="formbox">
                                <span>
                   
								<input autocomplete="off" placeholder="Your Email"  type="email" name="email" value="" size="30" class="inpts">
							</span>
                            </div>
                        </div>

							<div class="col-sm-12">
                            <div class="formbox">
                                <span><i class="fa fa-comment-alt"></i>
                      	<textarea autocomplete="off" placeholder="Message"  name="message" class="inpts" required></textarea>

							</span>
                            </div>
                        </div>

							<div class="col-sm-12 text-center">
                            <div class="submit_btn">
                <button class="ui button primal float-right" type"submit" name="support_btn" id="support_btn">Send</button>
						</div>
                        </div>

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