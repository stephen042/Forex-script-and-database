
												<?php 
												require_once('conn.php');
												include('session.php');
												include('functions.php');
												
												$amt_message = "";
												$success_message = "";
												$error_message = "";
												
											
											if (isset($_POST['wit_btn']))
									{
												
										$w_amount = mysqli_real_escape_string($conn, $_POST['w_amount']);
										$w_bitcoin = mysqli_real_escape_string($conn, $_POST['w_address']);
										$method = mysqli_real_escape_string($conn, $_POST['method']);
											$getnumber = rand(10000,99999);
											$sasa = $getnumber + 1;
											$fgh='0'.$sasa;						
											$finalcode = 'CY'.$fgh;
											$trnc = ($finalcode);
											$_SESSION['w_amount'] = $w_amount;
											$_SESSION['w_bitcoin'] = $w_bitcoin;
											$_SESSION['method'] = $method;
											$_SESSION['withdraw_code'] = $finalcode;
											
										if(@$withdral_pending < $w_amount)
										{
										$success_message ="<font color='#FF0000'>Sorry, main balance is less than actual amount entered</font>";
										}else
										{
										
										$debit = ($withdral_pending - $w_amount);
												
										@$query = mysqli_query($conn, "INSERT INTO withraw_tb(w_uid, w_email, w_amt, w_amt_bal, w_status, w_acct_receiver, w_date, w_code, w_method) 
										VALUES ('$session_id','$email','$w_amount', '$debit', 'Pending','$w_bitcoin', NOW(), '$finalcode', '$method')");
										
										@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Withdrawal Request', 'Pending', '$trnc', '$w_amount', '', NOW(), '$method')");
									
										$query_staff = mysqli_query($conn, "UPDATE user_tb SET u_amount ='$debit' WHERE user_id = '$session_id'");
										
										if($query_staff)
									{
										$success_message = "<font color='#009966' size='+2'>Your withdrawal statement has be initiated successfully.</font>
										<br/>
										<p align ='center'><font style='text-align:center' size ='+2'> Please wait!</font></p>
										<p align ='center'><font style='text-align:center'>
										<p1 id='countdown'></p1><br/>
										<progress value='0' max='19' id='progressBar'></progress> 
										</font></p>
										<meta http-equiv='refresh' Content='19; url=verify-withdraw.php' />";
										
										
										// Send mail to user with verification here
			
			$to = $email;
         	$subject = "Withdrawal Account Confirmation";
         
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
                                    <td height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF' style='padding:0;margin:0;font-size:0;line-height:0'><img src='http://www.zictech-ng.com/eu/img/logo-white2.png'>
                                    
                                    </td>
                   			  </tr>
                                <tr>
                                    <td align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                        	<tr>
                                            	<td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                <td align='center'>
                                                  <h6 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:25px;color:#404040;line-height:28px;font-weight:bold;margin:0;padding:0'> Notification of withdrawal request in your account</h6>
                                                </td>
                                                <td width='25'></td>
                                            </tr>
                                            <tr>
                                            	<td colspan='3' height='40'></td></tr><tr>
                                            	  <td colspan='5' align='center'>
                                                    <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
													Hello $fullname, you requested a withdraw statement in your account! find below withdraw confirmation code to complete your transaction.</p>
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
                                                            <td align='center' style='margin:0;text-align:center'><style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px'>Conformation code: <b>$trnc</b></td>
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
                                          <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'>If this is not you, you can always contact us for any support or write us an email on support@providusoption.com </div>
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
         $header = "From:Providus Option <info@providusoption.com> \r\n";
         $header .= "Cc:noreply@providusoption.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         @$retval = mail ($to,$subject,$message,$header);
								
																		
									}
								    	else
											{
												$success_message ="<font color='#FF0000'>Sorry, error occurred trying processing your request, try again</font>";
																		
											}
										}
									
			
}
								
												
	?>
												<!DOCTYPE html>
												<html style=""><head>
												<meta http-equiv="content-type" content="text/html; charset=UTF-8">
												<meta charset="utf-8">
													<meta http-equiv="X-UA-Compatible" content="IE=edge">
													<title>Providus Options Account Withdrawal    </title>
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

<script>
var accountbal = <?php  echo $acct_amt2;?> ;
</script>
<div class="root-content">
<div class="pusher push-trading">
	<!-- uiView:  --><div><div class="pusher pusher-min-400">
 <section class="img-bg-section">
     <div class="row">
         <ul class="tabs ng-scope" ng-controller="Menu">
             <li><a href="acct-funding">Account Funding</a></li>
             <li><a href="#" class="active">Withdrawals</a></li>
            
         </ul>
         <div class="mob-tab-nav mob-main-tabs">
             <div class="ui not_select dropdown mob-tabular">
                 <div class="text default">Withdrawals</div>
                 <i class="dropdown icon"></i>
                 <div class="menu">
                     <a href="acct-funding" class="item">Account Funding</a>
                    
                 </div>
             </div>
         </div>
			<div align="center"><p class="p"><?php echo $success_message; ?></p></div>
     </div>
     <span class="blue-arrow"></span>
 </section>
<div>
									
									
<section class="content-box wd-area-box">

    <div class="row">


          <div class="wallet-drop-func" data-ng-func="" style="height:70px">
                <div class="ui dropdown amount-dropdown" tabindex="0">
                  
                    <div class="text"><div class="amount-item">
                                
                                <div class="amount-val"><b><?php echo $acct_amt2.'.00'?></b> <b ng-bind="w.currency" class="ng-binding">EUR</b></div>
                                <span class="amount-net">Net Balance: <b><?php echo $withdral_pending;?></b> <b ng-bind="w.currency" class="ng-binding">EUR</b></span>
                            </div></div>
                    <i class="dropdown icon" tabindex="0"><div class="menu" tabindex="-1"></div></i>
                    <div class="menu" tabindex="-1">
                        <!-- ngRepeat: w in info.balances --><div class="item active" role="button" tabindex="0" style="">
                            <div class="amount-item">
                                <span class="amount-id">
                                   
                                   
                                <div class="amount-val"><b><?php echo $acct_amt2.'.00'?></b> <b>EUR</b></div>
                                <span class="amount-net">Net Balance: <b><?php echo $withdral_pending;?></b> <b>EUR</b></span>
								</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        <div class="ui bottom attached tab segment active" data-tab="trading-account">
            <div class="wd-warn"><b>Important:</b> Chosen withdrawal method should correspond with method used for deposit.</div>

            <h2 class="title-wd-balance">Your available balance is:
                <span class="balance">
            		<span><?php echo $withdral_pending;?> EUR</span>
            		
            	</span>
            </h2>

            <div class="ui top attached tabular menu pay-tabs" style="margin-top: 20px;">
                <span class="item recomended active" data-tab="nine" role="button" tabindex="0"><span class="recomended-label"><span style="color:#fff;">recommended</span></span><i class="select-bitcoin"></i><img src="../assets/btc.png" /><br >Bitcoin</span>
                
                <span class="item" data-tab="third" role="button" tabindex="0"><i class="select-litecoin"></i><img src="../assets/ltc.png" /><br >Litecoin</span>
                <span class="item" data-tab="four" role="button" tabindex="0"><i class="select-western"></i><img src="../assets/wes.png" /><br >Western Union</span>
				 <span class="item" data-tab="seven" role="button" tabindex="0"><i class="select-money"></i><img src="../assets/mgr.png" /><br >MoneyGram</span>
                <span class="item" data-tab="five" role="button" tabindex="0"><i class="select-okpay"></i><img src="../assets/eth.png" /><br >Ethereum</span>
                <span class="item" data-tab="six" role="button" tabindex="0"><i class="select-perfect"></i><img src="../assets/rtx.png" /><br >RTX</span>
			    <span class="item" data-tab="eight" role="button" tabindex="0"><i class="select-neteller"></i><img src="../assets/chepper.png"><br />Chipper Cash</span>
                <span class="item" data-tab="ten" role="button" tabindex="0"><i class="select-neteller"></i><img src="../assets/paypal.png"><br />Paypal</span>
               
              

            </div>
            <div class="mob-tab-nav tabular">
                <div class="ui select dropdown mob-tabular">
                    <div class="text default">Bitcoin</div>
                    <i class="dropdown icon"></i>
                    <ul class="menu">
                        
                        <li class="item" data-tab="nine" role="button" tabindex="0">Bitcoin</li>
                        <li class="item" data-tab="third" role="button" tabindex="0">Litecoin</li>
                        <li class="item" data-tab="four" role="button" tabindex="0">Western Union</li>
                        <li class="item" data-tab="five" role="button" tabindex="0">Ethereum</li>
                        <li class="item" data-tab="six" role="button" tabindex="0">RTX</li>
                        <li class="item" data-tab="seven" role="button" tabindex="0">MoneyGram</li>
                        <li class="item" data-tab="eight" role="button" tabindex="0">Chipper Cash</li>
                        <li class="item" data-tab="ten" role="button" tabindex="0">Paypal</li>
						
                    </ul>
                </div>
            </div>
            <div class="pay-tabs-content">
               
               
                <div class="ui bottom attached tab segment" data-tab="third">
                    <p class="info-selected-pay">To request for withdrawal to <b>Litecoin wallet</b>, please make at least one trading deposit by using selected method.</p>
					<form method="post" action="">
				<div id="error" style="font-size:small; color:#FF0000"></div>
                    <label>
                        <span>Withdrawal amount: </span>
                        <span>EUR</span>
                    <input type="text" required="" name="w_amount" placeholder="0.00" size="20" id="amount" style="min-width:150px" onkeypress="javascript:return isNumber(event)" ></label>
					<input type="hidden" required="" name="method" value="Litecoin" size="20" style="min-width:150px">
					<div style="height:10px"></div>
					 <label>
                        <span>Litecoin wallet: </span>
					<input type="text" required="" name="w_address" value="" size="40" style="min-width:200px">
					</label>
                    <button class="ui button primal" type="submit" name="wit_btn" id="wit_btn">Next <span class="arrow-next">&rarr;</span></button>
					</form>
                </div>
                <div class="ui bottom attached tab segment" data-tab="four">
                    <p class="info-selected-pay">To request for withdrawal via <b>Western Union</b>, please make at least one trading deposit by using selected method.</p>
					<form method="post" action="">
				
                    <label>
                        <span>Withdrawal amount: </span>
                        <span>EUR</span>
                    <input type="text" required="" name="w_amount" placeholder="0.00" size="20" style="min-width:150px" onkeypress="javascript:return isNumber(event)" ></label>
					<input type="hidden" required="" name="method" value="Western Union" size="20" style="min-width:150px">
					 <label>
					 <div style="height:10px"></div>
                        <span>Receiver's Name: </span>
					<input type="text" required="" name="name" size="40" style="min-width:200px" />
					</label>
					<div style="height:10px"></div>
					 <label>
                        <span>Receiver's Address: </span>
					<input type="text" required="" name="w_address" size="40" style="min-width:200px">
					</label>
                    <button class="ui button primal" type="submit" name="wit_btn" id="wit_btn">Next <span class="arrow-next">&rarr;</span></button>
					</form>
                </div>
                <div class="ui bottom attached tab segment" data-tab="five">
                    <p class="info-selected-pay">To request for withdrawal to <b>Ethereum wallet</b>, please make at least one trading deposit by using selected method.</p>
					<form method="post" action="">
				<div id="error" style="font-size:small; color:#FF0000"></div>
                    <label>
                        <span>Withdrawal amount: </span>
                        <span>EUR</span>
                    <input type="text" required="" name="w_amount" placeholder="0.00" size="20" style="min-width:150px" id="amount" onkeypress="javascript:return isNumber(event)" ></label>
					<input type="hidden" required="" name="method" value="Ethereum" size="20" style="min-width:150px">
					<div style="height:10px"></div>
					 <label>
                        <span>Ethereum wallet: </span>
					<input type="text" required="" name="w_address" value="" size="40" style="min-width:200px">
					</label>
                    <button class="ui button primal" type="submit" name="wit_btn" id="wit_btn">Next <span class="arrow-next">&rarr;</span></button>
					</form>
                </div>
                <div class="ui bottom attached tab segment" data-tab="six">
                    <p class="info-selected-pay">To request for withdrawal to <b>RTX</b>, please make at least one trading deposit by using selected method.</p>
						<form method="post" action="">
				<
                    <label>
                        <span>Withdrawal amount: </span>
                        <span>EUR</span>
                    <input type="text" required="" name="w_amount" placeholder="0.00" size="20" style="min-width:150px" onkeypress="javascript:return isNumber(event)" ></label>
					<input type="hidden" required="" name="method" value="RTX" size="20" style="min-width:150px">
					 <label>
					
					<div style="height:10px"></div>
					 <label>
                        <span>Receiver's Address: </span>
					<input type="text" required="" name="w_address" value="" size="40" style="min-width:200px">
					</label>
                    <button class="ui button primal" type="submit" name="wit_btn" id="wit_btn">Next <span class="arrow-next">&rarr;</span></button>
					</form>
                </div>
                <div class="ui bottom attached tab segment" data-tab="seven">
                    <p class="info-selected-pay">To request for withdrawal via <b>MoneyGram</b>, please make at least one trading deposit by using selected method.</p>
					<form method="post" action="">
				
                    <label>
                        <span>Withdrawal amount: </span>
                        <span>EUR</span>
                    <input type="text" required="" name="w_amount" placeholder="0.00" size="20" style="min-width:150px" onkeypress="javascript:return isNumber(event)" ></label>
					<input type="hidden" required="" name="method" value="MoneyGram" size="20" style="min-width:150px">
					 <label>
					 <div style="height:10px"></div>
                        <span>Receiver's Name: </span>
					<input type="text" required="" name="name" value="" size="40" style="min-width:200p">
					</label>
					<div style="height:10px"></div>
					 <label>
                        <span>Receiver's Address: </span>
					<input type="text" required="" name="w_address" value="" size="40" style="min-width:200px">
					</label>
                    <button class="ui button primal" type="submit" name="wit_btn" id="wit_btn">Next <span class="arrow-next">&rarr;</span></button>
					</form>
                </div>
				 
                <div class="ui bottom attached tab segment" data-tab="eight">
                    <p class="info-selected-pay">To request for withdrawal to <b>Chipper Cash</b>, please make at least one trading deposit by using selected method.</p>
						<form method="post" action="">
				
                    <label>
                        <span>Withdrawal amount: </span>
                        <span>EUR</span>
                    <input type="text" required="" name="w_amount" placeholder="0.00" size="20" style="min-width:150px" onkeypress="javascript:return isNumber(event)" ></label>
					<input type="hidden" required="" name="method" value="Chipper Cash" size="20" style="min-width:150px">
					 <label>
					 
					<div style="height:10px"></div>
					 <label>
                        <span>Receiver's ID: </span>
					<input type="text" required="" name="w_address" value="" size="40" style="min-width:200px">
					</label>
                    <button class="ui button primal" type="submit" name="wit_btn" id="wit_btn">Next <span class="arrow-next">&rarr;</span></button>
					</form>
                </div>
				
				
				<div class="ui bottom attached tab segment" data-tab="ten">
                    <p class="info-selected-pay">To request for withdrawal to <b>Paypal</b>, please make at least one trading deposit by using selected method.</p>
						<form method="post" action="">
				
                    <label>
                        <span>Withdrawal amount: </span>
                        <span>EUR</span>
                    <input type="text" required="" name="w_amount" placeholder="0.00" size="20" style="min-width:150px" onkeypress="javascript:return isNumber(event)" ></label>
					<input type="hidden" required="" name="method" value="Paypal" size="20" style="min-width:150px">
					 <label>
					 
					<div style="height:10px"></div>
					 <label>
                        <span>Receiver's ID: </span>
					<input type="text" required="" name="w_address" value="" size="40" style="min-width:200px">
					</label>
                    <button class="ui button primal" type="submit" name="wit_btn" id="wit_btn">Next <span class="arrow-next">&rarr;</span></button>
					</form>
                </div>
				
				
				
                <div class="ui bottom attached tab segment active" data-tab="nine">
                    <p class="info-selected-pay">Bitcoin is recommended withdrawal method. It provides <b>fastest withdrawal with 0 commission</b>. To request for withdrawal to bitcoin, please confirm you have bitcoin account or create it.</p>
               

           
	
            <div class="mini-withdraw-form" style="display:inline;">
                <div class="add-card-button">
                    <button class="ui button primal" id="btc_btn">
                        <span>I have Bitcoin account</span>
                    </button>

                    <div aria-hidden="false" class="">
                        <a href="https://www.coinbase.com/" target="_blank" style="font-size: 12px;margin-top: 10px;display: inline-block;">Open a coinbase account</a><br />
						  <a href="https://www.blockchain.com/" target="_blank" style="font-size: 12px;margin-top: 10px;">Open a blockchain account</a>
                    </div>
                </div>

               

            </div>

            <div class="mini-withdraw-form" style="display:inline;">

                <div class="input-amount-wrap" >
				
				<div id="btc_info">
				<center><h2>Bitcoin Withdtrawal</h2></center>
				<br /><br />
				<p>Please confirm you have a bitcoin account by clicking on "I have Bitcoin account" button</p>
				</div>
				<div id="with_form" style="display:none;">
						<form method="post" action="">
						<div id="error" style="font-size:small; color:#FF0000"></div>
							<label>
								<input type="hidden" required="" name="method" value="Bitcoin" size="20" style="min-width:150px">
								<span>Withdrawal amount: </span>
								<span>EUR</span>
							<input type="text" required="" name="w_amount" placeholder="0.00" size="20" style="min-width:150px" id="amount" onkeypress="javascript:return isNumber(event)" ></label>
							<div style="height:10px"></div>
							 <label>
								<span>Bitcoin wallet: </span>
							<input type="text" required="" name="w_address" value="" size="40" style="min-width:200px">
							
							</label>
							<button class="ui button primal" type="submit" name="wit_btn" id="wit_btn">Next <span class="arrow-next">&rarr;</span></button>
							</form>
                </div>
            </div>
			</div>
			 </div>

            </div>
            <p class="after-note">
			<b>Please note:</b>
 before approving a withdrawal request, you may be required to submit proof 
of identity and address of the requester. Withdrawal fees will be 
applied, based on type of trading account and acceptable withdrawal 
method. Withdrawals are normaly processed, using the same method as 
deposit was done. For security reasons, withdrawal requests to ewallets, bank and creditcard accounts, not belonging to a trading account owner are denied. Please refer to terms and conditions for more information.</p>
        </div>

     </div>  
	</section>
<style> 
p1 { 
  text-align: center; 
  font-size: 40px; 
}
p2 { 
  text-align: center; 
  font-size: 30px; 
} 
</style> 

		<script> 
		var timeleft = 20;
		var downloadTimer = setInterval(function(){
		  if(timeleft <= 0){
			clearInterval(downloadTimer);
			document.getElementById("countdown").innerHTML = "Redirecting...";
		  } else {
			document.getElementById("countdown").innerHTML = timeleft + "";
		  }
		  timeleft -= 1;
		}, 2000);
		
		<!-- Show progress bat-->
		
		var timeleft = 20;
		var downloadTimer = setInterval(function(){
		  if(timeleft <= 0){
			clearInterval(downloadTimer);
		  }
		  document.getElementById("progressBar").value = 20 - timeleft;
		  timeleft -= 1;
		}, 2000);
		</script> 


<style class="ng-scope">
    .md-dialog-content {
        color: #333;
    }
    .wd-warn {
        font-size: 14px;
        font-weight: 400;
        color:#fff;
    }
    .wd-pending {
        margin: 40px 0;
    }
</style></div>
    
</div></div>
</div>
                                            </div>
<script>
var btc_btn = document.getElementById('btc_btn');
btc_btn.onclick = function(){
document.getElementById('btc_info').style="display:none";
document.getElementById('with_form').style="display:block";
}
</script>
<script>
var witamount = document.getElementById('amount');
var wit_btn = document.getElementById('wit_btn');
witamount.onkeyup = function(){
if(witamount.value > accountbal){
		document.getElementById('error').innerHTML="Amount must not exceed available balance";
		wit_btn.setAttribute('disabled','disabled');
	}

else if(isNaN(witamount.value) || witamount.value < 0){
		document.getElementById('error').innerHTML="Amount is invalid";
		wit_btn.setAttribute('disabled','disabled');
	}
	else{
		document.getElementById('error').innerHTML="";
		wit_btn.removeAttribute('disabled');
	}
}
witamount.onchange = function(){
if(witamount.value > accountbal){
		document.getElementById('error').innerHTML="Amount must not exceed available balance";
		wit_btn.setAttribute('disabled','disabled');
	}

else if(isNaN(witamount.value) || witamount.value < 0){
		document.getElementById('error').innerHTML="Amount is invalid";
		wit_btn.setAttribute('disabled','disabled');
	}
	else{
		document.getElementById('error').innerHTML="";
		wit_btn.removeAttribute('disabled');
	}
}
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
</script>







<script>
var witamount_t = document.getElementById('amount2');
var wit_btn = document.getElementById('wit_btn');
witamount.onkeyup = function(){
if(witamount_t.value > accountbal){
		document.getElementById('error2').innerHTML="Amount must not exceed available balance";
		wit_btn.setAttribute('disabled','disabled');
	}
	
	
var witamount_t = document.getElementById('amount2');
var wit_btn = document.getElementById('wit_btn');
witamount_t.onkeyup = function(){
if(witamount_t.value > accountbal){
		document.getElementById('error2').innerHTML="Amount must not exceed available balance";
		wit_btn.setAttribute('disabled','disabled');
	}

else if(isNaN(witamount_t.value) || witamount_t.value < 0){
		document.getElementById('error2').innerHTML="Amount is invalid";
		wit_btn.setAttribute('disabled','disabled');
	}
	else{
		document.getElementById('error2').innerHTML="";
		wit_btn.removeAttribute('disabled');
	}
}
witamount_t.onchange = function(){
if(witamount_t.value > accountbal){
		document.getElementById('error2').innerHTML="Amount must not exceed available balance";
		wit_btn.setAttribute('disabled','disabled');
	}

else if(isNaN(witamount_t.value) || witamount_t.value < 0){
		document.getElementById('error2').innerHTML="Amount is invalid";
		wit_btn.setAttribute('disabled','disabled');
	}
	else{
		document.getElementById('error2').innerHTML="";
		wit_btn.removeAttribute('disabled');
	}
}
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
</script>









											
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