<?php 
												require_once('conn.php');
												include('session.php');
												include('functions.php');
												
																$amt_message = "";
																$success_message = "";
																$error_message = "";
																$spend_amt = "";
												if (!isset($_SESSION['trnc']) || (trim($_SESSION['trnc']) == '')) 
													{
														@header("location: acct-funding.php");
														exit();
													}
													$trac_code = $_SESSION['trnc'];
													$method = $_SESSION['method'];
													$spend_amt = $_SESSION['spend_amt'];
													
													$now_method = "Deposit using ".$method;
													if($method =="TRX")
													{
													@$flag = "<img src='../assets/rtx.png'/>";
														$show ='<div class="center-button"> 
													   <div class="line">
													   <p><span>Note: Once payment is complete, receipt of payment should be sent to <a href="mailto:support@cryptoean.com">support@cryptoean.com</a> for confirmation and your trading account will be funded after confirmation is complete.
													   </div>
														<div class="line">
														<label>Official TRX Wallet Address</label>
														<input type="text" name="wallet" value="TF9JnnmxtKaCQHerW76ZAghYxSJv7Kvd9V" readonly="" id="mywallet" />
														</div>
														<div class="line">
														<button class="ui button primal" onclick="myWallet()" id="copy_btn">copy wallet</button></div>
														<div class="line">
														
														</div>
													</div>';
													}elseif($method =="chipper")
													{
														$flag = "<img src='../assets/chepper.png'/>";
														$show ='<div class="center-button"> 
													   <div class="line">
													   <p><span>Note: Once payment is complete, receipt of payment should be sent to <a href="mailto:support@cryptoean.com">support@cryptoean.com</a> for confirmation and your trading account will be funded after confirmation is complete.
													   </div>
														<div class="line">
														<label>Official Chipper Cash Wallet Address</label>
														<input type="text" name="wallet" value="@Cryptoean" readonly="" id="mywallet" />
														</div>
														<div class="line">
														<button class="ui button primal" onclick="myWallet()" id="copy_btn">copy wallet</button></div>
														<div class="line">
														
														</div>
													</div>';
													}
													elseif($method =="Bitcoin")
													{
														$flag = "<img src='../assets/btc.png'/>";
														$show ='<div class="center-button"> 
													   <div class="line">
													   <p><span>Note: Once payment is complete, receipt of payment should be sent to <a href="mailto:support@cryptoean.com">support@cryptoean.com</a> for confirmation and your trading account will be funded after confirmation is complete.
													   </div>
														<div class="line">
														<label>Official Bitcoin Wallet Address</label>
														<input type="text" name="wallet" value="3Dgxd4mS4YSGazsjob25bHz5toiq8okhQ3" readonly="" id="mywallet" />
														</div>
														<div class="line">
														<button class="ui button primal" onclick="myWallet()" id="copy_btn">copy wallet</button></div>
														<div class="line">
														<p>Or scan the QR Code below</p>
														<img id="coin_payment_image" src="https://www.luno.com/share/qr_code_png?currency=XBT&address=3Dgxd4mS4YSGazsjob25bHz5toiq8okhQ3">
														</div>
													</div>';
													}
													
													elseif($method =="Bitcoin Cash")
													{
														$flag = "<img src='../assets/Bitcoin_Cash2.png'/>";
														$show ='<div class="center-button"> 
													   <div class="line">
													   <p><span>Note: Once payment is complete, receipt of payment should be sent to <a href="mailto:support@cryptoean.com">support@cryptoean.com</a> for confirmation and your trading account will be funded after confirmation is complete.
													   </div>
														<div class="line">
														<label>Official Bitcoin Cash Wallet Address</label>
														<input type="text" name="wallet" value="ppdwpsg9qrtl8scd3pfevxlpm25gynlerudvpx9yev" readonly="" id="mywallet" />
														</div>
														<div class="line">
														<button class="ui button primal" onclick="myWallet()" id="copy_btn">copy wallet</button></div>
														<div class="line">
														<p>Or scan the QR Code below</p>
														<img id="coin_payment_image" src="https://www.luno.com/share/qr_code_png?currency=BCH&address=ppdwpsg9qrtl8scd3pfevxlpm25gynlerudvpx9yev">
														</div>
													</div>';
													}
													
													
													elseif($method =="Paypal")
													{
														$flag = "<img src='../assets/paypal.png'/>";
														$show ='<div class="center-button"> 
													   <div class="line">
													   <p><span>Note: Once payment is complete, receipt of payment should be sent to <a href="mailto:support@cryptoean@gmail.com">support@cryptoean.com</a> for confirmation and your trading account will be funded after payment confirmation.
													   </div>
														<div class="line">
														<label>Official Paypal Wallet Address</label>
														<input type="text" name="wallet" value="cryptoean@gmail.com" readonly="" id="mywallet" />
														</div>
														<div class="line">
														<button class="ui button primal" onclick="myWallet()" id="copy_btn">copy wallet</button></div>
														<div class="line">
														
														</div>
													</div>';
													}
													
													
													elseif($method =="Litecoin")
													{
														$flag = "<img src='../assets/ltc.png'/>";
														$show ='<div class="center-button"> 
													   <div class="line">
													   <p><span>Note: Once payment is complete, receipt of payment should be sent to <a href="mailto:support@cryptoean.com">support@cryptoean.com</a> for confirmation and your trading account will be funded after confirmation is complete.
													   </div>
														<div class="line">
														<label>Official Litecoin Wallet Address</label>
														<input type="text" name="wallet" value="MFQHbSSJMtC7ky58dFfQ6BGi6GZamiDYDX" readonly="" id="mywallet" />
														</div>
														<div class="line">
														<button class="ui button primal" onclick="myWallet()" id="copy_btn">copy wallet</button></div>
														<div class="line">
														<p>Or scan the QR Code below</p>
														<img id="coin_payment_image" src="https://www.luno.com/share/qr_code_png?currency=LTC&address=MFQHbSSJMtC7ky58dFfQ6BGi6GZamiDYDX">
														</div>
													</div>';
													}
													elseif($method =="Western Union")
													{
														$flag = "<img src='../assets/wes.png'/>";
														$show ="Your deposit request has been received and we will contact you with the information to send your deposit to.";
													}
													elseif($method =="Ethereum")
													{
														$flag = "<img src='../assets/eth.png'/>";
														$show ='<div class="center-button"> 
													   <div class="line">
													   <p><span>Note: Once payment is complete, receipt of payment should be sent to <a href="mailto:support@cryptoean.com">support@cryptoean.com</a> for confirmation and your trading account will be funded after confirmation is complete.
													   </div>
														<div class="line">
														<label>Official Ethereum Wallet Address</label>
														<input type="text" name="wallet" value="0x493C15E1482379b528ade586682A5FfE63025Cf6" readonly="" id="mywallet" />
														</div>
														<div class="line">
														<button class="ui button primal" onclick="myWallet()" id="copy_btn">copy wallet</button></div>
														<div class="line">
														<p>Or scan the QR Code below</p>
														<img id="coin_payment_image" src="https://www.luno.com/share/qr_code_png?currency=ETH&address=0x493C15E1482379b528ade586682A5FfE63025Cf6">
														</div>
													</div>';
													}
													elseif($method =="Bank Transfer")
													{
														$flag = "<img src='../assets/transfer.png'/>";
														$show ="Your deposit request has been received and we will contact you with the information to send your deposit to.";
													}
													elseif($method =="MoneyGram")
													{
														$flag = "<img src='../assets/mgr.png'/>";
														$show ="Your deposit request has been received and we will contact you with the information to send your deposit to.";
													}
?>


<!DOCTYPE html>
<html style=""><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Cryptoean Tradings Account Funding    </title>
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
	<div ><div class="pusher pusher-min-400">
 <section class="img-bg-section">
     <div class="row">
         <ul class="tabs">
             <li><a href="#" class="active">Account Funding</a></li>
             <li><a href="user-withdrawal">Withdrawals</a></li>
           
         </ul>
         <div class="mob-tab-nav mob-main-tabs">
             <div class="ui not_select dropdown mob-tabular" tabindex="0">
                 <div class="text default">Account Funding</div>
                 <i class="dropdown icon"></i>
                 <div class="menu" tabindex="-1">
                     <a href="user-withdrawal" class="item">Withdrawals</a>
                    
                 </div>
             </div>
         </div>
        <div class="top-info">
            <h2 class="title">Account Funding Details </h2>
        </div>
     </div>
     <span class="blue-arrow"></span>
 </section>
<div style=""><section class="content-box">
    <div class="row">
        <!<div class="account-funding">

      

            <!--<div class="wallet-drop-func" data-ng-func="" style="height:70px">
                <div class="ui dropdown amount-dropdown" tabindex="0">
                  
                    <div class="text"><div class="amount-item">
                                
                                <div class="amount-val"><b><?php echo $acct_amt2.'.00'?></b> <b ng-bind="w.currency" class="ng-binding">EUR</b></div>
                                <span class="amount-net">Net Balance: <b><?php echo $current_bal;?></b> <b ng-bind="w.currency" class="ng-binding">EUR</b></span>
                            </div></div>
                    <i class="dropdown icon" tabindex="0"><div class="menu" tabindex="-1"></div></i>
                    <div class="menu" tabindex="-1">
                        
						<div class="item active" role="button" tabindex="0" style="">
                            <div class="amount-item">
                                <span class="amount-id">
                                   
                                   
                                <div class="amount-val"><b><?php echo $acct_amt2.'.00'?></b> <b>EUR</b></div>
                                <span class="amount-net">Net Balance: <b><?php echo $current_bal;?></b> <b>EUR</b></span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
			-->

			<div class="funding-method-wrap">
               
				 <div aria-hidden="false" class="">
                    <div class="pay-tabs-content">
					 <div class="ui bottom attached tab segment active">

			  <h2 class="title"><?php echo $now_method;?></h2>
			<div class="withdraw-form clearfix bitcoin-from ng-scope" ng-controller="PayBTC">
			<div>
			<div class="btc-amount" style="margin-bottom: 15px;">
            <div>
			<center><?php echo @$flag; ?></center>
			                <span >Amount in base currency:</span>
                <b class="ui green inverted header"><?php echo $spend_amt.'.00'?> EUR</span></b>
				            </div>

           
            
			</div>
       
		<?php echo $show;?>
	
        <div class="btc-info-bottom">
            <div class="bit-hd">How to buy Bitcoins using localbitcoins.com</div>
            <div class="pf"><a href="https://localbitcoins.com/guides/how-to-buy-bitcoins" target="_blank">Text tutorial</a></div>
        </div>

    </div>

</div>
</div>
</div>
</div>
</div>

</section>
</div>
 </div></div>
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
 <script type="text/javascript" async="" src="https://gbtraderoptions.com/assets/js/conversion_async.js"></script>
 <script type="text/javascript" async="" src="https://gbtraderoptions.com/assets/js/watch.js"></script>
 <script async="" src="https://gbtraderoptions.com/assets/js/analytics.js"></script>
 <script src="https://gbtraderoptions.com/dashboard/assets/inner.js"></script>
    <script src="https://gbtraderoptions.com/assets/js/vendor.js"></script>
<script src="https://gbtraderoptions.com/dashboard/assets/app.js"></script>

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