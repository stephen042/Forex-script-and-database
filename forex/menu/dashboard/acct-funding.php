												<?php 
												require_once('conn.php');
												include('session.php');
												include('functions.php');
												
												
													$amt_message = "";
													$success_message = "";
													$error_message = "";
													@$h_id = "";
													if (isset($_POST['btn_fundbitcoin']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query_result = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
											
											
												if (isset($_POST['btn_pefectmoney']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
										
											
													if (isset($_POST['btn_neteller']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
											
											
											if (isset($_POST['btn_skrill']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
											
											
											
											if (isset($_POST['btn_bitcoin_cash']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
											
											
											
											
											
											
												if (isset($_POST['btn_litecoin']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '$pack_plan', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
											
											
												if (isset($_POST['btn_western']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '$pack_plan', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
											
											
												if (isset($_POST['btn_etherum']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '$pack_plan', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
											
											
												if (isset($_POST['btn_bank']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '$pack_plan', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
											
											
											
												if (isset($_POST['btn_moneygrand']))
												{
													$getnumber = rand(10000,99999);
													$sasa = $getnumber + 1;
													$fgh='0'.$sasa;						
													$finalcode = 'nutr'.$fgh;
													$trnc = ($finalcode);
													$spend_amt = mysqli_real_escape_string($conn, $_POST['spend_amt']);
													@$pack_plan = mysqli_real_escape_string($conn, $_POST['pack_plan']);
													@$method = mysqli_real_escape_string($conn, $_POST['method']);
													if(@$pack_plan == '' || $spend_amt == '')
														{
														echo "<script>alert(' Please choose a plan')</script>";
														echo "<script>window.open('acct-funding.php','_self')</script>";	
														die();
														}
														if($pack_plan != "" && $spend_amt >= "50")
														{
														$plan_durage = "";
														$plan_type = $pack_plan;
														//$plan_amt_range = "$50 - $20,000";
														$plan_percent = "";
														@$query = mysqli_query($conn, "INSERT INTO deposit_tb(d_uid, d_email, d_amt, d_status, d_bal, d_date, d_plan, d_plan_amt_range, d_plant_profit, d_plan_rundays, d_tranc, d_funding_type) 
							VALUES ('$session_id', '$email', '$spend_amt', 'Pending', '', NOW(), '$plan_type', '', '$plan_percent', '$plan_durage', '$trnc', '$method')");
							
							@$query2 = mysqli_query($conn, "INSERT INTO mtran_history(muid, mtran_nature, mtran_status, mtran_code, mtran_amt, mtran_added, mtran_date, mp_method) 
										VALUES ('$session_id', 'Account Funding', 'Pending', '$trnc', '$spend_amt', '', NOW(), '$method')");
														$_SESSION['trnc']= $trnc;
														$_SESSION['method']= $method;
														$_SESSION['spend_amt']= $spend_amt;
														header("Location: funding-process.php");

												}
												else
												{
													
												$success_message ="<font color='#FF0000'> Sorry! Error Occured. The Selected Plan Amount is less than the minimum Amount Entered.</font>"; 
												$error_message ="<font color='#FF0000'> Please, minimum amount should not be less than <b>50$</b></font>"; 
												}
												
											}
										?>
												<!DOCTYPE html>
												<html style=""><head>
												<meta http-equiv="content-type" content="text/html; charset=UTF-8">
												<meta charset="utf-8">
													<meta http-equiv="X-UA-Compatible" content="IE=edge">
													<title> Cryptoean Tradings Account Funding    </title>
												<meta name="description" content=" ">

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
					<div ><div class="pusher pusher-min-400">
		<section class="img-bg-section">
			<div class="row">
				<ul class="tabs">
				 <li><a href="#" class="active">Account Funding</a></li>
				 <li><a href="user-withdrawal.php">Withdrawals</a></li>
			   
				</ul>
         <div class="mob-tab-nav mob-main-tabs">
             <div class="ui not_select dropdown mob-tabular" tabindex="0">
                 <div class="text default">Account Funding</div>
                 <i class="dropdown icon"></i>
                 <div class="menu" tabindex="-1">
                     <a href="user-withdrawal.php" class="item">Withdrawals</a>
                    
                 </div>
             </div>
         </div>
        <div class="top-info">
            <h2 class="title">Account Funding</h2>
        </div>
		<div align="center"><p class="p"><?php echo $success_message; ?></p></div>
     </div>
     <span class="blue-arrow"></span>
 </section>
<div style=""><section class="content-box">
    <div class="row">
        <div class="account-funding">

      

            <div class="wallet-drop-func" data-ng-func="" style="height:70px">
                <div class="ui dropdown amount-dropdown" tabindex="0">
                  
                    <div class="text"><div class="amount-item">
                                
                                <div class="amount-val"><b><?php echo $acct_amt2.'.00'?></b> <b ng-bind="w.currency" class="ng-binding">EUR</b></div>
                                <span class="amount-net">Net Balance: <b><?php echo $acct_amt2.'.00'?></b> <b ng-bind="w.currency" class="ng-binding">EUR</b></span>
                            </div></div>
                    <i class="dropdown icon" tabindex="0"><div class="menu" tabindex="-1"></div></i>
                    <div class="menu" tabindex="-1">
                        <!-- ngRepeat: w in info.balances --><div class="item active" role="button" tabindex="0" style="">
                            <div class="amount-item">
                                <span class="amount-id">
                                   
                                   
                                <div class="amount-val"><b><?php echo $acct_amt2.'.00'?></b> <b>EUR</b></div>
                                <span class="amount-net">Net Balance: <b><?php echo $acct_amt2.'.00'?></b> <b>EUR</b></span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

       
            <div class="funding-method-wrap">
                <h2 class="title">Choose funding method</h2>

                <div>
                   
                <div aria-hidden="false" class="">
                    <div class="ui top attached tabular menu pay-tabs">
   
                        <span class="item active" ng-class="tabs.default.bitcoin" data-tab="bitcoin"><span class="recomended-label"><span style="color:#fff">recommended</span></span><i class="select-bitcoin-bonus"></i><img src="../assets/btc.png"><br />Bitcoin</span>
                        
                        <span class="item" ng-class="tabs.default.ltc" data-tab="ltc"><i class="select-litecoins2"></i><img src="../assets/ltc.png"><br />Litecoin</span>
                        <span class="item" ng-class="tabs.default.litecoin" data-tab="litecoin"><i class="select-litecoin"></i><img src="../assets/wes.png"><br />Western Union</span>
                        <span class="item" ng-class="tabs.default.tether" data-tab="tether"><i class="select-tether-icon"></i><img src="../assets/mgr.png"><br />MoneyGram</span>

                        <span class="item" ng-class="tabs.default.eth" data-tab="eth"><i class="select-eth"></i><img src="../assets/eth.png"><br />Ethereum</span>
						 <span class="item" data-tab="bank"><i class="select-bank"></i><img src="../assets/transfer.png"><br />Bank Transfer</span>
						 
                        <span class="item" ng-class="tabs.default.perfect" data-tab="perfect"><i class="select-perfect"></i><img src="../assets/rtx.png"><br />TRX</span>
                        <span class="item" ng-class="tabs.default.neteller" data-tab="neteller"><i class="select-neteller"></i><img src="../assets/chepper.png"><br />Chipper Cash</span>
                        <span class="item" ng-class="tabs.default.skrill" data-tab="skrill"><i class="select-skrill"></i><img src="../assets/paypal.png"><br />Paypal</span>
                        <span class="item" ng-class="tabs.default.bitcoin_cash" data-tab="bitcoin_cash"><i class="select-bitcoin_cash"></i><img src="../assets/Bitcoin_Cash2.png"><br />Bitcoin Cash</span>
                       
                      
                      
                     
                    </div>
					<br/><br/>
					<div align="center"><p class="p"><?php echo $error_message; ?></p></div>
                    <div class="mob-tab-nav tabular">
                        <div class="ui select dropdown mob-tabular" tabindex="0" style="height:auto !important;">
                            <div class="text default">Bitcoin</div>
                            <i class="dropdown icon"></i>
                            <ul class="menu" tabindex="-1">
                              
                                
                                <li class="item" ng-class="tabs.default.mobile.bitcoin" data-tab="bitcoin">Bitcoin</li>
                               
                              
                              
                                <li class="item" ng-class="tabs.default.mobile.litecoin" data-tab="litecoin">Western Union</li>
                                <li class="item" ng-class="tabs.default.mobile.perfect" data-tab="perfect">TRX</li>
                                <li class="item" ng-class="tabs.default.mobile.neteller" data-tab="neteller">Chipper Cash</li>
                                <li class="item" ng-class="tabs.default.mobile.skrill" data-tab="skrill">Paypal</li>
                                <li class="item" ng-class="tabs.default.mobile.bitcoin_cash" data-tab="bitcoin_cash">Bitcoin Cash</li>
								 <li class="item" ng-class="tabs.default.mobile.ethereum" data-tab="eth">Ethereum</li>
                                <li class="item" ng-class=
								 <li class="item" ng-class="tabs.default.mobile.bank" data-tab="bank">Bank transfer</li>
                                <li class="item" ng-class="tabs.default.mobile.litecoin" data-tab="ltc">Litecoin</li>
                                <li class="item" ng-class="tabs.default.mobile.tether" data-tab="tether">MoneyGram</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="pay-tabs-content">
                                     
                   
                    <div class="ui bottom attached tab segment" data-tab="perfect">
                        <h2 class="title ng-binding" ng-bind="'funding.form_title.perfect' | lang">Deposit using TRX:</h2>
                        <div class="withdraw-form clearfix">
                         <div class="btc-amount" style="margin-bottom: 15px;">

            <div>
			 
            <form method="Post">
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				<div class="center-button"> 
			<input type="hidden" name="method" value="TRX" />
			<button class="ui button primal ng-binding" name="btn_pefectmoney">Fund account</button>
			</div>
			</form>
        
            </div>
      
        </div>
	</div>
 </div>

                    <div class="ui bottom attached tab segment" data-tab="neteller">
                        <h2 class="title ng-binding" ng-bind="'funding.form_title.neteller' | lang">Deposit using Chipper Cash</h2>
                        <div class="withdraw-form clearfix">
					<div class="btc-amount" style="margin-bottom: 15px;">

					<div>
			 
				<form method="post" >
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
				 <!--<span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Choose a plan:</span>
				 <select class="ui dropdown" name="pack_plan" id="country" required="">
				 <option value="" selected="selected" disabled="disabled">-- Please select plan --</option>
                   
                    <option value="plan 1">plan 1 60% After 1day</option>
                    <option value="plan 2">plan 2 60% Daily for 3days</option>
                    <option value="plan 3">plan 3 240$ After 4days</option>
                    <option value="plan 4">plan 4 300% After 5days</option>
                    <option value="plan Diamond">plan Diamond 28% after 1day</option>
                    <option value="plan Platinum">plan Platinum 150% AFter 1day</option>
                    
			</select>
			-->
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				 
				<div class="center-button"> 
			<input type="hidden" name="method" value="chipper" />
			<button class="ui button primal ng-binding" name="btn_neteller">Fund account</button>
			</div>
			</form>
        
            </div>
      
        </div>

	</div>
</div>





                    <div class="ui bottom attached tab segment" data-tab="skrill">
                        <h2 class="title ng-binding" ng-bind="'funding.form_title.skrill' | lang">Deposit using Paypal:</h2>
                        <div class="withdraw-form clearfix">
					<div class="btc-amount" style="margin-bottom: 15px;">

					<div>
			 
				<form method="post" >
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
				 <!--<span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Choose a plan:</span>
				 <select class="ui dropdown" name="pack_plan" id="country" required="">
				 <option value="" selected="selected" disabled="disabled">-- Please select plan --</option>
                   
                    <option value="plan 1">plan 1 60% After 1day</option>
                    <option value="plan 2">plan 2 60% Daily for 3days</option>
                    <option value="plan 3">plan 3 240$ After 4days</option>
                    <option value="plan 4">plan 4 300% After 5days</option>
                    <option value="plan Diamond">plan Diamond 28% after 1day</option>
                    <option value="plan Platinum">plan Platinum 150% AFter 1day</option>
                    
			</select>
			-->
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				 
				<div class="center-button"> 
			<input type="hidden" name="method" value="Paypal" />
			<button class="ui button primal ng-binding" name="btn_skrill">Fund account</button>
			</div>
			</form>
        
            </div>
      
        </div>

	</div>
</div>



                        <div class="ui bottom attached tab segment" data-tab="bitcoin_cash">
                        <h2 class="title ng-binding" ng-bind="'funding.form_title.bitcoin_cash' | lang">Deposit using Bitcoin Cash:</h2>
                        <div class="withdraw-form clearfix">
					<div class="btc-amount" style="margin-bottom: 15px;">

					<div>
			 
				<form method="post" >
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
				 <!--<span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Choose a plan:</span>
				 <select class="ui dropdown" name="pack_plan" id="country" required="">
				 <option value="" selected="selected" disabled="disabled">-- Please select plan --</option>
                   
                    <option value="plan 1">plan 1 60% After 1day</option>
                    <option value="plan 2">plan 2 60% Daily for 3days</option>
                    <option value="plan 3">plan 3 240$ After 4days</option>
                    <option value="plan 4">plan 4 300% After 5days</option>
                    <option value="plan Diamond">plan Diamond 28% after 1day</option>
                    <option value="plan Platinum">plan Platinum 150% AFter 1day</option>
                    
			</select>
			-->
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				 
				<div class="center-button"> 
			<input type="hidden" name="method" value="Bitcoin Cash" />
			<button class="ui button primal ng-binding" name="btn_bitcoin_cash">Fund account</button>
			</div>
			</form>
        
            </div>
      
        </div>

	</div>
</div>

                   

                    <div class="ui bottom attached tab segment active" data-tab="bitcoin">
                        <h2 class="title">Deposit using Bitcoin:</h2>
						
				<div class="withdraw-form clearfix bitcoin-from ng-scope" ng-controller="PayBTC">
				
				<div>
				<div class="btc-amount" style="margin-bottom: 15px;">

				<div>
			 
            <form method="post">
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
				
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				<div class="center-button"> 
			<input type="hidden" name="method" value="Bitcoin" />
			<button class="ui button primal ng-binding" name="btn_fundbitcoin">Fund account</button>
			</div>
			</form>
        
            </div>       
        </div>
       

        <div class="btc-info-bottom">
            <div class="bit-hd">How to buy Bitcoins using localbitcoins.com</div>
            <div class="pf"><a href="https://localbitcoins.com/guides/how-to-buy-bitcoins" target="_blank">Text tutorial</a></div>
        </div>

    </div>

</div>

<style>
    .capy-disabled {
        pointer-events: none;
        opacity: 0.5;
    }
</style>                    </div>

                    <div class="ui bottom attached tab segment" data-tab="ltc">
                        <h2 class="title">Deposit using Litecoin:</h2>
<div class="withdraw-form clearfix bitcoin-from ng-scope" ng-controller="PayLTC">
    <div>

      <div class="btc-amount" style="margin-bottom: 15px;">

            <div>
			 
            <form method="post" >
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				 
				<div class="center-button"> 
			<input type="hidden" name="method" value="Litecoin" />
			<button class="ui button primal ng-binding" name="btn_litecoin">Fund account</button>
			</div>
			</form>
        
            </div>

            
            
        </div>

    </div>

</div>

<style>
    .capy-disabled {
        pointer-events: none;
        opacity: 0.5;
    }
</style>                    </div>

                    <div class="ui bottom attached tab segment" data-tab="litecoin">
                        <h2 class="title ng-binding" ng-bind="'funding.form_title.litecoin' | lang">Deposit using Western Union:</h2>
<div class="withdraw-form clearfix bitcoin-from ng-scope" ng-controller="PayAltcoin">
   

        <div class="btc-amount" style="margin-bottom: 15px;">

            <div>
			 
            <form method="post" action="">
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
				 <!--<span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Choose a plan:</span>
				 <select class="ui dropdown" name="pack_plan" id="country" required="">
				 <option value="" selected="selected" disabled="disabled">-- Please select plan --</option>
                   
                    <option value="plan 1">plan 1 60% After 1day</option>
                    <option value="plan 2">plan 2 60% Daily for 3days</option>
                    <option value="plan 3">plan 3 240$ After 4days</option>
                    <option value="plan 4">plan 4 300% After 5days</option>
                    <option value="plan Diamond">plan Diamond 28% after 1day</option>
                    <option value="plan Platinum">plan Platinum 150% AFter 1day</option>
                    
			</select>
			-->
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				 
				<div class="center-button"> 
			<input type="hidden" name="method" value="Western Union" />
			<button class="ui button primal ng-binding" name="btn_western">Fund account</button>
			</div>
			</form>
        
            </div>

            
            
        </div>

</div>                    </div>

                    <div class="ui bottom attached tab segment" data-tab="eth">
                        <h2 class="title ng-binding" ng-bind="'funding.form_title.eth' | lang">Deposit using Ethereum:</h2>
<div class="withdraw-form clearfix bitcoin-from ng-scope" ng-controller="PayETH">
    <div>
<div class="btc-amount" style="margin-bottom: 15px;">

            <div>
			 
            <form method="post" action="">
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
				 <!--<span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Choose a plan:</span>
				 <select class="ui dropdown" name="pack_plan" id="country" required="">
				 <option value="" selected="selected" disabled="disabled">-- Please select plan --</option>
                   
                    <option value="plan 1">plan 1 60% After 1day</option>
                    <option value="plan 2">plan 2 60% Daily for 3days</option>
                    <option value="plan 3">plan 3 240$ After 4days</option>
                    <option value="plan 4">plan 4 300% After 5days</option>
                    <option value="plan Diamond">plan Diamond 28% after 1day</option>
                    <option value="plan Platinum">plan Platinum 150% AFter 1day</option>
                    
			</select>
			-->
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				 
				<div class="center-button"> 
			<input type="hidden" name="method" value="Ethereum" />
			<button class="ui button primal ng-binding" name="btn_etherum">Fund account</button>
			</div>
			</form>
        
            </div>

            
            
        </div>
       
    </div>

</div>

<style>
    .capy-disabled {
        pointer-events: none;
        opacity: 0.5;
    }
</style>                    </div>

         



                    <div class="ui bottom attached tab segment" data-tab="bank">
                        <h2 class="title ng-binding" ng-bind="'funding.form_title.bank' | lang">Deposit using Bank Transfer:</h2>
<div class="withdraw-form clearfix bitcoin-from ng-scope" ng-controller="PayBank">
  <div class="btc-amount" style="margin-bottom: 15px;">

            <div>
			 
            <form method="post" action="">
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				<input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				 
				<!-- <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Choose a plan:</span>
				 <select class="ui dropdown" name="pack_plan" id="country" required="">
				 <option value="" selected="selected" disabled="disabled">-- Please select plan --</option>
                   
                    <option value="plan 1">plan 1 60% After 1day</option>
                    <option value="plan 2">plan 2 60% Daily for 3days</option>
                    <option value="plan 3">plan 3 240$ After 4days</option>
                    <option value="plan 4">plan 4 300% After 5days</option>
                    <option value="plan Diamond">plan Diamond 28% after 1day</option>
                    <option value="plan Platinum">plan Platinum 150% AFter 1day</option>
                    
			</select>
			-->
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				 
				<div class="center-button"> 
			<input type="hidden" name="method" value="Bank Transfer" />
			<button class="ui button primal ng-binding" name="btn_bank">Fund account</button>
			</div>
			</form>
        
            </div>
        </div>

	</div>
</div>

						<div class="ui bottom attached tab segment" data-tab="tether">
                        <h2 class="title" old-ng-bind="'funding.form_title.bitcoin' | lang">Deposit using MoneyGram:</h2>
						<div class="withdraw-form clearfix bitcoin-from ng-scope" ng-controller="PayTether">
			<div class="btc-amount" style="margin-bottom: 15px;">

            <div>
			 
            <form method="post" action="">
                <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Amount in base currency:</span>
                <b class="ui green inverted header">
				<input type="text" class="form-control" id="myinput" onkeypress="javascript:return isNumber(event)" style="width:200px; color:#00FF00; font-weight:bold" name="spend_amt" required="" />
				 <span ng-bind="$parent.ranger.currency" class="ng-binding">EUR</span></b><br /><br />
				 <input type="hidden" class="form-control"  name="pack_plan" value="Optional" />
				
				 <!--
				 <span ng-bind="'funding.bitcoin.amount' | lang" class="ng-binding">Choose a plan:</span>
				 <select class="ui dropdown" name="pack_plan" id="country" required="">
				 <option value="" selected="selected" disabled="disabled">-- Please select plan --</option>
                   
                    <option value="plan 1">plan 1 60% After 1day</option>
                    <option value="plan 2">plan 2 60% Daily for 3days</option>
                    <option value="plan 3">plan 3 240$ After 4days</option>
                    <option value="plan 4">plan 4 300% After 5days</option>
                    <option value="plan Diamond">plan Diamond 28% after 1day</option>
                    <option value="plan Platinum">plan Platinum 150% AFter 1day</option>
                    
			</select>
			-->
			<span ng-bind="$parent.ranger.currency" class="ng-binding"></span></b><br /><br />
				 
				<div class="center-button"> 
			<input type="hidden" name="method" value="MoneyGram" />
			<button class="ui button primal ng-binding" name="btn_moneygrand">Fund account</button>
			</div>
			</form>
        
					</div>    
				</div>
			</div>                    
		</div>

		</div>

		</div>
	</div>
</div>


</section>
				</div>
			</div>
		</div>
	</div>
</div>
											
<script>
function myWallet(){
var copyText = document.getElementById("mywallet");
copyText.select();
document.execCommand("copy");
document.getElementById("copy_btn").innerHTML = "copied";
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