<?php 
include('session.php');

?>

<div class="ui sidebar right inverted vertical menu" aria-hidden="false">
	<div class="item" style="font-size:small; color:#FFFFFF; position:absolute; top:15px; text-transform:capitalize">
		<span><i class="fa fa-envelope-o"></i> <?php echo $email;?></span><br>
		<span style="margin-top:10px;"><b><i class="fa fa-money"></i> <?php echo 'live: '.$acct_amt2.'.00';?></b> <b>EUR</b></span>
		<br>
		<!--<span style="margin-top:10px; background:#E95524"><b><i class="fa fa-money"></i> <?php echo 'Demo: '.$demo_amt2.'.00';?></b> <b>EUR</b></span>
		-->
		<br>
		<span>Account Status: <span style="color:#0f0" class="blinkgreen"><i class="fa fa-check-circle"></i> Active</span></span>
	</div>
                                
	<span class="divider"></span>
    <div class="item"><a href="dashboard.php"><i class="fa fa-dashboard"></i> Trading</a></div>
	<span class="divider"></span>
	<div class="item"><a href="acct-funding.php"><i class="fa fa-money"></i> Funding account</a></div>
	<span class="divider"></span>
	<div class="item"><a href="user-withdrawal.php"><i class="fa fa-money"></i> Withdrawals</a></div>
    <span class="divider"></span>
    <div class="item"><a href="history.php"><i class="fa fa-history"></i> Transactions history</a></div>
	<span class="divider"></span>
	<div class="item"><a href="trade-history.php"><i class="fa fa-area-chart"></i> Trading history</a></div>	
    <span class="divider"></span>
    <div class="item"><a href="personal-data.php"><i class="fa fa-user"></i> Personal Data</a></div>
	<span class="divider"></span>
	<div class="item"><a href="security.php"><i class="fa fa-lock"></i> Security settings</a></div>
    <span class="divider"></span>
    <div class="item"><a href="support.php"><i class="fa fa-comments"></i> Support</a></div>
    <span class="divider"></span>
    <div class="item"><a href="logout.php"><i class="fa fa-power-off"></i> Exit</a></div>
	<span class="divider"></span>
</div>